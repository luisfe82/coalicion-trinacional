<!-- Header -->
<?php include 'template/header-carousel.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<!-- main -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <!---------------------------------------------------------------carousel -->
                    <div class="col-md-8">
                        <h4 class="text-muted my-4">
                            <?= (isset($carousel[$_GET['id']]['categoria']) && $carousel[$_GET['id']]['categoria'] != "") ? $carousel[$_GET['id']]['categoria'] : ""; ?>
                        </h4>

                        <figure class="my-4">
                            <blockquote class="blockquote">
                                <p class="lead text-terciario" style="font-size: 2rem !important;"><?php echo $carousel[$_GET['id']]['titulo'] ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer my-2 text-primario"><?php echo $carousel[$_GET['id']]['pais'] ?> <cite class="text-muted"> <?php echo $carousel[$_GET['id']]['fecha'] ?></cite></figcaption>
                        </figure>

                        <div class="col-md-12">
                            <figure>
                                <img class="img-fluid rounded"
                                src="../admin/files/articulo/<?= $carousel[$_GET['id']]['imagen'] ?>" alt="">
                                <figcaption class="blockquote-footer text-end my-1 text-primario">
                                    Por <cite class="text-muted"> <?php echo $carousel[$_GET['id']]['autor'] ?> </cite>
                                </figcaption>
                            </figure>
                        </div>

                        

                        <div id="contenido largo" class="my-3 justify">
                            <?= (isset($carousel[$_GET['id']]['contcorto']) && $carousel[$_GET['id']]['contcorto'] != "") ? $carousel[$_GET['id']]['contcorto'] : ""; ?>
                        </div>

                        <div id="contenido largo2" class="my-3 justify">
                            <?= (isset($carousel[$_GET['id']]['contlargo']) && $carousel[$_GET['id']]['contlargo'] != "") ? $carousel[$_GET['id']]['contlargo'] : ""; ?>
                        </div>

                        <br>
                        <hr>

                        <h4 class="text-uppercase text-primario"><?php echo $lang['compartir'] ?> </h4>
                        <ul class="nav justify-content-evenly social text-center">
                            <li class="nav-item " style="font-size:x-large;">
                                <a class="trans"
                                    href="https://www.facebook.com/sharer/sharer.php?u=https://coaliciontrinacional.org/vistas/carousel-carousel.php?id=<?php echo $_GET['id']  ?>&<?php echo str_replace(' ','-',$carousel[$_GET['id']]['titulo']) ?>"
                                    target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item " style="font-size:x-large;">
                                <a class="trans"
                                    href="https://twitter.com/intent/tweet?text=<?php echo $carousel[$_GET['id']]['titulo'] ?>&url=https://coaliciontrinacional.org/vistas/carousel-carousel.php?id=<?php echo $_GET['id']  ?>&<?php echo str_replace(' ','-',$carousel[$_GET['id']]['titulo']) ?>"
                                    target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item " style="font-size:x-large;">
                                <a class="trans"
                                    href="whatsapp://send?text=<?php echo $carousel[$_GET['id']]['titulo'] ?> - https://twitter.com/intent/tweet?url=https://coaliciontrinacional.org/vistas/carousel-carousel.php?id=<?php echo $_GET['id']  ?>&<?php echo str_replace(' ','-',$carousel[$_GET['id']]['titulo']) ?>"
                                    target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-----------------------------------------Fin carousel Inicio Barra -->

                    <?php include 'template/sidebar.php'; ?>
                    <!-------------------------------------Fin Barra -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'template/footer.php'; ?>