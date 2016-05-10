<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\Utilisateur;
use UserBundle\Entity\User;
use ActuBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;

class FriendController extends Controller
{
    public function friendAction ($friend)
    { 
        $user = $this -> getUser();

        //Affichage du profil
        $repo_user = $this->getDoctrine()->getRepository('UserBundle:User');
 
        $userProfil = $repo_user->findOneById($friend);

        $repo_utilisateur = $this->getDoctrine()->getRepository('UserBundle:Utilisateur');
 
        $utilisateurProfil = $repo_utilisateur->findOneByIdFosUser($friend);

        //Affichage des posts
        $repo_actu = $this->getDoctrine()->getRepository('ActuBundle:Post');

        $userPost = $repo_actu->findByauteur($friend);
        // var_dump($userPost);exit;

        $tabPost = [];
        
        foreach ($userPost as $msg)
        {
            $tabPost[] = array(
                'billet' => $msg->getBillet(),            
            );
        }





        return $this->render('UserBundle:Friend:friend.html.twig', array(
            'user'=>$user,
            'dataUser'=>$userProfil,
            'dataUtilisateur'=>$utilisateurProfil,
            'postUser'=>$tabPost,
        ));
    }

    public function showFriendPostAction (Request $request, $friend)
    {
        // $blog = // utilisez la variable $slug pour interroger la base de données

        // return $this->render('UserBundle:Friend:friend.html.twig', array(
        //     'blog' => $blog,
        // ));
    }
}
