<?php

class ppdb{

    public function data_diri($jurusan, $nama, $jk, $tl, $tgl, $no, $email){
        echo "<h3>Data Diri</h3>";
        echo "Jurusan : $jurusan<br>";
        echo "Nama : $nama<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Tempat Lahir : $tl<br>";
        echo "Tanggal Lahir : $tgl<br>";
        echo "Nomor HP siswa yang bisa dihubungi : $no<br>";
        echo "Email : $email";
    }

    public function alamat_calon($provinsi, $kokab, $kec, $lur, $alamat, $kodepos){
        echo "<h3>Alamat Calon Peserta Didik</h3>";
        echo "Provinsi : $provinsi<br>";
        echo "Kab / Kota : $kokab<br>";
        echo "Kecamatan : $kec<br>";
        echo "Desa / Kelurahan : $lur<br>";
        echo "Alamat : $alamat<br>";
        echo "Kode Pos : $kodepos";
    }

    public function asal_sekolah($nama, $alamat){
        echo "<h3>Asal Sekolah</h3>";
        echo "Nama Asal Sekolah : $nama<br>";
        echo "Alamat Sekolah : $alamat";
    }

    public function data_ortu($namaortu, $pekerjaanortu, $no, $alamat){
        echo "<h3>Data Orang Tua Calon Peserta Didik</h3>";
        echo "Nama Lengkap Ayah / Ibu / Wali : $namaortu<br>";
        echo "Pekerjaan Ayah / Ibu / Wali : $pekerjaanortu<br>";
        echo "Nomor HP yang bisa dihubungi : $no<br>";
        echo "Alamat Lengkap : $alamat";
    }
}

$ppdb = new ppdb();

$ppdb->data_diri(
    "RPL",               // Jurusan
    "Budi Santoso",       // Nama
    "Laki-laki",          // Jenis Kelamin
    "Jakarta",            // Tempat Lahir
    "12 Agustus 2005",    // Tanggal Lahir
    "08123456789",        // Nomor HP
    "budi@example.com"    // Email
);

echo "<br><br>";

$ppdb->alamat_calon(
    "Jawa Barat",         // Provinsi
    "Bandung",            // Kota/Kabupaten
    "Cicendo",            // Kecamatan
    "Pasir Kaliki",       // Kelurahan
    "Jl. Melati No. 20",  // Alamat
    "40173"               // Kode Pos
);

echo "<br><br>";

$ppdb->asal_sekolah(
    "SMP Negeri 1 Bandung",  // Nama Sekolah
    "Jl. Merdeka No. 10"     // Alamat Sekolah
);

echo "<br><br>";
   
$ppdb->data_ortu(
    "Sutrisno",           // Nama Orang Tua / Wali
    "Pegawai Negeri",     // Pekerjaan
    "08987654321",        // Nomor HP
    "Jl. Melati No. 20"   // Alamat
);

?>
