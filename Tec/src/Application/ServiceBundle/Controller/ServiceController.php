<?php

namespace Application\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\ServiceBundle\Entity\Service;
use Application\ServiceBundle\Form\ajoutForm;
use Application\ServiceBundle\Form\modifierForm;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Controls\OverviewMapControl;
use Ivory\GoogleMap\Controls\ControlPosition;
use Ivory\GoogleMap\Controls\PanControl;
use Ivory\GoogleMap\Controls\RotateControl;
use Ivory\GoogleMap\Controls\ZoomControl;
use Ivory\GoogleMap\Controls\ZoomControlStyle;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceController
 *
 * @author SaharS
 */
class ServiceController extends Controller {

    public function ajoutAction() {

        $serv = new Service(); //instantiation de l'entitée Model
        $form = $this->createForm(new ajoutForm(), $serv); //on associe la classe formulaire à l'entitée qui lui correspond 
        $d = new \DateTime();
        $serv->setDateAjout($d);
        $user = $this->getUser();
        $serv->setUser($user);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);

        if ($form->isValid()) {
           $serv->setEnable(1);
                $em = $this->getDoctrine()->getManager();
                $em->persist($serv);
                $em->flush();
                return $this->redirectToRoute('service_offre');
           
        }

        return $this->render('ServiceBundle:Service:ajout.html.twig', array('Form' => $form->createView())); //schéma twig
    }

    public function offreAction() {
        $em = $this->getDoctrine()->getManager();
       $serv=$em->getRepository('ServiceBundle:Service')->findBy(array('enable'=>1));

        return $this->render('ServiceBundle:Service:offre.html.twig', array('serv' => $serv));
    }

    
    public function offreValideAction() {
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('ServiceBundle:Service')->findBy(array('active' => 1));
                return $this->render('ServiceBundle:Service:offreValide.html.twig', array('serv' => $serv));
            
        }
    

    public function modifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('ServiceBundle:Service')->find($id);
        $form = $this->createForm(new modifierForm(), $serv);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            
            $em->persist($serv);
            $em->flush();
            return $this->redirectToRoute('service_offre');
        }
        return $this->render('ServiceBundle:Service:modifier.html.twig', array('Form' => $form->createView()));
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('ServiceBundle:Service')->find($id);
        $em->remove($serv);
        $em->flush();
        return $this->redirectToRoute('service_offre');
    }

    public function mesServicesAction() {
        $iduser = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('ServiceBundle:Service')->findByUser($iduser);

        return $this->render('ServiceBundle:Service:mesServices.html.twig', array('serv' => $serv));
    }

    public function afficherAction($id) {


        $em = $this->getDoctrine()->getManager();

        $serv = $em->getRepository('ServiceBundle:Service')->find($id);
        $idzone = $serv->getZone();
        $zone = $em->getRepository('ServiceBundle:Zone')->find($idzone);
        $lat = (double) $zone->getLat();
        $lon = (double) $zone->getLon();



        $map = new Map();

        $map->setPrefixJavascriptVariable('map_');
        $map->setHtmlContainerId('map_canvas');

        $map->setAsync(false);
        $map->setAutoZoom(false);

        $map->setCenter($lat, $lon, true);
        $map->setMapOption('zoom', 10);

        $map->setBound(-2.1, -3.9, 2.6, 1.4, true, true);

        $map->setMapOption('mapTypeId', MapTypeId::ROADMAP);
        $map->setMapOption('mapTypeId', 'roadmap');

        $map->setMapOption('disableDefaultUI', true);
        $map->setMapOption('disableDoubleClickZoom', true);
        $map->setMapOptions(array(
            'disableDefaultUI' => true,
            'disableDoubleClickZoom' => true,
        ));

        $map->setStylesheetOption('width', '300px');
        $map->setStylesheetOption('height', '300px');
        $map->setStylesheetOptions(array(
            'width' => '400px',
            'height' => '300px',
        ));

        $marker = new Marker();

// Configure  marker options
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition($lat, $lon, true);
        $marker->setAnimation(Animation::DROP);

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => true,
            'flat' => true,
        ));
        $overviewMapControl = new OverviewMapControl();

// Add your overview map control to the map
        $map->setOverviewMapControl($overviewMapControl);
        $map->setOverviewMapControl(true);
        $panControl = new PanControl();


// Add your pan control to the map
        $map->setPanControl($panControl);
        $map->setPanControl(ControlPosition::TOP_LEFT);
        $rotateControl = new RotateControl();

// Add your rotate control to the map
        $map->setRotateControl($rotateControl);
        $map->setRotateControl(ControlPosition::BOTTOM_LEFT);
        $zoomControl = new ZoomControl();

// Add your zoom control to the map
        $map->setZoomControl($zoomControl);
        $map->setZoomControl(ControlPosition::TOP_LEFT, ZoomControlStyle::DEFAULT_);




        $map->addMarker($marker);
        $map->setLanguage('fr');




        return $this->render('ServiceBundle:Service:afficher.html.twig', array(
                    'c' => $serv, 'map' => $map));
    }

    public function rechercheAction() {
        $req = $this->getRequest();
        if ($req->getMethod() == "POST") {
            $nomService = $req->get('nomService');


            $em = $this->getDoctrine()->getManager();
            $serv = $em->getRepository('ServiceBundle:Service')->findByNomService($nomService);

            return $this->render('ServiceBundle:Service:recherche.html.twig', array('serv' => $serv,));
        } else {
            
        }
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('ServiceBundle:Service')->findAll();
        return $this->render('ServiceBundle:Service:recherche.html.twig', array('serv' => $serv));
    }

    public function rechercheTypeAction($type) {
        $req = $this->getRequest();
        if ($req->getMethod() == "GET") {
            $type = $req->get('type');


            $em = $this->getDoctrine()->getManager();
            $serv = $em->getRepository('ServiceBundle:Service')->findByType($type);

            return $this->render('ServiceBundle:Service:Categorie.html.twig', array('serv' => $serv,));
        } else {
            
        }
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('ServiceBundle:Service')->findAll();

        return $this->render('ServiceBundle:Service:recherche.html.twig', array('serv' => $serv));
    }

    public function rechercheZoneAction($zone) {
        $req = $this->getRequest();
        if ($req->getMethod() == "GET") {
            $zone = $req->get('zone');


            $em = $this->getDoctrine()->getManager();
            $serv = $em->getRepository('ServiceBundle:Service')->findByZone($zone);

            return $this->render('ServiceBundle:Service:ServiceParZone.html.twig', array('serv' => $serv,));
        } else {


            $em = $this->getDoctrine()->getManager();
            $serv = $em->getRepository('ServiceBundle:Service')->findAll();

            return $this->render('ServiceBundle:Service:recherche.html.twig', array('serv' => $serv));
        }
    }

}
