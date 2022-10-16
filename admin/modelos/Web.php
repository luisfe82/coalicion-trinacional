<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Web
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($posicion,$contenidoes,$contenidoen)
	{
		$sql="INSERT INTO web (posicion,contenidoes,contenidoen,condicion)
		VALUES ('$posicion','$contenidoes','$contenidoen','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idweb,$posicion,$contenidoes,$contenidoen)
	{
		$sql="UPDATE web SET posicion='$posicion',contenidoes='$contenidoes',contenidoen='$contenidoen' WHERE idweb='$idweb'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idweb)
	{
		$sql="UPDATE web SET condicion='0' WHERE idweb='$idweb'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idweb)
	{
		$sql="UPDATE web SET condicion='1' WHERE idweb='$idweb'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idweb)
	{
		$sql="SELECT * FROM web WHERE idweb='$idweb'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM web";
		return ejecutarConsulta($sql);		
	}

}

?>