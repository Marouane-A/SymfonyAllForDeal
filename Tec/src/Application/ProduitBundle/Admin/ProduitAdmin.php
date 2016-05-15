<?php
namespace Application\ProduitBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProduitAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                 ->add('media', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'news',
                 'required' => false  
            ))
                
            ->add('categorie', 'entity', array('class' =>'Application\Sonata\ClassificationBundle\Entity\Category'))
            ->add('nomP')
            ->add('description')
           
            ->add('prix')
            ->add('tva')
            ->add('reduction')
            ->add('quantite')
            ->add('ptbonus')
                
            ->add('zone','entity',
                       array('class'=>'ServiceBundle:Zone',
                           'property'=>'nom',
                           
                           'label'=>'zone : '))    
            ->add('user', 'entity', array('class' => 'Application\Sonata\UserBundle\Entity\User'))
                ->add('dateAjout', 'date', array( 'data' => new \DateTime()))
            ->add('enable', null, array('required' => false))
//if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('nomP')
                ->add('user')
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nomP')
            ->add('user')    
            
        ;
    }
}
