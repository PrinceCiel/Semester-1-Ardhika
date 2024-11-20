<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Angka 1</td>
                <td>: <input type="number" name="angka1" id=""></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td>: <input type="number" name="angka2" id=""></td>
            </tr>
            <tr>
                <td>Operator</td>
                <td>: 
                    <select name="operator" id="">
                        <option value="*">x</option>
                        <option value="/">/</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan=2><button type="submit" name="go">Hitung</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['go'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '*':
            $hasil = $angka1 * $angka2;
            echo "= $hasil";
            break;
        case '/':
            $hasil = $angka1 / $angka2;
            echo "= $hasil";
            break;
        case '+':
            $hasil = $angka1 + $angka2;
            echo "= $hasil";
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            echo "= $hasil";
            break;
        
        default:
            echo "Operator Tidak Jelas(*, /, +, -)";
            break;
    }

}

?>