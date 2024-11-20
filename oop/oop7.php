<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>formulir</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Nama : </th>
                    <td><input type="text" name="nama" id="" required></td>
                </tr>
                <tr>
                    <th>kelas : </th>
                    <td><input type="text" name="kelas" id="" required></td>
                </tr>
                <tr>
                    <th>Alamat : </th>
                    <td><textarea name="alamat" id="" cols="50" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="gazz" name="save"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
    if(isset($_POST['save'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];

        class Siswa {
            public $nama, $kelas, $alamat;
            public function __construct($a, $b, $c)
            {
                $this->nama = $a;
                $this->kelas = $b;
                $this->alamat = $c;
            }

        }
        $siswa = new Siswa($nama, $kelas, $alamat);

        ?>
        <fieldset>
            <legend>output</legend>
            <table border="1">
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <tr>
                    <td><?php echo  $siswa->nama . "<br>";?></td>
                    <td><?php echo  $siswa->kelas . "<br>";?></td>
                    <td><?php echo $siswa->alamat . "<br>";?></td>
                </tr>
            </table>
    </fieldset>
        
        
    <?php
    }
    ?>
</body>
</html>