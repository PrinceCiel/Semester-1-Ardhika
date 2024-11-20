<?php
// MENGDEFINISIKAN SEBUAH CLASS
class kucing
{
    // MEMBUAT PROPERTY ATAU ATTRIBUTES
    public $warna = "Coklat";
    public $jumlahkaki = 4;
    public $jenisbulu = "panjang";
    public $makananFavorit = "Whiskas";

    // MEMBUAT METHOD(BEHAVIOUR / PRILAKU)
    public function bersuara()
    {
        return "MIAWWWWW... MIAWWWWW ... MIAWWWW ...";
    }

    public function berburu()
    {
        return "berburu jerry";
    }
}

// MEMBUAT OBJECT(INISIASI OBJECT)
$kucing1 = new Kucing();
echo "warna kucing : " . $kucing1->warna . "<br>";
echo "jumlah kaki : " . $kucing1->jumlahkaki . "<br>";
echo "jenis bulu : " . $kucing1->jenisbulu . "<br>"; 
echo "makanan favorit : " . $kucing1->makananFavorit . "<br>";
echo "sifat kucing : " . $kucing1->bersuara() . "<hr>";

$kucing2 = new Kucing();
// SET WARNA KUCING
$kucing2->warna = "oren";
echo "warna kucing : " . $kucing2->warna . "<br>";
echo "jumlah kaki : " . $kucing2->jumlahkaki . "<br>";
echo "jenis bulu : " . $kucing2->jenisbulu . "<br>"; 
echo "makanan favorit : " . $kucing2->makananFavorit . "<br>";
echo "sifat kucing : " . $kucing2->berburu() . "<hr>";

