<?php

	include "conexion.php";

	$sql = "SELECT ";
	$sql .= "ROUND(AVG(resultadoVOCABULARIO), 2) AS Vocabulario";
    $sql .= ", ROUND(AVG(resultadoANALOGIAS), 2) AS ANALOGIAS";
    $sql .= ", ROUND(AVG(resultadoLECTURA), 2) AS LECTURA";
    $sql .= ", ROUND(AVG(resultadoMATEMATICAS), 2) AS MATEMATICAS";
    $sql .= ", ROUND(AVG(resultadoLOGICO), 2) AS LOGICO";
	$sql .= " FROM prepauno";

	$consulta = $conecta->query($sql);

	while ($row = $consulta->fetch_array(MYSQLI_ASSOC)) {
		$cadena = "Vocabulario|".$row["Vocabulario"].",Analogias|".$row["ANALOGIAS"].",Lectura|".$row["LECTURA"].",Matematicas|".$row["MATEMATICAS"].",Logico|".$row["LOGICO"];
	}
	
	$conecta->close();
	
	echo $cadena;
?>