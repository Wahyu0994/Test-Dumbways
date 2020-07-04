<?php 
require 'functions.php';

//ambil data dari url
$id = $_GET["id"];
//query data produk berdasarkan id
$produk = query("SELECT * FROM produk_tb WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	

    //cek apakah data berhasil diubah atau tidak
    if(update($_POST) > 0) {
    	echo "<script>
    	alert('data berhasil diubah');
    	document.location.href = 'indexproduk.php';
    	</script>
    	";

    } else {
    	echo "<script>
    	alert('data gagal diubah');
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
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data</h1>

	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $produk["id"] ?>">
		<ul>
			<li>
				<label for="name">NAME :</label>
				<input type="text" name="name" id="name"  required value="<?php echo $produk["name"]; ?>" >
			</li>
			<li>
				<label for="importir_id">IMPORTIR_id :</label>
				<input type="text" name="importir_id" id="importir_id" required value="<?php echo $produk["importir_id"]; ?>" >
			</li>
			<li>
				<label for="photo">PHOTO :</label>
				<input type="text" name="photo" id="photo"  required value="<?php echo $produk["photo"]; ?>" >
			</li>
			<li>
				<label for="qty">QTY :</label>
				<input type="number" name="qty" id="qty"  required value="<?php echo $produk["qty"]; ?>" >
			</li>
			<li>
				<label for="price">PRICE :</label>
				<input type="text" name="price" id="price"  required value="<?php echo $produk["price"]; ?>" >
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
			<a href="indexproduk.php"> kembali </a>

		</ul>
		

	</form>




</body>
</html>
