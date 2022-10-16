<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


Class Articulo
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contcorto,$encontcorto,$contlargo,$encontlargo,$imagen,$imagenbarner)
	{
		$sql="INSERT INTO articulo (fecha,categoria,encategoria,titulo,entitulo,autor,enautor,pais,enpais,contcorto,encontcorto,contlargo,encontlargo,imagen,imagenbarner,condicion)
		VALUES ('$fecha','$categoria','$encategoria','$titulo','$entitulo','$autor','$enautor','$pais','$enpais','$contcorto','$encontcorto','$contlargo','$encontlargo','$imagen','$imagenbarner','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idarticulo,$fecha,$categoria,$encategoria,$titulo,$entitulo,$autor,$enautor,$pais,$enpais,$contcorto,$encontcorto,$contlargo,$encontlargo,$imagen,$imagenbarner)
	{
		$sql="UPDATE articulo SET fecha='$fecha',categoria='$categoria',encategoria='$encategoria',titulo='$titulo',entitulo='$entitulo',autor='$autor',enautor='$enautor',pais='$pais',enpais='$enpais',contcorto='$contcorto',encontcorto='$encontcorto',contlargo='$contlargo',encontlargo='$encontlargo',imagen='$imagen',imagenbarner='$imagenbarner' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar organiza
	public function desactivar($idarticulo)
	{
		$sql="UPDATE articulo SET condicion='0' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar organiza
	public function activar($idarticulo)
	{
		$sql="UPDATE articulo SET condicion='1' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idarticulo)
	{
		$sql="SELECT * FROM articulo WHERE idarticulo='$idarticulo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM articulo";
		return ejecutarConsulta($sql);		
	}

    //Implementar un método para listar los registros
	public function listardesc()
	{
		$sql="SELECT * FROM articulo ORDER BY fecha DESC;";
		return ejecutarConsulta($sql);		
	}

}

?>