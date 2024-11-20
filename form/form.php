<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <table align=center>
            <tr>
                <th colspan=2>Form</th>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>: <input type="text" name="nama" id="" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: 
                    <input type="text" name="kelas" id="" required>
                    <!-- <select name="kelas" id="" required>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                        <option value="" selected disabled>--Pilih Kelas--</option>
                    </select> -->
                </td>
            </tr>
            <tr>
                <td colspan=2><button type="submit" name="go" style="width: 100%;">input</button></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['go'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        echo "Nama : $nama<br>";    
        echo "Kelas : $kelas";
    }?>
</body>
</html>