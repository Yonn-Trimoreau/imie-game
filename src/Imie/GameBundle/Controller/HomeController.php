<?php

namespace Imie\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImieGameBundle:Home:index.html.twig');
    }
}
