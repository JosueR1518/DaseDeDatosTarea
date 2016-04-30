<?php

namespace BadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BadBundle:Default:index.html.twig');
        
        //we die tengo sueño
        //ma mierdad ya me aburri
        //que ondas aqui
        //comentario 4
        //hola mundo5
    }
}
