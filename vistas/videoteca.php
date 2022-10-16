<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tvideoteca'] ?></h1>
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
                            for ($i=1; $i < 5; $i++) {
                                if (isset($datosv[$i])) { 
                        ?>

                        <div class="row mb-4">
                            <div class="col-md-7">
                                <div class="video-responsive">
                                    <iframe
                                        src="<?php echo $datosv[$i]['link']; ?>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6 class="text-primario  lead">
                                    <?php echo $datosv[$i]['titulo']; ?>
                                </h6>
                                <h6 class="text-terciario lead" style="font-size: 1rem !important;">
                                    <?php echo $datosv[$i]['contenido']; ?>
                                </h6>
                                <h6 class="text-primario text-small lead">
                                    <?php echo $datosv[$i]['pais']; ?>
                                    -
                                    <span
                                        class="text-muted"><?php echo $datosv[$i]['fecha']; ?></span>
                                </h6>
                                <hr>
                                <h4 class="text-uppercase text-primario "><?php echo $lang['compartir'] ?> </h4>
                                <ul class="nav justify-content-evenly social text-center">
                                    <li class="nav-item " style="font-size:x-large;">
                                        <a class="trans" href="<?php echo $datosv[$i]['facebook'] ?>"
                                            target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item " style="font-size:x-large;">
                                        <a class="trans" href="<?php echo $datosv[$i]['twitter'] ?>"
                                            target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item " style="font-size:x-large;">
                                        <a class="trans" href="<?php echo $datosv[$i]['whatsapp'] ?>"
                                            target="_blank">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
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