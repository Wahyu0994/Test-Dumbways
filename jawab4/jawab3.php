<?php
function cetak($n) {


for($a=1; $a<=$n; $a++){
	for($b=1; $b<=$n; $b++){
		if(($a%2==0) || ($a==$n)){
			echo " + ";
		} else{
			echo "= ";
		}
	}
	echo "<br/>";
}

}
cetak (6);

 ?>
