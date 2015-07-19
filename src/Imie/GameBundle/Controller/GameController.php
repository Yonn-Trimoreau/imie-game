<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function indexAction()
    {
        $themes = $this->getDoctrine()->getEntityManager()->getRepository('ImieGameBundle:Theme')->findAll();

        return $this->render('ImieGameBundle:Game:index.html.twig', array('themes' => $themes));
    }
}
