<?php
namespace MessagerieBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MessagerieBundle\Entity\Message;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MessagerieController extends Controller
{
    public function messagerieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $iduser= $user->getId();
        $tab = [];
        $listerecus = $em->getRepository('MessagerieBundle:Message')->findById($iduser);

        foreach ($listerecus as $message)
        {
            $thisExpediteur = $em->getRepository('UserBundle:User')->findOneById($message->getExpediteur());
            $tab[] = array(
                'expediteur' => $thisExpediteur->getUsername(),
                'message' => $message->getMessage(),
            );
        }

        return $this->render('MessagerieBundle:Messagerie:messagerie.html.twig',array(
            'tab'=> $tab,
        ));
        }

    public function messagerieNewAction(Request $request)
       {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $message = $request->request->get('message');
        $destinataire = $request->request->get('destinataire');

        $requestmessage = $em->getRepository('UserBundle:User')->findOneById($destinataire);
        

        $idDest = $requestmessage->getId();
        $object = new Message();
        $object->setMessage($message);
        $object->setAuteur($user->getId());
        $object->setDestinataire($idDest);
        $em->persist($object);
        $em->flush();
        $url = $this->generateUrl('messagerie');
        $response = new RedirectResponse($url);
        return $response;
        }


}
