<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function indexAction()
    {
        $this->get('session')->set('bgcolor','2680f3');
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

        $playerInfos = $playerRepo->createIfNotExists($this->get('request')->request->get('playername'));

        $this->get('session')->set('playerid',$playerInfos['id']);

        $this->get('session')->set('bgcolor',$playerInfos['bgcolor']);

        return new RedirectResponse($this->generateUrl('imie_game_gamepage'));
    }

    public function logoutAction()
    {
        $this->get('session')->remove('playerid');
        $this->get('session')->remove('bgcolor');

        return new RedirectResponse($this->generateUrl('imie_game_homepage'));
    }
}
