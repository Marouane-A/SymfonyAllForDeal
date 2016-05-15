<?php

namespace Application\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class modifierForm extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomService')
                ->add('description')
                ->add('type','entity',
               array('class' =>'Application\Sonata\ClassificationBundle\Entity\Collection',
                   'property'=>'name',))
              ->add('zone','entity',
                       array('class'=>'ServiceBundle:Zone',
                           'property'=>'nom',
                           
                           'label'=>'zone : '))
                 ->add('Modifier','submit');
    }

    public function getName() {
        return 'ModeleName';
    }

}
