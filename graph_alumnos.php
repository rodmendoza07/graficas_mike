<?php
	include "conexion_graficas_locas.php";
	$id = $_POST['id_alumno'];
	$nombre = "SELECT lastname, firstname FROM user WHERE user_id = '".$id."'";
	$nombre1 = $ac->query($nombre);
	while ($nombre2  = $nombre1->fetch_array(MYSQLI_ASSOC)) {
		$alumno = $nombre2['lastname']." ".$nombre2['firstname'];
	}
	$query = "SELECT exe_result, exe_exo_id, exe_cours_id FROM track_e_exercices WHERE exe_user_id = '".$id."'";

	$vl = 0; $vb = 0; $an = 0; $l = 0; $m = 0;

	$ejecuta = $ac->query($query);
	while ($resultados = $ejecuta->fetch_array(MYSQLI_ASSOC)) {
		$grado = $c_grupo['exe_cours_id'];
		$prueba = $resultados['exe_exo_id'];
		$calif = $resultados['exe_result'];
		switch ($grado) {
			case 'DEMO02':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '2PRIMARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '3PRIMARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '4PRIMARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '5PRIMARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '6PRIMARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '1SECUNDARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '2SECUNDARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case '3SECUNDARIA':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case 'PREPARATORIA1':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;
			
			case 'PREPARATORIA2':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			case 'PREPARATORIA3':
				switch ($prueba) {
					case '1':
						$vl  = $calif;
						break;

					case '2':
						$vb  = $calif;
						break;
					
					case '3':
						$an  = $calif;
						break;

					case '4':
						$l  = $calif;
						break;

					case '5':
						$m  = $calif;
						break;

					default:
						echo "datos locos";
						break;
				}
				break;

			default:
				echo "datos mas locos";
				break;
		}
	}

	$redireccion = "location: graph_alumnos1.php?";
	$redireccion .= "vb=".$vb."&";
	$redireccion .= "vl=".$vl."&";
	$redireccion .= "an=".$an."&";
	$redireccion .= "l=".$l."&";
	$redireccion .= "m=".$m."&";
	$redireccion .= "name=".$alumno;

	header($redireccion);
?>