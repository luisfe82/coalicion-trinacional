<section class="anuncios">
    <h2 class="barra__title"><?php echo $lang['teventos'] ?></h2>
    <div class="anuncios__box">
        <!-- Carousel -->
        <div class="container-carousel" id="carouselAnuncios" data-interval="6000">

            <?php
                foreach ($carousel as $key => $value) {
            ?>

            <div class="carousel2">
                <a href="articulo.php?tipo=1&id=<?php echo $key ?>&<?php echo str_replace(' ','-',$carousel[$key]['titulo']); ?>">
                    <img class="img-marco"
                        src="../admin/files/banner-sidebar/<?php echo $carousel[$key]['imagenlat'] ?>"
                        alt="<?php echo $carousel[$key]['titulo'] ?>">
                </a>
            </div>

            <?php
            }
        ?>

            <a class="prev2">❮</a>
            <a class="next2">❯</a>
        </div> <!-- end carousel -->
    </div>
</section>

<section class="noticias-recientes">
    <h2 class="noticias-recientes__title"><?php echo $lang['tnoticias'] ?></h2>
    <div class="container__noticias-recientes">

        <?php
            for ($x=6; $x < 11; $x++) { 
        ?>
        <div class="noticia__box" title="Click, ver la nota completa">
            <div class="noticia-img__box">
                <img class="img-noticias" src="../admin/files/articulo/<?php echo $articulo[$x]['imagen']; ?>"
                    alt="<?php echo $articulo[$x]['titulo']; ?>">
            </div>
            <div class="noticia-texto__box">
                <p class="noticia-texto__title"><?php echo $articulo[$x]['titulo']; ?></p>
                <div class="noticia-texto__fecha-box">
                    <p class="noticia-texto__fecha"><?php echo $articulo[$x]['pais']; ?> ---
                        <span><?php echo $articulo[$x]['fecha']; ?></span>
                    </p>
                    <a class="noticia-boton" href="articulo.php?tipo=2&id=<?php echo $x ?>&<?php echo str_replace(' ','-',$articulo[$x]['titulo']); ?>"><?php echo $lang['tboton'] ?></a>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</section>