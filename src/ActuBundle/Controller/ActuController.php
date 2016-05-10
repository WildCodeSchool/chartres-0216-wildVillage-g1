<?php

namespace ActuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class ActuController extends Controller
{
    public function actuAction()
    {
        //Affichage du flux des posts
        $repoActu = $this->getDoctrine()->getRepository('ActuBundle:Post');

        $fluxPost = $repoActu->findAll();

        $tabPost = [];
        
        foreach ($fluxPost as $msg)
        {
            $tabPost[] = array(
                'billet' => $msg->getBillet(),            
            );
        }
        return $this->render('ActuBundle:Actu:actu.html.twig', array(
            'flux'=>$tabPost,
        ));
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