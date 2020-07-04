<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	

    //cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0) {
    	echo "<script>
    	alert('data berhasil ditambahkan');
    	document.location.href = 'indexproduk.php';
    	</script>
    	";

    } else {
    	echo "<script>
    	alert('data gagal ditambahkan');
    	document.location.href = 'indexproduk.php';
    	</script>
    	";
    }
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah produk</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Tambah Produk</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="name">NAME :</label>
				<input type="text" name="name" id="name">
			</li>
			<li>
				<label for="importir_id">IMPORTIR_id :</label>
				<input type="text" name="importir_id" id="importir_id">
			</li>
			<li>
				<label for="photo">PHOTO :</label>
				<input type="text" name="photo" id="photo">
			</li>
			<li>
				<label for="qty">QTY :</label>
				<input type="number" name="qty" id="qty">
			</li>
			<li>
				<label for="price">PRICE :</label>
				<input type="text" name="price" id="price">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>

		</ul>
		<h4><a href="indeximportir.php">kembali ke beranda</a></h4>
		

	</form>




</body>
</html>
