<?php

class Penggajihan{
    public $gajikotor;
    public $tunjangan;
    public $totalpotongan;
    public $gajibersih;

    public function gaji_bersih($nama, $jabatan){
        echo "<h3>Gaji pokok</h3>";
        echo "Nama Karyawan : $nama<br>";
        echo "Jabatan : $jabatan<br>";
        if($jabatan == "Direktur"){
            $this->gajikotor = 10000000;
            echo "Gaji Pokok : $this->gajikotor";
        } elseif($jabatan == "Manager"){
            $this->gajikotor = 7500000;
            echo "Gaji Pokok : $this->gajikotor";
        } elseif($jabatan == "Karyawan"){
            $this->gajikotor = 5000000;
            echo "Gaji Pokok : $this->gajikotor";
        } elseif($jabatan == "Ob"){
            $this->gajikotor = 2500000;
            echo "Gaji Pokok : $this->gajikotor";
        } else {
            $this->gajikotor = "Ada Typo Bang";
            echo "Gaji Pokok : $this->gajikotor";
        }
    }

    public function tunjangan($pendidikan){
        echo "<h3>Tunjangan</h3>";
        echo "Pendidikan : $pendidikan<br>";
        if($pendidikan == "S1"){
            $this->tunjangan = 1000000;
            echo "Tunjangan Pendidikan : $this->tunjangan";
        }elseif($pendidikan == "SMA"){
            $this->tunjangan = 750000;
            echo "Tunjangan Pendidikan : $this->tunjangan";
        }elseif($pendidikan == "SMP"){
            $this->tunjangan = 500000;
            echo "Tunjangan Pendidikan : $this->tunjangan";
        }elseif($pendidikan == "SD"){
            $this->tunjangan = 250000;
            echo "Tunjangan Pendidikan : $this->tunjangan";
        }
    }

    public function potongan($tabungan, $pinjaman){
        echo "<h3>Potongan</h3>";
        echo "Tabungan : $tabungan<br>";
        echo "Pinjaman : $pinjaman<br>";
        $this->totalpotongan = $tabungan + $pinjaman;
        echo "Total Potongan : $this->totalpotongan";
    }

    public function total(){
        echo "<h3>Total Gaji Bersih</h3>";
        $this->gajibersih = $this->gajikotor + $this->tunjangan - $this->totalpotongan;
        echo "Total Gaji Bersih : $this->gajibersih";
    }
}


$print = new Penggajihan();

echo "<h2 align=center>Penggajihan Karyawan</h2>";
$print->gaji_bersih("Dika","Direktur");
echo "<hr>";
$print->tunjangan("S1");
echo "<hr>";
$print->potongan(1000000,500000);
echo "<hr>";
$print->total();
echo "<hr>";