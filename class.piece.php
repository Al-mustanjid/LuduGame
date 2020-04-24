<?php
require_once 'class.dice.php';
require_once 'interface.IPiece.php';

class Piece implements IPiece
{
    private $color;
    private static $piecePostion = 0;

    function getColor()
    {
        return $this->color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function isFirstDiceValueSix($diceValue)
    {
        if($diceValue == 6)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function movePiece($diceValue)
    {
        if($this->isFirstDiceValueSix($diceValue) == true)
        {
            echo "Set For Move";
        }
       
    }
}
