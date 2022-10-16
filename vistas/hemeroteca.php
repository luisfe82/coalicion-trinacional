<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['themeroteca'] ?></h1>
    </div>
</div>

<!-- main -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <!-----------------------------------------------------articulo  -->
                    <div class="col-md-8 my-3">


                        <?php
                            for ($i=1; $i < 7; $i++) {
                                if (isset($publica[$i])) { 
                        ?>

                        <div class="row my-4">
                            <div class="col-md-12 mb-2">
                                <img class="img-fluid shadow p-3 mb-2 bg-body rounded"
                                    src="../admin/files/publica/<?php echo $publica[$i]['imagen'] ?>"
                                    class="img-fluid w-100" alt="">
                                <div class="row">
                                    <div class="col-2"><a href="<?php echo $publica[$i]['link'] ?>"
                                            target="_blank"><?php echo $lang['tdescargar'] ?> >></a></div>
                                    <div class="col-2">
                                        <h5 class="text-terciario"><?php echo $publica[$i]['titulo'] ?></h5>
                                    </div>
                                    <div class="col-3 m-auto">
                                        <h6 class="text-primario text-small"><?php echo $publica[$i]['pais'] ?> -<span
                                                class="text-muted"><?php echo $publica[$i]['fecha'] ?></span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php
                                }
                            }        
                        ?>

                    </div>
                    <!-----------------------------------------Fin articulo Inicio Barra -->

                    <?php include 'template/sidebar.php'; ?>
                    <!-------------------------------------Fin Barra -->
                </div>

            </div>
        </div>
    </div>
</div>



<?php include 'template/footer.php'; ?>