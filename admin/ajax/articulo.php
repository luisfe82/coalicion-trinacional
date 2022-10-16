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
require_once "../modelos/Articulo.php";

$articulo=new Articulo();

$idarticulo=isset($_POST["idarticulo"])? limpiarCadena($_POST["idarticulo"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

$categoria=isset($_POST["categoria"])? limpiarCadena($_POST["categoria"]):"";
$encategoria=isset($_POST["encategoria"])? limpiarCadena($_POST["encategoria"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$entitulo=isset($_POST["entitulo"])? limpiarCadena($_POST["entitulo"]):"";
$autor=isset($_POST["autor"])? limpiarCadena($_POST["autor"]):"";
$enautor=isset($_POST["enautor"])? limpiarCadena($_POST["enautor"]):"";
$pais=isset($_POST["pais"])? limpiarCadena($_POST["pais"]):"";
$enpais=isset($_POST["enpais"])? limpiarCadena($_POST["enpais"]):"";
$contcorto=isset($_POST["contcorto"])? limpiarCadena($_POST["contcorto"]):"";
$encontcorto=isset($_POST["encontcorto"])? limpiarCadena($_POST["encontcorto"]):"";
$contlargo=isset($_POST["contlargo"])? limpiarCadena($_POST["contlargo"]):"";
$encontlargo=isset($_POST["encontlargo"])? limpiarCadena($_POST["encontlargo"]):"";

$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$imagenbarner=isset($_POST["imagenbarner"])? limpiarCadena($_POST["imagenbarner"]):"";

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
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/articulo/" . $imagen);
			}
		}

        if (!file_exists($_FILES['imagenbarner']['tmp_name']) || !is_uploaded_file($_FILES['imagenbarner']['tmp_name']))
		{
			$imagenbarner=$_POST["imagenactual2"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagenbarner"]["name"]);
			if ($_FILES['imagenbarner']['type'] == "image/jpg" || $_FILES['imagenbarner']['type'] == "image/jpeg" || $_FILES['imagenbarner']['type'] == "image/png")
			{
				$imagenbarner = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagenbarner"]["tmp_name"], "../files/carousel/" . $imagenbarner);
			}
		}
		if(empty($idarticulo)){
			$rspta=$articulo->insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contcorto,$encontcorto,$contlargo,$encontlargo,$imagen,$imagenbarner);
			echo $rspta ? "El contenido ha sido registrado" : "No se pudieron registrar el contenido";
		}
		else {
			$rspta=$articulo->editar($idarticulo,$fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contcorto,$encontcorto,$contlargo,$encontlargo,$imagen,$imagenbarner);
			echo $rspta ? "El contenido ha sido actualizado" : "El contenido no ha sido actualizado";
		}
	break;

	case 'desactivar':
		$rspta=$articulo->desactivar($idarticulo);
 		echo $rspta ? "El contenido ha sido Desactivado" : "El contenido no ha sido Desactivado";
	break;

	case 'activar':
		$rspta=$articulo->activar($idarticulo);
 		echo $rspta ? "El contenido ha sido activado" : "El contenido no ha sido activado";
	break;

	case 'mostrar':
		$rspta=$articulo->mostrar($idarticulo);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$articulo->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idarticulo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idarticulo.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idarticulo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idarticulo.')"><i class="fa fa-check"></i></button>',
 				"1"=>"<img src='../files/articulo/".$reg->imagen."' height='50px' idth='50px' >",
 				"2"=>$reg->fecha,				
 				"3"=>$reg->titulo,				
 				"4"=>$reg->categoria,
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
		$rspta=$articulo->listardesc();

        $string = '<?php' . "\r\n" . '$articulo= array(' . "\r\n";
        $string2 = '<?php' . "\r\n" . '$articulo= array(' . "\r\n";

        $registro=1;
        while ($reg=$rspta->fetch_object()){
			if ($reg->condicion == '1') {
				$string = $string . "        " . $registro . "=>array(" . "\r\n";
                $string = $string . "            'id' => '" . $registro . "'," . "\r\n";
				$string = $string . "            'fecha' => '" . $reg->fecha . "'," . "\r\n";
				$string = $string . "            'categoria' => '" . $reg->categoria . "'," . "\r\n";
				$string = $string . "            'titulo' => '" . $reg->titulo . "'," . "\r\n";
				$string = $string . "            'autor' => '" . $reg->autor . "'," . "\r\n";
				$string = $string . "            'pais' => '" . $reg->pais . "'," . "\r\n";
				$string = $string . "            'contcorto' => '" . $reg->contcorto . "'," . "\r\n";
				$string = $string . "            'contlargo' => '" . $reg->contlargo . "'," . "\r\n";
				$string = $string . "            'imagen' => '" . $reg->imagen . "'," . "\r\n";
				$string = $string . "            'imagenbarner' => '" . $reg->imagenbarner . "'," . "\r\n";
                $string = $string . "        )," . "\r\n";

				$string2 = $string2 . "        " . $registro . "=>array(" . "\r\n";
                $string2 = $string2 . "            'id' => '" . $registro . "'," . "\r\n";
				$string2 = $string2 . "            'fecha' => '" . $reg->fecha . "'," . "\r\n";
				$string2 = $string2 . "            'categoria' => '" . $reg->encategoria . "'," . "\r\n";
				$string2 = $string2 . "            'titulo' => '" . $reg->entitulo . "'," . "\r\n";
				$string2 = $string2 . "            'autor' => '" . $reg->enautor . "'," . "\r\n";
				$string2 = $string2 . "            'pais' => '" . $reg->enpais . "'," . "\r\n";
				$string2 = $string2 . "            'contcorto' => '" . $reg->encontcorto . "'," . "\r\n";
				$string2 = $string2 . "            'contlargo' => '" . $reg->encontlargo . "'," . "\r\n";
				$string2 = $string2 . "            'imagen' => '" . $reg->imagen . "'," . "\r\n";
				$string2 = $string2 . "            'imagenbarner' => '" . $reg->imagenbarner . "'," . "\r\n";
                $string2 = $string2 . "        )," . "\r\n";
                
                $registro +=1;
			}            
        }

        $string = trim($string) . "\r\n" . ')' . "\r\n" . '?>';
		$string2 = trim($string2) . "\r\n" . ')' . "\r\n" . '?>';

		$fp = fopen('../leng/es_articulo.php', 'w');
		fwrite($fp, $string);
		fclose($fp);

		$fp = fopen('../leng/en_articulo.php', 'w');
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