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
		$j = 0;
	foreach ($codigo as $usuarios) {
		$query = "SELECT user_id FROM user WHERE official_code = '".$usuarios."'";
		$usuario = $ac->query($query);
		while ($user = $usuario->fetch_array(MYSQLI_ASSOC)) {
			$u = $user['user_id'];
			$us[$j] = $u;
			$j++;
		}
		
	}

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

	foreach ($us as $usuario) {
		$query = "SELECT exe_result, exe_cours_id, exe_exo_id FROM track_e_exercices WHERE exe_user_id = '".$usuario."'";
		$ejecuta = $ac->query($query);
		while ($c_grupo = $ejecuta->fetch_array(MYSQLI_ASSOC)) {
			$grado = $c_grupo['exe_cours_id'];
			$prueba = $c_grupo['exe_exo_id'];
			$calif = $c_grupo['exe_result'];
			switch ($grado) {
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

		    }
		}
	}
#region Vocabulario Básico	
	if (isset($vocabulario_basico1)) {
		$vocabularioBasico1 = number_format(array_sum($vocabulario_basico1)/count($vocabulario_basico1),2,'.','');
	}
	else{
		$vocabularioBasico1 = 0;
	}
	if (isset($vocabulario_basico2)) {
		$vocabularioBasico2 = number_format(array_sum($vocabulario_basico2)/count($vocabulario_basico2),2,'.','');
	}
	else{
		$vocabularioBasico2 = 0;
	}
	if (isset($vocabulario_basico3)) {
		$vocabularioBasico3 = number_format(array_sum($vocabulario_basico3)/count($vocabulario_basico3),2,'.','');
	}
	else{
		$vocabularioBasico3 = 0;
	}
	if (isset($vocabulario_basico4)) {
		$vocabularioBasico4 = number_format(array_sum($vocabulario_basico4)/count($vocabulario_basico4),2,'.','');
	}
	else{
		$vocabularioBasico4 = 0;
	}
	if (isset($vocabulario_basico5)) {
		$vocabularioBasico5 = number_format(array_sum($vocabulario_basico5)/count($vocabulario_basico5),2,'.','');
	}
	else{
		$vocabularioBasico5 = 0;
	}
	if (isset($vocabulario_basico6)) {
		$vocabularioBasico6 = number_format(array_sum($vocabulario_basico6)/count($vocabulario_basico6),2,'.','');
	}
	else{
		$vocabularioBasico6 = 0;
	}
	$promVocabularioBasicoPrimaria = number_format(($vocabularioBasico1+$vocabularioBasico2+$vocabularioBasico3+$vocabularioBasico4+$vocabularioBasico5+$vocabularioBasico6)/6,2,'.','');

	if (isset($vocabulario_basico7)) {
		$vocabularioBasico7 = number_format(array_sum($vocabulario_basico7)/count($vocabulario_basico7),2,'.','');
	}
	else{
		$vocabularioBasico7 = 0;
	}
	if (isset($vocabulario_basico8)) {
		$vocabularioBasico8 = number_format(array_sum($vocabulario_basico8)/count($vocabulario_basico8),2,'.','');
	}
	else{
		$vocabularioBasico8 = 0;
	}
	if (isset($vocabulario_basico9)) {
		$vocabularioBasico9 = number_format(array_sum($vocabulario_basico9)/count($vocabulario_basico9),2,'.','');
	}
	else{
		$vocabularioBasico9 = 0;
	}
	$promVocabularioBasicoSecundaria = number_format(($vocabularioBasico7+$vocabularioBasico8+$vocabularioBasico9)/3,2,'.','');

	if (isset($vocabulario_basico10)) {
		$vocabularioBasico10 = number_format(array_sum($vocabulario_basico10)/count($vocabulario_basico10),2,'.','');
	}
	else{
		$vocabularioBasico10 = 0;
	}
	if (isset($vocabulario_basico11)) {
		$vocabularioBasico11 = number_format(array_sum($vocabulario_basico11)/count($vocabulario_basico11),2,'.','');
	}
	else{
		$vocabularioBasico11 = 0;
	}
	if (isset($vocabulario_basico12)) {
		$vocabularioBasico12 = number_format(array_sum($vocabulario_basico12)/count($vocabulario_basico12),2,'.','');
	}
	else{
		$vocabularioBasico12 = 0;
	}
	$promVocabularioBasicoBachillerato = number_format(($vocabularioBasico10+$vocabularioBasico11+$vocabularioBasico12)/3,2,'.','');
