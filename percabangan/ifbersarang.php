<?php 

$jurusan = "tbsm";
$kelas = "19";

if($jurusan == "RPL" || $jurusan == "rpl"){
    if($kelas == "10"){
        echo "Ini Kelas 10 RPL";
    } elseif($kelas == "11"){
        echo "Ini Kelas 11 RPL";
    } elseif($kelas == "12"){
        echo "Ini Kelas 12 RPL";
    } else {
        echo "Kelas Ngawur";
    }
}elseif($jurusan == "TKRO" || $jurusan == "tkro"){
    if($kelas == "10"){
        echo "Ini Kelas 10 TKRO";
    } elseif($kelas == "11"){
        echo "Ini Kelas 11 TKRO";
    } elseif($kelas == "12"){
        echo "Ini Kelas 12 TKRO";
    } else {
        echo "Kelas Ngawur";
    }
}elseif($jurusan == "TBSM" || $jurusan == "tbsm"){
    if($kelas == "10"){
        echo "Ini Kelas 10 TBSM";
    } elseif($kelas == "11"){
        echo "Ini Kelas 11 TBSM";
    } elseif($kelas == "12"){
        echo "Ini Kelas 12 TBSM";
    } else {
        echo "Kelas Ngawur";
    }
} else {
    echo "Jurusan Ngawur";
}

?>