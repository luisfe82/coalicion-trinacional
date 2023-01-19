<section class="videos">
    <h2 class="videos__title">
        <?php echo $lang['titulovideo']; ?>
    </h2>
    <!-- Carousel -->
    <div class="container-carousel" id="carouselVideos" data-interval="0">

        <?php
           for ($indV=1; $indV < 7; $indV++) {            
        ?>

        <div class="carouselVideos">
            <div class="container-videos">
                <div class="videos__box-texto">
                    <div class="box-texto__title">
                        <h2><?php echo $datosv[$indV]['titulo'] ?></h2>
                    </div>
                    <div class="box-texto__contenido">
                        <?php echo $datosv[$indV]['contenido'] ?>
                    </div>
                    <div class="box-texto__fecha">
                        <?php echo $datosv[$indV]['pais'] ?> --- <?php echo $datosv[$indV]['fecha'] ?>
                    </div>
                    <div class="box-texto__compartir">
                        <div class="box-texto__compartir-title">
                            <?php echo $lang['compartir'] ?>
                        </div>
                        <div class="box-texto__compartir-botones">
                            <a href="<?php echo $datosv[$indV]['facebook'] ?>" target="_blank">
                                <img class="ico__redes-sociales" src="../assets/svg/facebook.svg" alt="icono facebook">
                            </a>
                            <a href="<?php echo $datosv[$indV]['twitter'] ?>" target="_blank">
                                <img class="ico__redes-sociales" src="../assets/svg/twittersvg.svg" alt="icono twitter">
                            </a>
                            <a href="<?php echo $datosv[$indV]['whatsapp'] ?>" target="_blank">
                                <img class="ico__redes-sociales" src="../assets/svg/whatsapp.svg" alt="icono twitter">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="videos__box-video">
                    <iframe class="box-video" src="<?php echo $datosv[$indV]['link'] ?>" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <?php
            } 
        ?>

        <a class="prev-carouselVideos" title="prev">◁ Prev</a>
        <a class="next-carouselVideos" title="next">Next ▷</a>
    </div> <!-- end carousel -->


</section>