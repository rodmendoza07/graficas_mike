<?php
  include "conexion_graficas_locas.php";
  $query = "SELECT exe_result, exe_cours_id, exe_exo_id FROM track_e_exercices";
  $vl1 = 0; $vb1 = 0; $ana1 = 0; $lec1 = 0; $mat1 = 0;
  $vl2 = 0; $vb2 = 0; $ana2 = 0; $lec2 = 0; $mat2 = 0;
  $vl3 = 0; $vb3 = 0; $ana3 = 0; $lec3 = 0; $mat3 = 0;
  $vl4 = 0; $vb4 = 0; $ana4 = 0; $lec4 = 0; $mat4 = 0;
  $vl5 = 0; $vb5 = 0; $ana5 = 0; $lec5 = 0; $mat5 = 0;
  $vl6 = 0; $vb6 = 0; $ana6 = 0; $lec6 = 0; $mat6 = 0;
  $vl7 = 0; $vb7 = 0; $ana7 = 0; $lec7 = 0; $mat7 = 0;
  $vl8 = 0; $vb8 = 0; $ana8 = 0; $lec8 = 0; $mat8 = 0;
  $vl9 = 0; $vb9 = 0; $ana9 = 0; $lec9 = 0; $mat9 = 0;
  $vl10 = 0; $vb10 = 0; $ana10 = 0; $lec10 = 0; $mat10 = 0;
  $vl11 = 0; $vb11 = 0; $ana11 = 0; $lec11 = 0; $mat11 = 0;
  $vl12 = 0; $vb12 = 0; $ana12 = 0; $lec12 = 0; $mat12 = 0;
  $ejecuta = $ac->query($query);
  while ($c_grupo = $ejecuta->fetch_array(MYSQLI_ASSOC)) {
    $grado = $c_grupo['exe_cours_id'];
    $prueba = $c_grupo['exe_exo_id'];
    $calif = $c_grupo['exe_result'];
    switch ($grado) {
#region Primaria
      case 'DEMO02':
        switch ($prueba) {
          case '1':
            $vocabulario_logico1[$vl1] = $calif;
            $vl1++;
            break;
          
          case '2':
            $vocabulario_basico1[$vb1] = $calif;
            $vb1++;
            break;

          case '3':
            $analogias1[$ana1] = $calif;
            $ana1++;
            break;

          case '4':
            $lectura1[$lec1] = $calif;
            $lec1++;
            break;

          case '5':
            $matematicas1[$mat1] = $calif;
            $mat1++;
            break;

          default:
            echo "datos locos1";
            break;
        }
        break;
      
      case '2PRIMARIA':
        switch ($prueba) {
          case '1':
            $vocabulario_logico2[$vl2] = $calif;
            $vl2++;
            break;
          
          case '2':
            $vocabulario_basico2[$vb2] = $calif;
            $vb2++;
            break;

          case '3':
            $analogias2[$ana2] = $calif;
            $ana2++;
            break;

          case '4':
            $lectura2[$lec2] = $calif;
            $lec2++;
            break;

          case '5':
            $matematicas2[$mat2] = $calif;
            $mat2++;
            break;

          default:
            echo "datos no validos2";
            break;
        }
        break;

      case '3PRIMARIA':
        switch ($prueba) {
          case '1':
            $vocabulario_basico3[$vb3] = $calif;
            $vb3++;
            break;
          
          case '2':
            $vocabulario_logico3[$vl3] = $calif;
            $vl3++;
            break;

          case '3':
            $analogias3[$ana3] = $calif;
            $ana3++;
            break;

          case '4':
            $lectura3[$lec3] = $calif;
            $lec3++;
            break;

          case '5':
            $matematicas3[$mat3] = $calif;
            $mat3++;
            break;

          default:
            echo "datos no validos3";
            break;
        }
        break;

      case '4PRIMARIA':
        switch ($prueba) {
          case '1':
            $vocabulario_basico4[$vb4] = $calif;
            $vb4++;
            break;
          
          case '2':
            $vocabulario_logico4[$vl4] = $calif;
            $vl4++;
            break;

          case '3':
            $analogias4[$ana4] = $calif;
            $ana4++;
            break;

          case '4':
            $lectura4[$lec4] = $calif;
            $lec4++;
            break;

          case '5':
            $matematicas4[$mat4] = $calif;
            $mat4++;
            break;

          default:
            echo "datos no validos4";
            break;
        }
        break;

      case '5PRIMARIA':
        switch ($prueba) {
          case '1':
            $vocabulario_basico5[$vb5] = $calif;
            $vb5++;
            break;
          
          case '2':
            $vocabulario_logico5[$vl5] = $calif;
            $vl5++;
            break;

          case '3':
            $analogias5[$ana5] = $calif;
            $ana5++;
            break;

          case '4':
            $lectura5[$lec5] = $calif;
            $lec5++;
            break;

          case '5':
            $matematicas5[$mat5] = $calif;
            $mat5++;
            break;

          default:
            echo "datos no validos5";
            break;
        }
        break;

      case '6PRIMARIA':
        switch ($prueba) {
          case '1':
            $vocabulario_basico6[$vb6] = $calif;
            $vb6++;
            break;
          
          case '2':
            $vocabulario_logico6[$vl6] = $calif;
            $vl6++;
            break;

          case '3':
            $analogias6[$ana6] = $calif;
            $ana6++;
            break;

          case '4':
            $lectura6[$lec6] = $calif;
            $lec6++;
            break;

          case '5':
            $matematicas6[$mat6] = $calif;
            $mat6++;
            break;

          default:
            echo "datos no validos6";
            break;
        }
        break;
#endregion Primaria

#region Secundaria
        case '1SECUNDARIA':
            switch ($prueba) {
            case '1':
              $vocabulario_basico7[$vb7] = $calif;
              $vb7++;
              break;
            
            case '2':
              $vocabulario_logico7[$vl7] = $calif;
              $vl7++;
              break;

            case '3':
              $analogias7[$ana7] = $calif;
              $ana7++;
              break;

            case '4':
              $lectura7[$lec7] = $calif;
              $lec7++;
              break;

            case '5':
              $matematicas7[$mat7] = $calif;
              $mat7++;
              break;

            default:
              echo "datos no validos6";
              break;
        }

        case '2SECUNDARIA':
            switch ($prueba) {
            case '1':
              $vocabulario_basico8[$vb8] = $calif;
              $vb8++;
              break;
            
            case '2':
              $vocabulario_logico8[$vl8] = $calif;
              $vl8++;
              break;

            case '3':
              $analogias8[$ana8] = $calif;
              $ana8++;
              break;

            case '4':
              $lectura8[$lec8] = $calif;
              $lec8++;
              break;

            case '5':
              $matematicas8[$mat8] = $calif;
              $mat8++;
              break;

            default:
              echo "datos no validos6";
              break;
        }

        case '3SECUNDARIA':
            switch ($prueba) {
            case '1':
              $vocabulario_basico9[$vb9] = $calif;
              $vb9++;
              break;
            
            case '2':
              $vocabulario_logico9[$vl9] = $calif;
              $vl9++;
              break;

            case '3':
              $analogias9[$ana9] = $calif;
              $ana9++;
              break;

            case '4':
              $lectura9[$lec9] = $calif;
              $lec9++;
              break;

            case '5':
              $matematicas9[$mat9] = $calif;
              $mat9++;
              break;

            default:
              echo "datos no validos6";
              break;
        }
#endregion Secundaria

#region Bachillerato
        case 'PREPARATORIA1':
            switch ($prueba) {
            case '1':
              $vocabulario_basico10[$vb10] = $calif;
              $vb10++;
              break;
            
            case '2':
              $vocabulario_logico10[$vl10] = $calif;
              $vl10++;
              break;

            case '3':
              $analogias10[$ana10] = $calif;
              $ana10++;
              break;

            case '4':
              $lectura10[$lec10] = $calif;
              $lec10++;
              break;

            case '5':
              $matematicas10[$mat10] = $calif;
              $mat10++;
              break;

            default:
              echo "datos no validos6";
              break;
        }

        case 'PREPARATORIA2':
            switch ($prueba) {
            case '1':
              $vocabulario_basico11[$vb11] = $calif;
              $vb11++;
              break;
            
            case '2':
              $vocabulario_logico11[$vl11] = $calif;
              $vl11++;
              break;

            case '3':
              $analogias11[$ana11] = $calif;
              $ana11++;
              break;

            case '4':
              $lectura11[$lec11] = $calif;
              $lec11++;
              break;

            case '5':
              $matematicas11[$mat11] = $calif;
              $mat11++;
              break;

            default:
              echo "datos no validos6";
              break;
        }

        case 'PREPARATORIA3':
            switch ($prueba) {
            case '1':
              $vocabulario_basico12[$vb12] = $calif;
              $vb12++;
              break;
            
            case '2':
              $vocabulario_logico12[$vl12] = $calif;
              $vl12++;
              break;

            case '3':
              $analogias12[$ana12] = $calif;
              $ana12++;
              break;

            case '4':
              $lectura12[$lec12] = $calif;
              $lec12++;
              break;

            case '5':
              $matematicas12[$mat12] = $calif;
              $mat12++;
              break;

            default:
              echo "datos no validos6";
              break;
        }
        break;
#endregion Bachillerato
    }
  }
