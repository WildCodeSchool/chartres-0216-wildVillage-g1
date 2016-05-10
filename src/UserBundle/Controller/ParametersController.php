<?php
namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParametersController extends Controller
{
    
    public function parametersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $em->getRepository('UserBundle:Utilisateur')->findOneByIdFosUser($user->getId());

        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $biographie = $request->request->get('biographie');
        $age = $request->request->get('age');
        $github = $request->request->get('github');
        $linkedin = $request->request->get('linkedin');
        $twitter = $request->request->get('twitter');
        $doyoubuzz = $request->request->get('doyoubuzz');
        $requestinfos = $em->getRepository('UserBundle:Utilisateur')->findOneById($user->getId());
        /*$hidden = $request->request->get('hidden');*/

        /*if ($hidden == 1){*/
            if (!empty($nom)) {
                $requestinfos->setNom($nom);
            }
            if (!empty($prenom)) {
                $requestinfos->setPrenom($prenom);
            }
            if (!empty($biographie)) {
                $requestinfos->setBiographie($biographie);
            }
            if (!empty($github)) {
                $requestinfos->setGithub($github);
            }
            if (!empty($linkedin)) {
                $requestinfos->setLinkedin($linkedin);
            }
            if (!empty($twitter)) {
                $requestinfos->setTwitter($twitter);
            }
            if (!empty($doyoubuzz)) {
                $requestinfos->setDoyoubuzz($doyoubuzz);
            }
            if (!empty($age)) {
                $requestinfos->setAge($age);
            }
            $em->persist($requestinfos);
            $em->flush();
        /*}*/
        return $this->render('UserBundle:Parameters:parameters.html.twig', array(
            'requete_infos' => $requestinfos,
            'datauser'=>$repository,
        ));   
    }
}