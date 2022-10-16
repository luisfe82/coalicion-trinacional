<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tforos'] ?></h1>
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
                        <div class="row">

                            <?php
                                for ($i=0; $i < 12; $i++) {
                                    if (isset($foro[$i])) { 
                            ?>

                            <div class="col-md-4 position-relative py-4">
                                <div class="class="">
                                    <img class=" img-fluid rounded-top efecto-img"
                                    src="../admin/files/articulo/<?php echo $articulo[$foro[$i]]['imagen'] ?>" alt="">
                                    <a class="bg-boton px-2 d-flex align-items-stretch bg-primario"
                                        href="articulo.php?id=<?php echo $foro[$i] ?>&<?php echo str_replace(' ','-',$articulo[$foro[$i]]['titulo']); ?>">
                                        <?php echo $articulo[$foro[$i]]['titulo'] ?>
                                    </a>
                                </div>
                            </div>

                            <?php
                                }
                            }
                            ?>

                        </div>
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