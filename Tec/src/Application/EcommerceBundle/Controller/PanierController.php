<?php

namespace Application\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Application\EcommerceBundle\Form\UtilisateursAdressesType;
use Application\EcommerceBundle\Entity\UtilisateursAdresses;

class PanierController extends Controller
{
    public function menuAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));
        
        return $this->render('EcommerceBundle:Default:index.html.twig', array('articles' => $articles));
    }
    
    public function supprimerAction($id)
    { 
         
        $session = $this->getRequest()->getSession();
        
        $ids = $session->get('productId2');
        $qnts = $session->get('productQnt2');
        $names = $session->get('productNames2');
        $prices = $session->get('productPrices2');
        if(sizeof($ids)==1){
            $session->set('productId2',null);
            $session->set('productQnt2',null);
            $session->set('productNames2',null);
            $session->set('productPrices2',null);
        }
        else{
            for($i=0;$i<sizeof($ids);$i++){
                if($ids[$i]==$id){
/*                    $ids[$i]=null;
                    $qnts[$i]=null;
                    $names[$i]=null;
                    $prices[$i]=null;*/
                    unset($ids[$i]);
                    unset($qnts[$i]);
                    unset($names[$i]);
                    unset($prices[$i]);
                    
                }

            }
             $session->set('productId2',$ids);
            $session->set('productQnt2',$qnts);
            $session->set('productNames2',$names);
            $session->set('productPrices2',$prices);
        }
        
/*        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
       {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }*/
        
        return $this->redirect($this->generateUrl('ecommerce_panierAffichage')); 
    }
    
    public function ajouterAction($id,$nom,$prix)
    {
        
        $session = $this->getRequest()->getSession();
        
        $ids=array(); $qnts=array(); $names=array(); $prices=array();
        $ids = $session->get('productId2');
        $qnts = $session->get('productQnt2');
        $names = $session->get('productNames2');
        $prices = $session->get('productPrices2');
        $qnt=1;
        if($ids!=null){
            $a=0;
            for($i=0;$i<sizeof($ids);$i++){
                if($id==$ids[$i]){
                    $a=1;
                    $qnt++;
                    $qnts[$i]++;
                     break;   
                }           
            }
            if($a==0){
                array_push($ids, $id);
                array_push($qnts, 1);
                array_push($names, $nom);
                array_push($prices, $prix);
            }
        }
        else{
            $ids=array();
            $qnts=array();
            $names=array();
            $prices=array();
            array_push($ids, $id);
            array_push($qnts, 1);
            array_push($names, $nom);
            array_push($prices, $prix);
        }
        $session->set('productId2',$ids);
        $session->set('productQnt2',$qnts);
        $session->set('productNames2',$names);
        $session->set('productPrices2',$prices);
        //$session->set('productId2',null);
        
        $session->set('panierId',$id);
        $session->set('panierNom',$nom);
        $session->set('panierPrix',$prix);
        $panier = $session->get('panier');
        
//        if (array_key_exists($id, $panier)) {
//            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
//            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
//        } else {
//            if ($this->getRequest()->query->get('qte') != null)
//                $panier[$id] = $this->getRequest()->query->get('qte');
//            else
//                $panier[$id] = 1;
//            
//            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
//        }
//            
//        $session->set('panier',$panier);
        
        
        return $this->redirect($this->generateUrl('ecommerce_panierAffichage'));
    }
    
    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
//        if (!$session->has('panier')) $session->set('panier', array());
        
        
        $ids = $session->get('productId2');
        $qnts = $session->get('productQnt2');
        $names = $session->get('productNames2');
        $prices = $session->get('productPrices2');
        
        /*
        $session->set('productId2',null);
        $session->set('productQnt2',null);
        $session->set('productNames2',null);
        $session->set('productPrices2',null);*/
        
        
        /*print_r($ids);
        print_r($qnts);
        print_r($names);
        */
        
        $id = $session->get('panierId');
        $nom = $session->get('panierNom');
        $prix = $session->get('panierPrix');
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('ProduitBundle:Produit')->findAll();
        
        return $this->render('EcommerceBundle:Default:index.html.twig', array('prices'=>$prices, 'names'=>$names, 'ids'=>$ids, 'qnts'=> $qnts, 'id' => $id,'nom' => $nom,'prix' => $prix));
    }
    
   
    
   
    
   
    
    public function validationAction()
    {
        if ($this->get('request')->getMethod() == 'POST')
            $this->setLivraisonOnSession();
        
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $adresse = $session->get('adresse');
        
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        $livraison = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $facturation = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
        
        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig', array('produits' => $produits,
                                                                                                 'livraison' => $livraison,
                                                                                                 'facturation' => $facturation,
                                                                                                 'panier' => $session->get('panier')));
    }
}