#region Vocabulario Básico  
  $vocabularioBasico1 = number_format(array_sum($vocabulario_basico1)/count($vocabulario_basico1),2,'.','');
  $vocabularioBasico2 = number_format(array_sum($vocabulario_basico2)/count($vocabulario_basico2),2,'.','');
  $vocabularioBasico3 = number_format(array_sum($vocabulario_basico3)/count($vocabulario_basico3),2,'.','');
  $vocabularioBasico4 = number_format(array_sum($vocabulario_basico4)/count($vocabulario_basico4),2,'.','');
  $vocabularioBasico5 = number_format(array_sum($vocabulario_basico5)/count($vocabulario_basico5),2,'.','');
  $vocabularioBasico6 = number_format(array_sum($vocabulario_basico6)/count($vocabulario_basico6),2,'.','');
  $promVocabularioBasicoPrimaria = number_format(($vocabularioBasico1+$vocabularioBasico2+$vocabularioBasico3+$vocabularioBasico4+$vocabularioBasico5+$vocabularioBasico6)/6,2,'.','');

  $vocabularioBasico7 = number_format(array_sum($vocabulario_basico7)/count($vocabulario_basico7),2,'.','');
  $vocabularioBasico8 = number_format(array_sum($vocabulario_basico8)/count($vocabulario_basico8),2,'.','');
  $vocabularioBasico9 = number_format(array_sum($vocabulario_basico9)/count($vocabulario_basico9),2,'.','');
  $promVocabularioBasicoSecundaria = number_format(($vocabularioBasico7+$vocabularioBasico8+$vocabularioBasico9)/3,2,'.','');

  $vocabularioBasico10 = number_format(array_sum($vocabulario_basico10)/count($vocabulario_basico10),2,'.','');
  $vocabularioBasico11 = number_format(array_sum($vocabulario_basico11)/count($vocabulario_basico11),2,'.','');
  $vocabularioBasico12 = number_format(array_sum($vocabulario_basico12)/count($vocabulario_basico12),2,'.','');
  $promVocabularioBasicoBachillerato = number_format(($vocabularioBasico10+$vocabularioBasico11+$vocabularioBasico12)/3,2,'.','');
