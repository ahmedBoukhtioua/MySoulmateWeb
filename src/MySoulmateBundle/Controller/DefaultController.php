<?php

namespace MySoulmateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MySoulmateBundle:Default:Layout.html.twig');
    }
}