#endregion Vocabuloario Básico

#region Vocabulario Lógico
	if (isset($vocabulario_logico1)) {
		$vocabularioLogico1 = number_format(array_sum($vocabulario_logico1)/count($vocabulario_logico1),2,'.','');
	}
	else{
		$vocabularioLogico1 = 0;
	}
	if (isset($vocabulario_logico2)) {
		$vocabularioLogico2 = number_format(array_sum($vocabulario_logico2)/count($vocabulario_logico2),2,'.','');
	}
	else{
		$vocabularioLogico2 = 0;
	}
	if (isset($vocabulario_logico3)) {
		$vocabularioLogico3 = number_format(array_sum($vocabulario_logico3)/count($vocabulario_logico3),2,'.','');
	}
	else{
		$vocabularioLogico3 = 0;
	}
	if (isset($vocabulario_logico4)) {
		$vocabularioLogico4 = number_format(array_sum($vocabulario_logico4)/count($vocabulario_logico4),2,'.','');
	}
	else{
		$vocabularioLogico4 = 0;
	}
	if (isset($vocabulario_logico5)) {
		$vocabularioLogico5 = number_format(array_sum($vocabulario_logico5)/count($vocabulario_logico5),2,'.','');
	}
	else{
		$vocabularioLogico5 = 0;
	}
	if (isset($vocabulario_logico6)) {
		$vocabularioLogico6 = number_format(array_sum($vocabulario_logico6)/count($vocabulario_logico6),2,'.','');
	}
	else{
		$vocabularioLogico6 = 0;
	}
	$promVocabularioLogicoPrimaria = number_format(($vocabularioLogico1+$vocabularioLogico2+$vocabularioLogico3+$vocabularioLogico4+$vocabularioLogico5+$vocabularioLogico6)/6,2,'.','');

	if (isset($vocabulario_logico7)) {
		$vocabularioLogico7 = number_format(array_sum($vocabulario_logico7)/count($vocabulario_logico7),2,'.','');
	}
	else{
		$vocabularioLogico7 = 0;
	}
	if (isset($vocabulario_logico8)) {
		$vocabularioLogico8 = number_format(array_sum($vocabulario_logico8)/count($vocabulario_logico8),2,'.','');
	}
	else{
		$vocabularioLogico8 = 0;
	}
	if (isset($vocabulario_logico9)) {
		$vocabularioLogico9 = number_format(array_sum($vocabulario_logico9)/count($vocabulario_logico9),2,'.','');
	}
	else{
		$vocabularioLogico9 = 0;
	}
	$promVocabularioLogicoSecundaria = number_format(($vocabularioLogico7+$vocabularioLogico8+$vocabularioLogico9)/3,2,'.','');

	if (isset($vocabulario_logico10)) {
		$vocabularioLogico10 = number_format(array_sum($vocabulario_logico10)/count($vocabulario_logico10),2,'.','');
	}
	else{
		$vocabularioLogico10 = 0;
	}
	if (isset($vocabulario_logico11)) {
		$vocabularioLogico11 = number_format(array_sum($vocabulario_logico11)/count($vocabulario_logico11),2,'.','');
	}
	else{
		$vocabularioLogico11 = 0;
	}
	if (isset($vocabulario_logico12)) {
		$vocabularioLogico12 = number_format(array_sum($vocabulario_logico12)/count($vocabulario_logico12),2,'.','');
	}
	else{
		$vocabularioLogico12 = 0;
	}
	$promVocabularioLogicoBachillerato = number_format(($vocabularioLogico10+$vocabularioLogico11+$vocabularioLogico12)/3,2,'.','');
#endregion Vocabulario Lógico

