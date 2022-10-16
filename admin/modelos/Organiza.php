<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Organiza
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$imagen,$tipo,$titulo,$direc,$url,$fone,$entipo,$entitulo,$endirec)
	{
		$sql="INSERT INTO organiza (
			fecha,
			imagen,
			tipo,
			titulo,
			direc,
			url,
			fone,
			entipo,
			entitulo,
			endirec,
			condicion)
		VALUES (
			'$fecha',
			'$imagen',
			'$tipo',
			'$titulo',
			'$direc',
			'$url',
			'$fone',
			'$entipo',
			'$entitulo',
			'$endirec',
			'1'
			)";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idorganiza,$fecha,$imagen,$tipo,$titulo,$direc,$url,$fone,$entipo,$entitulo,$endirec)
	{
		$sql="UPDATE organiza SET 
		fecha='$fecha',		
		imagen='$imagen',
		tipo='$tipo',
		titulo='$titulo',
		direc='$direc',
		url='$url',
		fone='$fone',
		entipo='$entipo',
		entitulo='$entitulo',
		endirec='$endirec' 
		WHERE 
		idorganiza='$idorganiza'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar organiza
	public function desactivar($idorganiza)
	{
		$sql="UPDATE organiza SET condicion='0' WHERE idorganiza='$idorganiza'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar organiza
	public function activar($idorganiza)
	{
		$sql="UPDATE organiza SET condicion='1' WHERE idorganiza='$idorganiza'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idorganiza)
	{
		$sql="SELECT * FROM organiza WHERE idorganiza='$idorganiza'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM organiza";
		return ejecutarConsulta($sql);		
	}

}

?>