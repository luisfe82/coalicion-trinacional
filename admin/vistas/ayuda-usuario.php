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
                            <b>Ayuda :</b><b class="text-primary"> Sección Usuario</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Usuario</b> En esta sección del administrador, podra Agregar, Modificar o
                                Desactivar cualquier usuario que manejara el administrador y el contenido de la página
                                web.
                                <br><br>
                                &nbsp;&nbsp;Esta sección es importante ya que contendra los usuarios y accesos a cada
                                seccion de la página, el cual solo el administrador sera el encargado de asignar y
                                proveer los accesos.
                                <br><br>
                                &nbsp;&nbsp;A continuación se mostrará la manera en que esta organizado seccion de
                                usuarios
                                de su página, asi mismo se le mostrará visualmente como y donde puede encontrar cada
                                sección que constituye su página:
                                <br><br>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-info">Id</th>
                                        <th scope="col" class="bg-info">Nombre</th>
                                        <th scope="col" class="bg-info">Email</th>
                                        <th scope="col" class="bg-info">Cargo</th>
                                        <th scope="col" class="bg-info">Login</th>
                                        <th scope="col" class="bg-info">Clave</th>
                                        <th scope="col" class="bg-info">Foto</th>
                                        <th scope="col" class="bg-info">Condicion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>Luis</th>
                                        <td>luis@gmail.com</td>
                                        <td>usuario</td>
                                        <td>luis</td>
                                        <td>****</td>
                                        <td>imagen</td>
                                        <td>Activado</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>Pedro</th>
                                        <td>Pedro@gmail.com</td>
                                        <td>usuario</td>
                                        <td>Pedro</td>
                                        <td>******</td>
                                        <td>imagen</td>
                                        <td>Desactivado</td>
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
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="bg-info">Este es asignado Automaticamente</th>
                                        <th class="bg-info">Nombre de usuario</th>
                                        <th class="bg-info">Su correo electronico</th>
                                        <th class="bg-info">Cargo dentro de la Org.</th>
                                        <th class="bg-info">Nombre asignado por el administrador</th>
                                        <th class="bg-info">Clave asignada por el usuario</th>
                                        <th class="bg-info">imagen del usuario si asi lo desea</th>
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
                                $titulo = array("","Area de Trabajo Usuario","Agregar un nuevo Usuario","Editar un usuario ya existente");
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr />
                            <img class="my-2" src="../files/ayuda/usuario/Diapositiva<?php echo $i; ?>.JPG" alt=""
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