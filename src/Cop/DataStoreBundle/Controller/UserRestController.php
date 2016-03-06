<?php

namespace Cop\DataStoreBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserRestController extends Controller
{
    public function getUserAction($username){
        $user = $this->getDoctrine()
            ->getRepository('Cop\DataStoreBundle\Entity\User')
            ->findOneByName($username);
        if(!is_object($user)){
            throw $this->createNotFoundException();
        }
        return $user;
    }
}