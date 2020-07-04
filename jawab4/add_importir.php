<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	

    //cek apakah data berhasil ditambahkan atau tidak
    if(addimportir($_POST) > 0) {
    	echo "<script>
    	alert('data berhasil ditambahkan');
    	document.location.href = 'indeximportir.php';
    	</script>
    	";

    } else {
    	echo "<script>
    	alert('data gagal ditambahkan');
    	document.location.href = 'indeximportir.php';
    	</script>
    	";
    }
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah importir</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Tambah Importir</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="name">NAME :</label>
				<input type="text" name="name" id="name">
			</li>
			<li>
				<label for="addres">ADDRES :</label>
				<input type="text" name="addres" id="addres">
			</li>
			<li>
				<label for="phone">PHONE :</label>
				<input type="text" name="phone" id="phone">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Importir</button>
			</li>

		</ul>	
		<h4><a href="indeximportir.php">kembali ke beranda</a></h4>

	</form>

</body>
</html>
