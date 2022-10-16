<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tcolabora'] ?></h1>
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
                                            if (isset($colabora[$i])) { 
                                    ?>

                                    <div class="my-4">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="img-fluid rounded-3 efecto-img"
                                                    src="../admin/files/articulo/<?php echo $articulo[$colabora[$i]]['imagen'] ?>"
                                                    alt="">
                                            </div>
                                            <div class="col-md-8 ps-4">
                                                <div class="position-relative">
                                                    <p class="card-title text-terciario text-uppercase lead"
                                                        style="font-size: 1.3rem !important;">
                                                        <?php echo $articulo[$colabora[$i]]['titulo'] ?>
                                                    </p>
                                                    <p class="card-text justify lead"
                                                        style="font-size: 1.2rem !important;">
                                                        <?php echo $articulo[$colabora[$i]]['contcorto'] ?>
                                                    </p>
                                                    <hr>
                                                    <div class="d-flex justify-content-between ">
                                                        <p class="card-text lead text-small">
                                                            <i><?php echo $articulo[$colabora[$i]]['pais'] ?> -
                                                                <?php echo $articulo[$colabora[$i]]['fecha'] ?>
                                                        </p></i>
                                                        <p><a class="bg-boton px-2"
                                                                href="articulo.php?id=<?php echo $colabora[$i] ?>&<?php echo str_replace(' ','-',$articulo[$colabora[$i]]['titulo']); ?>">
                                                                <?php echo $lang['tboton'] ?>
                                                                <i class="fa fa-angle-double-right"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            if (isset($colabora[$i])) {
                                    ?>

                                    <div class="my-4">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="img-fluid rounded-3 efecto-img"
                                                    src="../admin/files/articulo/<?php echo $articulo[$colabora[$i]]['img-articulo'] ?>"
                                                    alt="">
                                            </div>
                                            <div class="col-md-8 ps-4">
                                                <div class="position-relative">
                                                    <p class="card-title text-terciario text-uppercase lead"
                                                        style="font-size: 1.3rem !important;">
                                                        <?php echo $articulo[$colabora[$i]]['titulo'] ?>
                                                    </p>
                                                    <p class="card-text justify lead"
                                                        style="font-size: 1.2rem !important;">
                                                        <?php echo $articulo[$colabora[$i]]['contcorto'] ?>
                                                    </p>
                                                    <hr>
                                                    <div class="d-flex justify-content-between ">
                                                        <p class="card-text lead text-small">
                                                            <i><?php echo $articulo[$colabora[$i]]['pais'] ?> -
                                                                <?php echo $articulo[$colabora[$i]]['fecha'] ?>
                                                        </p></i>
                                                        <p><a class="bg-boton px-2"
                                                                href="articulo.php?id=<?php echo $colabora[$i] ?>&<?php echo str_replace(' ','-',$articulo[$colabora[$i]]['titulo']); ?>">
                                                                <?php echo $lang['tboton'] ?>
                                                                <i class="fa fa-angle-double-right"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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