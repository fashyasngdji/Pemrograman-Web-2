<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="margin-top: 1%;">
<div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Form Nilai Siswa</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
    <div class="container">
        <form class="form-horizontal" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="select">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br>
        <?php
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$persentase_uts = 0.3 * $nilai_uts;
$persentase_uas = 0.35 * $nilai_uas;
$persentase_tugas = 0.35 * $nilai_tugas;
$nilai_total = $persentase_uts + $persentase_uas + $persentase_tugas;

if (!empty ($proses)) 
echo 'Proses : '.$proses;
echo '<br/>Nama Lengkap : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
echo '<br/>Nilai Total : '. $nilai_total;

if ($nilai_total >= 55){
    echo "<br/><strong>ANDA DINYATAKAN LULUS</strong>";
} else {
    echo "<br/><strong>ANDA DINYATAKAN TIDAK LULUS</strong>";
}

$grade_nilai = '';
if ($nilai_total >= 85){
    $grade_nilai = 'A';
    echo '<br/>Grade Nilai : A';
} elseif ($nilai_total >= 70){
    $grade_nilai = 'B';
    echo '<br/>Grade Nilai : B';
} elseif ($nilai_total >= 56){
    $grade_nilai = 'C';
    echo '<br/>Grade Nilai : C';
} elseif ($nilai_total >= 36){
    $grade_nilai = 'D';
    echo '<br/>Grade Nilai : D';
}elseif ($nilai_total >= 0){
    $grade_nilai = 'E';
    echo '<br/>Grade Nilai : E';
} else {
    $grade_nilai = 'I';
    echo '<br/>Grade Nilai : I';
}

switch ($grade_nilai ){
    case 'A':
        echo '<br />Predikat nilai : Sangat Memuaskan';
        break;
    case 'B':
        echo '<br />Predikat nilai : Memuaskan';
        break;
    case 'C':
        echo '<br />Predikat nilai : Cukup';
        break;
    case 'D':
        echo '<br />Predikat nilai : Kurang';
        break;
    case 'E':
        echo '<br />Predikat nilai : Sangat Kurang';
        break;
    case 'I':
        echo '<br />Predikat nilai : Tidak Ada';
        break;
    default :
        echo '';
} 

?>
    </div>
</body>
</html>