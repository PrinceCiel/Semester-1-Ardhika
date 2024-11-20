<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Nasional</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <th colspan=2>Nilai Ujian Nasional</th>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>: 
                        <select name="kelas" id="">
                            <option value="XII">XII</option>
                            <option value="XI">XI</option>
                            <option value="X">X</option>
                        </select>
                        <select name="kelas2" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>: 
                        <select name="jurusan" id="" style="width: 90%">
                            <option value="Rekayasa Perangkat Lunak" align=center>Rekayasa Perangkat Lunak</option>
                            <option value="TBSM" align=center>TBSM</option>
                            <option value="TKRO" align=center>TKRO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><hr></td>
                </tr>
                <tr>
                    <td align=center>Nilai Ujian</td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>: <input type="number" name="bindo" id="" max=100></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>: <input type="number" name="bing" id="" max=100></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>: <input type="number" name="mtk" id="" max=100></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>: <input type="number" name="pro" id="" max=100></td>
                </tr>
                <tr>
                    <td colspan=2><button type="submit" name="go" style="width:100%;">Simpan</button></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['go'])){
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $kelas2 = $_POST['kelas2'];
            $jurusan = $_POST['jurusan'];
            $bindo = $_POST['bindo'];
            $bing = $_POST['bing'];
            $mtk = $_POST['mtk'];
            $pro = $_POST['pro'];
            $rata2 = ($bindo + $bing + $mtk + $pro) / 4;
            if($rata2 > 75){
                $status = "TUNTAS";
            } else {
                $status = "BELUM TUNTAS";
            }?>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $nama;?></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>: <?php echo "$kelas $jurusan $kelas2";?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>: <?php echo $jurusan;?></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>: <?php echo $bindo;?></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>: <?php echo $bing;?></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>: <?php echo $mtk;?></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>: <?php echo $pro;?></td>
                </tr>
                <tr>
                    <td>Rata-Rata</td>
                    <td>: <?php echo $rata2;?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <?php echo $status;?></td>
                </tr>
            </table>
            <?php
        }?>
    </center>
</body>
</html>