<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImieGameBundle:Home:index.html.twig');
    }

    public function logoutAction()
    {
        $this->get('session')->remove('playername');

        return new RedirectResponse($this->generateUrl('imie_game_homepage'));
    }
}
