<?php
// Programmer Junior // Programmer Senior // Project Manager 
$jabatan = "Programmer Senior";
$absendalamsatubulan = 0;
$nilaikinerja = 88; //1-100

switch ($jabatan) {
    case 'Programmer Junior':
        $gajidasar = 6000000;
        break;
    
    case 'Programmer Senior':
        $gajidasar = 10000000;
        break;
    
    case 'Project Manager':
        $gajidasar = 15000000;
        break;
    
    default:
        $gajidasar = "Invalid";
        break;
}

if($absendalamsatubulan >= 1){
    $tunjangan = "Tidak Ada";
} else {
    $tunjangan = 200000;
}

if($nilaikinerja > 90){
    if($gajidasar == "Invalid"){
        $bonus = "Invalid";
    } else {
        $bonus = $gajidasar * 0.10;
    }
}elseif($nilaikinerja >= 75){
    if($gajidasar == "Invalid"){
        $bonus = "Invalid";
    } else {
        $bonus = $gajidasar * 0.05;
    }
} else {
    if($gajidasar == "Invalid"){
        $bonus = "Invalid";
    } else {
        $bonus = "Tidak Ada";
    }
}

if($tunjangan == 200000){
    $total = $gajidasar + $tunjangan;
    if($nilaikinerja > 90 || $nilaikinerja >= 75){
        $total = $total + $bonus;
    }
} else {
    if($nilaikinerja > 90 || $nilaikinerja >= 75){
        $total = $gajidasar + $bonus;
    }
}

$pajak = $total * 0.05; //pajak

$totalakhir = $total - $pajak;

echo "Jabatan : $jabatan";
echo "<br>";
echo "Gaji Dasar : $gajidasar";
echo "<br>";
echo "Tunjangan Kehadiran : $tunjangan";
echo "<br>";
echo "Bonus Kinerja : $bonus";
echo "<br>";
echo "Total Gaji Sebelum Pajak : $total";
echo "<br>";
echo "Pajak Penghasilan (5%) : $pajak";
echo "<br>";
echo "Total Gaji Bersih : $totalakhir";

