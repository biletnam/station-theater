<?php

namespace App\Admin;

use App\Type\RoleType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductionRoleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form->add('title');
        $form->add('role', ChoiceType::class, [
            'required' => true,
            'choices' => RoleType::getChoices(),
            'multiple' => false,
            'expanded' => true
        ]);
        $form->add('isStarring');
        $form->add('companyMember', null, [
            'required' => true
        ]);
    }

    protected function configureListFields(ListMapper $list)
    {
        $list->add('title');
        $list->add('production');
        $list->add('companyMember');
        $list->add('_action', null, [
            'actions' => [
                'show' => [],
                'edit' => [],
                'delete' => [],
            ]
        ]);
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter->add('title');
        $filter->add('isStarring');
    }

    protected function configureShowFields(ShowMapper $show)
    {
        $show->add('title');
        $show->add('role');
        $show->add('isStarring');
        $show->add('companyMember');
        $show->add('production');
    }
}