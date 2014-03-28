<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DemoController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Demo:index.html.twig');
    }
}
