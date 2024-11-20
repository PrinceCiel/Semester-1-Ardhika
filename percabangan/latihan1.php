<!DOCTYPE html>
<html lang="en" style="font-family:monospace">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <fieldset>
        <legend>Input</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: <input type="text" name="nama" id=""></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: 
                            <select name="kelas" id="" style="width: 92%">
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai B.Indonesia</td>
                        <td>: <input type="number" name="indo" id="" min=1 max=100 required></td>
                    </tr>
                    <tr>
                        <td>Nilai B.Inggris</td>
                        <td>: <input type="number" name="inggris" id="" min=1 max=100 required></td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>: <input type="number" name="mtk" id="" min=1 max=100 required></td>
                    </tr>
                    <tr>
                        <td>Produktif</td>
                        <td>: <input type="number" name="pro" id="" min=1 max=100 required></td>
                    </tr>
                    <tr>
                        <td colspan=2><button type="submit" name="go" style="width:100%">Go</button></td>
                    </tr>
                </table>
            </form>
    </fieldset>
    <br>
    
    
    <?php
if(isset($_POST['go'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $Bindo = $_POST['indo'];
    $Bing = $_POST['inggris'];
    $Mtk = $_POST['mtk'];
    $Produktif = $_POST['pro'];


$rata2 = ($Bindo + $Bing + $Mtk + $Produktif) / 4;
?>
<table>
    <tr>
        <td>Nama </td>
        <td>: <?php echo $nama;?></td>
    </tr>
    <tr>
        <td>Kelas </td>
        <td>: <?php echo $kelas;?></td>
    </tr>
</table>
<table style="width: 40%">
    <tr>
        <td>Nilai B.Indonesia</td>
        <td>: <?php echo $Bindo;?></td>
    </tr>
    <tr>
        <td>Nilai B.Inggris</td>
        <td>: <?php echo $Bing;?></td>
    </tr>
    <tr>
        <td>Matematika </td>
        <td>: <?php echo $Mtk;?></td>
    </tr>
    <tr>
        <td>Produktif </td>
        <td>: <?php echo $Produktif;?></td>
    </tr>
    <tr>
        <td>Rata-rata </td>
        <td>: <?php echo $rata2;?></td>
    </tr>
    <tr>
        <td colspan=2> - - - - - - - - - - - - - - - - - - - - - - -</td>
    </tr>
    <tr>
        <td>
            <?php
            if($rata2 >= 75){
                echo "Status : *Anda Lulus*";
            } else {
                echo "Status : *Anda Gagal*";
            }?>
        </td>
    </tr>
</table>
<?php
}
?>
</body>
</html>