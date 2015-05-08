<?php

class Cube{
	var $wynik;
	
function Random(){
	$this->wynik =	rand()%6+1;
}
function GetResult(){
	return $this->wynik;
}

}