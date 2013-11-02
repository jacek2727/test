<?php

namespace Jar\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        $this->forward("list");
        //return $this->render('JarUserBundle:User:index.html.twig', array('name' => "asdf"));
    }

    public function listAction()
    {
        return $this->render('JarUserBundle:User:index.html.twig', array('name' => "asdf"));
    }

    public function crateAction()
    {
    }

    public function updateAction()
    {
    }

    public function removeAction()
    {
    }
}