#region Analogías
	if (isset($analogias1)) {
		$analogia1 = number_format(array_sum($analogias1)/count($analogias1),2,'.','');
	}
	else{
		$analogia1 = 0;
	}
	if (isset($analogias2)) {
		$analogia2 = number_format(array_sum($analogias2)/count($analogias2),2,'.','');
	}
	else{
		$analogia2 = 0;
	}
	if (isset($analogias3)) {
		$analogia3 = number_format(array_sum($analogias3)/count($analogias3),2,'.','');
	}
	else{
		$analogia3 = 0;
	}
	if (isset($analogias4)) {
		$analogia4 = number_format(array_sum($analogias4)/count($analogias4),2,'.','');
	}
	else{
		$analogia4 = 0;
	}
	if (isset($analogias5)) {
		$analogia5 = number_format(array_sum($analogias5)/count($analogias5),2,'.','');
	}
	else{
		$analogia5 = 0;
	}
	if (isset($analogias6)) {
		$analogia6 = number_format(array_sum($analogias6)/count($analogias6),2,'.','');
	}
	else{
		$analogia6 = 0;
	}
	$promAnalogiaPrimaria = number_format(($analogia1+$analogia2+$analogia3+$analogia4+$analogia5+$analogia6)/6,2,'.','');

	if (isset($analogias7)) {
		$analogia7 = number_format(array_sum($analogias7)/count($analogias7),2,'.','');
	}
	else{
		$analogia7 = 0;
	}
	if (isset($analogias8)) {
		$analogia8 = number_format(array_sum($analogias8)/count($analogias8),2,'.','');
	}
	else{
		$analogia8 = 0;
	}
	if (isset($analogias9)) {
		$analogia9 = number_format(array_sum($analogias9)/count($analogias9),2,'.','');
	}
	else{
		$analogia9 = 0;
	}
	$promAnalogiaSecundaria = number_format(($analogia7+$analogia8+$analogia9)/3,2,'.','');

	if (isset($analogias10)) {
		$analogia10 = number_format(array_sum($analogias10)/count($analogias10),2,'.','');
	}
	else{
		$analogia10 = 0;
	}
	if (isset($analogias11)) {
		$analogia11 = number_format(array_sum($analogias11)/count($analogias11),2,'.','');
	}
	else{
		$analogia11 = 0;
	}
	if (isset($analogias12)) {
		$analogia12 = number_format(array_sum($analogias12)/count($analogias12),2,'.','');
	}
	else{
		$analogia12 = 0;
	}
	$promAnalogiaBachillerato = number_format(($analogia10+$analogia11+$analogia12)/3,2,'.','');
#endregion Analogías

#region Lectura
	if (isset($lectura1)) {
		$lecturas1 = number_format(array_sum($lectura1)/count($lectura1),2,'.','');
	}
	else{
		$lecturas1 = 0;
	}
	if (isset($lectura2)) {
		$lecturas2 = number_format(array_sum($lectura2)/count($lectura2),2,'.','');
	}
	else{
		$lecturas2 = 0;
	}
	if (isset($lectura3)) {
		$lecturas3 = number_format(array_sum($lectura3)/count($lectura3),2,'.','');
	}
	else{
		$lecturas3 = 0;
	}
	if (isset($lectura4)) {
		$lecturas4 = number_format(array_sum($lectura4)/count($lectura4),2,'.','');
	}
	else{
		$lecturas4 = 0;
	}
	if (isset($lectura5)) {
		$lecturas5 = number_format(array_sum($lectura5)/count($lectura5),2,'.','');
	}
	else{
		$lecturas5 = 0;
	}
	if (isset($lectura6)) {
		$lecturas6 = number_format(array_sum($lectura6)/count($lectura6),2,'.','');
	}
	else{
		$lecturas6 = 0;
	}
	$promLecturaPrimaria = number_format(($lecturas1+$lecturas2+$lecturas3+$lecturas4+$lecturas5+$lecturas6)/6,2,'.','');

	if (isset($lectura7)) {
		$lecturas7 = number_format(array_sum($lectura7)/count($lectura7),2,'.','');
	}
	else{
		$lecturas7 = 0;
	}
	if (isset($lectura8)) {
		$lecturas8 = number_format(array_sum($lectura8)/count($lectura8),2,'.','');
	}
	else{
		$lecturas8 = 0;
	}
	if (isset($lectura9)) {
		$lecturas9 = number_format(array_sum($lectura9)/count($lectura9),2,'.','');
	}
	else{
		$lecturas9 = 0;
	}
	$promLecturaSecundaria = number_format(($lecturas7+$lecturas8+$lecturas9)/3,2,'.','');

	if (isset($lectura10)) {
		$lecturas10 = number_format(array_sum($lectura10)/count($lectura10),2,'.','');
	}
	else{
		$lecturas10 = 0;
	}
	if (isset($lectura11)) {
		$lecturas11 = number_format(array_sum($lectura11)/count($lectura11),2,'.','');
	}
	else{
		$lecturas11 = 0;
	}
	if (isset($lectura12)) {
		$lecturas12 = number_format(array_sum($lectura12)/count($lectura12),2,'.','');
	}
	else{
		$lecturas12 = 0;
	}
	$promLecturaBachillerato = number_format(($lecturas10+$lecturas11+$lecturas12)/3,2,'.','');
