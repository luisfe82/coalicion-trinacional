<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


Class Carousel
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$barra1,$enbarra1,$barra2,$enbarra2,$autor,$enautor,$pais,$enpais,$contcorto,$encontcorto,$contlargo,$encontlargo,$imagen,$imagenart,$imagenlat)
	{
		$sql="INSERT INTO carousel (fecha,categoria,encategoria,titulo,entitulo,barra1,enbarra1,barra2,enbarra2,autor,enautor,pais,enpais,contcorto,encontcorto,contlargo,encontlargo,imagen,imagenart,imagenlat,condicion)
		VALUES (
		'$fecha',
		'$categoria',
		'$encategoria',
		'$titulo',
		'$entitulo',
		'$barra1',
		'$enbarra1',
		'$barra2',
		'$enbarra2',
		'$autor',
		'$enautor',
		'$pais',
		'$enpais',
		'$contcorto',
		'$encontcorto',
		'$contlargo',
		'$encontlargo',
		'$imagen',
		'$imagenart',
		'$imagenlat',
		'1'
		)";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idcarousel,$fecha,$categoria,$encategoria,$titulo,$entitulo,$barra1,$enbarra1,$barra2,$enbarra2,$autor,$enautor,$pais,$enpais,$contcorto,$encontcorto,$contlargo,$encontlargo,$imagen,$imagenart,$imagenlat)
	{
		$sql="UPDATE carousel SET 
		fecha='$fecha',
		categoria='$categoria',
		encategoria='$encategoria',
		titulo='$titulo',
		entitulo='$entitulo',
		barra1='$barra1',
		enbarra1='$enbarra1',
		barra2='$barra2',
		enbarra2='$enbarra2',
		autor='$autor',
		enautor='$enautor',
		pais='$pais',
		enpais='$enpais',
		contcorto='$contcorto',
		encontcorto='$encontcorto',
		contlargo='$contlargo',
		encontlargo='$encontlargo',
		imagen='$imagen',
		imagenart='$imagenart',
		imagenlat='$imagenlat' 
		WHERE 
		idcarousel='$idcarousel'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar organiza
	public function desactivar($idcarousel)
	{
		$sql="UPDATE carousel SET condicion='0' WHERE idcarousel='$idcarousel'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar organiza
	public function activar($idcarousel)
	{
		$sql="UPDATE carousel SET condicion='1' WHERE idcarousel='$idcarousel'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idcarousel)
	{
		$sql="SELECT * FROM carousel WHERE idcarousel='$idcarousel'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM carousel";
		return ejecutarConsulta($sql);		
	}

    //Implementar un método para listar los registros
	public function listardesc()
	{
		$sql="SELECT * FROM carousel ORDER BY fecha DESC;";
		return ejecutarConsulta($sql);		
	}

}

?>