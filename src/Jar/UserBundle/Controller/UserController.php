<?php

namespace Jar\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JarUserBundle:User:index.html.twig', array('name' => $name));
    }
}
