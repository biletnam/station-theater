<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class ProductionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form->add('title');
        $form->add('playwrights');
        $form->add('directors');
        $form->add('description');
        $form->add('settingTime');
        $form->add('intermission');
        $form->add('poster', UrlType::class, [
            'required' => false
        ]);
        $form->add('directorsNote');
        $form->add('specialThanks');
        $form->add('startDate');
        $form->add('endDate');
        $form->add('season');
        $form->add('scriptQuote');
        $form->add('scriptQuoteAttribution');
        $form->add('photo', UrlType::class, [
            'required' => false
        ]);
        $form->add('productionRoles', CollectionType::class, [
            'by_reference' => false
        ], [
            'edit' => 'inline',
            'inline' => 'table'
        ]);
        $form->add('productionReviews', CollectionType::class, [
            'by_reference' => false
        ], [
            'edit' => 'inline',
            'inline' => 'table'
        ]);
    }

    protected function configureListFields(ListMapper $list)
    {
        $list->add('title');
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
        $filter->add('playwrights');
        $filter->add('directors');
        $filter->add('description');
        $filter->add('startDate');
        $filter->add('endDate');
    }

    protected function configureShowFields(ShowMapper $show)
    {
        $show->add('title');
        $show->add('playwrights');
        $show->add('directors');
        $show->add('description');
        $show->add('settingTime');
        $show->add('intermission');
        $show->add('poster');
        $show->add('directorsNote');
        $show->add('specialThanks');
        $show->add('startDate');
        $show->add('endDate');
        $show->add('season');
        $show->add('scriptQuote');
        $show->add('scriptQuoteAttribution');
        $show->add('photo');
        $show->add('productionRoles');
        $show->add('productionReviews');
    }
}