<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class ProductionReviewAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form->add('quote');
        $form->add('url', UrlType::class, [
            'required' => false,
            'label' => 'URL'
        ]);
        $form->add('attribution');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list->add('attribution');
        $list->add('quote');
        $list->add('production');
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
        $filter->add('quote');
        $filter->add('attribution');
    }

    protected function configureShowFields(ShowMapper $show)
    {
        $show->add('quote');
        $show->add('url');
        $show->add('attribution');
        $show->add('production');
    }
}