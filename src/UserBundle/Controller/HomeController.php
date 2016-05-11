<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActuBundle\Entity\Post;
use UserBundle\Entity\Utilisateur;
use UserBundle\Entity\User;
use \DateTime;

class HomeController extends Controller
{
    public function homeAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();

		$user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $em->getRepository('UserBundle:Utilisateur')->findOneByIdFosUser($user->getId());
        $repo = $em->getRepository('UserBundle:User')->findOneById($user->getId());

		$billet	= $request->request->get('billet');

		if (!empty($billet)){

    		$datePubli = new DateTime(date("Y-m-d H:i:s"));

            // enregistrement des donné dans une nouvelle entity.

            $post = new Post();
            $post->setBillet($billet)
            	 ->setDatePublication($datePubli)
           		 ->setAuteur($user)
           	;

            $em->persist($post);
            $em->flush();
		}

		//Affichage des posts !!!
		$compteur=0;
		$tab = [];
		$billet = $em->getRepository('ActuBundle:Post')->findByauteur($user);
		

		foreach ($billet as $printpost) {
		//$auteur = $em->getRepository('ActuBundle:Post')->findOneById($printpost->getAuteur());
			$tab[] = array(
		 		'message'	=> $printpost 	->getBillet(),
				'date' 		=> $printpost	->getdatePublication(),
		 	);
		 	$compteur ++;
		}
		// var_dump($printpost); exit;

        return $this->render('UserBundle:Home:home.html.twig',array(
            'user'=>$user,
            'datauser'=>$repository,
        	'repo'=>$repo,
        	'postuser'=>$tab,
        	'compteur'=>$compteur,
        ));
    }

}
