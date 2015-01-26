<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SitioController
 *
 * @author Usuario
 */
namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitioController extends Controller 
{
    public function estaticaAction($pagina)
    {
        return $this->render('OfertaBundle:Sitio:'.$pagina.'.html.twig');
    }
}
