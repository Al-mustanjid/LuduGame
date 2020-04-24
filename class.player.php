<?php
require_once 'interface.IPlayer.php';
require_once 'class.piece.php';

class Player implements IPlayer
{
    public $name;
    private $playerPiece;
    function __construct($name){
        $this->name = $name;
        $this->playerPiece = $this->getPlayerPiece();
    }

    function addPlayerPiece($piece)
    {
        $this->playerPiece = $piece;
    }
    
    function getPlayerPiece()
    {
        return $this->playerPiece;
    }
}