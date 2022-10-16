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
require_once "../modelos/Web.php";

$web=new Web();

$idweb=isset($_POST["idweb"])? limpiarCadena($_POST["idweb"]):"";
$posicion=isset($_POST["posicion"])? limpiarCadena($_POST["posicion"]):"";
$contenidoes=isset($_POST["contenidoes"])? limpiarCadena($_POST["contenidoes"]):"";
$contenidoen=isset($_POST["contenidoen"])? limpiarCadena($_POST["contenidoen"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idweb)){
			$rspta=$web->insertar($posicion,$contenidoes,$contenidoen);
			echo $rspta ? "Contenido registrado" : "Contenido no registrado";
		}
		else {
			$rspta=$web->editar($idweb,$posicion,$contenidoes,$contenidoen);
			echo $rspta ? "Contenido actualizado" : "Contenido no actualizado";
		}
	break;

	case 'desactivar':
		$rspta=$web->desactivar($idweb);
 		echo $rspta ? "El Contenido ha sido Desactivado" : "El contenido no ha sido Desactivado";
	break;

	case 'activar':
		$rspta=$web->activar($idweb);
 		echo $rspta ? "El Contenido ha sido activado" : "El Contenido no ha sido activado";
	break;

	case 'mostrar':
		$rspta=$web->mostrar($idweb);
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$web->listar();
		//Vamos a declarar un array
		$data= Array();

		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idweb.')"><i
					class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-danger" onclick="desactivar('.$reg->idweb.')"><i class="fa fa-close"></i></button>':
			'<button class="btn btn-warning" onclick="mostrar('.$reg->idweb.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-primary" onclick="activar('.$reg->idweb.')"><i class="fa fa-check"></i></button>',
			"1"=>$reg->posicion,
			"2"=>$reg->contenidoes,
			"3"=>$reg->contenidoen,
			"4"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>'
			);
		}
		$results = array(
					"sEcho"=>1, //Información para el datatables
					"iTotalRecords"=>count($data), //enviamos el total registros al datatable
					"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
					"aaData"=>$data
				);
		echo json_encode($results);

	break;

	case 'publicar':
		$rspta=$web->listar();

		$string = '<?php' . "\r\n" . '$lang= array(' . "\r\n";
        $string2 = '<?php' . "\r\n" . '$lang= array(' . "\r\n";

        while ($reg=$rspta->fetch_object()){
			if ($reg->condicion == '1') {
				$string = $string . "'" . trim($reg->posicion) . "'=>'" . trim($reg->contenidoes) . "'," . "\r\n";
            	$string2 = $string2 . "'" . trim($reg->posicion) . "'=>'" . trim($reg->contenidoen) . "'," . "\r\n";
			}
        }

        $string = trim($string) . "\r\n" . ')' . "\r\n" . '?>';
		$string2 = trim($string2) . "\r\n" . ')' . "\r\n" . '?>';

		$fp = fopen('../leng/es.php', 'w');
		fwrite($fp, $string);
		fclose($fp);

		$fp = fopen('../leng/en.php', 'w');
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