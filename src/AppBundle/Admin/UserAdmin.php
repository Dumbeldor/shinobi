<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username', 'text')
            ->add('faction', 'entity', array(
                'class' => 'GameBundle\Entity\Faction',
                'choice_label' => 'name'
            ))
            ->add('classe', 'entity', array(
                'class' => 'GameBundle\Entity\Classe',
                'choice_label' => 'name'
            ))
            ->add('lvl')
            ->add('exp')
            ->add('life')
            ->add('chakra')
            ->add('tai')
            ->add('nin')
            ->add('gen');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')
            ->add('faction.name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username')
            ->add('faction.name')
            ->add('classe.name')
            ->add('lvl')
            ->add('exp')
            ->add('life')
            ->add('chakra')
            ->add('tai')
            ->add('nin')
            ->add('gen');
    }
}