#endregion Vocabulario Básico

#region Vocabulario Lógico
  $vocabularioLogico1 = number_format(array_sum($vocabulario_logico1)/count($vocabulario_logico1),2,'.','');
  $vocabularioLogico2 = number_format(array_sum($vocabulario_logico2)/count($vocabulario_logico2),2,'.','');
  $vocabularioLogico3 = number_format(array_sum($vocabulario_logico3)/count($vocabulario_logico3),2,'.','');
  $vocabularioLogico4 = number_format(array_sum($vocabulario_logico4)/count($vocabulario_logico4),2,'.','');
  $vocabularioLogico5 = number_format(array_sum($vocabulario_logico5)/count($vocabulario_logico5),2,'.','');
  $vocabularioLogico6 = number_format(array_sum($vocabulario_logico6)/count($vocabulario_logico6),2,'.','');
  $promVocabularioLogicoPrimaria = number_format(($vocabularioLogico1+$vocabularioLogico2+$vocabularioLogico3+$vocabularioLogico4+$vocabularioLogico5+$vocabularioLogico6)/6,2,'.','');

  $vocabularioLogico7 = number_format(array_sum($vocabulario_logico7)/count($vocabulario_logico7),2,'.','');
  $vocabularioLogico8 = number_format(array_sum($vocabulario_logico8)/count($vocabulario_logico8),2,'.','');
  $vocabularioLogico9 = number_format(array_sum($vocabulario_logico9)/count($vocabulario_logico9),2,'.','');
  $promVocabularioLogicoSecundaria = number_format(($vocabularioLogico7+$vocabularioLogico8+$vocabularioLogico9)/3,2,'.','');

  $vocabularioLogico10 = number_format(array_sum($vocabulario_logico10)/count($vocabulario_logico10),2,'.','');
  $vocabularioLogico11 = number_format(array_sum($vocabulario_logico11)/count($vocabulario_logico11),2,'.','');
  $vocabularioLogico12 = number_format(array_sum($vocabulario_logico12)/count($vocabulario_logico12),2,'.','');
  $promVocabularioLogicoBachillerato = number_format(($vocabularioLogico10+$vocabularioLogico11+$vocabularioLogico12)/3,2,'.','');
