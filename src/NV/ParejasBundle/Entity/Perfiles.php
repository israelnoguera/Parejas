<?php

namespace NV\ParejasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NV\ParejasBundle\Entity\Perfiles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NV\ParejasBundle\Repository\PerfilesRepository")
 */
class Perfiles{          
    
    /**
     * @ORM\OneToOne(targetEntity="Usuarios", inversedBy="perfiles")
     */
    protected $usuario;    
    
    public function setUsuario(\NV\ParejasBundle\Entity\Usuarios $usuario){
        $this->usuario = $usuario;
    }

    public function getUsuario(){
        return $this->usuario;
    }    
    
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="provincia", type="integer")
     */
    protected $provincia;

    /**
     * @ORM\Column(name="pais", type="integer")
     */
    protected $pais;

    /**
     * @ORM\Column(name="tipo_perfil", type="smallint")
     */
    protected $tipo_perfil;

    /**
     * @ORM\Column(name="localidad", type="integer")
     */
    protected $localidad;   
    
    /*
     * SETTERS Y GETTERS
     */
    
    public function getId(){
        return $this->id;
    }

    public function setProvincia($provincia){
        $this->provincia = $provincia;
    }

    public function getProvincia(){
        return $this->provincia;
    }

    public function setPais($pais){
        $this->pais = $pais;
    }

    public function getPais(){
        return $this->pais;
    }

    public function setTipoPerfil($tipoPerfil){
        $this->tipo_perfil = $tipoPerfil;
    }

    public function getTipoPerfil(){
        return $this->tipo_perfil;
    }

    public function setLocalidad($localidad){
        $this->localidad = $localidad;
    }

    public function getLocalidad(){
        return $this->localidad;
    }

}