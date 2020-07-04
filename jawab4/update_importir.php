
<?php 
require 'functions.php';


//ambil data dari url
$id = $_GET["id"];
//query data produk berdasarkan id
$importir = query("SELECT * FROM importir_tb WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	

    //cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0) {
    	echo "<script>
    	alert('data berhasil diubah');
    	document.location.href = 'indeximportir.php';
    	</script>
    	";

    } else {
    	echo "<script>
    	alert('data gagal diubah');
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
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data</h1>

	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $importir["id"] ?>">
		<ul>
			<li>
				<label for="name">NAME :</label>
				<input type="text" name="name" id="name"  required value="<?php echo $importir["name"]; ?>" >
			</li>
			<li>
				<label for="addres">ADDRES :</label>
				<input type="text" name="addres" id="addres" required value="<?php echo $importir["addres"]; ?>" >
			</li>
			<li>
				<label for="phone">PHONE :</label>
				<input type="text" name="phone" id="phone"  required value="<?php echo $importir["phone"]; ?>" >
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
			<a href="indeximportir.php"> kembali </a>

		</ul>
	</form>
</body>
</html>
