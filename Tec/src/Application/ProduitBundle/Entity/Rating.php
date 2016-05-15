<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table()
 * @ORM\Entity
 */
Class Rating {
       
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     *@ORM\ManyToOne(targetEntity="Produit", cascade={"persist"}, fetch="LAZY")
     */
    private $Produit;
    /**
     *@ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     */
    private $user;
    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;
    
    
    function getId() {
        return $this->id;
    }

    function getProduit() {
        return $this->Produit;
    }

    function getUser() {
        return $this->user;
    }

    function getNote() {
        return $this->note;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProduit($Produit) {
        $this->Produit = $Produit;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setNote($note) {
        $this->note = $note;
    }


    
}


