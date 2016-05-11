<?php
namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserInterface;
use UserBundle\Entity\Utilisateur;
use \DateTime;

class ParametersController extends Controller
{
    
    public function parametersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $em->getRepository('UserBundle:Utilisateur')->findOneByIdFosUser($user->getId());
        $repo = $em->getRepository('UserBundle:User')->findOneById($user->getId());

        
        $requestinfos = $em->getRepository('UserBundle:Utilisateur')->findOneByIdFosUser($user);

        


        $newNom = $request->request->get('nom');
        $newPrenom = $request->request->get('prenom');
        $newBiographie = $request->request->get('biographie');
        $newGithub = $request->request->get('github');
        $newLinkedin = $request->request->get('linkedin');
        $newTwitter = $request->request->get('twitter');  
        $newDoyoubuzz = $request->request->get('doyoubuzz');
        $newDate_de_naissance = $request->request->get('date_de_naissance');


        $requestinfos->setNom($newNom);
        $requestinfos->setPrenom($newPrenom);
        $requestinfos->setBiographie($newBiographie);
        $requestinfos->setGithub($newGithub);
        $requestinfos->setLinkedin($newLinkedin);
        $requestinfos->setTwitter($newTwitter);
        $requestinfos->setDoyoubuzz($newDoyoubuzz);
        $requestinfos->setDate_de_naissance($newDate_de_naissance); 

            
        
        $em->flush();
      
        return $this->render('UserBundle:Parameters:parameters.html.twig', array(
            'requete_infos' => $requestinfos,
            'datauser'=>$repo,
        ));   
    }
}