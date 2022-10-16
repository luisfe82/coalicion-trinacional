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
                            <b>Ayuda :</b><b class="text-primary"> Sección de Galería</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Galería</b> En esta sección del administrador, podra Agregar,Modificar o desactivar cualquier foto o imagen de las campañas, foros, o acciones de la Coalisión Trinacional.
                                <br><br>
                                &nbsp;&nbsp;Aqui podrá subir todas las fotos o imagenes referentes a la acciones que la coalición en defensa de la educación pública.
                                <br><br>
                                &nbsp;&nbsp;A continuación se mostrará la manera en que esta organizado seccion de
                                Publicaciones de su página, asi mismo se le mostrará visualmente como y donde puede encontrar cada
                                sección que constituye su página:
                                <br><br>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-info">Id</th>
                                        <th scope="col" class="bg-info">Fecha</th>
                                        <th scope="col" class="bg-info">Categoría</th>
                                        <th scope="col" class="bg-info">Titulo</th>
                                        <th scope="col" class="bg-info">Autor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                        <td>1</td>
                                        <td>02/10/2021</td>
                                        <td>Acciones</td>
                                        <td>Conferenc...</td>
                                        <td>Trinacional</td>
                                    </tr>
                                    <tr>                                        
                                        <td>2</td>
                                        <td>02/10/2021</td>
                                        <td>Acciones</td>
                                        <td>Conferenc...</td>
                                        <td>Trinacional</td>
                                    </tr>
                                    <tr>
                                        <th>n</th>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="bg-info">Este es asignado Automaticamente</th>
                                        <th class="bg-info">Fecha de evento</th>
                                        <th class="bg-info">Aqui podra ingresar la categoría (Acciones, Campañas, Conferencias...) 2 secciones (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Aqui podras colocar el titulo del articulo 2 secciones (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Aqui colocará responsable de la nota, 2 secciones (ESPAÑOL-INGLES)</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <br><br>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th scope="col" class="bg-info">Pais</th>
                                        <th scope="col" class="bg-info">Imagen</th>
                                        <th scope="col" class="bg-info">Condicion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                        <td>México</td>
                                        <td>Imagen 750X604</td>
                                        <td>Activado</td>
                                    </tr>
                                    <tr>
                                        <td>México</td>
                                        <td>Imagen 750X604</td>
                                        <td>Activado</td>
                                    </tr>
                                    <tr>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>                                        
                                        <th class="bg-info">Aqui colocará el pais responsable de la nota, 2 secciones (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Aqui colocaras una imagen que se mostrará en la página principal</th>
                                        <th class="bg-info">Aqui se visualizará si el contenido esta activo o desactivado</th>
                                    </tr>
                                </tfoot>
                            </table>
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
                                &nbsp;&nbsp;<b>Paso 1</b> Acontinución se le mostrará una guía visual para que pueda ver
                                claramente la manera correcta de operar esta sección del administrador.
                                <br><br>
                            </p>
                        </div>
                        <div class="col-md-1 "></div>
                        <div class="col-md-12">
                            <?php
                                $titulo = array(
                                    "",
                                    "Area de Trabajo Galerìa",
                                    "Area de Agregar una imagen a la Galería",
                                    "Area de Modificar datos o imagen en Galeía",
                                    "Sección donde se Mostrará lo capturado"
                                );
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr />
                            <img class="my-2" src="../files/ayuda/galeria/Diapositiva<?php echo $i; ?>.JPG" alt=""
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