<?php
	include "conexion_graficas_locas.php";
	$query = "SELECT * FROM graph_escuela";
	$ejecuta_escuela = $ac->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gráficas por escuela</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="grafica_escuela.js"></script>
</head>
<body>
	<form action = "grafica_escuela1.php" method="POST">
	<label>Selecciona la escuela</label>
	<select name="id_escuela" id="selescuela">
		<option value='nada'> --- </option>
		<?php
			while ($escuela = $ejecuta_escuela->fetch_array(MYSQLI_ASSOC)) {
				$id_escuela = $escuela['id'];
				$nombre_escuela = $escuela['nombre'];
				echo "<option value='".$id_escuela."'>".$nombre_escuela."</option>";	
			}
		?>
	</select>
	<input type="submit" value="Gráfica" id="boton">
	</form>
</body>
</html>