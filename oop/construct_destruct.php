<?php
// buat class
class Kucing{

    // method / function
    public function __construct(){
        echo "halo saya kucing<br>";
    }

    public function makan(){
        echo "Mam Wiskhas:3";
    }
    public function minum(){
        echo "Mimik Tutu:>";
    }
    public function __destruct(){
        echo "MIAWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW";
    }
}

$print = new Kucing();

$print->makan();
echo "<br>";
$print->minum();
echo "<br>";