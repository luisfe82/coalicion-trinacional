<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Video
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contenido,$encontenido,$facebook,$twitter,$whatsapp,$link)
	{
		$sql="INSERT INTO video (fecha,categoria,encategoria,titulo,entitulo,autor,enautor,pais,enpais,contenido,encontenido,facebook,twitter,whatsapp,link,condicion)
		VALUES ('$fecha','$categoria','$encategoria','$titulo','$entitulo','$autor','$enautor','$pais','$enpais','$contenido','$encontenido','$facebook','$twitter','$whatsapp','$link','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idvideo,$fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contenido,$encontenido,$facebook,$twitter,$whatsapp,$link)
	{
		$sql="UPDATE video SET fecha='$fecha',categoria='$categoria',encategoria='$encategoria',titulo='$titulo',entitulo='$entitulo',autor='$autor',enautor='$enautor',pais='$pais',enpais='$enpais',contenido='$contenido',encontenido='$encontenido',facebook='$facebook',twitter='$twitter',whatsapp='$whatsapp',link='$link' WHERE idvideo='$idvideo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar organiza
	public function desactivar($idvideo)
	{
		$sql="UPDATE video SET condicion='0' WHERE idvideo='$idvideo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar organiza
	public function activar($idvideo)
	{
		$sql="UPDATE video SET condicion='1' WHERE idvideo='$idvideo'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idvideo)
	{
		$sql="SELECT * FROM video WHERE idvideo='$idvideo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM video ";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros
	public function listardesc()
	{
		$sql="SELECT * FROM video ORDER BY fecha DESC;";
		return ejecutarConsulta($sql);		
	}

}

?>