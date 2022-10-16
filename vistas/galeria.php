<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tgaleria'] ?></h1>
    </div>
</div>

<!-- main -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <!---------------------------------------------Galeria -->
                    <div class="col-md-8 my-3">
                        <div class="row ">

                            <div class="mb-3 col-md-12">
                                <a href="#">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../public/img/carpeta1<?php echo $_SESSION['lang']; ?>.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 m-auto">
                                        <div class="card-body">
                                            <h5 class="lead text-terciario" style="font-size:1.6rem; font-weight: 900;"><?php echo $lang['text-gal1']; ?></h5>
                                            <p class="lead"><?php echo $lang['cont-gal1']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="mb-3 col-md-12 ">
                                <a href="#">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../public/img/carpeta2<?php echo $_SESSION['lang']; ?>.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 m-auto">
                                        <div class="card-body">
                                            <h5 class="lead text-terciario" style="font-size:1.6rem; font-weight: 900;"><?php echo $lang['text-gal2']; ?></h5>
                                            <p class="lead"><?php echo $lang['cont-gal2']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="mb-3 col-md-12">
                                <a href="#">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../public/img/carpeta3<?php echo $_SESSION['lang']; ?>.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 m-auto">
                                        <div class="card-body">
                                            <h5 class="lead text-terciario" style="font-size:1.6rem; font-weight: 900;"><?php echo $lang['text-gal3']; ?></h5>
                                            <p class="lead"><?php echo $lang['cont-gal3']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="mb-3 col-md-12">
                                <a href="#">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../public/img/carpeta4<?php echo $_SESSION['lang']; ?>.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 m-auto">
                                        <div class="card-body">
                                            <h5 class="lead text-terciario" style="font-size:1.6rem; font-weight: 900;"><?php echo $lang['text-gal4']; ?></h5>
                                            <p class="lead"><?php echo $lang['cont-gal4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="mb-3 col-md-12">
                                <a href="#">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../public/img/carpeta5<?php echo $_SESSION['lang']; ?>.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 m-auto">
                                        <div class="card-body">
                                            <h5 class="lead text-terciario" style="font-size:1.6rem; font-weight: 900;"><?php echo $lang['text-gal5']; ?></h5>
                                            <p class="lead"><?php echo $lang['cont-gal5']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="mb-3 col-md-12">
                                <a href="#">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../public/img/carpeta6<?php echo $_SESSION['lang']; ?>.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 m-auto">
                                        <div class="card-body">
                                            <h5 class="lead text-terciario" style="font-size:1.6rem; font-weight: 900;"><?php echo $lang['text-gal6']; ?></h5>
                                            <p class="lead"><?php echo $lang['cont-gal6']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
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