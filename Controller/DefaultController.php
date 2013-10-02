<?php

namespace R3c\NestedMenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('R3cNestedMenuBundle:Default:index.html.twig', array('name' => $name));
    }
}
