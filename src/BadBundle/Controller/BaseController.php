<?php

namespace BadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//prueba de palntilla 
class BaseController extends Controller
{
    
    public function sigperaAction()
    {
        return $this->render('BadBundle:Default:blank.html.twig');
    }
}
