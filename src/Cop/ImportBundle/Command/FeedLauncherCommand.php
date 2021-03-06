<?php

namespace Cop\ImportBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;



class FeedLauncherCommand extends ContainerAwareCommand
{

    protected $locale;
    protected $source;

    protected function configure()
    {
        $this
            ->setName('import:launch')
            ->setDescription('launch the import')
            ->addArgument(
                'locale',
                InputArgument::REQUIRED
            )
            ->addArgument(
                'source',
                InputArgument::REQUIRED
            );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->locale = $input->getArgument('locale');
        $this->source = $input->getArgument('source');

        $this->em = $this->getContainer()->get('doctrine')->getManager();

        $repositoryFeed = $this->em->getRepository('Cop\ImportBundle\Entity\FeedCSV');

        $this->canResetFeedTable();

        $this->feed  = $repositoryFeed->retrieveNextCsvFeed($this->source, $this->locale);

        $this->flagAsTreated();

        $env = $this->getContainer()->get('kernel')->getEnvironment();

        $csvFile = $this->feed->getSiteslug()  .
            '-'. strtolower($this->source) . '-' . $env . ".csv";

        $this->setPathToStore($csvFile);

        $this->copyFeed();

        /* @todo faire plus beau http://php-webdeveloper.com/?p=88 */
        echo exec("php app/console import:csv " . $this->source  . " " . $this->feed->getId()  . " " . $this->locale  . " " .  $csvFile);

    }

    public function flagAsTreated()
    {
        $repositoryFeedCSV = $this->em->getRepository('Cop\ImportBundle\Entity\FeedCSV');

        $feedupdated = $repositoryFeedCSV->find($this->feed->getId());
        $feedupdated->setFlagbatched('Y');

        $this->em->persist($feedupdated);
        $this->em->flush();
        $this->em->clear();

        $this->canResetFeedTable();
    }

    public function canResetFeedTable()
    {
        $this->em = $this->getContainer()->get('doctrine')->getManager();

        $repositoryFeedCSV = $this->em->getRepository('Cop\ImportBundle\Entity\FeedCSV');

        $flaggedActiveFeedsToProcess = $repositoryFeedCSV->findBy(
            array(
                'locale' => $this->locale,
                'source' => $this->source,
                'flagbatched' => 'N',
                'active' => 'Y'
            )
        );

        if(count($flaggedActiveFeedsToProcess) == 0)
        {
            $feeds = $repositoryFeedCSV->findBy(
                array(
                    'locale' => $this->locale,
                    'source' => $this->source,
                    'active' => 'Y'
                )
            );
            foreach($feeds as $feed)
            {
                $feed->setFlagbatched('N');
                $this->em->persist($feed);
            }
            $this->em->flush();
            $this->em->clear();
        }
    }

    protected function copyFeed()
    {

        try
        {
            $request = new \GuzzleHttp\Client();
            $response = $request->get(trim($this->feed->getFeed()));
            $response = $response->getBody()->getContents();

            // @todo separer en deux exception, ajouter ConnectException pour guzzle (url invalide)
            // @todo tojours le cas

            $fp = fopen($this->getPathToStore(), "wb");
            fwrite($fp, $response);
            fclose($fp);

            return true;
        }
        catch (\Exception $e)
        {
            // @todo  un vrai log et une action
            var_dump($e->getMessage());
            // Log the error or something
            return false;
        }

    }

    /**
     * @return mixed
     */
    public function getPathToStore()
    {
        return $this->pathToStore;
    }

    /**
     * @param mixed $pathToStore
     */
    public function setPathToStore($pathToStore)
    {
        $this->pathToStore = $pathToStore;
    }

}