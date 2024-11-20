<?php

$siswa = [
    [
        "nis" => "1001",
        "nama" => "Rido",
        "kelas" => "XI RPL 1",
        "ekskul" => [ "nama_eskul" => "Renang","Futsal"
        ]
    ], 
    [
        "nis" => "1002",
        "nama" => "Sidik",
        "kelas" => "XI RPL 1",
        "ekskul" => [ "nama_eskul" => "Tari","Main Game","Berlari","Berenang"

        ]
    ] 
    ];

foreach($siswa as $murid){
    echo "Nis : " . $murid['nis'] . "<br>";
    echo "Nama : " . $murid['nama'] . "<br>";
    echo "Kelas : " . $murid['kelas'] . "<br>";
    echo "Ekskul : <br>";
    echo "<ul>";
    foreach($murid['ekskul'] as $b){
        echo "<li>" . $b . "</li>";
    }
    echo "</ul>";
    echo "<hr>";
}