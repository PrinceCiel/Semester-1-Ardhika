<?php
class bangun_datar{
    public $luas_segitiga;
    public $luas_persegi;
    public $luas_persegipanjang;
    public $luas_lingkaran;
    public $keliling_segitiga;
    public $keliling_persegi;
    public $keliling_persegipanjang;
    public $keliling_lingkaran;


}


    class luas extends bangun_datar{
        public function luas_segitiga($alas, $tinggi){
            echo "<h3> Menghitung Luas Segitiga </h3>";
            echo "Alas : $alas<br>";
            echo "Tinggi : $tinggi<br>";
            $this->luas_segitiga = ($alas * $tinggi) / 2;
            echo "Luas Segitiga : $this->luas_segitiga";
        }
        
        public function luas_persegi($sisi){
            echo "<h3> Menghitung Luas Persegi </h3>";
            echo "Sisi : $sisi<br>";
            $this->luas_persegi = $sisi * $sisi;
            echo "Luas Persegi : $this->luas_persegi";
        }
        
        public function luas_persegipanjang($panjang, $lebar){
            echo "<h3> Menghitung Luas Persegi Panjang </h3>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            $this->luas_persegipanjang = $panjang * $lebar;
            echo "Luas Persegi Panjang : $this->luas_persegipanjang";
        }
        
        public function luas_lingkaran($jari2){
            echo "<h3> Menghitung Luas Lingkaran </h3>";
            $π = 3.14;
            $this->luas_lingkaran = $π * $jari2 * $jari2;
            echo "π : $π<br>";
            echo "Luas Lingkaran : $this->luas_lingkaran";
        }
        
    }
    class keliling extends bangun_datar{
        public function keliling_segitiga($sisi){
            echo "<h3> Menghitung Keliling Segitiga </h3>";
            echo "Sisi : $sisi<br>";
            $this->keliling_segitiga = $sisi * 3;
            echo "Luas Segitiga : $this->keliling_segitiga";
        }
        
        public function keliling_persegi($sisi){
            echo "<h3> Menghitung keliling Persegi </h3>";
            echo "Sisi : $sisi<br>";
            $this->keliling_persegi = $sisi * 4;
            echo "keliling Persegi : $this->keliling_persegi";
        }
        
        public function keliling_persegipanjang($panjang, $lebar){
            echo "<h3> Menghitung keliling Persegi Panjang </h3>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            $this->keliling_persegipanjang = 2 * ($panjang + $lebar);
            echo "keliling Persegi Panjang : $this->keliling_persegipanjang";
        }
        
        public function keliling_lingkaran($jari2){
            echo "<h3> Menghitung keliling Lingkaran </h3>";
            $π = 3.14;
            $this->keliling_lingkaran = 2 * $π * $jari2;
            echo "π : $π<br>";
            echo "keliling Lingkaran : $this->keliling_lingkaran";
        }
        
    }

    $print = new luas();

    $print->luas_segitiga(30,10);
    echo "<hr>";
    $print->luas_persegi(5);
    echo "<hr>";
    $print->luas_persegipanjang(20,5);
    echo "<hr>";
    $print->luas_lingkaran(9);
    
    echo "<hr><br><br>";
    $print = new keliling();

    $print->keliling_segitiga(30,10);
    echo "<hr>";
    $print->keliling_persegi(5);
    echo "<hr>";
    $print->keliling_persegipanjang(20,5);
    echo "<hr>";
    $print->keliling_lingkaran(9);

    