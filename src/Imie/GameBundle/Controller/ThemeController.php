<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ThemeController extends Controller
{
    public function changeAction($bgcolor)
    {
        $playerId = $this->get('session')->get('playerid');

        $playerRepo = $this->getDoctrine()->getRepository('ImieGameBundle:Player');

        $playerRepo->updateTheme($playerId,$bgcolor);

        $this->get('session')->set('bgcolor',$bgcolor);

        return new Response();
    }
}
