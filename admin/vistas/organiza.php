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
                        <h1 class="box-title">Contenido de Organizaciones
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
                                <th>Logo</th>
                                <th>Tipo</th>
                                <th>Titulo</th>
                                <th>Direccion</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Logo</th>
                                <th>Tipo</th>
                                <th>Titulo</th>
                                <th>Direccion</th>
                                <th>Estado</th>
                            </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-2">
                                    <label>Fecha de Ingreso(*):</label>
                                    <input type="hidden" name="idorganiza" id="idorganiza">
                                    <input type="date" class="form-control" name="fecha" id="fecha" required>
                                </div>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Tipo Español (*):</label>
                                <input type="text" class="form-control" name="tipo" id="tipo" maxlength="50"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Tipo Inlges (*):</label>
                                <input type="text" class="form-control" name="entipo" id="entipo" maxlength="50"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Titulo Español (*):</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" maxlength="100"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Titulo Inlges (*):</label>
                                <input type="text" class="form-control" name="entitulo" id="entitulo" maxlength="100"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Direccion Español:</label>
                                <input type="text" class="form-control" name="direc" id="direc" maxlength="200"
                                    placeholder="Escribe contenido aqui..." onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Direccion Inlges:</label>
                                <input type="text" class="form-control" name="endirec" id="endirec" maxlength="200"
                                    placeholder="Escribe contenido aqui..." onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Url:</label>
                                <input type="text" class="form-control" name="url" id="url" maxlength="100"
                                    placeholder="Escribe contenido aqui...">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Telefono:</label>
                                <input type="text" class="form-control" name="fone" id="fone" maxlength="100"
                                    placeholder="Escribe contenido aqui..." onkeyup="this.value=Numeros(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Imagen:</label>
                                <input type="file" class="form-control" name="imagen" id="imagen"
                                    accept="image/x-png,image/gif,image/jpeg">
                                <input type="hidden" name="imagenactual" id="imagenactual">
                                <img src="" width="150px" height="120px" id="imagenmuestra">
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i
                                        class="fa fa-save"></i>Guardar</button>

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
<script type="text/javascript" src="scripts/organiza.js"></script>
<?php
}
ob_end_flush();
?>