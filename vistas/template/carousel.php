<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="8000" style="height: 486px;">

            <a href="articulo-carousel.php?id=1&<?php echo str_replace(' ','-',$carousel['1']['titulo']); ?>">
                <img src="../admin/files/carousel/<?= (isset($carousel['1']['imagen']) && $carousel['1']['imagen'] != "") ? $carousel['1']['imagen'] : ""; ?>" class="d-block w-100 h-100" alt="..." style="object-fit: cover;">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h6 class="text-uppercase bg-navbar p-1" style="display: inline-block;">
                        <?= (isset($carousel['1']['barra1']) && $carousel['1']['barra1'] != "") ? $carousel['1']['barra1'] : ""; ?>
                    </h6>
                    <br>
                    <h6 class="text-uppercase bg-navbar p-1" style="display: inline-block;">
                        <?= (isset($carousel['1']['barra2']) && $carousel['1']['barra2'] != "") ? $carousel['1']['barra2'] : ""; ?>
                    </h6>
                </div>
            </a>

        </div>

        <div class="carousel-item" data-bs-interval="8000" style="height: 486px;">
            <a href="articulo-carousel.php?id=2&<?php echo str_replace(' ','-',$carousel['2']['titulo']); ?>">
                <img src="../admin/files/carousel/<?= (isset($carousel['2']['imagen']) && $carousel['2']['imagen'] != "") ? $carousel['2']['imagen'] : ""; ?>" class="d-block w-100 h-100" alt="..." style="object-fit: cover;">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h6 class="text-uppercase bg-navbar p-1" style="display: inline-block;">
                        <?= (isset($carousel['2']['barra1']) && $carousel['2']['barra1'] != "") ? $carousel['2']['barra1'] : ""; ?>
                    </h6>
                    <br>
                    <h6 class="text-uppercase bg-navbar p-1" style="display: inline-block;">
                        <?= (isset($carousel['2']['barra2']) && $carousel['2']['barra2'] != "") ? $carousel['2']['barra2'] : ""; ?>
                    </h6>
                </div>
            </a>
        </div>

        <div class="carousel-item" data-bs-interval="8000" style="height: 486px;">
            <a href="articulo-carousel.php?id=3&<?php echo str_replace(' ','-',$carousel['3']['titulo']); ?>">
                <img src="../admin/files/carousel/<?= (isset($carousel['3']['imagen']) && $carousel['3']['imagen'] != "") ? $carousel['3']['imagen'] : ""; ?>" class="d-block w-100 h-100" alt="..." style="object-fit: cover;">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h6 class="text-uppercase bg-navbar p-1" style="display: inline-block;">
                        <?= (isset($carousel['3']['barra1']) && $carousel['3']['barra1'] != "") ? $carousel['3']['barra1'] : ""; ?>
                    </h6>
                    <br>
                    <h6 class="text-uppercase bg-navbar p-1" style="display: inline-block;">
                        <?= (isset($carousel['3']['barra2']) && $carousel['3']['barra2'] != "") ? $carousel['3']['barra2'] : ""; ?>
                    </h6>
                </div>
            </a>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>