<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Historia
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$imagen,$titulo,$contenido,$pie,$ten,$cen,$pen)
	{
		$sql="INSERT INTO historia (fecha,imagen,titulo,contenido,pie,ten,cen,pen,condicion)
		VALUES ('$fecha','$imagen','$titulo','$contenido','$pie','$ten','$cen','$pen','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idhistoria,$fecha,$imagen,$titulo,$contenido,$pie,$ten,$cen,$pen)
	{
		$sql="UPDATE historia SET fecha='$fecha',imagen='$imagen',titulo='$titulo',contenido='$contenido',pie='$pie',ten='$ten',cen='$cen',pen='$pen' WHERE idhistoria='$idhistoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idhistoria)
	{
		$sql="UPDATE historia SET condicion='0' WHERE idhistoria='$idhistoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idhistoria)
	{
		$sql="UPDATE historia SET condicion='1' WHERE idhistoria='$idhistoria'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idhistoria)
	{
		$sql="SELECT * FROM historia WHERE idhistoria='$idhistoria'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM historia";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros
	public function listardesc()
	{
		$sql="SELECT * FROM historia ORDER BY fecha DESC;";
		return ejecutarConsulta($sql);		
	}

}

?>