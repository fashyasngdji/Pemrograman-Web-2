<?php
require_once 'class_nilaimahasiswa.php';

$mahasiswa1 = new NilaiMahasiswa('01101', 'Andy');
$mahasiswa1->prodi = 'TI';
$mahasiswa1->thn_angkatan = 2011;
$mahasiswa1->nilai = 70;

$mahasiswa2 = new NilaiMahasiswa('01102', 'Budi');
$mahasiswa2->prodi = 'SI';
$mahasiswa2->thn_angkatan = 2012;
$mahasiswa2->nilai = 89;

$mahasiswa3 = new NilaiMahasiswa('01103', 'Cinta');
$mahasiswa3->prodi = 'TI';
$mahasiswa3->thn_angkatan = 2013;
$mahasiswa3->nilai = 58;

$mahasiswa4 = new NilaiMahasiswa('01104', 'Dina');
$mahasiswa4->prodi = 'BD';
$mahasiswa4->thn_angkatan = 2022;
$mahasiswa4->nilai = 97;

$data_mahasiswa = [
    $mahasiswa1,
    $mahasiswa2,
    $mahasiswa3,
    $mahasiswa4,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php
        foreach ($data_mahasiswa as $key => $value) {
        ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$value->nim?></td>
            <td><?=$value->nama?></td>
            <td><?=$value->prodi?></td>
            <td><?=$value->thn_angkatan?></td>
            <td><?=$value->nilai?></td>
            <td><?=$value->grade()?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
