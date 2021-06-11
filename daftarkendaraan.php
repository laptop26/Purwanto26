<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$koneksi=new mysqli("localhost","root","","showroom");
$sql="SELECT * FROM `kendaraan`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
?>
<div class="container">
  <h2>Daftar Kendaraan</h2>
  <p>Berikut ini daftar kendaraan yang ada di showroom:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>namakendaraan</th>
        <th>jeniskendaraan</th>
        <th>nomormesin</th>
		<th>nomorangka</th>
		<th>tahunproduksi</th>
		<th>kondisikendaraan</th>
      <th>nomorbpkb</th>
      <th>nomorstnk</th>
      <th>statusstnk</th>
      </tr>
    </thead>
    <tbody>
	<?php do{ 
	?>
      <tr>
        <td><?php echo $r['namakendaraan'];?></td>
        <td><?php echo $r['jeniskendaraan'];?></td>
        <td><?php echo $r['nomormesin'];?></td>
        <td><?php echo $r['nomorrangka'];?></td>
        <td><?php echo $r['tahunproduksi'];?></td>
        <td><?php echo $r['kondisikendaraan'];?></td>
        <td><?php echo $r['nomorbpkb'];?></td>
        <td><?php echo $r['nomorstnk'];?></td>
        <td><?php echo $r['statusstnk'];?></td>
	</tr>
	<?php } while ($r=$q->fetch_array());
	?>
    </tbody>
  </table>
</div>
</body>
</html>