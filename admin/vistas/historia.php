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
                        <h1 class="box-title">Contenido de Historia
                            <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i
                                    class="fa fa-plus-circle"></i> Agregar</button>
                            <button class="btn btn-primary" id="btnpublicar" onclick="publicar()"
                                style="margin:0.2rem"><i class="fa fa-check"></i> Publicar</button>
                            <div class="box-tools pull-right">
                            </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Imagen</th>
                                <th>Fecha</th>
                                <th>Titulo Español</th>
                                <th>Titulo Ingles</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Imagen</th>
                                <th>Fecha</th>
                                <th>Titulo Español</th>
                                <th>Titulo Ingles</th>
                                <th>Estado</th>
                            </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-2">
                                    <label>Fecha de Ingreso(*):</label>
                                    <input type="hidden" name="idhistoria" id="idhistoria">
                                    <input type="date" class="form-control" name="fecha" id="fecha" required>
                                </div>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Titulo Español (*):</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" maxlength="100"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Titulo Inlges (*):</label>
                                <input type="text" class="form-control" name="ten" id="ten" maxlength="100"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contenido en Español (*):</label>
                                <textarea class="form-control" name="contenido" id="contenido" rows="5" maxlength="1000"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)"></textarea>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contenido en Ingles (*):</label>
                                <textarea class="form-control" name="cen" id="cen" rows="5" maxlength="1000"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)"></textarea>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Pie en Español (*):</label>
                                <input type="text" class="form-control" name="pie" id="pie" maxlength="50"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Pie en Ingles (*):</label>
                                <input type="text" class="form-control" name="pen" id="pen" maxlength="50"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Imagen:</label>
                                <input type="file" class="form-control" name="imagen" id="imagen"
                                    accept="image/x-png,image/gif,image/jpeg">
                                <input type="hidden" name="imagenactual" id="imagenactual">
                                <img src="" width="150px" height="120px" id="imagenmuestra">
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
<script type="text/javascript" src="scripts/historia.js"></script>
<?php
}
ob_end_flush();
?>