<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImieGameBundle:Game:index.html.twig');
    }
}
