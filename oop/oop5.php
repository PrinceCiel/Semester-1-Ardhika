<?php
class HitungBangunSegitiga{
    public $alas;
    public $tinggi;

    public function __construct($a, $b){
        $this->alas = $a;
        $this->tinggi = $b;
    }

    public function LuasSegitiga()
    {
        $luas = ($this->alas * $this->tinggi) / 2;
        return $luas;
    }
}

$segitiga = new HitungBangunSegitiga(10, 15);
echo "Alas : " . $segitiga->alas . "<br>";
echo "tinggi : " . $segitiga->tinggi . "<br>";
echo "Luas Segitiga : " . $segitiga->LuasSegitiga() . "<hr>";