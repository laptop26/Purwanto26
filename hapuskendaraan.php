<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hapus Rekord Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hapus Rekord Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Ketik nama lengkap kendaraan yang dihapus:</label>
      <input type="text" class="form-control" id="email" placeholder="Ketik Disini" name="namadihapus">
    </div>
	    <button type="submit" class="btn btn-primary" name="bhapus" onclick="return confirm('Apakah rekord nama yang terpilih dihapus ?')">Hapus</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bhapus'])) {
	$namadihapus=$_POST['namadihapus'];
	$koneksi=new mysqli("localhost","root","","showroom");
	$sql="DELETE FROM `kendaraan` WHERE `kendaraan`.`Namakendaraan` = '".$namadihapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord kendaraan sudah dihapus !";
	} else {
		echo "Rekord kendaraan gagal dihapus !";
	}
}