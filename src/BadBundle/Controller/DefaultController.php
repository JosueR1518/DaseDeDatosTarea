<?php

namespace BadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BadBundle\Entity\Carrera;

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
        
        
        $holamundo=new \BadBundle\Entity\Usuario();
    
    }
}
