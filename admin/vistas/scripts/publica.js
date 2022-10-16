var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
	$("#imagenmuestra").hide();	
}

//Función limpiar
function limpiar()
{
	$("#fecha").val("");

	$("#categoria").val("");
	$("#encategoria").val("");
	$("#titulo").val("");
	$("#entitulo").val("");
	$("#autor").val("");
    $("#enautor").val("");
    $("#pais").val("");
    $("#enpais").val("");
    $("#contenido").val("");
    $("#encontenido").val("");

	$("#link").val("");
	$("#archivo").val("");

	$("#imagenmuestra").attr("src","");
	$("#imagen").val("");
	$("#imagenactual").val("");
	$("#idpublica").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
		$("#btnpublicar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
		$("#btnpublicar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/publica.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 2, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/publica.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(idpublica)
{
	$.post("../ajax/publica.php?op=mostrar",{idpublica : idpublica}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#fecha").val(data.fecha);

		$("#categoria").val(data.categoria);
		$("#encategoria").val(data.encategoria);
		$("#titulo").val(data.titulo);
		$("#entitulo").val(data.entitulo);
		$("#autor").val(data.autor);
		$("#enautor").val(data.enautor);
        $("#pais").val(data.pais);
		$("#enpais").val(data.enpais);
		$("#contenido").val(data.contenido);
		$("#encontenido").val(data.encontenido);

		$("#link").val(data.link);
		$("#archivo").val(data.archivo);

		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/publica/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		$("#idpublica").val(data.idpublica);

 	});
}


//Función para desactivar registros
function desactivar(idpublica)
{
	bootbox.confirm("¿Está Seguro de desactivar el contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/publica.php?op=desactivar", {idpublica : idpublica}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idpublica)
{
	bootbox.confirm("¿Está Seguro de activar el contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/publica.php?op=activar", {idpublica : idpublica}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para publicar registros
function publicar(e)
{
	bootbox.confirm("¿Está Seguro de publicar El Contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/publica.php?op=publicar", function(e){
        		bootbox.alert(e);
        	});	
        }
	})
}

init(); 