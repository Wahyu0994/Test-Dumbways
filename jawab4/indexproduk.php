<?php 
require 'functions.php';
$produk = query("SELECT * FROM produk_tb");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>produk</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Daftar Produk Dan importir</h1>
	<br><br>
	<h2><a href="indexproduk.php">Daftar Produk</a></h2>
	<h2><a href="indeximportir.php">Daftar Importir</a></h2>
	<br><br>
	<h3><a href="add_produk.php">Tambah produk</a></h3>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Name</th>
			<th>Importir_id</th>
			<th>Photo</th>
			<th>Qty</th>
			<th>Price</th>
		</tr>
		<?php $i =1; ?>

		<?php foreach ($produk as $prod): ?>

		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="update_produk.php?id=<?php echo $prod["id"];?>">Update</a> |
				<a href="delete_produk.php?id=<?php echo $prod["id"];?>" onclick="
		return confirm('yakin ?);">Delete</a>
			</td>
			<td><?php echo $prod["name"]; ?></td>
			<td><?php echo $prod["importir_id"]; ?></td>
			<td><img src="img/<?php echo $prod["photo"]; ?>" alt="" width="70px"></td>
			<td><?php echo $prod["qty"]; ?></td>
			<td><?php echo $prod["price"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	</table>
</body>
</html>
