<?php

namespace Jvm\ProvicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JvmProvicBundle:Default:index.html.twig', array());
    }
}
