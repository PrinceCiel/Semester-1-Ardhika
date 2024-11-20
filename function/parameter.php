<?php

function biodata($nama,$tl,$tgl,$jk,$agama,$alamat,$hobi){
    echo "Nama : " .$nama."<br>";
    echo "Tempat Lahir : " .$tl."<br>";
    echo "Tanggal Lahir : " .$tgl."<br>";
    echo "Jenis Kelamin : " .$jk."<br>";
    echo "Agama : " .$agama."<br>";
    echo "Alamat : " .$alamat."<br>";
    echo "Hobi : " .$hobi."<br>";
}


// biodata("Asep","Bandung","17 Agustus 1945","Laki-Laki","Agama","Nata Endah Blok 1","tidur");

function menghitung($angka1, $angka2){
    echo "Bilangan ke 1 : $angka1<br>";
    echo "Bilangan ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo "Hasilnya : $hasil";
}
 
menghitung(10,20);

?>