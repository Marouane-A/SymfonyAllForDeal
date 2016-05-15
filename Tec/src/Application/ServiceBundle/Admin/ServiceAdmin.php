<?php
namespace Application\ServiceBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ServiceAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
            ->add('nomService')
            ->add('description')
            ->add('type', 'entity', array('class' =>'Application\Sonata\ClassificationBundle\Entity\Collection'))
            ->add('zone','entity',
                       array('class'=>'ServiceBundle:Zone',
                           'property'=>'nom',
                           
                           'label'=>'zone : '))    
            ->add('user', 'entity', array('class' => 'Application\Sonata\UserBundle\Entity\User'))
                
            ->add('enable', 'checkbox', array('required' => false))
           
//if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('nomService')
                ->add('user')
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nomService')
            ->add('user')    
            
        ;
    }
}


