<?php
if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    // nilai mtk
    $mtkharian = $_POST['mtkharian'];
    $mtktugas = $_POST['mtktugas'];
    $mtkuts = $_POST['mtkuts'];
    $mtkuas = $_POST['mtkuas'];
    // nilai indo
    $indoharian = $_POST['indoharian'];
    $indotugas = $_POST['indotugas'];
    $indouts = $_POST['indouts'];
    $indouas = $_POST['indouas'];
    // nilai inggris
    $ingharian = $_POST['ingharian'];
    $ingtugas = $_POST['ingtugas'];
    $inguts = $_POST['inguts'];
    $inguas = $_POST['inguas'];
    // nilai produktif
    $proharian = $_POST['proharian'];
    $protugas = $_POST['protugas'];
    $prouts = $_POST['prouts'];
    $prouas = $_POST['prouas'];


    class data_siswa{
        public $rata2;

        public function mtk($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;
            echo "<td>$hr</td>";
            echo "<td>$tgs</td>";
            echo "<td>$uts</td>";
            echo "<td>$uas</td>";
            echo "<td>" .$this->rata2 . "</td>";

            if($this->rata2 >= 75){
                echo "<td>Tuntas</td>";
            } else {
                echo "<td>Tidak tuntas</td>";
            }
        }

        public function indo($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;
            echo "<td>$hr</td>";
            echo "<td>$tgs</td>";
            echo "<td>$uts</td>";
            echo "<td>$uas</td>";
            echo "<td>" .$this->rata2 . "</td>";

            if($this->rata2 >= 75){
                echo "<td>Tuntas</td>";
            } else {
                echo "<td>Tidak tuntas</td>";
            }
        }

        public function ing($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;
            echo "<td>$hr</td>";
            echo "<td>$tgs</td>";
            echo "<td>$uts</td>";
            echo "<td>$uas</td>";
            echo "<td>" .$this->rata2 . "</td>";

            if($this->rata2 >= 75){
                echo "<td>Tuntas</td>";
            } else {
                echo "<td>Tidak tuntas</td>";
            }
        }

        public function pro($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;
            echo "<td>$hr</td>";
            echo "<td>$tgs</td>";
            echo "<td>$uts</td>";
            echo "<td>$uas</td>";
            echo "<td>" .$this->rata2 . "</td>";

            if($this->rata2 >= 75){
                echo "<td>Tuntas</td>";
            } else {
                echo "<td>Tidak tuntas</td>";
            }
        }
    }
    $print = new data_siswa();
    ?>
    <center>
        <table>
            <tr>
                <td><h3>Nama</h3></td>
                <td><h3>:</h3></td>
                <td><h3><?php echo $nama;?></h3></td>
            </tr>
            <tr>
                <td><h3>Kelas</h3></td>
                <td><h3>:</h3></td>
                <td><h3><?php echo $kelas;?></h3></td>
            </tr>
            <tr>
                <td><h3>Jurusan</h3></td>
                <td><h3>:</h3></td>
                <td><h3><?php echo $jurusan;?></h3></td>
            </tr>
        </table>
        <table border="1" cellspacing=0 style="width: 50%;">
            <tr>
                <th>Mapel</th>
                <th>Harian</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Rata-Rata</th>
                <th>Grade</th>
            </tr>
            <tr align=center>
                <td>Matematika</td>
                <?php echo $print->mtk($mtkharian, $mtktugas, $mtkuts, $mtkuas);?>
            </tr>
            <tr align=center>
                <td>Indonesia</td>
                <?php echo $print->indo($indoharian, $indotugas, $indouts, $indouas);?>
            </tr>
            <tr align=center>
                <td>Inggris</td>
                <?php echo $print->ing($ingharian, $ingtugas, $inguts, $inguas);?>
            </tr>
            <tr align=center>
                <td>Produktif</td>
                <?php echo $print->pro($proharian, $protugas, $prouts, $prouas);?>
            </tr>
        </table>
    </center>


<?php
}