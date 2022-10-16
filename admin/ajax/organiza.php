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
require_once "../modelos/Organiza.php";

$organiza=new Organiza();

$idorganiza=isset($_POST["idorganiza"])? limpiarCadena($_POST["idorganiza"]):"";

$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";

$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";
$entipo=isset($_POST["entipo"])? limpiarCadena($_POST["entipo"]):"";

$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$entitulo=isset($_POST["entitulo"])? limpiarCadena($_POST["entitulo"]):"";

$direc=isset($_POST["direc"])? limpiarCadena($_POST["direc"]):"";
$endirec=isset($_POST["endirec"])? limpiarCadena($_POST["endirec"]):"";

$url=isset($_POST["url"])? limpiarCadena($_POST["url"]):"";

$fone=isset($_POST["fone"])? limpiarCadena($_POST["fone"]):"";




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
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/organiza/" . $imagen);
			}
		}
		if (empty($idorganiza)){
			$rspta=$organiza->insertar($fecha,$imagen,$tipo,$titulo,$direc,$url,$fone,$entipo,$entitulo,$endirec);
			echo $rspta ? "El contenido ha sido registrado" : "No se pudieron registrar el contenido";
		}
		else {
			$rspta=$organiza->editar($idorganiza,$fecha,$imagen,$tipo,$titulo,$direc,$url,$fone,$entipo,$entitulo,$endirec);
			echo $rspta ? "El contenido ha sido actualizado" : "El contenido no ha sido actualizado";
		}
	break;

	case 'desactivar':
		$rspta=$organiza->desactivar($idorganiza);
 		echo $rspta ? "El contenido ha sido Desactivado" : "El contenido no ha sido Desactivado";
	break;

	case 'activar':
		$rspta=$organiza->activar($idorganiza);
 		echo $rspta ? "El contenido ha sido activado" : "El contenido no ha sido activado";
	break;

	case 'mostrar':
		$rspta=$organiza->mostrar($idorganiza);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$organiza->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idorganiza.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idorganiza.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idorganiza.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idorganiza.')"><i class="fa fa-check"></i></button>',
 				"1"=>"<img src='../files/organiza/".$reg->imagen."' height='50px' idth='50px' >",
 				"2"=>$reg->tipo,				
 				"3"=>$reg->titulo,				
 				"4"=>$reg->direc,
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
		$rspta=$organiza->listar();

        $string = '<?php' . "\r\n" . '$organiza= array(' . "\r\n";
        $string2 = '<?php' . "\r\n" . '$organiza= array(' . "\r\n";
		$registro=1;
        while ($reg=$rspta->fetch_object()){
			if ($reg->condicion == '1') {
				$string = $string . '        ' . $registro . '=>array(' . "\r\n";
				$string = $string . '            "fecha" => "' . $reg->fecha . '",' . "\r\n";
                $string = $string . '            "imagen" => "' . $reg->imagen . '",' . "\r\n";
                $string = $string . '            "tipo" => "' . $reg->tipo . '",' . "\r\n";
                $string = $string . '            "titulo" => "' . $reg->titulo . '",' . "\r\n";
                $string = $string . '            "direc" => "' . $reg->direc . '",' . "\r\n";
                $string = $string . '            "url" => "' . $reg->url . '",' . "\r\n";
                $string = $string . '            "fone" => "' . $reg->fone . '",' . "\r\n";
                $string = $string . '        ),' . "\r\n";

                $string2 = $string2 . '        ' . $registro . '=>array(' . "\r\n";
				$string2 = $string2 . '            "fecha" => "' . $reg->fecha . '",' . "\r\n";
                $string2 = $string2 . '            "imagen" => "' . $reg->imagen . '",' . "\r\n";
                $string2 = $string2 . '            "tipo" => "' . $reg->entipo . '",' . "\r\n";
                $string2 = $string2 . '            "titulo" => "' . $reg->entitulo . '",' . "\r\n";
                $string2 = $string2 . '            "direc" => "' . $reg->endirec . '",' . "\r\n";
                $string2 = $string2 . '            "url" => "' . $reg->url . '",' . "\r\n";
                $string2 = $string2 . '            "fone" => "' . $reg->fone . '",' . "\r\n";
                $string2 = $string2 . '        ),' . "\r\n";

				$registro +=1;
			}
        }
        $string = trim($string) . "\r\n" . ')' . "\r\n" . '?>';
		$string2 = trim($string2) . "\r\n" . ')' . "\r\n" . '?>';

		$fp = fopen('../leng/es_org.php', 'w');
		fwrite($fp, $string);
		fclose($fp);

		$fp = fopen('../leng/en_org.php', 'w');
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