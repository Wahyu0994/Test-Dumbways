<?php 
require 'functions.php';

$id = $_GET["id"];

if( delete($id) > 0 ) {
	echo "<script>
    	alert('data berhasil dihapus');
    	document.location.href = 'indexproduk.php';
    	</script>
    	";
} else {
	echo "<script>
    	alert('data gagal dihapus');
    	document.location.href = 'indexproduk.php';
    	</script>
    	";
}


 //delete untuk importir

$id = $_GET["name"];

if( hapus($name) > 0 ) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'indeximportir.php';
        </script>
        ";
} else {
    echo "<script>
        alert('data gagal dihapus');
        document.location.href = 'indeximportir.php';
        </script>
        ";
}



 ?>



 

