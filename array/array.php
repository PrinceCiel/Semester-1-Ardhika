<?php

// $siswa = ["Dudi","Hendri","Kiki","Regita","Eva"];

// echo $siswa[0];
// echo $siswa[1];
// echo $siswa[2];
// echo $siswa[3];
// echo $siswa[4];


$nama = ["Sidik","Abel","Ilyas","Dhea","Regita","Fauzan","Hana","Fazri","Nabilla","Fazli"];
$jk = ["Laki-Laki","Perempuan"];
$hobi = ["Main Game","Membaca","Menulis","Menggambar","Berlari","Mendengarkan Musik","Berenang","Memancing"];

foreach ($nama as $a) {
    echo $a . "<br>";
}

echo "<b><u>Data Siswa</u></b> <br>";
echo "-" . $nama[0] . " - " . $jk[0] . " - " . $hobi[0] . "<br>";
echo "-" . $nama[1] . " - " . $jk[0] . " - " . $hobi[5] . "<br>";
echo "-" . $nama[2] . " - " . $jk[0] . " - " . $hobi[7] . "<br>";
echo "-" . $nama[3] . " - " . $jk[1] . " - " . $hobi[2] . "<br>";
echo "-" . $nama[4] . " - " . $jk[1] . " - " . $hobi[3] . "<br>";
echo "-" . $nama[5] . " - " . $jk[0] . " - " . $hobi[0] . "<br>";
echo "-" . $nama[6] . " - " . $jk[1] . " - " . $hobi[4] . "<br>";
echo "-" . $nama[7] . " - " . $jk[0] . " - " . $hobi[1] . "<br>";
echo "-" . $nama[8] . " - " . $jk[1] . " - " . $hobi[6] . "<br>";
echo "-" . $nama[9] . " - " . $jk[0] . " - " . $hobi[0] . "<br>";


?>