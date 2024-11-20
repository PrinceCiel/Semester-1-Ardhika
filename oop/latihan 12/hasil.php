<?php
if(isset($_POST['save'])){

    $jurusan = $_POST['jurusan'];        
    $namacalon = $_POST['namacalon'];   
    $jk = $_POST['jk']; 
    $tmptlahir = $_POST['tmptlahir'];      
    $tgllahir = $_POST['tgllahir'];       
    $nocalon = $_POST['nocalon'];        
    $email = $_POST['email'];          
    $provinsi = $_POST['provinsi'];       
    $kokab = $_POST['kokab'];          
    $kec = $_POST['kec'];        
    $delur = $_POST['delur'];          
    $alamatcalon = $_POST['alamatcalon'];        
    $kodepos = $_POST['kodepos'];        
    $namaasalsek = $_POST['namaasalsek'];        
    $alamatasalsek = $_POST['alamatasalsek'];          
    $ortu = $_POST['ortu'];       
    $namalengkaportu = $_POST['namalengkaportu'];        
    $pekerjaanortu = $_POST['pekerjaanortu'];          
    $noortu = $_POST['noortu'];         
    $alamatortu = $_POST['alamatortu'];   
    date_default_timezone_set('Asia/Jakarta'); // Zona waktu untuk Bandung
    $currentTimestamp = date('Y-m-d H:i:s'); // Contoh: 2024-05-27 12:34:56      


}
class ppdb{

  public function data_diri($jurusan2,$nama,$jk2,$tmpt,$tgl,$no,$email2){

    echo "Jurusan : ".$jurusan2."<br>";
    echo "Nama Lengkap : ".$nama. "<br>";
    echo "Jenis Kelamin : ".$jk2. "<br>";
    echo "Tempat Lahir : ".$tmpt. "<br>";
    echo "Tanggal Lahir : ".$tgl. "<br>";
    echo "Nomor HP : ".$no. "<br>";
    echo "Email : ".$email2. "<br>";


  }

  public function alamat($prov,$kab,$kecamatan,$desa,$alamat,$kode){

    echo "Provinsi : ".$prov. "<br>";
    echo "Kab / Kota : ".$kab. "<br>";
    echo "Kecamatan : ".$kecamatan. "<br>";
    echo "Desa / Kelurahan : ".$desa. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Kode Pos : ".$kode. "<br>";
  }

  public function asal_sekolah($asalsek,$alamatasal){

    echo "Nama Asal Sekolah : ".$asalsek. "<br>";
    echo "Alamat Asal Sekolah : ".$alamatasal."<br>";
  }
  
  public function data_ortu($a, $nama,$pekerjaan,$nohp,$alamatot){
    echo "Orang Tua : ".$a. "<br>";
    echo "Nama Lengkap Ayah / Ibu / Wali : ".$nama. "<br>";
    echo "Pekerjaan Ayah / Ibu / Wali : ".$pekerjaan."<br>";
    echo "Nomor HP Orang Tua : ".$nohp. "<br>";
    echo "Alamat Lengkap : ".$alamatot. "<br>";
  }

}
$cetak = new ppdb();


?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Successfull</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                background-color: #eee;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 150vh;
                margin: 0;
            }
            .receipt {
                background-color: #ffffff;
                width: 100%;
                max-width: 450px;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .section-title {
                font-weight: 600;
            }
            .total {
                background-color: #A1D6E2;
                padding: 10px;
                text-align: center;
                font-weight: bold;
                margin-top: 10px;
            }
            .details {
                font-size: 14px;
                line-height: 1.5;
                margin-top: 10px;
            }
            .total {
                display: flex;
                justify-content: space-between;
                padding: 10px;
                font-weight: bold;
                font-size: 16px;
            }
            .lottie-container {
                width: 100%;
                height: 200px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .details-row {
                display: flex;
                justify-content: space-between;
                margin-top: 5px;
            }
            .details-row span {
                flex: 1;
            }
            .details-row span:first-child {
                text-align: left;
            }
            .details-row span:last-child {
                text-align: right;
            }
            .semibold {
                font-weight: 600;
            }
        </style>
    </head>
    <body>
      <div class="cc">
        <div class="receipt">
            <div class="lottie-container" id="lottie-animation"></div>
                <div class="row">
                    <div class="col">
                        <div class="header" style="font-size: 14px;"><?php echo $currentTimestamp;?></div>            
                    </div>
                </div>
            <hr>
            <div class="header">Pendaftaran Berhasil!</div>
            <div class="section mt-3">
              <hr>
                <div class="details mt-2">
                  <div class="row">
                    <div class="col">
                    <h5 class="card-title text-primary">Data Diri</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <table class="text-primary">
                        <tr>
                          <td><?php echo $cetak->data_diri($jurusan,$namacalon,$jk,$tmptlahir,$tgllahir,$nocalon,$email); ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="section mt-3">
                <hr>
                <div class="details mt-2">
                  <div class="row mt-3">
                    <div class="col">
                      <h5 class="card-title text-primary">Alamat Pendaftar</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <table class="text-primary">
                        <tr>
                          <td><?php echo $cetak->alamat($provinsi,$kokab,$kec,$delur,$alamatcalon,$kodepos); ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="section mt-3">
                <hr>
                <div class="details mt-2">
                  <div class="row mt-3">
                    <div class="col">
                      <h5 class="card-title text-primary">Asal Sekolah Pendaftar</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <table class="text-primary">
                        <tr>
                          <td><?php echo $cetak->asal_sekolah($namaasalsek,$alamatasalsek); ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="section mt-3">
                <hr>
                <div class="details mt-2">
                  <div class="row mt-3">
                    <div class="col">
                      <h5 class="card-title text-primary">Data Orang Tua</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <table class="text-primary">
                        <tr>
                          <td><?php echo $cetak->data_ortu($ortu,$namalengkaportu,$pekerjaanortu,$noortu,$alamatortu);?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="section mt-3">
                <hr>
                    <div class="details mt-2">
                        <div class="details-row">
                            <span>Nama Penerbit:</span>
                            <span class="semibold">SMK ASSALAAM BDG</span>
                        </div>
                        <div class="details-row">
                            <span>Nama Merchant:</span>
                            <span class="semibold">SMKPK</span>
                        </div>
                        <div class="details-row">
                            <span>Merchant Location:</span>
                            <span class="semibold">BANDUNG, 44444, ID</span>
                        </div>
                    </div>
            </div>
            <div class="section mt-3">
                <div class="back-to-shop">
                    <a href="latihan12.html">&leftarrow; <span class="text-muted">back</span></a>
                </div>
            </div>
        </div>
      </div>
        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Lottie Animation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>
        <script>
            // Menginisialisasi animasi Lottie
            var animation = lottie.loadAnimation({
                container: document.getElementById('lottie-animation'), // ID elemen untuk menampung animasi
                renderer: 'svg', // Renderer yang digunakan (svg/canvas/html)
                loop: true, // Mengaktifkan looping
                autoplay: true, // Mengaktifkan autoplay
                path: 'so.json' // Path ke file animasi JSON
            });
        </script>
    </body>
</html>