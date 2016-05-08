<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParametersController extends Controller
{
    public function parametersAction()
    {
        return $this->render('UserBundle:Parameters:parameters.html.twig');
    }
}