<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


Class Galeria
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$imagen)
	{
		$sql="INSERT INTO galeria (fecha,categoria,encategoria,titulo,entitulo,autor,enautor,pais,enpais,imagen,condicion)
		VALUES (
		'$fecha',
		'$categoria',
		'$encategoria',
		'$titulo',
		'$entitulo',
		'$autor',
		'$enautor',
		'$pais',
		'$enpais',
		'$imagen',
		'1'
		)";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idgaleria,$fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$imagen)
	{
		$sql="UPDATE galeria SET 
		fecha='$fecha',
		categoria='$categoria',
		encategoria='$encategoria',
		titulo='$titulo',
		entitulo='$entitulo',
		autor='$autor',
		enautor='$enautor',
		pais='$pais',
		enpais='$enpais',
		imagen='$imagen'
		WHERE 
		idgaleria='$idgaleria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar organiza
	public function desactivar($idgaleria)
	{
		$sql="UPDATE galeria SET condicion='0' WHERE idgaleria='$idgaleria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar organiza
	public function activar($idgaleria)
	{
		$sql="UPDATE galeria SET condicion='1' WHERE idgaleria='$idgaleria'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idgaleria)
	{
		$sql="SELECT * FROM galeria WHERE idgaleria='$idgaleria'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM galeria";
		return ejecutarConsulta($sql);		
	}

    //Implementar un método para listar los registros
	public function listardesc()
	{
		$sql="SELECT * FROM galeria ORDER BY fecha DESC;";
		return ejecutarConsulta($sql);		
	}

}

?>