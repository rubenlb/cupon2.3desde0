<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venta
 *
 * @author Usuario
 */
class Venta 
{
    /** @ORM\Column(type="datetime") */
    protected $fecha;
    
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Cupon\OfertaBundle\Entity\Oferta")
    */
    protected $oferta;
    
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Cupon\UsuarioBundle\Entity\Usuario")
    */
    protected $usuario;
    
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setOferta(\Cupon\OfertaBundle\Entity\Oferta $oferta)
    {
        $this->oferta = $oferta;
    }
    public function getOferta()
    {
        return $this->oferta;
    }
    public function setUsuario(\Cupon\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
}
