<?php

class mobil {
	public $merek, $tipe, $mesin, $max_speed; 
	public function cetakTipe(){
		return $this->tipe;
	}
	function kecepatanmaksimal(){
		return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}
}
	

$bmw = new mobil;
$bmw->merek = "bmw";
$bmw->tipe = "320i";
$bmw->mesin ="2000cc";	
$bmw->max_speed = "280km/h";

$mercy = new mobil;
$mercy->merek = "mercy";
$mercy->tipe = "s350";
$mercy->mesin ="2000cc";	
$mercy->max_speed = "280km/h";

echo "$mercy->tipe";
echo "<br>";
echo "$bmw->tipe";

if ($bmw === $mercy) {
	echo " sama ";
}else{
	echo " tidak ";
}



