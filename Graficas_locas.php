<?php
	include "conexion_graficas_locas.php";
	$sumatoria_calificaciones = 0;
	$query_obtiene_cursos = "SELECT exe_result, exe_cours_id FROM track_e_exercices";
	$curso = $ac->query($query_obtiene_cursos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Graficas locas</title>
	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Curso", "Calificación Promedio", { role: "style" } ],
      <?php 
        $i = 0; $ii = 0; $iii = 0; $iv = 0; $v = 0; $vi = 0;
        $j = 0; $jj = 0; $jjj = 0;
        $k = 0; $kk = 0; $kkk = 0;
       	while ($calificaciones_curso = $curso->fetch_array(MYSQLI_ASSOC)) {
      		$calificaciones = $calificaciones_curso['exe_result'];
      		$grupo = $calificaciones_curso['exe_cours_id'];
      		switch ($grupo) {
      			case 'DEMO02':
              $primero[$i] = $calificaciones;
              $i++;      			
      				break;
      			
      			case '2PRIMARIA':
              $segundo[$ii] = $calificaciones;
              $ii++;
      				break;

      			case '3PRIMARIA':
      				$tercero[$iii] = $calificaciones;
              $iii++;
      				break;

      			case '4PRIMARIA':
      				$cuarto[$iv] = $calificaciones;
              $iv++;
      				break;

      			case '5PRIMARIA':
      				$quinto[$v] = $calificaciones;
              $v++;
      				break;

      			case '6PRIMARIA':
      				$sexto[$vi] = $calificaciones;
              $vi++;
      				break;

      			case '1SECUNDARIA':
      				$secundaria1[$j] = $calificaciones;
              $j++;
      				break;

      			case '2SECUNDARIA':
      				$secundaria2[$jj] = $calificaciones;
              $jj++;
      				break;

      			case '3SECUNDARIA':
      				$secundaria3[$jjj] = $calificaciones;
              $jjj++;
      				break;

      			case 'PREPARATORIA1':
      				$prepa1[$k] = $calificaciones;
              $k++;
      				break;

      			case 'PREPARATORIA2':
      				$prepa2[$kk] = $calificaciones;
              $kk++;
      				break;

      			case 'PREPARATORIA3':
      				$prepa3[$kkk] = $calificaciones;
              $kkk++;
      				break;

      			default:
      				echo "No hay datos";
      				break;
      		}
		}
#region primaria
      $promedio_1prim = number_format(array_sum($primero)/count($primero),2,'.','');
      $promedio_2prim = number_format(array_sum($segundo)/count($segundo),2,'.','');
      $promedio_3prim = number_format(array_sum($tercero)/count($tercero),2,'.','');
      $promedio_4prim = number_format(array_sum($cuarto)/count($cuarto),2,'.','');
      $promedio_5prim = number_format(array_sum($quinto)/count($quinto),2,'.','');
      $promedio_6prim = number_format(array_sum($sexto)/count($sexto),2,'.','');

#region secundaria
      $promedio_1sec = number_format(array_sum($secundaria1)/count($secundaria1),2,'.','');
      $promedio_2sec = number_format(array_sum($secundaria2)/count($secundaria2),2,'.','');
      $promedio_3sec = number_format(array_sum($secundaria3)/count($secundaria3),2,'.','');

#region Prepa
      $promedio_1pre = number_format(array_sum($prepa1)/count($prepa1),2,'.','');
      $promedio_2pre = number_format(array_sum($prepa2)/count($prepa2),2,'.','');
      $promedio_3pre = number_format(array_sum($prepa3)/count($prepa3),2,'.',''); 
      ?>
      //Primaria
      ["1ero. de Primaria",<?php echo $promedio_1prim; ?>, ""],
      ["2do. de Primaria",<?php echo $promedio_2prim; ?>, ""],
      ["3ero. de Primaria",<?php echo $promedio_3prim; ?>, ""],
      ["4to. de Primaria",<?php echo $promedio_4prim; ?>, ""],
      ["5to. de Primaria",<?php echo $promedio_5prim; ?>, ""],
      ["6to. de Primaria",<?php echo $promedio_6prim; ?>, ""],
      
      //Secundaria 
      ["1ero. de Secundaria",<?php echo $promedio_1sec; ?>, "gold"],
      ["2do. de Secundaria",<?php echo $promedio_2sec; ?>, "gold"],
      ["3ero. de Secundaria",<?php echo $promedio_3sec; ?>, "gold"],  

      //Preparatoria   
      ["1ero. de Preparatoria",<?php echo $promedio_1pre; ?>, "silver"],
      ["2do. de Preparatoria",<?php echo $promedio_2pre; ?>, "silver"],
      ["3ero. de Preparatoria",<?php echo $promedio_3pre; ?>, "silver"],
      ]);

      //Secundaria

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Calificaciones por Grado",
        width: 1000,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_material"));
      chart.draw(data, options);
  }
  </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="columnchart_material"></div>

    <?php
      /*  echo "<pre>";
        var_dump($primero);
        echo "<br>".$i;*/
    ?>
  </body>
</html>