#endregion Vocabulario Lógico

#region Analogías
  $analogia1 = number_format(array_sum($analogias1)/count($analogias1),2,'.','');
  $analogia2 = number_format(array_sum($analogias2)/count($analogias2),2,'.','');
  $analogia3 = number_format(array_sum($analogias3)/count($analogias3),2,'.','');
  $analogia4 = number_format(array_sum($analogias4)/count($analogias4),2,'.','');
  $analogia5 = number_format(array_sum($analogias5)/count($analogias5),2,'.','');
  $analogia6 = number_format(array_sum($analogias6)/count($analogias6),2,'.','');
  $promAnalogiaPrimaria = number_format(($analogia1+$analogia2+$analogia3+$analogia4+$analogia5+$analogia6)/6,2,'.','');

  $analogia7 = number_format(array_sum($analogias7)/count($analogias7),2,'.','');
  $analogia8 = number_format(array_sum($analogias8)/count($analogias8),2,'.','');
  $analogia9 = number_format(array_sum($analogias9)/count($analogias9),2,'.','');  
  $promAnalogiaSecundaria = number_format(($analogia7+$analogia8+$analogia9)/3,2,'.','');

  $analogia10 = number_format(array_sum($analogias10)/count($analogias10),2,'.','');
  $analogia11 = number_format(array_sum($analogias11)/count($analogias11),2,'.','');
  $analogia12 = number_format(array_sum($analogias12)/count($analogias12),2,'.','');  
  $promAnalogiaBachillerato = number_format(($analogia10+$analogia11+$analogia12)/3,2,'.','');
#endregion Analogías

#region Lectura
  $lecturas1 = number_format(array_sum($lectura1)/count($lectura1),2,'.','');
  $lecturas2 = number_format(array_sum($lectura2)/count($lectura2),2,'.','');
  $lecturas3 = number_format(array_sum($lectura3)/count($lectura3),2,'.','');
  $lecturas4 = number_format(array_sum($lectura4)/count($lectura4),2,'.','');
  $lecturas5 = number_format(array_sum($lectura5)/count($lectura5),2,'.','');
  $lecturas6 = number_format(array_sum($lectura6)/count($lectura6),2,'.','');
  $promLecturaPrimaria = number_format(($lecturas1+$lecturas2+$lecturas3+$lecturas4+$lecturas5+$lecturas6)/6,2,'.','');

  $lecturas7 = number_format(array_sum($lectura7)/count($lectura7),2,'.','');
  $lecturas8 = number_format(array_sum($lectura8)/count($lectura8),2,'.','');
  $lecturas9 = number_format(array_sum($lectura9)/count($lectura9),2,'.','');
  $promLecturaSecundaria = number_format(($lecturas7+$lecturas8+$lecturas9)/3,2,'.','');

  $lecturas10 = number_format(array_sum($lectura10)/count($lectura10),2,'.','');
  $lecturas11 = number_format(array_sum($lectura11)/count($lectura11),2,'.','');
  $lecturas12 = number_format(array_sum($lectura12)/count($lectura12),2,'.','');
  $promLecturaBachillerato = number_format(($lecturas10+$lecturas11+$lecturas12)/3,2,'.','');
