<?php
// CLASS
class Kucing
{
    //PROPERTY
    public $warna = "MERAH";
    public $makanan;

    //CONSTRUCT ADALAH METHOD KHUSUS YANG AKAN
    //DIPANGGIL PERTAMA KALI
    public function __construct($a, $b)
    {
        $this->warna = $a;
        $this->makanan = $b;
    }

    //METHOD
    public function bersuara()
    {
        return "MIAWWWW AAAAUUUUGGGG";
    }

    public function berburu()
    {
        return "Berburu ikan";
    }
}


//OBJECT
$Kucing1 = new Kucing("abu", "nasi campur pindang");
echo "Warna Kucing 1 : " . $Kucing1->warna . "<br>";
echo "Makanan Kucing 1 : " . $Kucing1->makanan . "<hr>";

$Kucing2 = new Kucing("Biru", "Whiskas");
echo "Warna Kucing 2 : " . $Kucing2->warna . "<br>";
echo "Makanan Kucing 2 : " . $Kucing2->makanan . "<hr>";