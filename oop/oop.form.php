<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang" id=""></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['hitung'])){
// deklarasi variable
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

class persegipanjang{

    public $luas;

    public function luas_persegipanjang($a, $b){
        echo "Panjang : $a<br>";
        echo "Lebar : $b<br>";
        $this->luas = $a * $b;
        echo "Luasnya : $this->luas";
    }
}

$print = new persegipanjang();
echo $print->luas_persegipanjang($panjang, $lebar);
}