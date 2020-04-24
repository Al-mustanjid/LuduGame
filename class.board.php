<?php
require_once 'interface.IGame.php';
require_once 'class.player.php';
require_once 'class.counter.php';

class Board implements IGame
{
    public $counter;
    public $player;

    function __construct()
    {
        $this->counter = [];
        $this->player = [];
    }

    function addCounter($counter)
    {
        $this->counter[] = $counter;
    }

    function addPlayer($player)
    {
        $this->player[] = new Player($player);
    }

}