<?php
require 'header.php';
?>
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border text-center">
                        <h1 class="box-title lead" style="font-size:4rem;">
                            <b>Ayuda :</b><b class="text-primary"> Sección de Crear Nota Principal</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Crar Nota Principal</b> En esta seccion del Administrador, nos llevará a una página externa que nos auxiliara para crear nuestra nota principal, la cual será utilñizada cuando estemos dando de alta o modificando un nuevo articulo o uno ya existente, o modificando las notas principales del carousel de la página principal.  
                                <br><br>
                                &nbsp;&nbsp;Está pagina externa nos ayudará a darle el formato deseado a nuestro Articulo, desde insertar titulos, parrafos, tablas, imagenes, videos, enlace a paginas, con lo que nos facilitará por mucho la manipulación y manejo de nuestro contenido.
                                <br><br>
                                &nbsp;&nbsp;A continuación se mostrará la manera en que podrá hacer uso de todas las herramientas y opciones con las que cuenta nuestro editor de contenido, asi mismo se le mostrará visualmente como y donde puede encontrar cada una de las herramientas de dicho editor:
                                <br><br>                            
                            </p>
                        </div>
                        <div class="col-md-1 "></div>
                    </div>
                    <!--Fin centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Intrucciones</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Paso 1</b> A continuación se le mostrará una guía visual para que pueda ver
                                claramente la manera correcta de operar esta editor.
                                <br><br>
                            </p>
                        </div>
                        <div class="col-md-1 "></div>
                        <div class="col-md-12">
                            <?php
                                $titulo = array(
                                    "",
                                    "Como acceder la opción Crear Nota Principal",
                                    "Como empezar a usar la herramienta, Borrar contenido existente, despues copiar contenido a ocupar",
                                    "Como copiar texto de un archivo <b>PDF</b>",
                                    "Como copiar texto de un archivo <b>WORD</b>",
                                    "Como insertar el texto copiado en el Editor",
                                    "Como empezar a dar formato a mi texto",
                                    "Como empezar a dar formato a mi texto",
                                    "Insertando un Enlace de página externa",
                                    "Insertando una imagen en mi contenido",
                                    "Como conseguir el link de imagen para mi contenido",
                                    "Insertando un video en mi contenido",
                                    "Como conseguir el link del video para mi contenido",
                                    "Insertando listas con viñetas, divisor, fecha ",
                                    "Insertando tablas en mi contenido",
                                    "Como copiar el Articulo Terminado, publicado en mi página",
                                );
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr />
                            <img class="my-2" src="../files/ayuda/crear/Diapositiva<?php echo $i; ?>.JPG" alt=""
                                style="width:100%;box-shadow: -7px -7px 1px 0px #000;">
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<?php
require 'footer.php';
?>