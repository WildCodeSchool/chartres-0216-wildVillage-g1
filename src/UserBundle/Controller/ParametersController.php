<?php

namespace UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\Utilisateur;
use UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use DateTime;

class ParametersController extends Controller
{

	public function parametersAction (Request $request)
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
	        
	        return $this->render('UserBundle:Parameters:parameters.html.twig', array(
	            'user'=>$user,
	            'datauser'=>$repository,
	        	'repo'=>$repo,
	        
	        ));
	}
	/*public function modifyProfilAction (Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        //declaration des variables
        	$prenom = $request->request->get('prenom');
	        $nom = $request->request->get('nom');
	        $email = $request->request->get('email');
	        $date_de_naissance= $request->request->get('date_de_naissance');
	        $username = $request->request->get('username');
	        $github = $request->request->get('github');
	        $linkedin = $request->request->get('linkedin');
	        $twitter = $request->request->get('twitter');
	        $doyoubuzz = $request->request->get('doyoubuzz');
	        $bio = $request->request->get('bio');
        
        //appel des tables
       		$user = $this ->getUser();
        	$repository = $em->getRepository('UserBundle:Utilisateur')->findOneById_user($user->getId());
        	$repo = $em->getRepository('UserBundle:User')->findOneById_user($user->getId());

    	 	$utilisateur = new Utilisateur();
            $utilisateur->setIdFosUser($user)
                        ->setNom($nom)
                        ->setPrenom($prenom)
                        ->setDateDeNaissance($convertDate)
                        ->setTwitter($twitter)
                        ->setLinkedin($linkedin)
                        ->setDoyoubuzz($doyoubuzz)
                        ->setGithub($github)
                        ->setBiographie($biographie)
                        ->setVisible(1)
            ;

            $em->persist($utilisateur);
            $em->flush();

            return $this->render('UserBundle:Parameters:parameters.html.twig', array(
	            'user'=>$user,
	            'datauser'=>$repository,
	        	'repo'=>$repo,
	        ));
        
    }*/
    public function modifyAction(Request $request)
    {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('actu_homepage');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));


            // Username --> FOS
            // mots de passe -->FOS
            // mots de vasse validation -->FOS
            // email --> FOS

            // Recuperation des donné du formulaire
            $nom                = $request->request->get('nom');
            $prenom             = $request->request->get('prenom');
            $dateDeNaissance    = $request->request->get('naissance');
            $twitter            = $request->request->get('twitter');
            $linkedin           = $request->request->get('linkedin');
            $doyoubuzz          = $request->request->get('doyoubuzz');
            $github             = $request->request->get('github');
            $biographie         = $request->request->get('biographie');

            $convertDate = new DateTime(date("Y-m-d", strtotime($dateDeNaissance)));

            // recuperation de l entity manager de Doctrine
            $em = $this->getDoctrine()->getManager();

            // enregistrement des donné dans une nouvelle entity.
            $utilisateur = new Utilisateur();
            $utilisateur->setIdFosUser($user)
                        ->setNom($nom)
                        ->setPrenom($prenom)
                        ->setDateDeNaissance($convertDate)
                        ->setTwitter($twitter)
                        ->setLinkedin($linkedin)
                        ->setDoyoubuzz($doyoubuzz)
                        ->setGithub($github)
                        ->setBiographie($biographie)
                        ->setVisible(1)
            ;

            $em->persist($utilisateur);
            $em->flush();

            return $response;
        }

        return $this->render('UserBundle:Parameters:parameters.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}



    
   
        
  
   