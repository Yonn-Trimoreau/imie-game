<?php
namespace Imie\GameBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Imie\GameBundle\Entity\Theme;

class LoadThemeData extends AbstractFixture
{
    public function load(ObjectManager $em)
    {
        $theme = new Theme();
        $theme->setColorBg('e1443d');
        $em->persist($theme);

        $theme = new Theme();
        $theme->setColorBg('ff0dd0');
        $em->persist($theme);

        $theme = new Theme();
        $theme->setColorBg('ffa500');
        $em->persist($theme);

        $theme = new Theme();
        $theme->setColorBg('62c506');
        $em->persist($theme);

        $theme = new Theme();
        $theme->setColorBg('2680f3');
        $em->persist($theme);

        $em->flush();
    }
}