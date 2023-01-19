<section>
    <div class="container-talleres">

        <div class="talleres-boxOne">
            <h3 class="talleres-box__title">
                <?php echo $lang['trina-9t1'] ?>
            </h3>
            <p class="talleres-box__subtitle">
                <?php echo $lang['trina-9t2'] ?>
            </p>
            <p class="talleres-box__subtitle">
                <?php echo $lang['trina-9t3'] ?>
            </p>
            <p class="talleres-box__subtitle">
                <?php echo $lang['trina-9t4'] ?>
            </p>
            <p class="talleres-box__subtitle">
                <?php echo $lang['trina-9t5'] ?>
            </p>
            <div class="talleres-box__container">
                <div class="talleres__box">
                    <h4 class="talleres__box-title">
                        <?php echo $lang['trina-video1'] ?>
                    </h4>
                    <div class="talleres__box-video">
                        <iframe class="talleres__video"
                            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F1446295795860567%2F&show_text=false&width=560&t=0"
                            style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                            allowFullScreen="true"></iframe>
                    </div>
                </div>
                <div class="talleres__box">
                    <h4 class="talleres__box-title">
                        <?php echo $lang['trina-video2'] ?>
                    </h4>
                    <div class="talleres__box-video">
                        <iframe class="talleres__video"
                            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F478904300944914%2F&show_text=false&width=560&t=0"
                            style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                            allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="talleres-boxTwo">

            <div class="talleres__box">
                <h4 class="talleres__box-title">
                    <?php echo $lang['trina-video3'] ?>
                </h4>
                <div class="talleres__box-video">
                    <iframe class="talleres__video"
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F510762093846852%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>
            </div>

            <div class="talleres__box">
                <h4 class="talleres__box-title">
                    <?php echo $lang['trina-video4'] ?>
                </h4>
                <div class="talleres__box-video">
                    <iframe class="talleres__video"
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F873672207345210%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>
            </div>

            <div class="talleres__box">
                <h4 class="talleres__box-title">
                    <?php echo $lang['trina-video5'] ?>
                </h4>
                <div class="talleres__box-video">
                    <iframe class="talleres__video"
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F2754693764674718%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="gracias">
    <h2 class="inicia-title">
        <?php echo $lang['trina-gracias'] ?>
    </h2>
    <div class="container-gracias">
        <div class="gracias-imagen">
            <img class="img-fluid" src="../admin/files/galeria/trinacional/gracias.jpg" alt="foto personal staf">
        </div>
        <div class="gracias-carousel">
            <!-- Carousel -->
            <div class="container-carouselGaleria" id="carouselGaleria" data-interval="6000">

                <?php 
                    for ($i=1; $i < 90 ; $i++) { 
                ?>
                <div class="carouselGaleria">
                    <img class="img-carouselGaleria"
                        src="../admin/files/galeria/trinacional/galeria/galeria<?php echo $i ?>.jpg"
                        class="d-block w-100" alt="foto visita a escuela rural">
                </div>
                <?php
                    } 
                ?>

                <a class="prev-carouselGaleria">❮</a>
                <a class="next-carouselGaleria">❯</a>
            </div>


        </div>
    </div>
</section>