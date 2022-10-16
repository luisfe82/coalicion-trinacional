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
                            <b>Ayuda :</b><b class="text-primary"> Sección de Organizaciones</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Organizaciones</b> En esta sección del administrador, podra Agregar, Modificar o
                                Desactivar cualquier contenido referente a las organizaciones integrantes de la Coalisión Trinacional.
                                <br><br>
                                &nbsp;&nbsp;Aqui podrá encontrar todos las Organizaciones y sus datos mas representativos, que contribuyen en la defensa de la Educación Pública.
                                <br><br>
                                &nbsp;&nbsp;A continuación se mostrará la manera en que esta organizado seccion de
                                Organizaciones de su página, asi mismo se le mostrará visualmente como y donde puede encontrar cada
                                sección que constituye su página:
                                <br><br>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-info">Id</th>
                                        <th scope="col" class="bg-info">Fecha</th>
                                        <th scope="col" class="bg-info">imagen</th>
                                        <th scope="col" class="bg-info">Tipo</th>
                                        <th scope="col" class="bg-info">Titulo</th>
                                        <th scope="col" class="bg-info">Url</th>
                                        <th scope="col" class="bg-info">Direccion</th>
                                        <th scope="col" class="bg-info">Telefono</th>
                                        <th scope="col" class="bg-info">Condicion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>02/10/2021</th>
                                        <td>foto</td>
                                        <td>Sindicato</td>
                                        <td>Sindicato de la...</td>
                                        <td>www.la-org...</td>
                                        <td>Avenida de...</td>
                                        <td>356-656...</td>
                                        <td>Activado</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>02/10/2021</th>
                                        <td>foto</td>
                                        <td>Sindicato</td>
                                        <td>Sindicato de la...</td>
                                        <td>www.la-org...</td>
                                        <td>Avenida de...</td>
                                        <td>356-656...</td>
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
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="bg-info">Este es asignado Automaticamente</th>
                                        <th class="bg-info">Fecha de ingreso al sistema</th>
                                        <th class="bg-info">Logo representativo de la organizacion</th>
                                        <th class="bg-info">Aqui podra colocar si pertenece a (Sindicato, Seccion,etc..) 2 secciones (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Aqui colocará el nombre de la organización,2 secciones (ESPAÑOL-INGLES)</th>
                                        <th class="bg-info">Aquí podrá agregar la pagina web de la organización o correo electrónico</th>
                                        <th class="bg-info">Aquí colocara la ubización de la organización,2 secciones (ESPAÑOL-INGLES) </th>
                                        <th class="bg-info">Aquí colocará el telefono de la organización</th>
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
                                $titulo = array("","Area de Trabajo Organizaciones","Agregar un nuevo contenido","Editar un contenido ya existente","Seccion de ORGANIZACIONES");
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr />
                            <img class="my-2" src="../files/ayuda/organiza/Diapositiva<?php echo $i; ?>.JPG" alt=""
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