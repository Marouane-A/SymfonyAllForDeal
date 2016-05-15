<?php
namespace Application\ProduitBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller ;
use Application\ProduitBundle\Entity\CarteFid;
use Application\ProduitBundle\Form\AjoutCarteFid;

class CarteFidController extends Controller {

    public function AjouterCarteFidAction()
    {
        $carteFid=new CarteFid();
        $form=$this->createForm(new AjoutCarteFid(),$carteFid);
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($carteFid);
            $em->flush();
           return $this->redirect($this->generateUrl('afficheCarte'));
        }
        return $this->render('ProduitBundle:carteFid:AjouterCarteFid.html.twig', array('Form'=>$form->createView()));    }

    public function AttribuerPointAction()
    {
         $em=$this->getDoctrine()->getManager(); 
          $carteFid=$em->getRepository('ProduitBundle:CarteFid')->findAll();
        return $this->render('ProduitBundle:carteFid:AttribuerPoint.html.twig', array('carteFid'=>$carteFid
                
            ));    }
            
    public function modifyAction($id)
    {
        $em=$this->getDoctrine()->getManager(); 
        $carteFid=$em->getRepository('ProduitBundle:CarteFid')->findBy(array('id'=>$id));
       
        $form=$this->createForm(new \Application\ProduitBundle\Form\AttribuerPoint(),$carteFid);
        $request=$this->get('request_stack')->getCurrentRequest();
       

        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
           $em->getRepository('ProduitBundle:CarteFid')->modify($id,($form['nbPoint']->getData())); 
           return $this->redirect($this->generateUrl('afficheCarte'));
        }
        return $this->render('ProduitBundle:CarteFid:modify.html.twig',
               array('carteFid'=>$carteFid,'Form'=>$form->createView()));
        }
        
        
        
           public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager(); 
        $em->getRepository('ProduitBundle:CarteFid')->supp($id);
       return $this->redirect($this->generateUrl('afficheCarte'));

           }
           
              public function afficheCarteAction() {
        $em = $this->getDoctrine()->getManager();
        $carteFid = $em->getRepository('ProduitBundle:CarteFid')->findAll();
        return $this->render('ProduitBundle:CarteFid:afficheCarte.html.twig', array('carteFid' => $carteFid));
    }

  

}

