<?php


function luas_segitiga($alas, $tinggi){
    echo "<h3> Menghitung Luas Segitiga </h3>";
    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    $luas = ($alas * $tinggi) / 2;
    echo "Luas Segitiga : $luas";
}

function luas_persegi($sisi){
    echo "<h3> Menghitung Luas Persegi </h3>";
    echo "Sisi : $sisi<br>";
    $luas = $sisi * $sisi;
    echo "Luas Persegi : $luas";
}

function luas_persegipanjang($panjang, $lebar){
    echo "<h3> Menghitung Luas Persegi Panjang </h3>";
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar<br>";
    $luas = $panjang * $lebar;
    echo "Luas Persegi Panjang : $luas";
}

function luas_lingkaran($jari2){
    echo "<h3> Menghitung Luas Lingkaran </h3>";
    $π = 3.14;
    $luas = $π * $jari2 * $jari2;
    echo "π : $π<br>";
    echo "Luas Lingkaran : $luas";
}


luas_segitiga(30,10);
echo "<hr>";
luas_persegi(5);
echo "<hr>";
luas_persegipanjang(20,5);
echo "<hr>";
luas_lingkaran(9);