#endregion Lectura

#region Matemáticas
	if (isset($matematicas1)) {
		$mate1 = number_format(array_sum($matematicas1)/count($matematicas1),2,'.','');
	}
	else{
		$mate1 = 0;
	}
	if (isset($matematicas2)) {
		$mate2 = number_format(array_sum($matematicas2)/count($matematicas2),2,'.','');
	}
	else{
		$mate2 = 0;
	}
	if (isset($matematicas3)) {
		$mate3 = number_format(array_sum($matematicas3)/count($matematicas3),2,'.','');
	}
	else{
		$mate3 = 0;
	}
	if (isset($matematicas4)) {
		$mate4 = number_format(array_sum($matematicas4)/count($matematicas4),2,'.','');
	}
	else{
		$mate4 = 0;
	}
	if (isset($matematicas5)) {
		$mate5 = number_format(array_sum($matematicas5)/count($matematicas5),2,'.','');
	}
	else{
		$mate5 = 0;
	}
	if (isset($matematicas6)) {
		$mate6 = number_format(array_sum($matematicas6)/count($matematicas6),2,'.','');
	}
	else{
		$mate6 = 0;
	}
	$promMatematicasPrimaria = number_format(($mate1+$mate2+$mate3+$mate4+$mate5+$mate6)/6,2,'.','');

	if (isset($matematicas7)) {
		$mate7 = number_format(array_sum($matematicas7)/count($matematicas7),2,'.','');
	}
	else{
		$mate7 = 0;
	}
	if (isset($matematicas8)) {
		$mate8 = number_format(array_sum($matematicas8)/count($matematicas8),2,'.','');
	}
	else{
		$mate8 = 0;
	}
	if (isset($matematicas9)) {
		$mate9 = number_format(array_sum($matematicas9)/count($matematicas9),2,'.','');
	}
	else{
		$mate9 = 0;
	}
	$promMatematicasSecundaria = number_format(($mate7+$mate8+$mate9)/3,2,'.','');

	if (isset($matematicas10)) {
		$mate10 = number_format(array_sum($matematicas10)/count($matematicas10),2,'.','');
	}
	else{
		$mate10 = 0;
	}
	if (isset($matematicas11)) {
		$mate11 = number_format(array_sum($matematicas11)/count($matematicas11),2,'.','');
	}
	else{
		$mate11 = 0;
	}
	if (isset($matematicas12)) {
		$mate12 = number_format(array_sum($matematicas12)/count($matematicas12),2,'.','');
	}
	else{
		$mate12 = 0;
	}
	$promMatematicasBachillerato = number_format(($mate10+$mate11+$mate12)/3,2,'.','');
