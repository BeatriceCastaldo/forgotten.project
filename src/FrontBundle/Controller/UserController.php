<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{

    public function loginAction()
    {
        return $this->render('FrontBundle:User:login.html.twig', array(
            // ...
        ));
    }


    public function registratiAction()
    {
        return $this->render('FrontBundle:User:registrati.html.twig', array(
            // ...
        ));
    }

    public function pswdimenticataAction()
    {
        return $this->render('FrontBundle:User:pswdimenticata.html.twig', array(
            // ...
        ));
    }

}
