<?php
require_once 'interface.IDice.php';

class Dice implements IDice
{
    private $diceValue;

    function rollDice()
    {
        $this->diceValue = rand(1, 6);
    }

    function getDiceValue()
    {
        return $this->diceValue;
    }
}