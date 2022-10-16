<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tcampañas'] ?></h1>
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
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true"><?php echo $lang['tpagina'] ?> 1</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false"><?php echo $lang['tpagina'] ?> 2</button>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="row">

                                    <?php
                                        for ($i=0; $i < 6; $i++) {
                                            if (isset($campania[$i])) { 
                                    ?>

                                    <div class="my-4 position-relative format-img">
                                        <img class="img-fluid"
                                            src="../admin/files/carousel/<?php echo $articulo[$campania[$i]]['imagenbarner'] ?>"
                                            alt="">
                                        <p class="lead text-center text-terciario fs-2">
                                            <?php echo $articulo[$campania[$i]]['titulo'] ?>
                                        </p>
                                        <p class="lead fs-5 justify">
                                            <?php echo $articulo[$campania[$i]]['contcorto'] ?>
                                        </p>
                                        <hr>
                                        <p class="d-flex justify-content-between">
                                            <span>
                                                <a class="bg-boton px-2"
                                                    href="articulo.php?id=<?php echo $campania[$i] ?>&<?php echo str_replace(' ','-',$articulo[$campania[$i]]['titulo']); ?>">
                                                    <?php echo $lang['tboton'] ?>
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </span>
                                        </p>
                                    </div>

                                    <?php
                                        }
                                     }
                                    ?>


                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="row">

                                    <?php
                                        for ($i=6; $i < 12; $i++) { 
                                            if (isset($campania[$i])) {
                                    ?>

                                    <div class="my-4 position-relative format-img">
                                        <img class="img-fluid"
                                            src="../admin/files/carousel/<?php echo $campania[$campania[$i]]['imagenbarner'] ?>"
                                            alt="" >
                                        <p class="lead text-center text-terciario fs-2">
                                            <?php echo $articulo[$campania[$i]]['titulo'] ?>
                                        </p>
                                        <p class="lead fs-5 justify">
                                            <?php echo $articulo[$campania[$i]]['contcorto'] ?>
                                        </p>
                                        <hr>
                                        <p class="d-flex justify-content-between">
                                            <span>
                                                <a class="bg-boton px-2"
                                                    href="articulo.php?id=<?php echo $campania[$i] ?>&<?php echo str_replace(' ','-',$articulo[$campania[$i]]['titulo']); ?>">
                                                    <?php echo $lang['tboton'] ?>
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </span>
                                        </p>
                                    </div>

                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
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