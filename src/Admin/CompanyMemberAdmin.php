<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class CompanyMemberAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name');
        $formMapper->add('biography');
        $formMapper->add('photo', UrlType::class, [
            'required' => false
        ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
        $datagridMapper->add('biography');
        $datagridMapper->add('photo');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('name');
        $listMapper->add('_action', null, [
            'actions' => [
                'show' => [],
                'edit' => [],
                'delete' => [],
            ]
        ]);
    }

    protected function configureShowFields(ShowMapper $show)
    {
        $show->add('name');
        $show->add('biography');
        $show->add('photo');
        $show->add('productionRoles');
    }
}