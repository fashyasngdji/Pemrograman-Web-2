<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Belanja Online</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="margin-top: 1%;">
  <div class="container card">
  <div style="margin-top: 1%;">
    <div class="row">
      <div class="col-12">
        <h3>Belanja Online</h3>
      <hr>
    </div>
</div>
    <form class="form-horizontal mt-3" method="POST" action="tes.php">
  <div class="container-fluid">
 <div class="row">
  <div class="col-md-6">
  <form action="Form_Belanja.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label"><strong>Customer</strong></label> 
    <div class="col-6">
      <div class="input-group">
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4"><strong>Pilih Produk</strong></label> 
      <div class="custom-control custom-radio">
        <input type="radio" name="produk" value="TV"> TV
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" name="produk" value="KULKAS"> KULKAS
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" name="produk" value="MESIN CUCI"> MESIN CUCI
      </div>
      </div>
      <form action="form_belanja.php" method="POST">
      <div class="form-group row">
        <label for="name" class="col-4 col-form-label"><strong>Jumlah</strong></label> 
        <div class="col-3">
          <input name="jumlah_produk" placeholder="Jumlah" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div style="margin-left: 36%;">
          <button name="name" type="submit" class="btn btn-success" value="proses">Kirim</button>
        </div>
      </div>
    </div>
  <div class="col-5">
   <div class="list-group">
   <div style="margin-left: 29%;">
     <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
    <div class="list-group-item">
     TV : 4.200.000
    </div>
        <div class="list-group-item">
     KULKAS : 3.100.000
    </div>
        <div class="list-group-item">
     MESIN CUCI : 3.800.000
    </div>
    <a href="#" class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</a>
   </div>
  </div>
  </div>
</form>
<?php
  $proses= $_POST['proses'];
  $Customer = $_POST['customer'];
  $nama_produk = $_POST['produk'];
  $jumlah_produk = $_POST['jumlah_produk'];
  if($nama_produk == 'TV')$harga=4200000;
  if($nama_produk == 'KULKAS')$harga=3100000;
  if($nama_produk == 'MESIN CUCI')$harga=3800000;
    $total_harga= $jumlah_produk * $harga;
 
  echo '<br/>Nama Customer : '.$Customer;

 
  $_produk = '';
if ($nama_produk == "TV"){
  $_produk = 'TV';
  echo "<br/>Produk Pilihan : TV";
} elseif ($nama_produk == "KULKAS"){
  $_produk = 'KULKAS';
  echo "<br/>Produk Pilihan : KULKAS";
} elseif ($nama_produk == "MESIN CUCI"){
  $_produk = 'MESIN CUCI';
  echo "<br/>Produk Pilihan : MESIN CUCI";
} else {
  echo "";
}

echo '<br/>Jumlah Beli : '.$jumlah_produk;
echo '<br/>Total Belanja : Rp'.number_format($total_harga,2,',',',');

?>
</body>
</html>