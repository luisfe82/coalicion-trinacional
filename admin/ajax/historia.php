<?php 
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión
}
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../vistas/login.html");//Validamos el acceso solo a los usuarios logueados al sistema.
}
else
{
//Validamos el acceso solo al usuario logueado y autorizado.
if ($_SESSION['web']==1)
{	
require_once "../modelos/Historia.php";

$historia=new Historia();

$idhistoria=isset($_POST["idhistoria"])? limpiarCadena($_POST["idhistoria"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$contenido=isset($_POST["contenido"])? limpiarCadena($_POST["contenido"]):"";
$pie=isset($_POST["pie"])? limpiarCadena($_POST["pie"]):"";
$ten=isset($_POST["ten"])? limpiarCadena($_POST["ten"]):"";
$cen=isset($_POST["cen"])? limpiarCadena($_POST["cen"]):"";
$pen=isset($_POST["pen"])? limpiarCadena($_POST["pen"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
        if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/historia/" . $imagen);
			}
		}
		if (empty($idhistoria)){
			$rspta=$historia->insertar($fecha,$imagen,$titulo,$contenido,$pie,$ten,$cen,$pen);
			echo $rspta ? "El contenido ha sido registrado" : "No se pudieron registrar el contenido";
		}
		else {
			$rspta=$historia->editar($idhistoria,$fecha,$imagen,$titulo,$contenido,$pie,$ten,$cen,$pen);
			echo $rspta ? "El contenido ha sido actualizado" : "El contenido no ha sido actualizado";
		}
	break;

	case 'desactivar':
		$rspta=$historia->desactivar($idhistoria);
 		echo $rspta ? "El contenido ha sido Desactivado" : "El contenido no ha sido Desactivado";
	break;

	case 'activar':
		$rspta=$historia->activar($idhistoria);
 		echo $rspta ? "El contenido ha sido activado" : "El contenido no ha sido activado";
	break;

	case 'mostrar':
		$rspta=$historia->mostrar($idhistoria);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$historia->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idhistoria.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idhistoria.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idhistoria.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idhistoria.')"><i class="fa fa-check"></i></button>',
 				"1"=>"<img src='../files/historia/".$reg->imagen."' height='50px' idth='50px' >",
 				"2"=>$reg->fecha,				
 				"3"=>$reg->titulo,				
 				"4"=>$reg->ten,
 				"5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
	case 'publicar':
		$rspta=$historia->listardesc();

		$stmp = "";
        $contador = 0;
        $tabla_h[] = array();
        $tmp3[] = array();
        $tmp2[] = array();
        $tmp1[] = array();
        $tmp[] = array();
        $reg = 0;

		$string = '<?php' . "\r\n" . '$dato_h= array(' . "\r\n";
        $string2 = '<?php' . "\r\n" . '$dato_h= array(' . "\r\n";

        foreach ($rspta as $key => $value) {
            $tmp1[$key] = array("anio" =>substr( $value['fecha'],0,4),"fecha" => $value['fecha'],"imagen" => $value['imagen'],"titulo" => $value['titulo'], "contenido" => $value['contenido'], "pie" => $value['pie'], "ten" => $value['ten'], "cen" => $value['cen'], "pen" => $value['pen'],);
        }
        foreach ($tmp1 as $key => $value) {
            $tmp[$reg] = $value;
            if ($value['anio'] != $stmp) {
                $stmp = $value['anio'];
                $tmp2[$contador] = $stmp;
                $contador += 1;
            }
            $reg += 1;
        }
        $reg = 0;
        for ($i = 0; $i < $contador; $i++) {
            $string = $string . '    ' . $tmp2[$i] . ' => array(' . "\r\n";
			$string2 = $string2 . '    ' . $tmp2[$i] . ' => array(' . "\r\n";
            foreach ($tmp as $key => $value) {
                if ($tmp2[$i] === $value['anio']) {
                    $string = $string . '        ' . $reg . '=>array(' . "\r\n";
					$string = $string . '            "imagen" => "' . $value['imagen'] . '",' . "\r\n";
                    $string = $string . '            "titulo" => "' . $value['titulo'] . '",' . "\r\n";
                    $string = $string . '            "contenido" => "' . $value['contenido'] . '",' . "\r\n";
                    $string = $string . '            "pie" => "' . $value['pie'] . '",' . "\r\n";
                    $string = $string . '        ),' . "\r\n";

					$string2 = $string2 . '        ' . $reg . '=>array(' . "\r\n";
					$string2 = $string2 . '            "imagen" => "' . $value['imagen'] . '",' . "\r\n";
                    $string2 = $string2 . '            "titulo" => "' . $value['ten'] . '",' . "\r\n";
                    $string2 = $string2 . '            "contenido" => "' . $value['cen'] . '",' . "\r\n";
                    $string2 = $string2 . '            "pie" => "' . $value['pen'] . '",' . "\r\n";
                    $string2 = $string2 . '        ),' . "\r\n";

                    $reg += 1;
                } else {
                    $reg = 0;
                }
            }
            $string = $string . '    ),' . "\r\n";
			$string2 = $string2 . '    ),' . "\r\n";
        }

        $string = $string . ')' . "\r\n" . '?>';
        $string2 = $string2 . ')' . "\r\n" . '?>';

        $fp = fopen('../leng/es_history.php', 'w');
        fwrite($fp, $string);
        fclose($fp);

        $fp = fopen('../leng/en_history.php', 'w');
        fwrite($fp, $string2);
        fclose($fp);

		echo $rspta ? "El Contenido ha sido publicado" : "El Contenido no ha sido publicado";

	break;	
}
//Fin de las validaciones de acceso
}
else
{
  require 'noacceso.php';
}
}
ob_end_flush();
?>