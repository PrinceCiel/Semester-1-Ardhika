<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Baiq",
        "tgl" => "20 November 2024",
        "Penerbit" => "Airlangga"
    ],
    [
        "judul" => "Dilan 1990",
        "penulis" => "Pidi Baiq",
        "tgl" => "22 Maret 2023",
        "Penerbit" => "Airlangga"
    ],
    [
        "judul" => "Marmut Merah Jambu",
        "penulis" => "Pidi Baiq",
        "tgl" => "10 Januari 2021",
        "Penerbit" => "Airlangga"
    ],
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "tgl" => "22 Februari 2005",
        "Penerbit" => "Bentang Pustaka"
    ],
    [
        "judul" => "Hujan Bulan Juni",
        "penulis" => "Sapardi Djoko Damono",
        "tgl" => "10 Agustus 1994",
        "Penerbit" => "Gramedia"
    ]
];

foreach($novel as $buku){
    echo "Judul : " . $buku['judul'] . "<br>";
    echo "Penulis : " . $buku['penulis'] . "<br>";
    echo "Tanggal rilis : " . $buku['tgl'] . "<br>";
    echo "Penerbit : " . $buku['Penerbit'] . "<hr>";
}