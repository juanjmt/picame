<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\menuRepository")
 */
class menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="fotochica", type="text")
     */
    private $fotochica;

    /**
     * @var string
     *
     * @ORM\Column(name="fotobanner", type="text")
     */
    private $fotobanner;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredientes", type="text")
     */
    private $ingredientes;

    /**
     * @var bool
     *
     * @ORM\Column(name="favorito", type="boolean")
     */
    private $favorito;

    /**
     * @var int
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=true)
     */
    private $idcategoria;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return menu
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return menu
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fotochica
     *
     * @param string $fotochica
     *
     * @return menu
     */
    public function setFotochica($fotochica)
    {
        $this->fotochica = $fotochica;

        return $this;
    }

    /**
     * Get fotochica
     *
     * @return string
     */
    public function getFotochica()
    {
        return $this->fotochica;
    }

    /**
     * Set fotobanner
     *
     * @param string $fotobanner
     *
     * @return menu
     */
    public function setFotobanner($fotobanner)
    {
        $this->fotobanner = $fotobanner;

        return $this;
    }

    /**
     * Get fotobanner
     *
     * @return string
     */
    public function getFotobanner()
    {
        return $this->fotobanner;
    }

    /**
     * Set ingredientes
     *
     * @param string $ingredientes
     *
     * @return menu
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    /**
     * Get ingredientes
     *
     * @return string
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set favorito
     *
     * @param boolean $favorito
     *
     * @return menu
     */
    public function setFavorito($favorito)
    {
        $this->favorito = $favorito;

        return $this;
    }

    /**
     * Get favorito
     *
     * @return bool
     */
    public function getFavorito()
    {
        return $this->favorito;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return menu
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return int
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}

