<?php
// class induk
class kendaraan{

    public $warna = "bluuu like koboo";

    public function a(){
        echo "Saya adalah kendaraan";
    }

}


    // class anak
    class mobil extends kendaraan{

        public function b(){
            echo $this->a();
            echo "<br>Warna aku adalah $this->warna";
        }
    }

    $print = new mobil();
    echo $print->b();