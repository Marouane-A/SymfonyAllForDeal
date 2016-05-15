<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\ProduitBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of ProduitForm
 *
 * @author super
 */
class ProduitForm extends AbstractType{
     public function getName() {
        return 'ProduitName';
    } 
    public function buildForm( FormBuilderInterface $builder, 
           array $options) {
       $builder
               ->add('media', 'sonata_media_type', array(
                        'provider' => 'sonata.media.provider.image',
                            'context'  => 'default'
                   ))
               ->add('categorie', 'entity', array('class' =>'Application\Sonata\ClassificationBundle\Entity\Category'))
               ->add('nomP')
               ->add('description')
               //->add('rawContent') // source content
               //->add('description', 'sonata_formatter_type', array(
                  //      'source_field' => 'rawContent',
                  //      'target_field' => 'content'))
               ->add('prix')
               ->add('tva')
               ->add('reduction')
               ->add('quantite')
                 ->add('zone','entity',
                       array('class'=>'ServiceBundle:Zone',
                           'property'=>'nom',
                        
                           'label'=>'zone : '))
                
               ->add('Ajouter', 'submit');
    }
   
}