#endregion Mátematicas
	$redireccion = "location: graph_escuela.php?";
	$redireccion .= "vB1=".$vocabularioBasico1."&";
	$redireccion .= "vB2=".$vocabularioBasico2."&";
	$redireccion .= "vB3=".$vocabularioBasico3."&";
	$redireccion .= "vB4=".$vocabularioBasico4."&";
	$redireccion .= "vB5=".$vocabularioBasico5."&";
	$redireccion .= "vB6=".$vocabularioBasico6."&";
	$redireccion .= "vB7=".$vocabularioBasico7."&";
	$redireccion .= "vB8=".$vocabularioBasico8."&";
	$redireccion .= "vB9=".$vocabularioBasico9."&";
	$redireccion .= "vB10=".$vocabularioBasico10."&";
	$redireccion .= "vB11=".$vocabularioBasico11."&";
	$redireccion .= "vB12=".$vocabularioBasico12."&";
	$redireccion .= "vPp=".$promVocabularioBasicoPrimaria."&";
	$redireccion .= "vPs=".$promVocabularioBasicoSecundaria."&";
	$redireccion .= "vPb=".$promVocabularioBasicoBachillerato."&";
	$redireccion .= "vL1=".$vocabularioLogico1."&";
	$redireccion .= "vL2=".$vocabularioLogico2."&";
	$redireccion .= "vL3=".$vocabularioLogico3."&";
	$redireccion .= "vL4=".$vocabularioLogico4."&";
	$redireccion .= "vL5=".$vocabularioLogico5."&";
	$redireccion .= "vL6=".$vocabularioLogico6."&";
	$redireccion .= "vL7=".$vocabularioLogico7."&";
	$redireccion .= "vL8=".$vocabularioLogico8."&";
	$redireccion .= "vL9=".$vocabularioLogico9."&";
	$redireccion .= "vL10=".$vocabularioLogico10."&";
	$redireccion .= "vL11=".$vocabularioLogico11."&";
	$redireccion .= "vL12=".$vocabularioLogico12."&";
	$redireccion .= "vLp=".$promVocabularioLogicoPrimaria."&";
	$redireccion .= "vLs=".$promVocabularioLogicoSecundaria."&";
	$redireccion .= "vLb=".$promVocabularioLogicoBachillerato."&";
	$redireccion .= "an1=".$analogia1."&";
	$redireccion .= "an2=".$analogia2."&";
	$redireccion .= "an3=".$analogia3."&";
	$redireccion .= "an4=".$analogia4."&";
	$redireccion .= "an5=".$analogia5."&";
	$redireccion .= "an6=".$analogia6."&";
	$redireccion .= "an7=".$analogia7."&";
	$redireccion .= "an8=".$analogia8."&";
	$redireccion .= "an9=".$analogia9."&";
	$redireccion .= "an10=".$analogia10."&";
	$redireccion .= "an11=".$analogia11."&";
	$redireccion .= "an12=".$analogia12."&";
	$redireccion .= "anp=".$promAnalogiaPrimaria."&";
	$redireccion .= "ans=".$promAnalogiaSecundaria."&";
	$redireccion .= "anb=".$promAnalogiaBachillerato."&";
	$redireccion .= "l1=".$lecturas1."&";
	$redireccion .= "l2=".$lecturas2."&";
	$redireccion .= "l3=".$lecturas3."&";
	$redireccion .= "l4=".$lecturas4."&";
	$redireccion .= "l5=".$lecturas5."&";
	$redireccion .= "l6=".$lecturas6."&";
	$redireccion .= "l7=".$lecturas7."&";
	$redireccion .= "l8=".$lecturas8."&";
	$redireccion .= "l9=".$lecturas9."&";
	$redireccion .= "l10=".$lecturas10."&";
	$redireccion .= "l11=".$lecturas11."&";
	$redireccion .= "l12=".$lecturas12."&";
	$redireccion .= "lp=".$promLecturaPrimaria."&";
	$redireccion .= "ls=".$promLecturaSecundaria."&";
	$redireccion .= "lb=".$promLecturaBachillerato."&";
	$redireccion .= "m1=".$mate1."&";
	$redireccion .= "m2=".$mate2."&";
	$redireccion .= "m3=".$mate3."&";
	$redireccion .= "m4=".$mate4."&";
	$redireccion .= "m5=".$mate5."&";
	$redireccion .= "m6=".$mate6."&";
	$redireccion .= "m7=".$mate7."&";
	$redireccion .= "m8=".$mate8."&";
	$redireccion .= "m9=".$mate9."&";
	$redireccion .= "m10=".$mate10."&";
	$redireccion .= "m11=".$mate11."&";
	$redireccion .= "m12=".$mate12."&";
	$redireccion .= "mp=".$promMatematicasPrimaria."&";
	$redireccion .= "ms=".$promMatematicasSecundaria."&";
	$redireccion .= "mb=".$promMatematicasBachillerato."&";
	$redireccion .= "schoolname=".$skul;
	header($redireccion)
?>