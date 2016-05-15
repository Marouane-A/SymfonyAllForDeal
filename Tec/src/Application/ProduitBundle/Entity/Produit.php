<?php

namespace Application\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Model\MediaInterface;
/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Produit
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
     *@ORM\ManyToOne(targetEntity="Application\Sonata\ClassificationBundle\Entity\Category")
     */
    private $categorie;
    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;
    /**
     * @var integer
     *
     * @ORM\Column(name="ptbonus", type="integer")
     */
    private $ptbonus;

    /**
     * @var string
     *
     * @ORM\Column(name="nomP", type="string", length=255)
     */
    private $nomP;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * @var float
     *
     * @ORM\Column(name="prix1", type="float")
     */
    private $prix1;
    /**
     * @var float
     *
     * @ORM\Column(name="prix2", type="float")
     */
    private $prix2;

    
    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float")
     */
    private $tva;
    /**
     * @var float
     *
     * @ORM\Column(name="reduction", type="float")
     */
    private $reduction;

   
       /**
     *@ORM\ManyToOne(targetEntity="Application\ServiceBundle\Entity\Zone")
     */
    private $zone;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date")
     */
    private $dateAjout;
    
     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     */
    private $user;
    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media;
      /**
     * @var boolean
     *
     * @ORM\Column(name="enable", type="boolean")
     */
    private $enable;
    
    function getEnable() {
        return $this->enable;
    }

    function setEnable($enable) {
        $this->enable = $enable;
    }

    
    /**
     * @param MediaInterface $media
     */
    public function setMedia(MediaInterface $media)
    {
        $this->media = $media;
    }

    /**
     * @return MediaInterface
     */
    public function getMedia()
    {
        return $this->media;
    }
    
    function getUser() {
        return $this->user;
    }

    function setUser($user) {
        $this->user = $user;
    }
    
    function getPrix1() {
        return $this->prix1;
    }

    function getPrix2() {
        return $this->prix2;
    }

    function setPrix1($prix1) {
        $this->prix1 = $prix1;
    }

    function setPrix2($prix2) {
        $this->prix2 = $prix2;
    }

        
    function getPtbonus() {
        return $this->ptbonus;
    }

    function setPtbonus($ptbonus) {
        $this->ptbonus = $ptbonus;
    }

        function getReduction() {
        return $this->reduction;
    }

    function setReduction($reduction) {
        $this->reduction = $reduction;
    }

        function getQuantite() {
        return $this->quantite;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    
    function getDateAjout() {
        return $this->dateAjout;
    }

   

    function setDateAjout(\DateTime $dateAjout) {
        $this->dateAjout = $dateAjout;
    }

        public function getId()
    {
        return $this->id;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Produit
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nomP
     *
     * @param string $nomP
     * @return Produit
     */
    public function setNomP($nomP)
    {
        $this->nomP = $nomP;

        return $this;
    }

    /**
     * Get nomP
     *
     * @return string 
     */
    public function getNomP()
    {
        return $this->nomP;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    function getTva() {
        return $this->tva;
    }

    function setTva($tva) {
        $this->tva = $tva;
    }

    function getZone() {
    return $this->zone;
}

 function setZone($zone) {
    $this->zone = $zone;
}
public function __toString() {
    
}

   
}


