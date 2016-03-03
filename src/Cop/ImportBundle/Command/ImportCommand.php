<?php

namespace Cop\ImportBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Cop\ImportBundle\Utils\ZnxFilteredCsvArray;
use Cocur\Slugify\Slugify;


class ImportCommand extends ContainerAwareCommand
{

    /* @todo a deplacer dans les sources  */
    protected $merchantCategoryName = array(
                                            'znx' => 'MerchantProductCategoryPath'
                                      );
    protected $source;
    protected $filename;

    protected function configure()
    {
        $this
            ->setName('import:csv')
            ->setDescription('Import products from CSV file')
            ->addArgument(
                'source',
                InputArgument::REQUIRED
            )
            ->addArgument(
                'feedId',
                InputArgument::REQUIRED
            )
            ->addArgument(
                'locale',
                InputArgument::REQUIRED
            )
            ->addArgument(
                'filename',
                InputArgument::REQUIRED
            );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $locale = $input->getArgument('locale');
        $this->source = $input->getArgument('source');
        $this->filename = $input->getArgument('filename');
        $this->feedId = $input->getArgument('feedId');

        $iterator = $this->getExtractor($this->source,$this->filename);
        $filter = $this->getFilter();

        $filteredIt = new ZnxFilteredCsvArray($iterator, $filter);

        $this->putPending($filteredIt);
    }

    protected function putPending($filteredIt)
    {
        $repoProducts = $this->getContainer()
            ->get('doctrine')
            ->getManager()->getRepository('Cop\DataStoreBundle\Entity\Products');

        foreach ($filteredIt as $produit) {
            $this->createPending($this->checkIfAlreadyPending($produit));
            $repoProducts->ZnxImportCsv($produit, $this->feedId);
        }
    }

    protected function checkIfAlreadyPending($produit)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $slugify = new Slugify();
        $slugifiedCategory = $slugify->slugify($produit[$this->merchantCategoryName[$this->source]]);

        $pending = $em->getRepository('Cop\DataStoreBundle\Entity\Pending')->findOneBy(
            array(
                'id' => $slugifiedCategory
            )
        );

        return array('pending' => $pending, 'produit' => $produit);
    }

    protected function createPending($result){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $pendingRepo = $em->getRepository('Cop\DataStoreBundle\Entity\Pending');

        if(is_null($result['pending'])){
            if(!is_null($result['produit'][$this->merchantCategoryName[$this->source]])
                && $result['produit'][$this->merchantCategoryName[$this->source]] != "" )
            {
                $pendingRepo->createOrReplacePending($result,$this->source);
            }
        }

    }

    protected function getExtractor()
    {
        $fileName = $this->filename;

        /* @todo injecter du container */
        $converter = $this->getContainer()->get('import.csvtoarray');
        /* @todo delimiter and option */
        $iterator = $converter->convert($fileName, ',');

        return $iterator;
    }

    protected function getFilter()
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $repoBlack = $em->getRepository('\Cop\DataStoreBundle\Entity\BlacklistCategories');
        $categories = $repoBlack->findAll();

        return $categories;
    }

}