<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActuBundle\Entity\Post;
use UserBundle\Entity\Utilisateur;
use \DateTime;

class HomeController extends Controller
{
    public function homeAction(Request $request)
    {
    		// recuperation de l entity manager de Doctrine
            $em = $this->getDoctrine()->getManager();

	    		$billet	= $request->request->get('billet');
	    		$user 	= $this ->getUser();


    		if (!empty($billet)){

		    		$datePubli = new DateTime(date("Y-m-d H:i:s"));

		            // enregistrement des donné dans une nouvelle entity.

		            $post = new Post();
		            $post->setBillet($billet)
		            	 ->setdatePublication($datePubli)
		            	 ->setAuteur($user)
		           	;

		            $em->persist($post);
		            $em->flush();
			}

        return $this->render('UserBundle:Home:home.html.twig');
    }
}
