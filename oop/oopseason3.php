<?php

class bangun_datar{

    public $luasSegitiga;
    public $luasPersegi;
    public $luasPersegiPanjang;
    public $luasLingkaran;

    public function luas_segitiga($alas, $tinggi){
        echo "<h3> Menghitung Luas Segitiga </h3>";
        echo "Alas : $alas<br>";
        echo "Tinggi : $tinggi<br>";
        $this->luasSegitiga = ($alas * $tinggi) / 2;
        echo "Luas Segitiga : $this->luasSegitiga";
    }
    
    public function luas_persegi($sisi){
        echo "<h3> Menghitung Luas Persegi </h3>";
        echo "Sisi : $sisi<br>";
        $this->luasPersegi = $sisi * $sisi;
        echo "Luas Persegi : $this->luasPersegi";
    }
    
    public function luas_persegipanjang($panjang, $lebar){
        echo "<h3> Menghitung Luas Persegi Panjang </h3>";
        echo "Panjang : $panjang<br>";
        echo "Lebar : $lebar<br>";
        $this->luasPersegiPanjang = $panjang * $lebar;
        echo "Luas Persegi Panjang : $this->luasPersegiPanjang";
    }
    
    public function luas_lingkaran($jari2){
        echo "<h3> Menghitung Luas Lingkaran </h3>";
        $π = 3.14;
        $this->luasLingkaran = $π * $jari2 * $jari2;
        echo "π : $π<br>";
        echo "Luas Lingkaran : $this->luasLingkaran";
    }
    
    
}

$print = new bangun_datar();

$print->luas_segitiga(30,10);
echo "<hr>";
$print->luas_persegi(5);
echo "<hr>";
$print->luas_persegipanjang(20,5);
echo "<hr>";
$print->luas_lingkaran(9);