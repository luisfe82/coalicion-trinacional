<div class="col-md-4 my-3">
    <div class="mb-4">
        <!-- <img src="../files/img/banner-sidebar/conferenciat_baner.jpg" width="360" class="img-fluid" alt=""> -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="8000">
                    <a href="articulo-carousel.php?id=1">
                        <img src="../admin/files/banner-sidebar/<?= (isset($carousel['1']['imagenlat']) && $carousel['1']['imagenlat'] != "") ? $carousel['1']['imagenlat'] : ""; ?>"
                            class="d-block w-100 border border-light border-3 rounded" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                    <a href="articulo-carousel.php?id=2">
                        <img src="../admin/files/banner-sidebar/<?= (isset($carousel['2']['imagenlat']) && $carousel['2']['imagenlat'] != "") ? $carousel['2']['imagenlat'] : ""; ?>"
                            class="d-block w-100 border border-light border-3 rounded" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                    <a href="articulo-carousel.php?id=3">
                        <img src="../admin/files/banner-sidebar/<?= (isset($carousel['3']['imagenlat']) && $carousel['3']['imagenlat'] != "") ? $carousel['3']['imagenlat'] : ""; ?>"
                            class="d-block w-100 border border-light border-3 rounded" alt="...">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span> -->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span> -->
            </button>
        </div>
    </div>

    <div class="marco">
        <h2 class="text-terciario"><?php echo $lang['ultimasentradas']; ?></h2>
    </div>

    <div class="container-fluid my-3">
        <?php
                for ($x=6; $x < 11; $x++) { 
            ?>
        <div class="row mb-2">
            <div class="col-4">
                <a href="articulo.php?id=<?php echo $x ?>&<?php echo str_replace(' ','-',$articulo[$x]['titulo']); ?>">
                    <img src="../admin/files/articulo/<?php echo $articulo[$x]['imagen']; ?>" class="img-fluid"
                        alt="">
                </a>
            </div>
            <div class="col-8">
                <a href="articulo.php?id=<?php echo $x ?>&<?php echo str_replace(' ','-',$articulo[$x]['titulo']); ?>">
                    <h6 class="text-terciario lead" style="font-size: 1rem !important;">
                        <?php echo $articulo[$x]['titulo']; ?>
                    </h6>
                </a>
                <h6 class="text-primario text-small lead">
                    <?php echo $articulo[$x]['pais']; ?>
                    - <span class="text-muted"><?php echo $articulo[$x]['fecha']; ?></span>
                </h6>
            </div>
        </div>
        <?php
                }
            ?>
    </div><!-- bloque de destacados -->

</div>