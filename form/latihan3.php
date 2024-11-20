<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
</head>
<body>
    <center>
    <img src="smk.png" alt="" style="width: 20%;">
        <form action="" method="post">
            <table>
                <tr>
                    <th colspan=3>Form Biodata Diri</th>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tl" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td> 
                        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="20" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="" style="width:37%;">
                            <option value="Islam">Islam</option>
                            <option value="Atheis">Atheis</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan" id="" style="width:35%">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" id="" value="Membaca">Membaca
                        <input type="checkbox" name="hobi" id="" value="Menulis">Menulis
                        <input type="checkbox" name="hobi" id="" value="Ngepush">Ngepush
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita2" id="" style="width: 43%;">
                            <option value="Programmer">Programmer</option>
                            <option value="Pro Player">Pro Player</option>
                            <option value="Kapal Laud">Kapal Laud</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td>
                        <textarea name="kata2" id="" cols="20" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="go">KIRIM</button></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['go'])){
            $nama = $_POST['nama'];
            $tl = $_POST['tl'];
            $tgl = $_POST['tgl'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $agama = $_POST['agama'];
            $pendidikan = $_POST['pendidikan'];
            $status = $_POST['status'];
            $hobi = (isset($_POST['hobi']) ? $_POST['hobi'] : null);
            $cita2 = $_POST['cita2'];
            $kata2 = $_POST['kata2'];

            if($hobi == null){
                $hobi = "GAADA";
            }
        ?>
            <table>
                <tr>
                    <th colspan=2>Hasil Input</th>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $nama;?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>: <?php echo $tl;?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <?php echo $tgl;?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?php echo $jk;?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: <?php echo $agama;?></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>: <?php echo $pendidikan;?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <?php echo $status;?></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>: <?php echo $hobi;?></td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>: <?php echo $cita2;?></td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>: <?php echo $kata2;?></td>
                </tr>
            </table>


        <?php
        }?>
    </center>
</body>
</html>
