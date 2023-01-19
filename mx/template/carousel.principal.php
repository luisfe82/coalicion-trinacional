<section>
    <!-- Carousel -->
    <div class="container-carousel" id="carousel-principal" data-interval="8000">
        <?php
            for ($indA=1; $indA < 4; $indA++) { 
        ?>
        <div class="carousel">
            <div class="carousel__text">
                <p><?php echo $carousel[$indA]['barra1'] ?></p>
                <p><?php echo $carousel[$indA]['barra2'] ?></p>
            </div>
            <a href="articulo.php?tipo=1&id=<?php echo $indA ?>&<?php echo str_replace(' ','-',$carousel[$indA]['titulo']); ?>">
                <img class="img-carousel img-h" src="../admin/files/carousel/<?php echo $carousel[$indA]['imagen'] ?>">
                <img class="img-carousel img-v"
                    src="../admin/files/banner-sidebar/<?php echo $carousel[$indA]['imagenlat'] ?>">
            </a>
        </div>
        <?php
            }
        ?>

        <a class="prev">❮</a>
        <a class="next">❯</a>
    </div>
</section>