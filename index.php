<?php

class mobil {
	private $merek, $tipe, $mesin, $max_speed; 
	public function cetakTipe(){
		return $this->tipe;
	}
	public function kecepatanmaksimal(){
		return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}

	function injekgas(){
		return "mengalirkan bensin ke ruang bakar, rpm naik, roda berputar";
	}
}
	
class bmw extends mobil {
		
}

class tesla extends mobil {
	function selfparking(){
		echo "parkir otomatis";
	}

	function injekgas(){
		return "mengalirkan listrik ke dinamo, rpm naik, roda berputar";
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


echo "bmw : ".$bmw->injekgas();
echo "<br>";
echo "<br>";
echo "tesla : ".$tesla->injekgas();


