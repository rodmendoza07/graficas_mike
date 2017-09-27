<?php
	ini_set('max_execution_time', 300);
	include "conexion_graficas_locas.php";
	$id_escuela = $_POST['id_escuela'];
	$querynombre ="SELECT nombre FROM graph_escuela WHERE id = '".$id_escuela."'";
	$nombreEscuela = $ac->query($querynombre);
	while ($eskul = $nombreEscuela->fetch_array(MYSQLI_ASSOC)) {
		$skul = $eskul['nombre'];
	}
	$query = "SELECT codigo FROM graph_grupo WHERE id_escuela = '".$id_escuela."'";
	$ids = $ac->query($query);
	$i = 0;
	while ($grupos = $ids->fetch_array(MYSQLI_ASSOC)) {
		$codigo[$i] = $grupos['codigo'];
		$i++;
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gráficas por Alumno</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="grafica_escuela.js"></script>
</head>
<body>
	<form action="graph_alumnos.php" method="POST">
		<label><?php echo $skul; ?></label>
		<select name="id_alumno" id="selescuela">
			<?php
				$j = 0;
				foreach ($codigo as $usuarios) {
					$query = "SELECT user_id, lastname, firstname FROM user WHERE official_code = '".$usuarios."' ORDER BY lastname ASC";
					$usuario = $ac->query($query);
					while ($user = $usuario->fetch_array(MYSQLI_ASSOC)) {
						$u = $user['user_id'];
						$us[$j] = $u;
						$j++;
						echo "<option value=".$user['user_id'].">".utf8_encode($user['lastname']." ".$user['firstname'])."</option>";			
					}
				}

			?>
		</select>
		<input type="submit" value="Gráfica" id="boton">
	</form>
</body>
</html>
	