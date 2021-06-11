<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Kendaraan Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Kendaraan Baru</h2>
  <form method="post">
    <div class="form-group">
      <label for="namakendaraan">nama kendaraan:</label>
      <input type="text" class="form-control" id="namakendaraan" placeholder="Isi Disini" name="namakendaraan">
    </div>
	<div class="form-group">
      <label for="jeniskendaraan">jenis kendaraan:</label>
      <input type="text" class="form-control" id="jeniskendaraan" placeholder="Isin Disini" name="jeniskendaraan">
    </div>
    <div class="form-group">
      <label for="nomormesin">nomor mesin:</label>
      <input type="number" class="form-control" id="nomormesin" placeholder="Isi Disini" name="nomormesin">
    </div>
   <div class="form-group">
      <label for="nomorrangka">nomor rangka:</label>
      <input type="number" class="form-control" id="nomorrangka" placeholder="Isi Disini" name="nomorrangka">
    </div>
     <div class="form-group">
      <label for="tahunproduksi">tahun produksi:</label>
      <input type="number" class="form-control" id="tahunlroduksi" placeholder="Isi Disini" name="tahunproduksi">
    </div>
       <div class="form-group">
         <label for="kondisikendaraan">kondisi kendaraan:</label>
         <input type="text" class="form-control" id="kondisikendaraan" placeholder="Isi Disini" name="kondisikendaraan">
       </div>
   <div class="form-group">
     <label for="nomorbpkb">nomor bpkb:</label>
     <input type="number" class="form-control" id="nomorbpkb" placeholder="Isi Disini" name="nomorbpkb">
   </div>
   <div class="form-group">
     <label for="nomorstnk">nomor stnk:</label>
     <input type="number" class="form-control" id="nomorstnk" placeholder="Isi Disini" name="nomorstnk">
   </div>
   <div class="form-group">
     <label for="statusstnk">status stnk:</label>
     <input type="text" class="form-control" id="status stnk" placeholder="Isi Disini" name="statusstnk">
   </div>   <button type="submit" class="btn btn-primary" name="bSimpan">Simpan Rekord Kendaraan</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$namakendaraan=$_POST['namakendaraan'];
	$jeniskendaraan=$_POST['jeniskendaraan'];
	$nomormesin=$_POST['nomormesin'];
	$nomorrangka=$_POST['nomorrangka'];
	$tahunproduksi=$_POST['tahunproduksi'];
	$kondisikendaraan=$_POST['kondisikendaraan'];
	$nomorbpkb=$_POST['nomorbpkb'];
	$nomorstnk=$_POST['nomorstnk'];
	$statusstnk=$_POST['statusstnk'];
	$koneksi=new mysqli("localhost","root","","showroom");
	$sql="INSERT INTO `kendaraan` (`namakendaraan`, `jeniskendaraan`, `nomormesin`, `nomorrangka`, `tahunproduksi`, `kondisikendaraan`, `nomorbpkb`, `nomorstnk`, `statusstnk`) VALUES ('".$namakendaraan."', '".$jeniskendaraan."', '".$nomormesin."', '".$nomorrangka."', '".$tahunproduksi."', '".$kondisikendaraan."', '".$nomorbpkb."', '".$nomorstnk."', '".$statusstnk."');";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord kendaraan baru tersimpan !";
	} else {
		echo "Rekord kendaraan baru gagal tersimpan !";
	}	
}
include ("daftarkendaraan.php");
?>