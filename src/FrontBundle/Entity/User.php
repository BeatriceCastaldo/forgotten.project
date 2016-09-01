<?php
// src/AppBundle/Entity/User.php

namespace FrontBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     *
     * @ORM\ManyToMany(targetEntity="Opera")
     * @ORM\JoinTable(name="Preferiti",
     *      joinColumns={@ORM\JoinColumn(name="idOpera", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idUser", referencedColumnName="id", unique=true)}
     * )
     *
     */
    private $preferiti;


    /**
     * User constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->preferiti = new ArrayCollection();
    }


    public function setPreferiti($preferiti)
    {
        $this->preferiti = $preferiti;

        return $this;
    }

    public function getPreferiti()
    {
        return $this->preferiti;
    }

    /**
     * Add preferiti
     *
     * @param \FrontBundle\Entity\Opera $preferiti
     *
     * @return User
     */
    public function addPreferiti(\FrontBundle\Entity\Opera $preferiti)
    {
        $this->preferiti[] = $preferiti;

        return $this;
    }

    /**
     * Remove preferiti
     *
     * @param \FrontBundle\Entity\Opera $preferiti
     */
    public function removePreferiti(\FrontBundle\Entity\Opera $preferiti)
    {
        $this->preferiti->removeElement($preferiti);
    }
}