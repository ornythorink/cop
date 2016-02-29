<?php

namespace Cop\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavbarController extends Controller
{

    public function indexAction()
    {
        $em = $this->get('doctrine')->getManager();

        $categoriesRepository = $em->getRepository('Cop\DataStoreBundle\Entity\Categories');
        $rootCategories = $categoriesRepository->findRootCategories();

        foreach ($rootCategories as $rootcat):

            $categories[$rootcat->getId()]['parent'] = $rootcat;
            $childrens = $categoriesRepository->findChildCategories($rootcat->getId());

            foreach ($childrens as $child) {
                $categories[$rootcat->getId()][] = $child;
            }
        endforeach;

        $form = $this->createFormBuilder()
            ->add('query', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Rechercher ...',
                        'class' => 'form-control',
                    ))
            )->getForm();

        return $this->render('CopCommonBundle:Default:navbar.html.twig',
            array(
                'categories' => $categories,
                'form'       => $form->createView()
            )
        );
    }
}
