<?php
session_start();

$id = (isset($_SESSION['id'])) ? $_SESSION['id'] : "";
$idcorreo = (isset($_SESSION['idcorreo'])) ? $_SESSION['idcorreo'] : "";
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
require_once "../admin/leng/" . $_SESSION['lang'] . "_galeria.php";	

$solida=$confe=$foro=$campania=$colabora=$acciones=array();

foreach ($articulo as $datos){
    if ($datos['categoria'] == "Acciones" || $datos['categoria'] == "Actions") {
        array_push($acciones, $datos['id']);
    }
    if ($datos['categoria'] == "Colaboraciones" || $datos['categoria'] == "Collaborations") {
        array_push($colabora, $datos['id']);
    }
    if ($datos['categoria'] == "Campañas" || $datos['categoria'] == "Bells") {
        array_push($campania, $datos['id']);
    }
    if ($datos['categoria'] == "Foros" || $datos['categoria'] == "Forums") {
        array_push($foro, $datos['id']);
    }
    if ($datos['categoria'] == "Conferencias" || $datos['categoria'] == "Conferences") {
        array_push($confe, $datos['id']);
    }
    if ($datos['categoria'] == "Solidaridad" || $datos['categoria'] == "Solidarity") {
        array_push($solida, $datos['id']);
    }
}