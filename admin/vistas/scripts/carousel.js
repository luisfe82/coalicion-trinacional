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
    $("#imagenmuestra2").hide();
    $("#imagenmuestra3").hide();
}

//Función limpiar
function limpiar()
{
	$("#fecha").val("");

	$("#categoria").val("");
	$("#encategoria").val("");

	$("#titulo").val("");
	$("#entitulo").val("");

	$("#barra1").val("");
	$("#enbarra1").val("");

	$("#barra2").val("");
	$("#enbarra2").val("");

	$("#autor").val("");
    $("#enautor").val("");

    $("#pais").val("");
    $("#enpais").val("");

    $("#contcorto").val("");
    $("#encontcorto").val("");

    $("#contlargo").val("");
    $("#encontlargo").val("");

	$("#imagenmuestra").attr("src","");
	$("#imagen").val("");
	$("#imagenactual").val("");

    $("#imagenmuestra2").attr("src","");
	$("#imagenart").val("");
	$("#imagenactual2").val("");

    $("#imagenmuestra3").attr("src","");
	$("#imagenlat").val("");
	$("#imagenactual3").val("");

	$("#idcarousel").val("");
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
					url: '../ajax/carousel.php?op=listar',
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
		url: "../ajax/carousel.php?op=guardaryeditar",
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

function mostrar(idcarousel)
{
	$.post("../ajax/carousel.php?op=mostrar",{idcarousel : idcarousel}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#fecha").val(data.fecha);

		$("#categoria").val(data.categoria);
		$("#encategoria").val(data.encategoria);

		$("#titulo").val(data.titulo);
		$("#entitulo").val(data.entitulo);

		$("#barra1").val(data.barra1);
		$("#enbarra1").val(data.enbarra1);

		$("#barra2").val(data.barra2);
		$("#enbarra2").val(data.enbarra2);

		$("#autor").val(data.autor);
		$("#enautor").val(data.enautor);

        $("#pais").val(data.pais);
		$("#enpais").val(data.enpais);

		$("#contcorto").val(data.contcorto);
		$("#encontcorto").val(data.encontcorto);

		$("#contlargo").val(data.contlargo);
		$("#encontlargo").val(data.encontlargo);

		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/carousel/"+data.imagen);
		$("#imagenactual").val(data.imagen);

		$("#imagenmuestra2").show();
		$("#imagenmuestra2").attr("src","../files/articulo/"+data.imagenart);
		$("#imagenactual2").val(data.imagenart);

		$("#imagenmuestra3").show();
		$("#imagenmuestra3").attr("src","../files/banner-sidebar/"+data.imagenlat);
		$("#imagenactual3").val(data.imagenlat);

		$("#idcarousel").val(data.idcarousel);

 	});
}


//Función para desactivar registros
function desactivar(idcarousel)
{
	bootbox.confirm("¿Está Seguro de desactivar el contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/carousel.php?op=desactivar", {idcarousel : idcarousel}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idcarousel)
{
	bootbox.confirm("¿Está Seguro de activar el contenido?", function(result){
		if(result)
        {
        	$.post("../ajax/carousel.php?op=activar", {idcarousel : idcarousel}, function(e){
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
        	$.post("../ajax/carousel.php?op=publicar", function(e){
        		bootbox.alert(e);
        	});	
        }
	})
}

init(); 