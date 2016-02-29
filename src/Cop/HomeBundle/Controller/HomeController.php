<?php

namespace Cop\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * Home action
     *
     * @Route("/{_locale}/home")
     *
     */
    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();



        return $this->render('CopHomeBundle:Default:index.html.twig');
    }
}
