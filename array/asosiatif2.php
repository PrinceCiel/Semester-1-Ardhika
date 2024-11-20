<?php

$siswa = [
    [
        "nama" => "Ardhika Pratama",
        "jk" => "Laki-Laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Luthfi adya",
        "jk" => "Laki-Laki",
        "kelas" => "XI RPL 2"
    ]
];


foreach($siswa as $murid){
    echo "Nama : ".$murid['nama']."<br>";
    echo "Jenis Kelamin : ".$murid['jk']."<br>";
    echo "Kelas : ".$murid['kelas']."<hr>";
}