<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function ayudaAction()
    {
        return $this->render('OfertaBundle:Default:ayuda.html.twig'); 
    }
    public function portadaAction($ciudad = null)
    {
        $em = $this->getDoctrine()->getManager();
        
        $oferta = $em->getRepository('OfertaBundle:Oferta')->findOfertaDelDia($ciudad);
        
        if (!$oferta) {
            throw $this->createNotFoundException(':O !..No se ha encontrado la oferta del día en la ciudad seleccionada');
        }

        return $this->render('OfertaBundle:Default:portada.html.twig',array('oferta' => $oferta));
    }
    public function ofertaAction($ciudad, $slug){
        
        $em =  $this->getDoctrine()->getManager();
        
        $oferta = $em->getRepository('OfertaBundle:Oferta')->findOferta($ciudad,$slug);
        
        if (! $oferta) {
            throw $this->createNotFoundException('No existe la oferta............!' ) ;
        }
        $relacionadas=$em->getRepository('OfertaBundle:Oferta' )->findRelacionadas($ciudad) ;  
        
        return $this->render('OfertaBundle:Default:detalle.html.twig',array('oferta'=>$oferta,'relacionadas'=>$relacionadas));
        
    }
}
