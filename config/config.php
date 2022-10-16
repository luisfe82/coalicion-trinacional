<?php
session_start();

$id = (isset($_SESSION['id'])) ? $_SESSION['id'] : "";
$texto = (isset($_SESSION['texto'])) ? $_SESSION['texto'] : "";


if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "es";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "es")
		$_SESSION['lang'] = "es";
	else if ($_GET['lang']  == "en")
        $_SESSION['lang'] = "en";
}

require_once "../admin/leng/" . $_SESSION['lang'] . ".php";
require_once "../admin/leng/" . $_SESSION['lang'] . "_carousel.php";	
require_once "../admin/leng/" . $_SESSION['lang'] . "_org.php";	
require_once "../admin/leng/" . $_SESSION['lang'] . "_articulo.php";	
require_once "../admin/leng/" . $_SESSION['lang'] . "_video.php";	
require_once "../admin/leng/" . $_SESSION['lang'] . "_history.php";	
require_once "../admin/leng/" . $_SESSION['lang'] . "_publica.php";	

$solida=$confe=$foro=$campania=$colabora=$acciones=array();

foreach ($articulo as $datos){
    if ($datos['categoria'] == "Acciones") {
        array_push($acciones, $datos['id']);
    }
    if ($datos['categoria'] == "Colaboraciones") {
        array_push($colabora, $datos['id']);
    }
    if ($datos['categoria'] == "Campañas") {
        array_push($campania, $datos['id']);
    }
    if ($datos['categoria'] == "Foros") {
        array_push($foro, $datos['id']);
    }
    if ($datos['categoria'] == "Conferencias") {
        array_push($confe, $datos['id']);
    }
    if ($datos['categoria'] == "Solidaridad") {
        array_push($solida, $datos['id']);
    }
}
// echo "acciones Nº[".count($acciones) ."] : ";
// var_dump($acciones);
// echo "<br>";
// echo "colabora Nº[".count($colabora) ."] : ";
// var_dump($colabora);
// echo "<br>";
// echo "campania Nº[".count($campania) ."] : ";
// var_dump($campania);
// echo "<br>";
// echo "foro Nº[".count($foro) ."] : ";
// var_dump($foro);
// echo "<br>";
// echo "confe Nº[".count($confe) ."] : ";
// var_dump($confe);
// echo "<br>";
// echo "solida Nº[".count($solida) ."] : ";
// var_dump($solida);
?>