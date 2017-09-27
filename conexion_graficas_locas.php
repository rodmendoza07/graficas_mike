<?php
	$s = "sql.edusystem.com.mx";
	$u = "ideas6";
	$c = "Artemisa69$";
	$b = "ideas6_chamile";
	$ac = new mysqli($s,$u,$c,$b);
	if (mysqli_connect_errno()) {
    	printf("Conexión fallida: %s\n", mysqli_connect_error());
    	exit();
	}
?>