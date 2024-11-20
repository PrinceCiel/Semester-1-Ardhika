<?php
if(isset($_POST['go'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jm = $_POST['jm'];
    $menu = $_POST['menu'];
    $qty = $_POST['qty'];
    $harga = 0;
    $diskon = 0;
    if($menu == "Nasi Goreng"){
        $harga = 10000;
    }elseif($menu == "Mie Goreng"){
        $harga = 15000;
    }elseif($menu == "Ayam Goreng"){
        $harga = 20000;
    }elseif($menu == "Air Mineral"){
        $harga = 5000;
    }elseif($menu == "Fresh Tea"){
        $harga = 7000;
    }elseif($menu == "Jus"){
        $harga = 12000;
    }
    $total = $harga * $qty;
    ?>
    


    <!DOCTYPE html>
    <html lang="en" style="font-family:monospace">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table align=center>
            <tr>
                <td colspan=2>~~~~~~RESTORAN SELALU RAME~~~~~~</td>
            </tr>
            <tr>
                <td colspan=2>---------------------------------</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:   <?php echo $nama;?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:   <?php echo $jk;?></td>
            </tr>
            <tr>
                <td>Jenis Menu</td>
                <td>:   <?php echo $jm;?></td>
            </tr>
            <tr>
                <td>Menu</td>
                <td>:   <?php echo $menu;?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:    <?php echo $harga;?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:   <?php echo $qty;?></td>
            </tr>
            <tr>
                <td colspan=2>---------------------------------</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:   <?php echo $total;?></td>
            </tr>
            <?php
            if($total >= 50000){
                $diskon = $total * 0.2;
                $total = $total - $diskon;?>
            
            <tr>
                <td>Diskon 20%</td>
                <td>: <?php echo $diskon;?></td>
            </tr>
            <?php
            } else {?>
            <tr>
                <td colspan=2 align=center>!Tidak Ada Diskon!</td>
            </tr>
            <?php
            }?>
            <tr>
                <td colspan=2>---------------------------------</td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>: <?php echo $total;?></td>
            </tr>
        </table>
    </body>
    </html>
    <?php
} else {
?>
<!DOCTYPE html>
<html lang="en" style="font-family: monospace">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Pesan Makanan</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <?php
                    if(isset($_POST['next'])){
                        $nama = $_POST['nama']
                        ?>
                        <td>Nama Customer</td>
                        <td>: <input type="text" name="nama" id="" value=<?php echo $nama;?> disabled></td>
                    <?php
                    } else {?>
                        <td>Nama Customer</td>
                        <td>: <input type="text" name="nama" id=""></td>
                    <?php }?>
                </tr>
                <tr>
                    <?php
                    if(isset($_POST['next'])){
                        $jk = $_POST['jk'];
                        ?>
                        <td>Jenis Kelamin</td>
                        <td>: 
                            <select name="jk" id="" disabled>
                                <option value="" selected><?php echo $jk;?></option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </td>
                        <?php 
                    } else {?>
                        <td>Jenis Kelamin</td>
                        <td>: 
                            <select name="jk" id="">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki" selected>Laki-Laki</option>
                            </select>
                        </td>    
                    <?php }?>
                </tr>
                <tr>
                    <?php
                    if(isset($_POST['jm'])){
                        $jm = $_POST['jm'];
                        ?>                        
                        <td>Jenis Menu</td>
                        <td>: 
                            <select name="jm" id="" disabled>
                                <option value="" selected><?php echo $jm;?></option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </td>
                        <?php
                    } else {?>
                        <td>Jenis Menu</td>
                        <td>: 
                            <select name="jm" id="">
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </td>
                    <?php }?>
                </tr>
                <tr>
                    <?php
                    if(isset($_POST['next'])){?>
                        <td colspan=2><button type="disabled" style="width:100%" name="next" disabled>Next</button></td>
                        <?php
                    } else {?>
                        <td colspan=2><button type="submit" style="width:100%" name="next">Next</button></td>
                    <?php
                    }?>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['next'])){
                $nama = $_POST['nama'];
                $jk = $_POST['jk'];
                $jm = $_POST['jm'];
                ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Menu</td>
                    <?php
                    if($jm == "Makanan"){?>
                    <td>: 
                        <select name="menu" id="">
                            <option value="Nasi Goreng">Nasi Goreng</option>
                            <option value="Mie Goreng">Mie Goreng</option>
                            <option value="Ayam Goreng">Ayam Goreng</option>
                        </select>
                    </td>
                    <?php } else {?>
                        <td>: 
                        <select name="menu" id="">
                            <option value="Air Mineral">Air Mineral</option>
                            <option value="Fresh Tea">Fresh Tea</option>
                            <option value="Jus">Jus</option>
                        </select>
                    </td>
                    <?php
                    }?>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>: <input type="number" name="qty" id=""></td>
                </tr>
                <tr>
                    <input type="hidden" name="nama" value=<?php echo $nama;?>>
                    <input type="hidden" name="jk" value=<?php echo $jk;?>>
                    <input type="hidden" name="jm" value=<?php echo $jm;?>>
                    <td colspan=2><button type="submit" name="go" style="width:100%">Submit</button></td>
                </tr>
            </table>
        </form>
            <?php
            }?>
    </fieldset>
</body>
</html>




<?php
}

?>