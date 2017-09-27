<?php
	$vb = $_GET['vb'];
	$vl = $_GET['vl'];
	$an = $_GET['an'];
	$l = $_GET['l'];
	$m = $_GET['m'];
	$name = $_GET['name'];
	$prom = ($vb + $vl + $an + $l + $m) / 5;
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gráficas por Alumno</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="grafica_escuela.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["Vocabulario básico", <?php echo $vb; ?>],
          ["Vocabulario lógico", <?php echo $vl; ?>],
          ["Analogias", <?php echo $an; ?>],
          ["Lecturas", <?php echo $l; ?>],
          ['Matemáticas', <?php echo $m; ?>]
        ]);

        var options = {
          title: '<?php echo $name; ?>',
          width: 900,
          legend: { position: 'none' },
          chart: { subtitle: 'Pruebas realizadas' },
          axes: {
            x: {
              0: { side: 'top', label: 'Tipo de prueba'} // Top x-axis.
            }
          },
          bar: { groupWidth: "95%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html> 