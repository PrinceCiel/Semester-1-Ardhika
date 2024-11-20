<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika</title>
</head>
<body>

<fieldset>
    <legend>OOP Aritmatika</legend>
        <form action="" method="post">
        <table>
            <tr>
                <th>Bil 1</th>
                <td><input type="number" name="bil1" id=""></td>
            </tr>
            <tr>
                <th>Bil 2</th>
                <td><input type="number" name="bil2" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
        </form>
</fieldset>



<?php

if(isset($_POST['save'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

class Aritmatika
{
    public $bil1, $bil2;
    public function __construct($a, $b)
    {
        $this->bil1 = $a;
        $this->bil2 = $b;
    }

    public function penjumlahan()
    {
        $total = $this->bil1 + $this->bil2;
        return $total;
    }

    public function pengurangan()
    {
        $total = $this->bil1 - $this->bil2;
        return $total;
    }

    public function perkalian()
    {
        $total = $this->bil1 * $this->bil2;
        return $total;
    }

    public function pembagian()
    {
        $total = $this->bil1 / $this->bil2;
        return $total;
    }

    public function modulus()
    {
        $total = $this->bil1 % $this->bil2;
        return $total;
    }
}

$Jumlah1 = new Aritmatika($bil1 , $bil2);
echo "Penjumlahan dari " . "<br>";
echo "$Jumlah1->bil1 + $Jumlah1->bil2 = " . $Jumlah1->penjumlahan() ."<hr>";

echo "Pengurangan dari" . "<br>";
echo "$Jumlah1->bil1 - $Jumlah1->bil2 = " . $Jumlah1->pengurangan() ."<hr>";

echo "Perkalian dari" . "<br>";
echo "$Jumlah1->bil1 x $Jumlah1->bil2 = " . $Jumlah1->perkalian() ."<hr>";

echo "Pembagian dari" . "<br>";
echo "$Jumlah1->bil1 : $Jumlah1->bil2 = " . $Jumlah1->pembagian() ."<hr>";

echo "Modulus dari" . "<br>";
echo "$Jumlah1->bil1 % $Jumlah1->bil2 = " . $Jumlah1->modulus() ."<hr>";
}

?>

</body>
</html>