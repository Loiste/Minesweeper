<?php

namespace Loiste\MinesweeperBundle\Model;

/**
 * This class represents a game model.
 */
class Game
{
    /**
     * A two dimensional array of game objects.
     *
     * E.x.: $gameArea[3][2] instance of GameObject
     *
     * @var array
     */
    public $gameArea;

    public function __construct()
    {
        // Upon constructing a new game instance, setup an empty game area.
        $this->gameArea = array();

        for ($row = 0; $row < 10; $row++) {

            $temp = array();
            for ($column = 0; $column < 20; $column++) {
                $temp[] = new GameObject(floor(mt_rand(0, 2)));
            }

            $this->gameArea[] = $temp;
        }
    }
}