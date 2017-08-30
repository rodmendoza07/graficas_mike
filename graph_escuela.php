<?php
	$skul = $_GET['schoolname'];
	$vB1 = $_GET['vB1'];
	$vB2 = $_GET['vB2'];
	$vB3 = $_GET['vB3'];
	$vB4 = $_GET['vB4'];
	$vB5 = $_GET['vB5'];
	$vB6 = $_GET['vB6'];
	$vB7 = $_GET['vB7'];
	$vB8 = $_GET['vB8'];
	$vB9 = $_GET['vB9'];
	$vB10 = $_GET['vB10'];
	$vB11 = $_GET['vB11'];
	$vB12 = $_GET['vB12'];
	$vPp = $_GET['vPp'];
	$vPs = $_GET['vPs'];
	$vPb = $_GET['vPb'];

	$vL1 = $_GET['vL1'];
	$vL2 = $_GET['vL2'];
	$vL3 = $_GET['vL3'];
	$vL4 = $_GET['vL4'];
	$vL5 = $_GET['vL5'];
	$vL6 = $_GET['vL6'];
	$vL7 = $_GET['vL7'];
	$vL8 = $_GET['vL8'];
	$vL9 = $_GET['vL9'];
	$vL10 = $_GET['vL10'];
	$vL11 = $_GET['vL11'];
	$vL12 = $_GET['vL12'];
	$vLp = $_GET['vLp'];
	$vLs = $_GET['vLs'];
	$vLb = $_GET['vLb'];

	$an1 = $_GET['an1'];
	$an2 = $_GET['an2'];
	$an3 = $_GET['an3'];
	$an4 = $_GET['an4'];
	$an5 = $_GET['an5'];
	$an6 = $_GET['an6'];
	$an7 = $_GET['an7'];
	$an8 = $_GET['an8'];
	$an9 = $_GET['an9'];
	$an10 = $_GET['an10'];
	$an11 = $_GET['an11'];
	$an12 = $_GET['an12'];
	$anp = $_GET['anp'];
	$ans = $_GET['ans'];
	$anb = $_GET['anb'];

	$l1 = $_GET['l1'];
	$l2 = $_GET['l2'];
	$l3 = $_GET['l3'];
	$l4 = $_GET['l4'];
	$l5 = $_GET['l5'];
	$l6 = $_GET['l6'];
	$l7 = $_GET['l7'];
	$l8 = $_GET['l8'];
	$l9 = $_GET['l9'];
	$l10 = $_GET['l10'];
	$l11 = $_GET['l11'];
	$l12 = $_GET['l12'];
	$lp = $_GET['lp'];
	$ls = $_GET['ls'];
	$lb = $_GET['lb'];

	$m1 = $_GET['m1'];
	$m2 = $_GET['m2'];
	$m3 = $_GET['m3'];
	$m4 = $_GET['m4'];
	$m5 = $_GET['m5'];
	$m6 = $_GET['m6'];
	$m7 = $_GET['m7'];
	$m8 = $_GET['m8'];
	$m9 = $_GET['m9'];
	$m10 = $_GET['m10'];
	$m11 = $_GET['m11'];
	$m12 = $_GET['m12'];
	$mp = $_GET['mp'];
	$ms = $_GET['ms'];
	$mb = $_GET['mb'];

	include "conexion_graficas_locas.php";
	$query = "SELECT * FROM graph_escuela";
	$ejecuta_escuela = $ac->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Graficas por escuela</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="grafica_escuela.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawVisualization1);
      google.setOnLoadCallback(drawVisualization2);
      google.setOnLoadCallback(drawVisualization3);

      function drawVisualization1() {
        var data = google.visualization.arrayToDataTable([
         ['Prueba', '1ero.', '2do.', '3ero.', '4to.', '5to.', '6to.', 'Promedio'],
         ['Vocabulario básico',<?php echo $vB1; ?>,<?php echo $vB2; ?>,<?php echo $vB3; ?>,<?php echo $vB4; ?>,<?php echo $vB5; ?>,<?php echo $vB6; ?>,<?php echo $vPp; ?>],
         ['Vocabulario lógico',<?php echo $vL1; ?>,<?php echo $vL2; ?>,<?php echo $vL3; ?>,<?php echo $vL4; ?>,<?php echo $vL5; ?>,<?php echo $vL6; ?>,<?php echo $vLp; ?>],
         ['Analogias',<?php echo $an1; ?>,<?php echo $an2; ?>,<?php echo $an3; ?>,<?php echo $an4; ?>,<?php echo $an5; ?>,<?php echo $an6; ?>,<?php echo $anp; ?>],
         ['Lectura',<?php echo $l1; ?>,<?php echo $l2; ?>,<?php echo $l3; ?>,<?php echo $l4; ?>,<?php echo $l5; ?>,<?php echo $l6; ?>,<?php echo $lp; ?>],
         ['Matemáticas',<?php echo $m1; ?>,<?php echo $m2; ?>,<?php echo $m3; ?>,<?php echo $m4; ?>,<?php echo $m5; ?>,<?php echo $m6; ?>,<?php echo $mp; ?>]
      ]);

        var options = {
      title : '<?php echo $skul; ?>: Grado escolar VS Prueba',
      titleTextStyle:{fontSize:'25'},
      vAxis: {title: 'Calificaciones',
        titleTextStyle: {fontSize: '25'}
      },
      hAxis: {title: 'Primaria', 
        titleTextStyle: {fontSize: '25'},
      },
      seriesType: 'bars',
      series: {6: {type: 'line'},
      },
      
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
    chart.draw(data, options);
  }
 </script>

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
	<div id="chart_div1" style="width: 850px; height: 300px;"></div>
</body>
</html>