#endregion Lectura

#region Matemáticas
  $mate1 = number_format(array_sum($matematicas1)/count($matematicas1),2,'.','');
  $mate2 = number_format(array_sum($matematicas2)/count($matematicas2),2,'.','');
  $mate3 = number_format(array_sum($matematicas3)/count($matematicas3),2,'.','');
  $mate4 = number_format(array_sum($matematicas4)/count($matematicas4),2,'.','');
  $mate5 = number_format(array_sum($matematicas5)/count($matematicas5),2,'.','');
  $mate6 = number_format(array_sum($matematicas6)/count($matematicas6),2,'.','');
  $promMatematicasPrimaria = number_format(($mate1+$mate2+$mate3+$mate4+$mate5+$mate6)/6,2,'.','');

  $mate7 = number_format(array_sum($matematicas7)/count($matematicas7),2,'.','');
  $mate8 = number_format(array_sum($matematicas8)/count($matematicas8),2,'.','');
  $mate9 = number_format(array_sum($matematicas9)/count($matematicas9),2,'.','');
  $promMatematicasSecundaria = number_format(($mate7+$mate8+$mate9)/3,2,'.','');

  $mate10 = number_format(array_sum($matematicas10)/count($matematicas10),2,'.','');
  $mate11 = number_format(array_sum($matematicas11)/count($matematicas11),2,'.','');
  $mate12 = number_format(array_sum($matematicas12)/count($matematicas12),2,'.','');
  $promMatematicasBachillerato = number_format(($mate10+$mate11+$mate12)/3,2,'.','');
#endregion Matemáticas
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Graficas locas 2</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawVisualization1);
      google.setOnLoadCallback(drawVisualization2);
      google.setOnLoadCallback(drawVisualization3);

