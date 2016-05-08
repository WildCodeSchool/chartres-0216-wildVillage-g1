<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FriendController extends Controller
{
    public function friendAction()
    {
        return $this->render('UserBundle:Friend:friend.html.twig');
    }
}
