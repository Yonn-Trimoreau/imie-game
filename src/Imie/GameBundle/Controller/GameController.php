<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class GameController extends Controller
{
    public function indexAction()
    {
        $playerId = $this->get('session')->get('playerid');

        if(!isset($playerId) || empty($playerId)){
            return new RedirectResponse($this->generateUrl('imie_game_homepage'));
        }
        else{
            $em = $this->getDoctrine()->getEntityManager();

            $themes = $em->getRepository('ImieGameBundle:Theme')->findAll();

            $player = $em->getRepository('ImieGameBundle:Player')->find($playerId);

            $stats = $em->getRepository('ImieGameBundle:Player')->getStats($player);

            $game = $em->getRepository('ImieGameBundle:Game')->create($player);

            $this->get('session')->set('currentgameid',$game->getId());

            $wordSplit = str_split($game->getWord()->getText());

            return $this->render('ImieGameBundle:Game:index.html.twig', array('themes' => $themes, 'word' => $game->getWord(), 'wordsplit' => $wordSplit, 'stats' => $stats));
        }
    }

    public function winAction(){
        $em = $this->getDoctrine()->getEntityManager();

        $gameId = $this->get('session')->get('currentgameid');
        $game = $em->getRepository('ImieGameBundle:Game')->find($gameId);
        $game->setEnded(new \DateTime());
        $game->setState('won');
        $em->persist($game);
        $em->flush();

        $playerId = $this->get('session')->get('playerid');
        $player = $em->getRepository('ImieGameBundle:Player')->find($playerId);

        $stats = $em->getRepository('ImieGameBundle:Player')->getStats($player);

        return new Response(json_encode($stats),200,array('Content-Type' => 'application/json'));
    }

    public function looseAction(){
        $em = $this->getDoctrine()->getEntityManager();

        $gameId = $this->get('session')->get('currentgameid');
        $game = $em->getRepository('ImieGameBundle:Game')->find($gameId);
        $game->setEnded(new \DateTime());
        $game->setState('lost');
        $em->persist($game);
        $em->flush();

        $playerId = $this->get('session')->get('playerid');
        $player = $em->getRepository('ImieGameBundle:Player')->find($playerId);

        $stats = $em->getRepository('ImieGameBundle:Player')->getStats($player);

        return new Response(json_encode($stats),200,array('Content-Type' => 'application/json'));
    }
}
