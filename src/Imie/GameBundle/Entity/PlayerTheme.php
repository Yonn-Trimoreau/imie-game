<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-07-18 16:09:05.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Imie\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imie\GameBundle\Entity\PlayerTheme
 *
 * @ORM\Entity(repositoryClass="PlayerThemeRepository")
 * @ORM\Table(name="player_theme", indexes={@ORM\Index(name="FK_PLAYER_THEME_PLAYER_idx", columns={"id_player"}), @ORM\Index(name="FK_PLAYER_THEME_THEME_idx", columns={"id_theme"})})
 */
class PlayerTheme
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_player;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_theme;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="playerThemes")
     * @ORM\JoinColumn(name="id_player", referencedColumnName="id")
     */
    protected $player;

    /**
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="playerThemes")
     * @ORM\JoinColumn(name="id_theme", referencedColumnName="id")
     */
    protected $theme;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Imie\GameBundle\Entity\PlayerTheme
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id_player.
     *
     * @param integer $id_player
     * @return \Imie\GameBundle\Entity\PlayerTheme
     */
    public function setIdPlayer($id_player)
    {
        $this->id_player = $id_player;

        return $this;
    }

    /**
     * Get the value of id_player.
     *
     * @return integer
     */
    public function getIdPlayer()
    {
        return $this->id_player;
    }

    /**
     * Set the value of id_theme.
     *
     * @param integer $id_theme
     * @return \Imie\GameBundle\Entity\PlayerTheme
     */
    public function setIdTheme($id_theme)
    {
        $this->id_theme = $id_theme;

        return $this;
    }

    /**
     * Get the value of id_theme.
     *
     * @return integer
     */
    public function getIdTheme()
    {
        return $this->id_theme;
    }

    /**
     * Set Player entity (many to one).
     *
     * @param \Imie\GameBundle\Entity\Player $player
     * @return \Imie\GameBundle\Entity\PlayerTheme
     */
    public function setPlayer(Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get Player entity (many to one).
     *
     * @return \Imie\GameBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set Theme entity (many to one).
     *
     * @param \Imie\GameBundle\Entity\Theme $theme
     * @return \Imie\GameBundle\Entity\PlayerTheme
     */
    public function setTheme(Theme $theme = null)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get Theme entity (many to one).
     *
     * @return \Imie\GameBundle\Entity\Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    public function __sleep()
    {
        return array('id', 'id_player', 'id_theme');
    }
}