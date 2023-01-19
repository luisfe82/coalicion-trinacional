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
if ($_SESSION['contenido']==1)
{	
require_once "../modelos/Video.php";

$video=new Video();

$idvideo=isset($_POST["idvideo"])? limpiarCadena($_POST["idvideo"]):"";
$link=isset($_POST["link"])? limpiarCadena($_POST["link"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$facebook=isset($_POST["facebook"])? limpiarCadena($_POST["facebook"]):"";
$twitter=isset($_POST["twitter"])? limpiarCadena($_POST["twitter"]):"";
$whatsapp=isset($_POST["whatsapp"])? limpiarCadena($_POST["whatsapp"]):"";
$categoria=isset($_POST["categoria"])? limpiarCadena($_POST["categoria"]):"";
$encategoria=isset($_POST["encategoria"])? limpiarCadena($_POST["encategoria"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$entitulo=isset($_POST["entitulo"])? limpiarCadena($_POST["entitulo"]):"";
$autor=isset($_POST["autor"])? limpiarCadena($_POST["autor"]):"";
$enautor=isset($_POST["enautor"])? limpiarCadena($_POST["enautor"]):"";
$pais=isset($_POST["pais"])? limpiarCadena($_POST["pais"]):"";
$enpais=isset($_POST["enpais"])? limpiarCadena($_POST["enpais"]):"";
$contenido=isset($_POST["contenido"])? limpiarCadena($_POST["contenido"]):"";
$encontenido=isset($_POST["encontenido"])? limpiarCadena($_POST["encontenido"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idvideo)){
			$rspta=$video->insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contenido,$encontenido,$facebook,$twitter,$whatsapp,$link);
			echo $rspta ? "El contenido ha sido registrado" : "No se pudieron registrar el contenido";
		}
		else {
			$rspta=$video->editar($idvideo,$fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contenido,$encontenido,$facebook,$twitter,$whatsapp,$link);
			echo $rspta ? "El contenido ha sido actualizado" : "El contenido no ha sido actualizado";
		}
	break;

	case 'desactivar':
		$rspta=$video->desactivar($idvideo);
 		echo $rspta ? "El contenido ha sido Desactivado" : "El contenido no ha sido Desactivado";
	break;

	case 'activar':
		$rspta=$video->activar($idvideo);
 		echo $rspta ? "El contenido ha sido activado" : "El contenido no ha sido activado";
	break;

	case 'mostrar':
		$rspta=$video->mostrar($idvideo);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$video->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idvideo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idvideo.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idvideo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idvideo.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->fecha,
 				"2"=>$reg->categoria,
 				"3"=>$reg->titulo,				
 				"4"=>$reg->pais,				
 				"5"=>$reg->autor,
 				"6"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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
		$rspta=$video->listardesc();

        $string = '<?php' . "\r\n" . '$datosv= array(' . "\r\n";
        $string2 = '<?php' . "\r\n" . '$datosv= array(' . "\r\n";
		$registro=1;
        while ($reg=$rspta->fetch_object()){
			if ($reg->condicion == '1') {
				$string = $string . "        " . $registro . "=>array(" . "\r\n";
				$string = $string . "            'link' => '" . $reg->link . "'," . "\r\n";
				$string = $string . "            'categoria' => '" . $reg->categoria . "'," . "\r\n";
				$string = $string . "            'fecha' => '" . $reg->fecha . "'," . "\r\n";
				$string = $string . "            'titulo' => '" . $reg->titulo . "'," . "\r\n";
				$string = $string . "            'autor' => '" . $reg->autor . "'," . "\r\n";
				$string = $string . "            'pais' => '" . $reg->pais . "'," . "\r\n";
				$string = $string . "            'contenido' => '" . $reg->contenido . "'," . "\r\n";
				$string = $string . "            'facebook' => '" . $reg->facebook . "'," . "\r\n";
				$string = $string . "            'twitter' => '" . $reg->twitter . "'," . "\r\n";
				$string = $string . "            'whatsapp' => '" . $reg->whatsapp . "'," . "\r\n";
                $string = $string . "        )," . "\r\n";

                $string2 = $string2 . "        " . $registro . "=>array(" . "\r\n";
				$string2 = $string2 . "            'link' => '" . $reg->link . "'," . "\r\n";
				$string2 = $string2 . "            'categoria' => '" . $reg->encategoria . "'," . "\r\n";
				$string2 = $string2 . "            'fecha' => '" . $reg->fecha . "'," . "\r\n";
				$string2 = $string2 . "            'titulo' => '" . $reg->entitulo . "'," . "\r\n";
				$string2 = $string2 . "            'autor' => '" . $reg->enautor . "'," . "\r\n";
				$string2 = $string2 . "            'pais' => '" . $reg->enpais . "'," . "\r\n";
				$string2 = $string2 . "            'contenido' => '" . $reg->encontenido . "'," . "\r\n";
				$string2 = $string2 . "            'facebook' => '" . $reg->facebook . "'," . "\r\n";
				$string2 = $string2 . "            'twitter' => '" . $reg->twitter . "'," . "\r\n";
				$string2 = $string2 . "            'whatsapp' => '" . $reg->whatsapp . "'," . "\r\n";
                $string2 = $string2 . "        )," . "\r\n";

				$registro +=1;
			}
        }

        $string = trim($string) . "\r\n" . ")" . "\r\n" . "?>";
		$string2 = trim($string2) . "\r\n" . ")" . "\r\n" . "?>";

		$fp = fopen('../leng/es_video.php', 'w');
		fwrite($fp, $string);
		fclose($fp);

		$fp = fopen('../leng/en_video.php', 'w');
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