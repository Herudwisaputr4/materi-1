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

$kijang = new mobil;
$kijang->merek = "kijang";
$kijang->tipe = "reborn";
$kijang->mesin ="2000cc";	
$kijang->max_speed = "280km/h";

echo "$mercy->tipe";
echo "<br>";
echo "$bmw->tipe";
echo "<br>";
echo "$kijang->tipe";

if ($bmw === $kijang) {
	echo " sama ";
}else{
	echo " tidak ";
}
