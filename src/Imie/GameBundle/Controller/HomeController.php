<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function indexAction()
    {
        $playerId = $this->get('session')->get('playerid');
        if(isset($playerId) && !empty($playerId)){
            return new RedirectResponse($this->generateUrl('imie_game_gamepage'));
        }
        else{
            return $this->render('ImieGameBundle:Home:index.html.twig');
        }
    }

    public function loginAction()
    {
        $playerRepo = $this->getDoctrine()->getManager()->getRepository('ImieGameBundle:Player');

        $playerId = $playerRepo->createIfNotExists($this->get('request')->request->get('playername'));

        $this->get('session')->set('playerid',$playerId);

        return new RedirectResponse($this->generateUrl('imie_game_gamepage'));
    }

    public function logoutAction()
    {
        $this->get('session')->remove('playerid');

        return new RedirectResponse($this->generateUrl('imie_game_homepage'));
    }
}
