var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}

//Función limpiar
function limpiar()
{
	$("#fecha").val("");
	$("#link").val("");

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

	$("#facebook").val("");
	$("#twitter").val("");
	$("#whatsapp").val("");


	$("#idvideo").val("");
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
					url: '../ajax/video.php?op=listar',
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
	    "order": [[ 1, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/video.php?op=guardaryeditar",
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

function mostrar(idvideo)
{
	$.post("../ajax/video.php?op=mostrar",{idvideo : idvideo}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#fecha").val(data.fecha);
		$("#link").val(data.link);

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

		$("#facebook").val(data.facebook);
		$("#twitter").val(data.twitter);
		$("#whatsapp").val(data.whatsapp);

		$("#idvideo").val(data.idvideo);

 	});
}


//Función para desactivar registros
function desactivar(idvideo)
{
	bootbox.confirm("¿Está Seguro de desactivar el contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/video.php?op=desactivar", {idvideo : idvideo}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idvideo)
{
	bootbox.confirm("¿Está Seguro de activar el contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/video.php?op=activar", {idvideo : idvideo}, function(e){
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
        	$.post("../ajax/video.php?op=publicar", function(e){
        		bootbox.alert(e);
        	});	
        }
	})
}

init(); 