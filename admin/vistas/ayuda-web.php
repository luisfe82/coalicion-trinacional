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
                            <b>Ayuda :</b><b class="text-primary"> Sección Web</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" style="text-align: justify;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-10 ">
                            <p class="lead" style="font-size:4rem;">Objetivo</p>
                            <p class="lead">
                                &nbsp;&nbsp;<b>Web</b> En esta sección del administrador, podra modificar todo el
                                diccionario de palabras usadas en su página, asi mismo podrá agregar su diccionario en
                                español-ingles.
                                <br><br>
                                &nbsp;&nbsp;Tambien aqui podra modificar el contenido en texto de las secciones de
                                <i><b>"origen e historia"</i></b> y la sección de <b><i>"lo que defendemos"</i></b>.
                                <br><br>
                                &nbsp;&nbsp;A continuación se mostrará la manera en que esta organizado el diccionario
                                de su página, asi mismo se le mostrará visualmente como y donde puede encontrar cada
                                palabra que constituye su diccionario de la página:
                                <br><br>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-info">Id</th>
                                        <th scope="col" class="bg-info">Posicion</th>
                                        <th scope="col" class="bg-info">Contenido Esp</th>
                                        <th scope="col" class="bg-info">Contenido Ingles</th>
                                        <th scope="col" class="bg-info">Condicion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>titulop</td>
                                        <td>Trinacional</td>
                                        <td>Tri-National</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>coaliciont</td>
                                        <td>Coalición</td>
                                        <td>Coalitation</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th>n</th>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            &nbsp;&nbsp;<b>Posición :</b> indica el nombre de donde esta colocado dentro del codigo y
                            sección de la pàgina.<br>
                            &nbsp;&nbsp;<b>Contenido Español :</b> Diccionario que contiene la parte en su lenguaje en
                            <b><i>"ESPAÑOL"</i></b><br>
                            &nbsp;&nbsp;<b>Contenido Ingles :</b> Diccionario que contiene la parte en su lenguaje en
                            <b><i>"INGLES"</i></b><br>
                            &nbsp;&nbsp;<b>Condición :</b> Este le permite solo desactivar una palabra de su diccionario
                            en lugar de borrarla definitivamente<br>
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
                                $titulo = array("","Area de Trabajo Web","Agregar un nueva Palabra","Ubicación de palabras en la Página","Secciones de Menus","Sección Organizaciones y Pie de Página","Sección Correos","Sección Lo que defendemos Parte 1","Sección Lo que defendemos Parte 2","Sección Lo que defendemos Parte 3","Sección Lo que defendemos Parte 4","Sección Lo que defendemos Parte 5","Titulos de Secciones","Sección Galería");
                                for ($i=1; $i < count($titulo); $i++) { 
                            ?>
                            <br>
                            <p class="lead" style="font-size:4rem;"><?php echo $titulo[$i] ?></p>
                            <hr/>
                            <img class="my-2" src="../files/ayuda/web/Diapositiva<?php echo $i; ?>.JPG" alt="" style="width:100%;box-shadow: -7px -7px 1px 0px #000;">
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