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

echo "Tipe ".$bmw->kecepatanmaksimal();