<?php
class Perusahaan // CLASS
{
// ATTRIBUTE    
    public $nama;
    public $jabatan;
    public $gaji;
// METHOD
    public function menampilkan()
    {
        return "menampilkan data karyawan";
    }

    public function memodifikasi()
    {
        return "memodifikasi data karyawan";
    }
    
}
//  OBJECT

$Team1 = new Perusahaan(); 
$Team1->nama = "Asep";
$Team1->jabatan = "Manager";
$Team1->gaji = 5000000;
echo "Nama : " . $Team1->nama . "<br>";
echo "Jabatan : " . $Team1->jabatan . "<br>";
echo "Gaji : " . $Team1->gaji . "<br>";
echo "Pekerjaan : " . $Team1->menampilkan() . " dan " . $Team1->memodifikasi() . "<br>";

if($Team1->jabatan == "Manager"){
    $total = $Team1->gaji * 0.05;
    echo "Anda mendapatkan bonus sebanyak 5%!!<br>";
    echo "Bonus nya sebesar : " . $total . "<br>";
    $tot = $total + $Team1->gaji;
    echo "Total : " . $tot;
} else {
    echo "Anda tidak mendapatkan bonus,tetaplah konsisten agar mendapatkan bonus!!";
}
echo "<hr>";

$Team2 = new Perusahaan();
$Team2->nama = "Upil";
$Team2->jabatan = "Sales";
$Team2->gaji = 3000000;
echo "Nama : " . $Team2->nama . "<br>";
echo "Jabatan : " . $Team2->jabatan . "<br>";
echo "Gaji : " . $Team2->gaji . "<br>";
echo "Pekerjaan : " . $Team2->menampilkan() . "<br>";

if($Team2->jabatan == "Manager"){
    $total = $Team2->gaji * 0.05;
    echo "Anda mendapatkan bonus sebanyak 5%!!<br>";
    echo "Bonus nya sebesar : " . $total . "<br>";
    $tot = $total + $Team2->gaji;
    echo "Total : " . $tot;
} else {
    echo "Anda tidak mendapatkan bonus,tetaplah konsisten agar mendapatkan bonus!!";
}
echo "<hr>";

$Team3 = new Perusahaan();
$Team3->nama = "Ilyas";
$Team3->jabatan = "Sales";
$Team3->gaji = 3000000;
echo "Nama : " . $Team3->nama . "<br>";
echo "Jabatan : " . $Team3->jabatan . "<br>";
echo "Gaji : " . $Team3->gaji . "<br>";
echo "Pekerjaan : " . $Team3->menampilkan() . "<br>";

if($Team3->jabatan == "Manager"){
    $total = $Team3->gaji * 0.05;
    echo "Anda mendapatkan bonus sebanyak 5%!!<br>";
    echo "Bonus nya sebesar : " . $total . "<br>";
    $tot = $total + $Team3->gaji;
    echo "Total : " . $tot;
} else {
    echo "Anda tidak mendapatkan bonus,tetaplah konsisten agar mendapatkan bonus!!";
}
echo "<hr>";