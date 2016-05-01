<?php

namespace BadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BadBundle:Default:blank.html.twig');
        
    }
    /*public function sigperaAction()
    {
        return $this->render('BadBundle:Default:blank.html.twig');
    }*/
}
