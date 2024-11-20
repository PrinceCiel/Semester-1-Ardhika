<?php

class Contoh{
    public $nama = "Daffa";

    public function perkenalan(){
        echo "Assalamualaikum <br>";
    }
}

$print = new Contoh();

echo $print->perkenalan();
echo $print->nama;



?>