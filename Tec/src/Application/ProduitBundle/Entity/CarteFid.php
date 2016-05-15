<?php

namespace Application\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteFid
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Application\ProduitBundle\Entity\CarteFidRepository")
 */
class CarteFid
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numCarte", type="integer")
     */
    private $numCarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPoint", type="integer")
     */
    private $nbPoint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validite", type="date")
     */
    private $validite;


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
     * Set numCarte
     *
     * @param integer $numCarte
     * @return CarteFid
     */
    public function setNumCarte($numCarte)
    {
        $this->numCarte = $numCarte;

        return $this;
    }

    /**
     * Get numCarte
     *
     * @return integer 
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * Set nbPoint
     *
     * @param integer $nbPoint
     * @return CarteFid
     */
    public function setNbPoint($nbPoint)
    {
        $this->nbPoint = $nbPoint;

        return $this;
    }

    /**
     * Get nbPoint
     *
     * @return integer 
     */
    public function getNbPoint()
    {
        return $this->nbPoint;
    }

    /**
     * Set validite
     *
     * @param \DateTime $validite
     * @return CarteFid
     */
    public function setValidite($validite)
    {
        $this->validite = $validite;

        return $this;
    }

    /**
     * Get validite
     *
     * @return \DateTime 
     */
    public function getValidite()
    {
        return $this->validite;
    }
}
