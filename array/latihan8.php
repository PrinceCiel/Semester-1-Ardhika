<?php

$novel = '[
    { 
        "no" : "1001",
        "judul" : "Dilan 1991",
        "genre" : "Romance",
        "penulis" : "Pidi Baiq",
        "penerbit" : "Airlangga",
        "tahun" : "2014"
    },
    { 
        "no" : "1002",
        "judul" : "Bumi Manusia",
        "genre" : "Novel",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Tinta",
        "tahun" : "1980"
    },
    { 
        "no" : "1003",
        "judul" : "Ayat-Ayat Cinta",
        "genre" : "Romance",
        "penulis" : "Habiburrahman El Shirazy",
        "penerbit" : "Gramedia",
        "tahun" : "2004"
    },
    { 
        "no" : "1004",
        "judul" : "Pulang",
        "genre" : "Drama",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia",
        "tahun" : "2015"
    },
    { 
        "no" : "1005",
        "judul" : "5 cm",
        "genre" : "Inspirasi",
        "penulis" : "Donny Dhirgantoro",
        "penerbit" : "GagasMedia",
        "tahun" : "2005"
    },
    { 
        "no" : "1006",
        "judul" : "Saman",
        "genre" : "Fiksi",
        "penulis" : "Ayu Utami",
        "penerbit" : "Gramedia",
        "tahun" : "1998"
    },
    { 
        "no" : "1007",
        "judul" : "Laskar Pelangi",
        "genre" : "Inspirasi",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang",
        "tahun" : "2005"
    },
    { 
        "no" : "1008",
        "judul" : "Pintu Terlarang",
        "genre" : "Thriller",
        "penulis" : "Benny Argo",
        "penerbit" : "Gramedia",
        "tahun" : "2005"
    },
    { 
        "no" : "1009",
        "judul" : "Koper",
        "genre" : "Novel",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia",
        "tahun" : "2016"
    },
    { 
        "no" : "1010",
        "judul" : "Seperti Dendam, Rindu Harus Dibayar Tuntas",
        "genre" : "Fiksi",
        "penulis" : "Eka Kurniawan",
        "penerbit" : "Gramedia",
        "tahun" : "2016"
    },
    { 
        "no" : "1011",
        "judul" : "Patah Hati",
        "genre" : "Romance",
        "penulis" : "Kirana Kejora",
        "penerbit" : "GagasMedia",
        "tahun" : "2020"
    },
    { 
        "no" : "1012",
        "judul" : "Negeri Para Bedebah",
        "genre" : "Satire",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia",
        "tahun" : "2012"
    },
    { 
        "no" : "1013",
        "judul" : "Cinta di Ujung Jalan",
        "genre" : "Romance",
        "penulis" : "Agustinus Wibowo",
        "penerbit" : "GagasMedia",
        "tahun" : "2019"
    },
    { 
        "no" : "1014",
        "judul" : "Cantik itu Luka",
        "genre" : "Fiksi",
        "penulis" : "Eka Kurniawan",
        "penerbit" : "Gramedia",
        "tahun" : "2002"
    },
    { 
        "no" : "1015",
        "judul" : "Hujan",
        "genre" : "Romance",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia",
        "tahun" : "2018"
    },
    { 
        "no" : "1016",
        "judul" : "Filosofi Teras",
        "genre" : "Non-Fiksi",
        "penulis" : "Muhammad Noor",
        "penerbit" : "Gramedia",
        "tahun" : "2020"
    },
    { 
        "no" : "1017",
        "judul" : "Sapiens: A Brief History of Humankind",
        "genre" : "Non-Fiksi",
        "penulis" : "Yuval Noah Harari",
        "penerbit" : "Gramedia",
        "tahun" : "2015"
    },
    { 
        "no" : "1018",
        "judul" : "The Alchemist",
        "genre" : "Fiksi",
        "penulis" : "Paulo Coelho",
        "penerbit" : "Gramedia",
        "tahun" : "1994"
    },
    { 
        "no" : "1019",
        "judul" : "Kumpulan Pujangga Patah Hati",
        "genre" : "Puisi",
        "penulis" : "Khalid",
        "penerbit" : "GagasMedia",
        "tahun" : "2021"
    },
    { 
        "no" : "1020",
        "judul" : "Merindu Cahaya de Amstel",
        "genre" : "Romance",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia",
        "tahun" : "2011"
    }
]';

$listnovel = json_decode($novel);
// echo "<h2 align=center style='font-family: monospace;'> Kumpulan Novel Populer</h4><hr>";
// foreach($listnovel as $buku){
//     echo "No : {$buku->no}<br>";
//     echo "Judul : {$buku->judul}<br>";
//     echo "Genre : {$buku->genre}<br>";
//     echo "Penulis : {$buku->penulis}<br>";
//     echo "Penerbit : {$buku->penerbit}<br>";
//     echo "Tahun Rilis : {$buku->tahun}<hr>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel</title>
</head>
<body>
    <center>
        <table style="font-family: monospace;" border=1 cellspacing=0>
            <tr>
                <td colspan=6><h3 align=center>Kumpulan Novel Populer</h3></td>
            </tr>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Rilis</th>
            </tr>
            <?php
            foreach($listnovel as $buku){?>
            <tr>
                <td><?php echo "{$buku->no}";?></td>
                <td><?php echo "{$buku->judul}";?></td>
                <td><?php echo "{$buku->genre}";?></td>
                <td><?php echo "{$buku->penulis}";?></td>
                <td><?php echo "{$buku->penerbit}";?></td>
                <td><?php echo "{$buku->tahun}";?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>
</html>