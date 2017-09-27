<?php

namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('roles', array($this, 'rolesFilter')),
            new \Twig_SimpleFilter('custom', array($this, 'customFilter')),
        );
    }

    public function rolesFilter($value)
    {
        //var_dump($value);
        if($value === 'ROLE_ADMIN') {
            $price = 'Admin';
        } else {
            $price = 'User';
        }
        //$price = '$'.$price;

        return $price;
    }
    public function customFilter($value)
    {
        //var_dump($value);
        if($value === 'ROLE_ADMIN') {
            $price = 'Admin';
        } else {
            $price = 'User';
        }
        //$price = '$'.$price;

        return $price;
    }
}