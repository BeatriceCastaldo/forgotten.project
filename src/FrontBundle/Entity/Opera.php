<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * Opera
 *
 * @ORM\Table(name="opera")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\OperaRepository")
 * @Vich\Uploadable
 */
class Opera
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text", nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="text")
     */
    private $imageUrl;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="user_image", fileNameProperty="imageUrl")
     */
    private $imageFile;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dataOpera", type="date", nullable=true)
     */
    private $dataOpera;

    /**
     * @var Artista
     *
     * @ORM\ManyToOne(targetEntity="Artista", inversedBy="opera")
     * @ORM\JoinColumn(name="idArtista", referencedColumnName="id")
     *
     */
    private $idArtista;


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
     * Set nome
     *
     * @param string $nome
     *
     * @return Opera
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Opera
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return Opera
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set imageFile
     *
     * @param string $imageFile
     *
     * @return Opera
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set dataOpera
     *
     * @param \DateTime $dataOpera
     *
     * @return Opera
     */
    public function setDataOpera($dataOpera)
    {
        $this->dataOpera = $dataOpera;

        return $this;
    }

    /**
     * Get dataOpera
     *
     * @return \DateTime
     */
    public function getDataOpera()
    {
        return $this->dataOpera;
    }

    /**
     * Set idArtista
     *
     * @param integer $idArtista
     *
     * @return Opera
     */
    public function setIdArtista($idArtista)
    {
        $this->idArtista = $idArtista;

        return $this;
    }

    /**
     * Get idArtista
     *
     * @return int
     */
    public function getIdArtista()
    {
        return $this->idArtista;
    }
}

