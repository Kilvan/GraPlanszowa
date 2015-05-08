<pre>
<?php
require_once 'kostka.php';
require_once 'gracz.php';
require_once 'pionek.php';
require_once 'plansza.php';


$cube = new Cube();
$player1 = new Player("Gracz1");
$pawn = new Pawn();
$gameBoard = new GameBoard();
foreach($gameBoard->field as $value)
{	
    echo "\n";
    $player1->ThrowC($cube);
    echo $player1->name." Rzuca Kostka";
    echo "\nWylosowal: ".$roll=$player1->Read($cube)."\n";
    echo "Pionek ".$player1->name." Znajduje sie na pozycji: ".$position = $player1->CheckPosition($pawn)."\n";
    $player1->Move($pawn,$roll);
    
    if($gameBoard->CheckWin($roll,$position)){
       echo "Porusza sie na pole: 14\n";
       echo $player1->name." Wygrywa";
       break;
    }
    else{
        echo "Porusza sie na pole: ".$player1->CheckPosition($pawn)."\n";
        echo $player1->name." czyta komunikat: ".$gameBoard->GetField($player1->CheckPosition($pawn))."\n\n";
   }
 
}





