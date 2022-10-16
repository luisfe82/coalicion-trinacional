var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});
}

//Función limpiar
function limpiar()
{
	$("#idweb").val("");

	$("#posicion").val("");
	$("#contenidoes").val("");
	$("#contenidoen").val("");
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
		"lengthMenu": [ 2, 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
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
					url: '../ajax/web.php?op=listar',
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
	    //"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Función para guardar o editar
function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/web.php?op=guardaryeditar",
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

function mostrar(idweb)
{
	$.post("../ajax/web.php?op=mostrar",{idweb : idweb}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#posicion").val(data.posicion);

		$("#contenidoes").val(data.contenidoes);
		
		$("#contenidoen").val(data.contenidoen);

 		$("#idweb").val(data.idweb);

 	})
}

//Función para desactivar registros
function desactivar(idweb)
{
	bootbox.confirm("¿Está Seguro de desactivar El Contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/web.php?op=desactivar", {idweb : idweb}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idweb)
{
	bootbox.confirm("¿Está Seguro de activar El Contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/web.php?op=activar", {idweb : idweb}, function(e){
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
        	$.post("../ajax/web.php?op=publicar", function(e){
        		bootbox.alert(e);
        	});	
        }
	})
}


init();