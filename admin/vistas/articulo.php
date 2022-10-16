<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION['nombre'])) {
    header("Location: login.html");
}else{
require '../leng/categoria.php';
require '../leng/paises.php';
require 'header.php';

if ($_SESSION['contenido']==1) 
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
                            Articulos de la Organizaciòn
                            <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i
                                    class="fa fa-plus-circle"></i> Agregar</button>
                            <button class="btn btn-primary" id="btnpublicar" onclick="publicar()"
                                style="margin:0.2rem"><i class="fa fa-check"></i> Publicar</button>
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
                                <th>Imagen</th>
                                <th>Fecha</th>
                                <th>Titulo</th>
                                <th>Categoria</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Imagen</th>
                                <th>Fecha</th>
                                <th>Titulo</th>
                                <th>Categoria</th>
                                <th>Estado</th>
                            </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST" enctype="multipart/form-data">

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-2">
                                    <label>Fecha de Ingreso(*):</label>
                                    <input type="hidden" class="form-control" name="idarticulo" id="idarticulo">
                                    <input type="date" class="form-control" name="fecha" id="fecha" required>
                                </div>
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Categoría Español (*):</label>
                                <select class="form-control" name="categoria" id="categoria" required>
                                    <option value="" selected="selected"> - seleccione categoria - </option>
                                    <?php for ($i=1; $i < (count($categoria)+1); $i++) { ?>
                                    <option value="<?php echo $categoria[$i]['nombre']; ?>">
                                        <?php echo $categoria[$i]['nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Categoría Ingles (*):</label>
                                <select class="form-control" name="encategoria" id="encategoria" required>
                                    <option value="" selected="selected"> - select category - </option>
                                    <?php for ($i=1; $i < (count($categoria)+1); $i++) { ?>
                                    <option value="<?php echo $categoria[$i]['ennombre']; ?>">
                                        <?php echo $categoria[$i]['ennombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Pais Español (*):</label>
                                <select class="form-control" name="pais" id="pais" required>
                                    <option value="" selected="selected"> - seleccione pais - </option>
                                    <?php for ($i=1; $i < (count($paises)+1); $i++) { ?>
                                    <option value="<?php echo $paises[$i]['nombre']; ?>">
                                        <?php echo $paises[$i]['nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Pais Ingles (*):</label>
                                <select class="form-control" name="enpais" id="enpais" required>
                                    <option value="" selected="selected"> - select country - </option>
                                    <?php for ($i=1; $i < (count($paises)+1); $i++) { ?>
                                    <option value="<?php echo $paises[$i]['ennombre']; ?>">
                                        <?php echo $paises[$i]['ennombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Titulo Español (*):</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" maxlength="500"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Titulo Ingles (*):</label>
                                <input type="text" class="form-control" name="entitulo" id="entitulo" maxlength="500"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Autor Español (*):</label>
                                <input type="text" class="form-control" name="autor" id="autor" maxlength="100"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Autor Ingles (*):</label>
                                <input type="text" class="form-control" name="enautor" id="enautor" maxlength="100"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)">
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contenido Corto Español (*):</label>
                                <textarea class="form-control" name="contcorto" id="contcorto" rows="5" maxlength="1000"
                                    placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)"></textarea>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contenido Corto Ingles (*):</label>
                                <textarea class="form-control" name="encontcorto" id="encontcorto" rows="5"
                                    maxlength="1000" placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)"></textarea>
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contenido Largo Español (*):</label>
                                <textarea class="form-control" name="contlargo" id="contlargo" rows="5"
                                    maxlength="10000" placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)"></textarea>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contenido Largo Ingles (*):</label>
                                <textarea class="form-control" name="encontlargo" id="encontlargo" rows="5"
                                    maxlength="10000" placeholder="Escribe contenido aqui..." required
                                    onkeyup="this.value=NumText(this.value)"></textarea>
                            </div>
                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Imagen:</label>
                                <input type="file" class="form-control" name="imagen" id="imagen"
                                    accept="image/x-png,image/gif,image/jpeg">
                                <input type="hidden" name="imagenactual" id="imagenactual">
                                <img src="" width="120px" height="120px" id="imagenmuestra">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Imagen Barner:</label>
                                <input type="file" class="form-control" name="imagenbarner" id="imagenbarner"
                                    accept="image/x-png,image/gif,image/jpeg">
                                <input type="hidden" name="imagenactual2" id="imagenactual2">
                                <img src="" width="200px" height="120px" id="imagenmuestra2">
                            </div>

                            <!-- ══════════════════════════════════════════════════════════════════════════════════════════════════════ -->

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
<script type="text/javascript" src="scripts/articulo.js"></script>
<?php
}
ob_end_flush();
?>