<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Rekord Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Koreksi Rekord data Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Ketik nama kendaraan  yang akan dikoreksi:</label>
      <input type="text" class="form-control" id="email" placeholder="Ketik Disini" name="namadikoreksi">
    </div>
	    <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan nama yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
	$namadikoreksi=$_POST['namadikoreksi'];
	$koneksi=new mysqli("localhost","root","","showroom");
	$sql="SELECT * FROM `kendaraan` WHERE `namakendaraan` LIKE '%".$namadicari."%'";
	$q=$koneksi->query($sql);
	$r=$q->fetch_array();
	if (empty($r)) {
		echo "Rekord tidak ditemukan !";
		exit();
	} else {
		?>
<div class="container">
  <h2>Koreksi data kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="namakendaraan">nama kendaraan:</label>
      <input type="text" class="form of-control" id="namakendaraan" placeholder="Enter Disini" name="namakendaraan" value="<?php echo $r['namakendaraan'];?>">
    </div>
	<div class="form-group">
      <label for="jeniskendaraan">jenis kendaraan:</label>
      <input type="text" class="form-control" id="jeniskendaraan" placeholder="Enter Disini" name="jeniskendaraan" value="<?php echo $r['jeniskendaraan'];?>">
    </div>
    <div class="form-group">
      <label for="nomormesin">nomor mesin:</label>
      <input type="number" class="form-control" id="nomormesin" placeholder="Enter Disini" name="nomormesin"
	  value="<?php echo $r['nomormesin'];?>"
	  >
    </div>
    <div class="form-group">
      <label for="nomorrangka">nomor rangka:</label>
      <input type="number" class="form-control" id="nomorrangka" placeholder="Enter Disini" name="nomorrangka"
	  value="<?php echo $r['nomorrangka'];?>"
	  >
    </div>
   <div class="form-group">
      <label for="tahunproduksi">tahun produksi:</label>
      <input type="number" class="form-control" id="tahunproduksi" placeholder="Enter Disini" name="tahunproduksi" value="<?php echo $r['tahunproduksi'];?>"
	  >
    </div>
    <div class="form-group">
      <label for="kondisikendaraan">kondisi kendaran:</label>
      <input type="text" class="form-control" id="" placeholder="Enter Disini" name="kondisikendaraan"
	  value="<?php echo $r['kondisikendaraan'];?>"
	  >
    </div>
        <div class="form-group">
      <label for="nomorbpkb">nomor bpkb:</label>
      <input type="number" class="form-control" id="nomorbpkb" placeholder="Enter Disini" name="nomorbpkb"
	  value="<?php echo $r['nomorbpkb'];?>"
	  >
    </div>
        <div class="form-group">
      <label for="nomorstnk">nomor stnk:</label>
      <input type="number" class="form-control" id="nomorstnk" placeholder="Enter Disini" name="nomor stnk"
	  value="<?php echo $r['nomorstnk'];?>"
	  >
    </div>
        <div class="form-group">
      <label for="statusstnk">status stnk:</label>
      <input type="text" class="form-control" id="statusstnk" placeholder="Enter Disini" name="status stnk"
	  value="<?php echo $r['statusstnk'];?>"
	  >
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan Rekord kendaraan</button>
  </form>
</div>		
		
		<?php
	} //end if empty
}
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
	$sql="UPDATE `kendaraan` SET `namakendaraan` = '$namakendaraan', `jeniskendaraan` = '$jeniskendaraan', `nomormesin` = '$nomormesin', `nomorrangka` = '$nomorrangka', `tahunproduksi` = '$tahunproduksi', `kondisikendaraan` = '$kondisikendaraan', `nomorbpkb` = '$nomorbpkb', `nomorstnk` = '$nomorstnk' WHERE `kendaraan`.`statusstnk` = '$status stnk';";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord kendaraan sudah tersimpan !";
	} else {
		echo "Rekord kendaraan gagal tersimpan !";
	}	
}
?>