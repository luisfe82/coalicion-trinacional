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
                            <b>Ayuda :</b><b class="text-primary"> Sección Historia</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Historia</b> En esta sección del administrador, podra Agregar, Modificar o
                                Desactivar cualquier contenido referente a la historia de la organizaciòn.
                                <br><br>
                                &nbsp;&nbsp;Aqui podrá encontrar en orden Descendente todoas las acciones realizadas durantes los ultimos años desde su creación.
                                <br><br>
                                &nbsp;&nbsp;A continuación se mostrará la manera en que esta organizado seccion de
                                historia de su página, asi mismo se le mostrará visualmente como y donde puede encontrar cada
                                sección que constituye su página:
                                <br><br>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-info">Id</th>
                                        <th scope="col" class="bg-info">Fecha</th>
                                        <th scope="col" class="bg-info">imagen</th>
                                        <th scope="col" class="bg-info">Titulo</th>
                                        <th scope="col" class="bg-info">Contenido</th>
                                        <th scope="col" class="bg-info">Pie de Nota</th>
                                        <th scope="col" class="bg-info">Condicion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>02/10/2021</th>
                                        <td>foto</td>
                                        <td>Creación</td>
                                        <td>La creación ...</td>
                                        <td>Octubre 2021</td>
                                        <td>Activado</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>02/05/2019</th>
                                        <td>foto</td>
                                        <td>Creación</td>
                                        <td>La creación ...</td>
                                        <td>Mayo 2019</td>
                                        <td>Activado</td>
                                    </tr>
                                    <tr>
                                        <th>n</th>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="bg-info">Este es asignado Automaticamente</th>
                                        <th class="bg-info">Fecha del evento</th>
                                        <th class="bg-info">imagen relacionada al evento</th>
                                        <th class="bg-info">titulo del evento 2 secciones (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Contenido relacionado al titulo (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Pie de la nota referente al evento</th>
                                        <th class="bg-info">Permite Desactivar o activar usuario</th>
                                    </tr>
                                </tfoot>
                            </table>
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
                                &nbsp;&nbsp;<b>Paso 1</b> Acontinución se le mostrará una guía visual para que pueda ver
                                claramente la manera correcta de operar esta sección del administrador.
                                <br><br>
                            </p>
                        </div>
                        <div class="col-md-1 "></div>
                        <div class="col-md-12">
                            <?php
                                $titulo = array("","Area de Trabajo Historia","Agregar un nuevo contenido","Editar un contenido ya existente","Seccion de ORIGEN E HISTORIA");
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr />
                            <img class="my-2" src="../files/ayuda/historia/Diapositiva<?php echo $i; ?>.JPG" alt=""
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