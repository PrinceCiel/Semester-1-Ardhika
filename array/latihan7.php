<?php

$data = [
    [
        "nama" => "Safitri",
        "namabuah" => [
            [
                "namabuah" => "Anggur",
                "jenis" => [ "jenis1" => "Anggur Ijo",
                             "jenis2" => "Anggur Putih"]
            ]
        ]

    ],
    [
        "nama" => "Rahman",
        "namabuah" => [
            [
                "namabuah" => "Alpuket",
                "jenis" => [ "jenis1" => "Alpuket Mentega",
                        "jenis2" => "Alpuket Biasa"]
            ],  
            [
                "namabuah" => "Apel",
                "jenis" => [ "jenis1" => "Apel Merah",
                        "jenis2" => "Apel Hijau"]
            ],
        ]

    ],
    
];

foreach($data as $array){
    echo "Nama Pemilik : " . $array['nama'] . "<br>";
    echo "Daftar Buah Kesukaan : <br>";
    echo "<ul>";
    foreach($array['namabuah'] as $array2){
        echo "<li>" . $array2['namabuah'] . "</li>";
        foreach($array2['jenis'] as $array3){
            echo "<ol>" . $array3 . "</ol>";
        }
    }
    echo "</ul>";

}