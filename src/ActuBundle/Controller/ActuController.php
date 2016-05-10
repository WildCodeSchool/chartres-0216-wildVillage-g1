<?php

namespace ActuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class ActuController extends Controller
{
    public function actuAction()
    {
        return $this->render('ActuBundle:Actu:actu.html.twig');
    }

    public function sidebarAction (Request $request)
    {
        $user = $this -> getUser();

        $repository = $this->getDoctrine()->getRepository('UserBundle:User');
 
        $sidebar_user = $repository->findAll();

				return $this->render('sidebar/sidebar.html.twig', array(
					'sidebar_user' => $sidebar_user,
        ));	
    }
}