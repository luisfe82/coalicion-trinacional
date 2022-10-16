<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION['nombre'])) {
    header("Location: login.html");
}else{
require 'header.php';

if ($_SESSION['escritorio']==1) 
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
                    <div class="box-header with-border text-center">
                        <h1 class="box-title lead" style="font-size:6rem;">
                            <b>Bienvenido</b>
                        </h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                        <img src="../public/img/coalicion.jpg" alt="" style="width:100%;">
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
}
ob_end_flush();
?>