<?php
require_once 'kostka.php';
require_once 'pionek.php';
require_once 'plansza.php';
class Player{
    var $name;
    function __construct($name){
            $this->name=$name;	
    }
    function ThrowC(Cube $cube){
                    $cube->Random();
    }
    function Read(Cube $cube){
            return $cube->GetResult();
    }
    function Move(Pawn $pawn, $shift){
            $pawn->position += $shift;
    }
    function CheckPosition(Pawn $pawn){
            return $pawn->position;
    }
    function ReadField(Pawn $position,Gameboard $a){
            $a->GetField($position->position);
    }
}


