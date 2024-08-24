<?php

class Hewan {
    public $jumlah_kaki;
    public $bisa_terbang = "tidak bisa terbang";

    public function bersuara() {
        return "Hewan ini bersuara";
    }
}


class Kucing extends Hewan {
    public $nama = "Momo";

    public function bersuara() {
        return "meong";
    }
}


class Anjing extends Hewan {
    public $nama = "Dogo";

    public function bersuara() {
        return "gukguk";
    }
}


class Elang extends Hewan {
    public $nama = "Zenix";

    public function __construct() {
        $this->bisa_terbang = "bisa terbang";
    }

    public function bersuara() {
        return "miikk";
    }
}


class Bebek extends Hewan {
    public $nama = "Dedek";

    public function __construct() {
        $this->bisa_terbang = "bisa terbang";
    }

    public function bersuara() {
        return "kraww";
    }
}


$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah kucing <br>";
echo "Punya kaki sebanyak: " . $momo->jumlah_kaki . "<br>";
echo $momo->bisa_terbang . "<br>";
echo "Suaranya: " . $momo->bersuara() . "<br>";

echo "<hr>";

$dogo = new Anjing;
$dogo->jumlah_kaki = 4;
echo "Dogo adalah anjing <br>";
echo "Punya kaki sebanyak: " . $dogo->jumlah_kaki . "<br>";
echo $dogo->bisa_terbang . "<br>";
echo "Suaranya: " . $dogo->bersuara() . "<br>";

echo "<hr>";

$zenix = new Elang;
$zenix->jumlah_kaki = 2;
echo "Zenix adalah elang <br>";
echo "Punya kaki sebanyak: " . $zenix->jumlah_kaki . "<br>";
echo $zenix->bisa_terbang . "<br>";
echo "Suaranya: " . $zenix->bersuara() . "<br>";

echo "<hr>";

$dedek = new Bebek;
$dedek->jumlah_kaki = 2;
echo "Dedek adalah bebek <br>";
echo "Punya kaki sebanyak: " . $dedek->jumlah_kaki . "<br>";
echo $dedek->bisa_terbang . "<br>";
echo "Suaranya: " . $dedek->bersuara() . "<br>";

echo "<hr>";

?>
