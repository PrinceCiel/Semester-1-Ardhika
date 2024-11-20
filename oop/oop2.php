<?php
class Komputer
{
    public $data_pemilik = "";
    public $merk = "";
    public $ukuranlayar = "";

    public function dinyalakan()
    {
        return "Dinyalakan";
    }
    public function dimatikan()
    {
        return "Dimatikan";
    }
}

$Komputer1 = new Komputer();
$Komputer1->data_pemilik = "Sir Dhika";
$Komputer1->merk = "Lenovo";
$Komputer1->ukuranlayar = "24 inch";
echo "Data Pemilik : " . $Komputer1->data_pemilik . "<br>";
echo "Merk : " . $Komputer1->merk . "<br>";
echo "Ukuran Layar : " . $Komputer1->ukuranlayar . "<br>";
echo "Keadaan Komputer : " . $Komputer1->dinyalakan() . "<hr>";

$Komputer2 = new Komputer();
$Komputer2->data_pemilik = "Acep pranowo";
$Komputer2->merk = "Asus";
$Komputer2->ukuranlayar = "32 inch";
echo "Data Pemilik : " . $Komputer2->data_pemilik . "<br>";
echo "Merk : " . $Komputer2->merk . "<br>";
echo "Ukuran Layar : " . $Komputer2->ukuranlayar . "<br>";
echo "Keadaan Komputer : " . $Komputer2->dimatikan() . "<hr>";

$Komputer3 = new Komputer();
$Komputer3->data_pemilik = "Ilyas Supratman";
$Komputer3->merk = "Dell";
$Komputer3->ukuranlayar = "24 inch";
echo "Data Pemilik : " . $Komputer3->data_pemilik . "<br>";
echo "Merk : " . $Komputer3->merk . "<br>";
echo "Ukuran Layar : " . $Komputer3->ukuranlayar . "<br>";
echo "Keadaan Komputer : " . $Komputer3->dinyalakan() . "<hr>";

$Komputer4 = new Komputer();
$Komputer4->data_pemilik = "Satoru Gunawan";
$Komputer4->merk = "Mac";
$Komputer4->ukuranlayar = "32 inch";
echo "Data Pemilik : " . $Komputer4->data_pemilik . "<br>";
echo "Merk : " . $Komputer4->merk . "<br>";
echo "Ukuran Layar : " . $Komputer4->ukuranlayar . "<br>";
echo "Keadaan Komputer : " . $Komputer4->dimatikan() . "<hr>";

$Komputer5 = new Komputer();
$Komputer5->data_pemilik = "Siti Samirah";
$Komputer5->merk = "HP";
$Komputer5->ukuranlayar = "24 inch";
echo "Data Pemilik : " . $Komputer5->data_pemilik . "<br>";
echo "Merk : " . $Komputer5->merk . "<br>";
echo "Ukuran Layar : " . $Komputer5->ukuranlayar . "<br>";
echo "Keadaan Komputer : " . $Komputer5->dinyalakan() . "<hr>";
