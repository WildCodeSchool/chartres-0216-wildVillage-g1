<?php

namespace ActuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActuController extends Controller
{
    public function actuAction()
    {
        return $this->render('ActuBundle:Actu:actu.html.twig');
    }
}
