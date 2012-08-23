<?php

namespace Loiste\MinesweeperBundle\Model;

/**
 * This class represents a game object.
 */
class GameObject
{
    const TYPE_UNDISCOVERED = 0;
    const TYPE_MINE = 1;
    const TYPE_EMPTY = 2; // Discovered.
    const TYPE_NUMBER = 3; // Discovered.
    const TYPE_EXPLOSION = 4; // Damn we hit a mine!

    public $type;

    public function __construct($type = 0)
    {
        $this->type = $type;
    }

    public function isMine()
    {
        return $this->type === GameObject::TYPE_MINE;
    }

    public function isNumber()
    {
        return $this->type === GameObject::TYPE_NUMBER;
    }

    public function isEmpty()
    {
        return $this->type === GameObject::TYPE_EMPTY;
    }
}