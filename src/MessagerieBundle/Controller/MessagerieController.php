<?php
namespace MessagerieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MessagerieController extends Controller
{
    public function messagerieAction()
    {
        return $this->render('MessagerieBundle:Messagerie:messagerie.html.twig');
    }
}
