<?php

namespace Application\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\ProduitBundle\Entity\Produit;
use Application\ServiceBundle\Entity\Service;
class DefaultController extends Controller
{
    public function indexAction()
    {
         $em = $this->getDoctrine()->getManager();
       $serv=$em->getRepository('ServiceBundle:Service')->findBy(array('enable'=>1));
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findBy(array('enable'=>1));
        
        return $this->render('EcommerceBundle:Default:home.html.twig',array('produits'=>$produit,'services'=>$serv));
    }

}