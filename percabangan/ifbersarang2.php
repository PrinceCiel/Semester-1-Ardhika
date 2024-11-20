<?php
$provinsi = "Jawa Timur";
$kota = "Surabaya";

if($provinsi == "Jawa Barat"){
    if($kota == "Bandung"){
        echo "*Selamat Datang Di Kota Bandung*";
    }elseif($kota == "Cimahi"){
        echo "*Selamat Datang Di Kota Cimahi*";
    }elseif($kota == "Bogor"){
        echo "*Selamat Datang Di Kota Bogor*";
    }elseif($kota == "Bekasi"){
        echo "*Selamat Datang Di Kota Bekasi*";
    }elseif($kota == "Depok"){
        echo "*Selamat Datang Di Kota Depok*";
    }else{
        echo "Kota Tidak Dikenal";
    }
}elseif($provinsi == "Jawa Timur"){
    if($kota == "Surabaya"){
        echo "*Selamat Datang Di Kota Surabaya*";
    }elseif($kota == "Blitar"){
        echo "*Selamat Datang Di Kota Blitar*";
    }elseif($kota == "Kediri"){
        echo "*Selamat Datang Di Kota Kediri*";
    }elseif($kota == "Madiun"){
        echo "*Selamat Datang Di Kota Madiun*";
    }elseif($kota == "Malang"){
        echo "*Selamat Datang Di Kota Malang*";
    }else{
        echo "Kota Tidak Dikenal";
    }
}elseif($provinsi == "Jawa Tengah"){
    if($kota == "Semarang"){
        echo "*Selamat Datang Di Kota Semarang*";
    }elseif($kota == "Surakarta"){
        echo "*Selamat Datang Di Kota Surakarta*";
    }elseif($kota == "Tegal"){
        echo "*Selamat Datang Di Kota Tegal*";
    }elseif($kota == "Magelang"){
        echo "*Selamat Datang Di Kota Magelang*";
    }elseif($kota == "Pekalongan"){
        echo "*Selamat Datang Di Kota Pekalongan*";
    }else{
        echo "Kota Tidak Dikenal";
    }
}

?>