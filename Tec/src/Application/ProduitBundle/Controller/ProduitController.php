<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProduitController
 *
 * @author Super
 */

namespace Application\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\ProduitBundle\Entity\Produit;
use Application\ProduitBundle\Entity\Rating;
use Application\ProduitBundle\Form\ProduitForm;
use Application\ProduitBundle\Form\ModifierProduitForm;

class ProduitController extends Controller {

    public function ajoutAction() {
        $produit = new Produit(); //instantiation de l'entitée Model
        $form = $this->createForm(new ProduitForm(), $produit); //on associe la classe formulaire à l'entitée qui lui correspond 
        $d=new \DateTime();
        $produit->setDateAjout($d);
          $user = $this->getUser();
          $produit->setUser($user);
        
        $prix=$produit->getPrix();
        $tva=$produit->getTva();
        $reduction=$produit->getReduction();
        $prix1=($prix-($prix*$reduction/100));
        $prix2=($prix1+($prix1*$tva/100));
        $produit->setPrix1($prix1);
        $produit->setPrix2($prix2);
        $produit->setPtbonus('EnCour');
        $produit->setEnable(0);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_afficheP');
        }
        return $this->render('ProduitBundle:Produit:ajoutP.html.twig', array('Form' => $form->createView()));
    }

    public function affichePAction() {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findBy(array('enable'=>1));
        return $this->render('ProduitBundle:Produit:afficheP.html.twig', array('Produit' => $produit));
    }

    public function supprimerPAction($id) {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->find($id);
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('produit_afficheP');
    }

    public function modifierPAction($id) {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->find($id);
        $form = $this->createForm(new ModifierProduitForm(), $produit);
        $request = $this->get('request_stack')->getCurrentRequest();

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_afficheP');
        }

        return $this->render('ProduitBundle:Produit:modifierP.html.twig', array('Form' => $form->createView()));
    }

    public function AfficherPSAction($id) {
         $p = new Produit();
        $rate = new Rating();
        $em = $this->getDoctrine()->getManager();


        $user=$this->getUser();
        $p = $em->getRepository('ProduitBundle:Produit')->findOneBy(array('id' => $id));
        $produit = $em->getRepository('ProduitBundle:Produit')->findByid($id);
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT avg(note) as moy from rating where produit_id = :id");
        $statement->bindValue('id', $id);
        $statement->execute();
        $results = $statement->fetchAll();
       
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT id as id from rating where produit_id = :id and user_id=:uid");
        $statement->bindValue('id', $id);
        $statement->bindValue('uid', $user->getId());
        $statement->execute();
        $res= $statement->fetchAll();

//      echo var_dump($res);
//       die();


        

        $rate->setUser($user);
        $rate->setProduit($p);

        $note = 0;
        $req = $this->getRequest();
        if ($req->getMethod() == "POST") {

            $note = $req->get('note');
            $n = intval($note);


            $rate->setNote($n);

            $ems = $this->getDoctrine()->getManager();
            $ems->persist($rate);
//       echo var_dump($rate);
//        die();
            $ems->flush();
            
        }




        return $this->render('ProduitBundle:Produit:afficherPS.html.twig', array('Produit' => $produit,'note'=>$results ,'enable'=>$res));
    }

    public function recherchePAction() {
        $req = $this->getRequest();
        if ($req->getMethod() == "POST") {
            $nomP=$req->get('nomP');


            $em = $this->getDoctrine()->getManager();
            $produit=$em->getRepository('ProduitBundle:Produit')->findByNomP($nomP);

            return $this->render('ProduitBundle:Produit:rechercheP.html.twig', array('Produit' => $produit));
        } 
        else {
            
        }
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findAll();

        return $this->render('ProduitBundle:Produit:rechercheP.html.twig', array('Produit' => $produit));
    }
    
    public function listerPAction()
    {
        $iduser=$this->getUser();
        
       $em=$this->getDoctrine()->getManager(); 
        $produit=$em->getRepository('ProduitBundle:Produit')->findByUser($iduser);
       
        return $this->render('ProduitBundle:Produit:listerP.html.twig', array('Produit' => $produit));
    }
    
     public function affichePForAllUsersAction() {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findBy(array('enable'=>1));
        return $this->render('ProduitBundle:Produit:affichePForAllUsers.html.twig', array('Produit' => $produit));
    }
        public function AfficherPSForAllUsersAction($id) {
        

        $em = $this->getDoctrine()->getManager();
       
        $produit = $em->getRepository('ProduitBundle:Produit')->find($id);
        $produit = $em->getRepository('ProduitBundle:Produit')->findByid($id);
        $request = $this->get('request_stack')->getCurrentRequest();



        return $this->render('ProduitBundle:Produit:affichePSForAllUsers.html.twig', array('Produit' => $produit));
    }
 public function recherchePByTypeAction($categorie) {
        $req = $this->getRequest();
        if ($req->getMethod() == "GET") {
            $categorie = $req->get('categorie');


            $em = $this->getDoctrine()->getManager();
            $produit = $em->getRepository('ProduitBundle:Produit')->findByCategorie($categorie);

            return $this->render('ProduitBundle:Produit:recherchePByType.html.twig', array('produit' => $produit,));
        } else {
            
        }
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findAll();

        return $this->render('ProduitBundle:Produit:rechercheP.html.twig', array('serv' => $produit));
    }
    
        public function recherchePByZoneAction($zone) {
        $req = $this->getRequest();
        if ($req->getMethod() == "GET") {
            $zone = $req->get('zone');


            $em = $this->getDoctrine()->getManager();
            $produit = $em->getRepository('ProduitBundle:Produit')->findByZone($zone);

            return $this->render('ProduitBundle:Produit:recherchePByZone.html.twig', array('produit' => $produit,));
        } else {


            $em = $this->getDoctrine()->getManager();
            $produit = $em->getRepository('ProduitBundle:Produit')->findAll();

            return $this->render('ProduitBundle:Produit:rechercheP.html.twig', array('produit' => $produit));
        }
    }
}
