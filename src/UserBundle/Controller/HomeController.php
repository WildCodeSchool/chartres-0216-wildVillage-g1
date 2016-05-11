<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ActuBundle\Entity\Post;
use ActuBundle\Entity\Commentaire;
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

        $commentaire = $request->request->get('com');

        if (!empty($commentaire)){

            $datePubli = new DateTime(date("Y-m-d H:i:s"));

        // enregistrement des donné dans une nouvelle entity.

            $coms = new Commentaire();
            $coms->setCommentaire($commentaire)
                 ->setDatePublication($datePubli)
                 ->setAuteur($user)
            ;

            $em->persist($coms);
            $em->flush();
        }

		//Affichage des posts !!!
		$compteur=0;
		$tab = [];
		$billet = $em->getRepository('ActuBundle:Post')->findByauteur($user);

		

		foreach ($billet as $printpost) {
			$tab[] = array(
                'idpost'    => $printpost   ->getid(),
		 		'message'	=> $printpost 	->getBillet(),
				'date' 		=> $printpost	->getdatePublication(),
		 	);
		 	$compteur ++;

             //Affichage des commentaires !!!
            $tab2 = [];
            
            $repoCom = $this->getDoctrine()->getRepository('ActuBundle:Commentaire');
          
            $fluxpost = $repoCom->findAll();
            
            foreach ($fluxpost as $printcom) {
            
                $auteur = $em->getRepository('UserBundle:User')->findOneById($printcom->getAuteur());
                    
               // $test = $em->getRepository('ActuBundle:Commentaire')->findOneById($printcom->getidPost());

                    $tab2[] = array(
                   //     'idpost'    => $printcom   ->getidPost()->getId(),

                     
                        'auteur'    => $auteur     ->getUsername(),
                        'message'   => $printcom   ->getCommentaire(),
                        'date'      => $printcom   ->getdatePublication(),
                       
                    );
                    // if($tab[0]['idpost'] == $tab2[0]['idpost'])
                    // { 
                      
                    // };
                }
		}
// var_dump($tab[0]['idpost']);
// var_dump($tab2[0]['idpost']);exit;
       


        return $this->render('UserBundle:Home:home.html.twig',array(
            'user'=>$user,
            'datauser'=>$repository,
        	'repo'=>$repo,
        	'postuser'=>$tab,
        	'compteur'=>$compteur,
            'postcom'=>$tab2,
        ));
    }

}
