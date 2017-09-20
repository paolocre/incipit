<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name' , ChoiceType::class, array (
            'attr'  =>  array('class' => 'form-control',
                'style' => 'margin:5px 0;'),
            )
        );
        $builder->add('roles', ChoiceType::class, array (
            'attr'  =>  array('class' => 'form-control',
                'style' => 'margin:5px 0;'),
            'choices' => array (
                'select' => null,
                'ADMIN' => 'ROLE_ADMIN',
                'USER' => 'ROLE_USER'
            ),
            //'multiple' => true,
            'required' => true,
            )
        );
        // $builder->add('roles', ChoiceType::class, array(
        //     'choices'  => array(
        //         'select' => null,
        //         //'Yes' => true,
        //         //'No' => false,
        //         'ADMIN' => 'ROLE_ADMIN',
        //         'USER' => 'ROLE_USER'
        //     ),
        //     )
        // );
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}