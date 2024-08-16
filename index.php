<?php

class mobil {
	private $merek, $tipe, $mesin, $max_speed; 
	public function cetakTipe(){
		return $this->tipe;
	}
	private function kecepatanmaksimal(){
		return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}
}
	
class bmw extends mobil {
	
}

class tesla extends mobil {
	function selfparking(){
		echo "parkir otomatis";
	}
}

$bmw = new bmw;
$bmw->merek = "bmw";
$bmw->tipe = "320i";
$bmw->mesin ="2000cc";	
$bmw->max_speed = "280km/h";

$tesla = new tesla;
$tesla->merek = "tesla";
$tesla->tipe = "cybertruck";
$tesla->mesin ="ev";
$tesla->max_speed ="400km/h";


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



echo $bmw->kecepatanmaksimal();


