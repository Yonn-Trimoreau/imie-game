<?php

namespace Imie\GameBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;

/**
 * GameRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class GameRepository extends EntityRepository
{
    public function create(Player $player)
    {
        $em = $this->getEntityManager();

        $word = $em->getRepository('ImieGameBundle:Word')->getRandom();

        $game = new Game();
        $game->setState('started');
        $game->setPlayer($player);
        $game->setWord($word);
        $game->setStarted(new \DateTime());

        $em->persist($game);
        $em->flush();

        return $game;
    }
}
