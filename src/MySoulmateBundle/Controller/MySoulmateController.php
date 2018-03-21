<?php

namespace MySoulmateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MySoulmateController extends Controller
{

    public function indexAction()
    {
        return $this->render('MySoulmateBundle:Template:Layout.html.twig');
    }


}
