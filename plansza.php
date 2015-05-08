<?php
require_once 'kostka.php';
require_once 'pionek.php';
class GameBoard{
var $field;

function __construct(){
    $this->field = [
    0 => "text",
    1 => "text",
    2 => "text",
    3 => "text",
    4 => "text",
    5 => "text",
    6 => "text",
    7 => "text",
    8 => "text",
    9 => "text",
    10 => "text",
    11=> "text",
    12 => "text",
    13 => "text",
    14 => "text",
    ];
    //for($i = 0; $i<50; $i++){
    //	$this->field[] = new Field(new Action("text"),$i);
    //}
}
function GetField($fieldnumber){
    return $this->field[$fieldnumber];	
}

function CheckWin($roll,$position){
    if($roll + $position <= 14){
        return false;
    }
    else{
        return true;
    }
}

}

	
