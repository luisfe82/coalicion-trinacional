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
                            <b>Ayuda :</b><b class="text-primary"> Sección Permisos</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Permisos</b> En esta sección del administrador, podra ver enlistados los permisos que podran tener los usuarios, en caso de requerir modificar algunos de ellos tendra que realizarlos directamente su programador encargado del codigo.
                                <br><br>
                                &nbsp;&nbsp;Esto lo podra hace en la seccion de su hosting en el area de Base de Datos <b><i>(phpMyAdmin)</i></b>.
                                <br><br>
                                &nbsp;&nbsp;A continuación se le mostrará visualmente como y donde puede encontrar dicha sección de la página:
                                <br><br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-info">Id</th>
                                        <th scope="col" class="bg-info">Permiso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Escritorio</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Web</td>
                                    </tr>
                                    <tr>
                                        <th>n</th>
                                        <td>...</td>
                                    </tr>
                                </tbody>
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
                                $titulo = array("","Area de Trabajo Permiso","Area de phpMyAdmin");
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr/>
                            <img class="my-2" src="../files/ayuda/permiso/Diapositiva<?php echo $i; ?>.JPG" alt="" style="width:100%;box-shadow: -7px -7px 1px 0px #000;">
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