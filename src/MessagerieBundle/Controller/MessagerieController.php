<?php

namespace MessagerieBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MessagerieBundle\Entity\Message;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MessagerieController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function messagerieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $iduser= $user->getId();

        $tab = [];
        $listerecus = $em->getRepository('MessagerieBundle:Message')->findByDestinataire($iduser);

        foreach ($listerecus as $msg)
        {
            $thisAuteur = $em->getRepository('AppBundle:User')->findOneById($msg->getAuteur());
            $tab[] = array(
                'auteur' => $thisAuteur->getUsername(),
                'message' => $msg->getMessage(),            
            );
        }

        return $this->render('MessagerieBundle:Messagerie:messagerie.html.twig', array( 
            'tab'=> $tab,
        ));
    }

    public function messagerieNewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $message = $request->request->get('message');

        $destinataire = $request->request->get('destinataire');
        
        $requestmessage = $em->getRepository('UserBundle:User')->findOneByUsername($destinataire);

        $idDest = $requestmessage->getId();

        $object = new Message();
        $object->setMessage($message);
        $object->setAuteur($user->getId());
        $object->setDestinataire($idDest);

        $em->persist($object);
        $em->flush();


        $url = $this->generateUrl('messagerie_new');
        $response = new RedirectResponse($url);

        return $response;
    }
}