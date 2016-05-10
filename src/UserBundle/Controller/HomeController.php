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

    	/*$prenom = $request->request->get('prenom');
        $surname = $request->request->get('surname');
        $age = $request->request->get('age');
        $email = $request->request->get('email');
        $mailispublic= $request->request->get('mailispublic');
        $ageispublic = $request->request->get('ageispublic');
        $surnameispublic = $request->request->get('surnameispublic');
        $firstnameispublic = $request->request->get('firstnameispublic');
        $username = $request->request->get('username');
        $bio = $request->request->get('bio');
        
        //appel des tables*/
        $user = $this ->getUser();
        $repository = $em->getRepository('UserBundle:Utilisateur')->findOneByIdFosUser($user->getId());
        $repo = $em->getRepository('UserBundle:User')->findOneById($user->getId());
        


    		// recuperation de l entity manager de Doctrine
            $em = $this->getDoctrine()->getManager();

	    		$billet	= $request->request->get('billet');
	    		// $user = $this->container->get('security.context')->getToken()->getUser();

	    		// var_dump($user); exit;


    		if (!empty($billet)){

		    		$datePubli = new DateTime(date("Y-m-d H:i:s"));

		            // enregistrement des donné dans une nouvelle entity.

		            $post = new Post();
		            $post->setbillet($billet)
		            	 ->setdatePublication($datePubli)
		           //		 ->setauteur($user)
		           	;

		            $em->persist($post);
		            $em->flush();
			}

        return $this->render('UserBundle:Home:home.html.twig',array(
            'user'=>$user,
            'datauser'=>$repository,
        	'repo'=>$repo,));
    }
}