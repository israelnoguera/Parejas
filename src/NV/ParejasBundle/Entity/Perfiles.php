<?php

namespace NV\ParejasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NV\ParejasBundle\Entity\Perfiles
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Perfiles
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $id_usuario
     *
     * @ORM\Column(name="id_usuario", type="integer")
     */
    private $id_usuario;

    /**
     * @var integer $provincia
     *
     * @ORM\Column(name="provincia", type="integer")
     */
    private $provincia;

    /**
     * @var integer $pais
     *
     * @ORM\Column(name="pais", type="integer")
     */
    private $pais;

    /**
     * @var smallint $tipo_perfil
     *
     * @ORM\Column(name="tipo_perfil", type="smallint")
     */
    private $tipo_perfil;

    /**
     * @var integer $localidad
     *
     * @ORM\Column(name="localidad", type="integer")
     */
    private $localidad;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id_usuario
     *
     * @param integer $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->id_usuario = $idUsuario;
    }

    /**
     * Get id_usuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set provincia
     *
     * @param integer $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return integer 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get pais
     *
     * @return integer 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set tipo_perfil
     *
     * @param smallint $tipoPerfil
     */
    public function setTipoPerfil($tipoPerfil)
    {
        $this->tipo_perfil = $tipoPerfil;
    }

    /**
     * Get tipo_perfil
     *
     * @return smallint 
     */
    public function getTipoPerfil()
    {
        return $this->tipo_perfil;
    }

    /**
     * Set localidad
     *
     * @param integer $localidad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    /**
     * Get localidad
     *
     * @return integer 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }
}