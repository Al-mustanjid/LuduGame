<?php
require_once 'class.player.php';
require_once 'class.dice.php';
require_once 'class.board.php';
require_once 'class.piece.php';
require_once 'class.counter.php';

$piece = new Piece();
$piece->setColor("Red");

$player = new Player("Rahim");
$player->addPlayerPiece($piece->getColor());

$counter = new Counter();
$counter->setName("A");

$board = new Board();
$board->addCounter($counter->getName());
$board->addPlayer($player->name);
$dice = new Dice();
$dice->rollDice();

echo "Counter ==>\t Player ==>\t Piece ==>\t DiceValue ==>\t Piece Position\t"."<br>";

foreach($board->counter as $key)
{
    echo $key."\t ==>";
}

foreach($board->player as $k)
{
    foreach($k as $value)
    {
        echo $value."\t ==>";
    }
}

echo $player->getPlayerPiece()." \t ==>";
echo $dice->getDiceValue()." \t ==>";
//$piece->isFirstDiceValueSix($dice->getDiceValue());
echo $piece->movePiece($dice->getDiceValue());