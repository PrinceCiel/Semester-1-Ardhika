<?php

$dataJSON = '[
    {
        "nis": "20503221",
        "nama": "Dudi",
        "jk": "Laki-Laki",
        "kelas": "XI RPL 1",
        "jurusan": "RPL"
    },
    {
        "nis": "20503222",
        "nama": "Siti",
        "jk": "Perempuan",
        "kelas": "XI TBSM 1",
        "jurusan": "TBSM"
    },
    {
        "nis": "20503223",
        "nama": "Budi",
        "jk": "Laki-Laki",
        "kelas": "XI TBSM 1",
        "jurusan": "TBSM"
    },
    {
        "nis": "20503224",
        "nama": "Rina",
        "jk": "Perempuan",
        "kelas": "XI TKRO 1",
        "jurusan": "TKRO"
    },
    {
        "nis": "20503225",
        "nama": "Andi",
        "jk": "Laki-Laki",
        "kelas": "XI TKRO 1",
        "jurusan": "TKRO"
    },
    {
        "nis": "20503226",
        "nama": "Lina",
        "jk": "Perempuan",
        "kelas": "XI RPL 2",
        "jurusan": "RPL"
    },
    {
        "nis": "20503227",
        "nama": "Joko",
        "jk": "Laki-Laki",
        "kelas": "XI RPL 2",
        "jurusan": "RPL"
    },
    {
        "nis": "20503228",
        "nama": "Dewi",
        "jk": "Perempuan",
        "kelas": "XI TBSM 2",
        "jurusan": "TBSM"
    },
    {
        "nis": "20503229",
        "nama": "Hendra",
        "jk": "Laki-Laki",
        "kelas": "XI TKRO 2",
        "jurusan": "TKRO"
    },
    {
        "nis": "20503230",
        "nama": "Nina",
        "jk": "Perempuan",
        "kelas": "XI RPL 3",
        "jurusan": "RPL"
    }
]';

$list = json_decode($dataJSON);

foreach($list as $a){
    echo "Nis : {$a->nis}<br>"; 
    echo "Nama : {$a->nama}<br>"; 
    echo "Jenis Kelamin : {$a->jk}<br>"; 
    echo "Kelas : {$a->kelas}<br>"; 
    echo "Jurusan : {$a->jurusan}<hr>"; 
}

?>