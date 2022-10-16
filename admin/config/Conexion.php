<?php 
require_once "global.php";

$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

mysqli_set_charset($conexion,"utf8");

// printf("El conjunto de caracteres inicial es: %s <br>",mysqli_character_set_name($conexion));

//Si tenemos un posible error en la conexión lo mostramos
if (mysqli_connect_error())
{
	printf("Falló conexión a la base de datos: %s\n",mysqli_connect_error());
	exit();
}

if (!function_exists('ejecutarConsulta'))
{
	function ejecutarConsulta($sql)
	{
		global $conexion;
		$query = $conexion->query($sql);
		return $query;
	}

	function ejecutarConsultaSimpleFila($sql)
	{
		global $conexion;
		$query = $conexion->query($sql);		
		$row = $query->fetch_assoc();
		return $row;
	}

	function ejecutarConsulta_retornarID($sql)
	{
		global $conexion;
		$query = $conexion->query($sql);		
		return $conexion->insert_id;			
	}

	function limpiarCadena($str)
	{
		global $conexion;
		// $str = mysqli_real_escape_string($conexion,trim($str));
		// return htmlspecialchars($str);
		return $str;
	}
}
?>