<?php

namespace Bundles\AcmeBundle\Controller;

use Core\AbstrcatController;
use Faker\Factory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class AcmeController extends AbstrcatController
{

    public function __construct()
    {
        parent::__construct(__DIR__."/../Templates");
    }


    public function index()
    {
        return $this->renderViewTwig(
            'home/index.html.twig' , array(
            )
        ) ;
    }

}
