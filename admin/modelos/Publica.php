<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Publica
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contenido,$encontenido,$imagen,$link,$archivo)
	{
		$sql="INSERT INTO publica (fecha,categoria,encategoria,titulo,entitulo,autor,enautor,pais,enpais,contenido,encontenido,imagen,link,archivo,condicion)
		VALUES ('$fecha','$categoria','$encategoria','$titulo','$entitulo','$autor','$enautor','$pais','$enpais','$contenido','$encontenido','$imagen','$link','$archivo','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idpublica,$fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contenido,$encontenido,$imagen,$link,$archivo)
	{
		$sql="UPDATE publica SET fecha='$fecha',categoria='$categoria',encategoria='$encategoria',titulo='$titulo',entitulo='$entitulo',autor='$autor',enautor='$enautor',pais='$pais',enpais='$enpais',contenido='$contenido',encontenido='$encontenido',imagen='$imagen',link='$link',archivo='$archivo' WHERE idpublica='$idpublica'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar organiza
	public function desactivar($idpublica)
	{
		$sql="UPDATE publica SET condicion='0' WHERE idpublica='$idpublica'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar organiza
	public function activar($idpublica)
	{
		$sql="UPDATE publica SET condicion='1' WHERE idpublica='$idpublica'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idpublica)
	{
		$sql="SELECT * FROM publica WHERE idpublica='$idpublica'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM publica";
		return ejecutarConsulta($sql);		
	}

}

?>