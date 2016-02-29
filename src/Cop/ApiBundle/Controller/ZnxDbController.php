<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ZnxDbController extends Controller
{
    /**
     * @Route("/home/products/znx/db/{search}")
     */
    public function indexAction(Request $request)
    {
        $search = $request->get('search');
        $locale = $request->getLocale();

        $em = $this->getDoctrine()->getManager();
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        $result = $repoProducts->findLatestForHome($search, $locale);

        return $this->render('CopApiBundle:Default:index.html.twig');
    }
}
