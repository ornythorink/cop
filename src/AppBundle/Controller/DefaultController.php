<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function indexAction(Request $request)
    {
        if( (isset($_SERVER) == true) && (array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER) == true) )
        {
            $languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            $defaultLanguage = substr($languages, 0,2);
        } else {
            $languages = 'en';
            $defaultLanguage = substr($languages, 0,2);
        }

        return $this->redirect('/' . $defaultLanguage . '/home', 301);
    }
}
