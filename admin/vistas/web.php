<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION['nombre'])) {
    header("Location: login.html");
}else{
require 'header.php';

if ($_SESSION['web']==1) 
{

?>
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">
                            Contenido Web
                            <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)">
                                <i class="fa fa-plus-circle"></i> Agregar</button>
                            <button class="btn btn-primary" id="btnpublicar" onclick="publicar()">
                                <i class="fa fa-check"></i> Publicar</button>
                        </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Posicion</th>
                                <th>Contenido Español</th>
                                <th>Contenido Ingles</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Posicion</th>
                                <th>Contenido Español</th>
                                <th>Contenido Ingles</th>
                                <th>Estado</th>
                            </tfoot>
                        </table>
                    </div>
                    <div>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Posicion(*):</label>
                                <input type="hidden" name="idweb" id="idweb">
                                <input type="text" class="form-control" name="posicion" id="posicion" maxlength="15"
                                    placeholder="Posicion" onkeyup="this.value=NumText(this.value)" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Contenido en Español (*)["Solo le permite 1000 caracteres"]:</label>
                                <textarea type="text" class="form-control" name="contenidoes" id="contenidoes" rows="5"
                                    maxlength="1000" placeholder="Contenido en Español" onkeyup="this.value=NumText(this.value)" required></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Contenido en Ingles (*)["Solo le permite 1000 caracteres"]:</label>
                                <textarea type="text" class="form-control" name="contenidoen" id="contenidoen" rows="5"
                                    maxlength="1000" placeholder="Contenido en Ingles" onkeyup="this.value=NumText(this.value)" required></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>
                                    Guardar</button>

                                <button class="btn btn-danger" onclick="cancelarform()" type="button"><i
                                        class="fa fa-arrow-circle-left"></i> Cancelar</button>

                            </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<?php
}
else{
    require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/web.js"></script>
<?php
}
ob_end_flush();
?>