<?php 
require 'functions.php';
$importir = query("SELECT * FROM importir_tb");
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Importir</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Daftar Importir</h1>
	
	<h3><a href="add_importir.php">Tambah importir</a></h3>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Name</th>
			<th>Addres</th>
			<th>Phone</th>
		</tr>
			<?php $i =1; ?>

		<?php foreach ($importir as $impor): ?>

		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="update_importir.php?id=<?php echo $impor["id"];?>">Update</a> |
				<a href="delete_importir.php?id=<?php echo $impor["id"];?>" onclick="
		return confirm('yakin ?);">Delete</a>
			</td>
			<td><?php echo $impor["name"]; ?></td>
			<td><?php echo $impor["addres"]; ?></td>
			<td><?php echo $impor["phone"]; ?></td>
			
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	</table>
	<br>
	<h4><a href="indexproduk.php">kembali ke Beranda</a></h4>
</body>
</html>
	</table>
</body>
</html>
