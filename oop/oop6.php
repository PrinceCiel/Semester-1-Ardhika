<?php
class Aritmatika{
    public $bilangan1;
    public $bilangan2;

    public function __construct($a, $b){
        $this->bilangan1 = $a;
        $this->bilangan2 = $b;
    }

    public function penjumlahan()
    {
        $total = $this->bilangan1 + $this->bilangan2;
        return $total;
    }

    public function pengurangan()
    {
        $total = $this->bilangan1 - $this->bilangan2;
        return $total;
    }
    
    public function perkalian()
    {
        $total = $this->bilangan1 * $this->bilangan2;
        return $total;
    }

    public function pembagian()
    {
        $total = $this->bilangan1 / $this->bilangan2;
        return $total;
    }

    public function modulus()
    {
        $total = $this->bilangan1  %  $this->bilangan2;
        return $total;
    }
}

$soal = new Aritmatika(25, 10);
echo "Penjumlahan<br>";
echo "$soal->bilangan1 + $soal->bilangan2 : " . $soal->penjumlahan() . "<hr>";

echo "Pengurangan<br>";
echo "$soal->bilangan1 - $soal->bilangan2 : " . $soal->pengurangan() . "<hr>";

echo "Perkalian<br>";
echo "$soal->bilangan1 x $soal->bilangan2 : " . $soal->perkalian() . "<hr>";

echo "Permbagian<br>";
echo "$soal->bilangan1 / $soal->bilangan2 : " . $soal->pembagian() . "<hr>";

echo "Modulus<br>";
echo "$soal->bilangan1 % $soal->bilangan2 : " . $soal->modulus() . "<hr>";