///Primaria
      function drawVisualization1() {
        var data = google.visualization.arrayToDataTable([
         ['Prueba', '1ero.', '2do.', '3ero.', '4to.', '5to.', '6to.', 'Promedio'],
         ['Vocabulario básico',<?php echo $vocabularioBasico1; ?>,<?php echo $vocabularioBasico2; ?>,<?php echo $vocabularioBasico3; ?>,<?php echo $vocabularioBasico4; ?>,<?php echo $vocabularioBasico5; ?>,<?php echo $vocabularioBasico6; ?>,<?php echo $promVocabularioBasicoPrimaria; ?>],
         ['Vocabulario lógico',<?php echo $vocabularioLogico1; ?>,<?php echo $vocabularioLogico2; ?>,<?php echo $vocabularioLogico3; ?>,<?php echo $vocabularioLogico4; ?>,<?php echo $vocabularioLogico5; ?>,<?php echo $vocabularioLogico6; ?>,<?php echo $promVocabularioLogicoPrimaria; ?>],
         ['Analogías',<?php echo $analogia1; ?>,<?php echo $analogia2; ?>,<?php echo $analogia3; ?>,<?php echo $analogia4; ?>,<?php echo $analogia5; ?>,<?php echo $analogia6; ?>,<?php echo $promAnalogiaPrimaria; ?>],
         ['Lectura',<?php echo $lecturas1; ?>,<?php echo $lecturas2; ?>,<?php echo $lecturas3; ?>,<?php echo $lecturas4; ?>,<?php echo $lecturas5; ?>,<?php echo $lecturas6; ?>,<?php echo $promLecturaPrimaria; ?>],
         ['Matemáticas',<?php echo $mate1; ?>,<?php echo $mate2; ?>,<?php echo $mate3; ?>,<?php echo $mate4; ?>,<?php echo $mate5; ?>,<?php echo $mate6; ?>,<?php echo $promMatematicasPrimaria; ?>]
      ]);

    var options = {
      title : 'Grado escolar VS Prueba',
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


   function drawVisualization2() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Prueba', '1ero.', '2do.', '3ero.', 'Promedio'],
         ['Vocabulario básico',<?php echo $vocabularioBasico7; ?>,<?php echo $vocabularioBasico8; ?>,<?php echo $vocabularioBasico9; ?>,<?php echo $promVocabularioBasicoSecundaria; ?>],
         ['Vocabulario lógico',<?php echo $vocabularioLogico7; ?>,<?php echo $vocabularioLogico8; ?>,<?php echo $vocabularioLogico9; ?>,<?php echo $promVocabularioLogicoSecundaria; ?>],
         ['Analogías',<?php echo $analogia7; ?>,<?php echo $analogia8; ?>,<?php echo $analogia9; ?>,<?php echo $promAnalogiaSecundaria; ?>],
         ['Lectura',<?php echo $lecturas7; ?>,<?php echo $lecturas8; ?>,<?php echo $lecturas9; ?>,<?php echo $promLecturaSecundaria; ?>],
         ['Matemáticas',<?php echo $mate7; ?>,<?php echo $mate8; ?>,<?php echo $mate9; ?>,<?php echo $promMatematicasSecundaria; ?>]
      ]);

    var options = {
      title : 'Grado escolar VS Prueba',
      titleTextStyle:{fontSize:'25'},
      vAxis: {title: 'Calificaciones',
        titleTextStyle: {fontSize: '25'}
      },
      hAxis: {title: 'Secundaria', 
        titleTextStyle: {fontSize: '25'},
      },
      seriesType: 'bars',
      series: {3: {type: 'line'},
      },
      
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
  }
    function drawVisualization3() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Prueba', '1ero.', '2do.', '3ero.', 'Promedio'],
         ['Vocabulario básico',<?php echo $vocabularioBasico10; ?>,<?php echo $vocabularioBasico11; ?>,<?php echo $vocabularioBasico12; ?>,<?php echo $promVocabularioBasicoBachillerato; ?>],
         ['Vocabulario lógico',<?php echo $vocabularioLogico10; ?>,<?php echo $vocabularioLogico11; ?>,<?php echo $vocabularioLogico12; ?>,<?php echo $promVocabularioLogicoBachillerato; ?>],
         ['Analogías',<?php echo $analogia10; ?>,<?php echo $analogia11; ?>,<?php echo $analogia12; ?>,<?php echo $promAnalogiaBachillerato; ?>],
         ['Lectura',<?php echo $lecturas10; ?>,<?php echo $lecturas11; ?>,<?php echo $lecturas12; ?>,<?php echo $promLecturaBachillerato; ?>],
         ['Matemáticas',<?php echo $mate10; ?>,<?php echo $mate11; ?>,<?php echo $mate12; ?>,<?php echo $promMatematicasBachillerato; ?>]
      ]);

    var options = {
      title : 'Grado escolar VS Prueba',
      titleTextStyle:{fontSize:'25'},
      vAxis: {title: 'Calificaciones',
        titleTextStyle: {fontSize: '25'}
      },
      hAxis: {title: 'Bachillerato', 
        titleTextStyle: {fontSize: '25'},
      },
      seriesType: 'bars',
      series: {3: {type: 'line'},
      },
      
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div3'));
    chart.draw(data, options);
  }
    </script>
  </head>
  <body>
    <div id="chart_div1" style="width: 850px; height: 300px;"></div>
    <div id="chart_div2" style="width: 850px; height: 300px;"></div>
    <div id="chart_div3" style="width: 850px; height: 300px;"></div>
  </body>
</html>