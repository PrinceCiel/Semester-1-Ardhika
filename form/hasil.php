<?php 
if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tgl'];
    $jabatan = $_POST['jabatan'];
    $lamakerja = $_POST['lamakerja'];
    $status = $_POST['status'];
    $bpjs =(isset($_POST['bpjs']) ? $_POST['bpjs'] : null);
    $pinjaman =(isset($_POST['pinjaman']) ? $_POST['pinjaman'] : null);
    $tabungan =(isset($_POST['tabungan']) ? $_POST['tabungan'] : null);
    $lainnya =(isset($_POST['lainnya']) ? $_POST['lainnya'] : null);
    
    if($bpjs == null){
        $bpjs = 0;
    }
    if($pinjaman == null){
        $pinjaman = 0;
    }
    if($tabungan == null){
        $tabungan = 0;
    }
    if($lainnya == null){
        $lainnya = 0;
    }

    if($jabatan == "Kepala Sekolah"){
        $gaji = 10000000;
    }elseif($jabatan == "Wakasek"){
        $gaji = 7500000;
    }elseif($jabatan == "Guru"){
        $gaji = 5000000;
    }elseif($jabatan == "OB"){
        $gaji = 2500000;
    }else{
        $gaji = 0;
    }

    if($lamakerja > 5){
        $tunjanganlama = 1000000;
    } else {
        $tunjanganlama = 0;
    }

    if($status == "Tetap"){
        $bonus = 500000;
    } else {
        $bonus = 0;
    }

    $gajikotor = $gaji + $tunjanganlama + $bonus;
    $potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
    $gajibersih = $gajikotor - $potongan;

    $potongan = number_format($potongan, 0, ',', '.');
    $gajibersih = number_format($gajibersih, 0, ',', '.');
    $gaji = number_format($gaji, 0, ',', '.');
    $tunjanganlama = number_format($tunjanganlama, 0, ',', '.');
    $bonus = number_format($bonus, 0, ',', '.');
    $gajikotor = number_format($gajikotor, 0, ',', '.');
    $bpjs = number_format($bpjs, 0, ',', '.');
    $pinjaman = number_format($pinjaman, 0, ',', '.');
    $tabungan = number_format($tabungan, 0, ',', '.');
    $lainnya = number_format($lainnya, 0, ',', '.');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo Dunia :></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Struk Gaji</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 30rem;">
                        <div class="card-header">
                            <?php echo $nama;?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-primary">Info</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <table class="text-primary">
                                        <tr>
                                            <td>No</td>
                                            <td>:</td>
                                            <td><?php echo $no;?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?php echo $nama;?></td>
                                        </tr>
                                        <tr>
                                            <td>Unit Pendidikan</td>
                                            <td>:</td>
                                            <td><?php echo $unit;?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Gaji</td>
                                            <td>:</td>
                                            <td><?php echo $tgl;?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col">
                                    <h4 class="card-title text-primary">Gaji</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <table class="text-primary">
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td><?php echo $jabatan;?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$gaji";?></td>
                                        </tr>
                                        <tr>
                                            <td>Lama Kerja</td>
                                            <td>:</td>
                                            <td><?php echo $lamakerja;?></td>
                                        </tr>
                                        <tr>
                                            <td>Tunjangan Lama Kerja</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$tunjanganlama";?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Kerja</td>
                                            <td>:</td>
                                            <td><?php echo $status;?></td>
                                        </tr>
                                        <tr>
                                            <td>Bonus</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$bonus";?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Gaji Kotor</b></td>
                                            <td><b>:</b></td>
                                            <td><b><?php echo "Rp.$gajikotor";?></b></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col">
                                    <h4 class="card-title text-primary">Potongan</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <table class="text-primary">
                                        <tr>
                                            <td>BPJS</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$bpjs";?></td>
                                        </tr>
                                        <tr>
                                            <td>Pinjaman</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$pinjaman";?></td>
                                        </tr>
                                        <tr>
                                            <td>Tabungan</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$tabungan";?></td>
                                        </tr>
                                        <tr>
                                            <td>Lainnya</td>
                                            <td>:</td>
                                            <td><?php echo "Rp.$lainnya";?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Total Potongan</b></td>
                                            <td><b>:</b></td>
                                            <td><b><?php echo "Rp.$potongan";?></b></td>
                                        </tr>
                                    </table>                                    
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col">
                                    <h4 class="card-title text-primary">Total</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title text-primary">Gaji Bersih : Rp.<?php echo $gajibersih;?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
<?php
} else {
    ?>
    <script>
        alert("Isi Terlebih Dahulu!");
        window.location.href = "latihan5.html";
    </script><?php
}