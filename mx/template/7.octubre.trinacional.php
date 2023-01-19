<!-- 7 Octubre-->
<section class="visitas">

<div class="visitas__boxOne">
    <h2 class="visitas__box-title"><?php echo $lang['trina-title9']  ?></h2>
    <h3 class="visitas__box-subtitle"><?php echo $lang['trina-title10']  ?></h3>
    <p class="visitas__box-descripcion">
        <?php echo $lang['trina-title11']  ?>
    </p>
    <p class="visitas__box-descripcion">
        <?php echo $lang['trina-title12']  ?>
    </p>
    <p class="visitas__box-descripcion">
        <?php echo $lang['trina-title13']  ?>
    </p>
</div>

<div class="visitas__boxTwo">
    <!-- Carousel -->
    <div class="container__carousel" id="carouselVisitas" data-interval="8000">

        <?php 
            for ($i=0; $i < 23; $i++) { 
        ?>
        <div class="carouselVisitas">
            <img class="img-carousel"
                src="../admin/files/galeria/trinacional/vista<?php echo $i ?>.jpg"
                class="d-block w-100" alt="foto visita a escuela rural">
        </div>
        <?php
            } 
        ?>

        <a class="prev-carouselVisitas">❮</a>
        <a class="next-carouselVisitas">❯</a>
    </div>
</div>

</section>
<!--End Visitas-->

<section class="inicia">
<h2 class="inicia-title"><span><?php echo $lang['trina-title14']  ?>: </span><?php echo $lang['trina-title15']  ?>
</h2>
<div class="container-inicia">

    <div class="inicia-boxOne">
        <h3 class="inicia-box__title">
            <?php echo $lang['trina-title16']  ?>
        </h3>
        <p class="inicia-box__subtitle">
            <?php echo $lang['trina-title17']  ?>
        </p>
        <img class="inicia-box__img"
            src="../admin/files/galeria/trinacional/inicio0.jpg" alt="">
    </div>

    <div class="inicia-boxTwo">
        <div class="containaer-inicia">

            <div class="inicia__box">
                <h4 class="inicia__box-title">
                    <?php echo $lang['trina-title18']  ?>
                </h4>
                <div class="inicia__box-video">
                    <iframe class="inicia__video"
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcencos22oaxaca%2Fvideos%2F3199012467078421%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>
            </div>

            <div class="inicia__box">
                <h4 class="inicia__box-title">
                    <?php echo $lang['trina-title19']  ?>
                </h4>
                <div class="inicia__box-video">
                    <iframe class="inicia__video"
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcencos22oaxaca%2Fvideos%2F643478857331109%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>
            </div>

        </div>
    </div>

</div>
</section><!-- End Inicia-->

<section class="download">
<h2 class="download-title"><?php echo $lang['trina-title20']  ?> : <span><?php echo $lang['trina-title21']  ?>
    </span></h2>
<div class="container-download">
    <div class="download-box">
        <h4 class="download-box__registgro"><?php echo $lang['publica-tipo']  ?> : <span> Presentación (PDF)
            </span></h4>
        <h4 class="download-box__registgro"><?php echo $lang['publica-autor']  ?> : <span> Andrée Gacoin BCTF </span>
        </h4>
        <h4 class="download-box__registgro"><?php echo $lang['publica-titulo']  ?> : <span> Transformar la educación
                pública. El colonialismo del siglo XXI, experiencias de resistencia
            </span></h4>
        <h4 class="download-box__registgro"><?php echo $lang['publica-idioma']  ?> : <span> Español / Ingles </span>
        </h4>
        <a href="https://docs.google.com/presentation/d/1C6aEddwQBrExkEP8mZQNZHINShhliRyY/edit?usp=sharing&ouid=108180478529445155850&rtpof=true&sd=true"
            target="_blank">
            <h4 class="download-box__registgro">« <?php echo $lang['publica-link']  ?> »</h4>
        </a>
    </div>
    <div class="download-box">
        <h4 class="download-box__registgro"><?php echo $lang['publica-tipo']  ?> : <span> Word </span></h4>
        <h4 class="download-box__registgro"><?php echo $lang['publica-autor']  ?> : <span> Sección Mexicana </span></h4>
        <h4 class="download-box__registgro"><?php echo $lang['publica-titulo']  ?> : <span> Informe nacional </span>
        </h4>
        <h4 class="download-box__registgro"><?php echo $lang['publica-idioma']  ?> : <span> Español / Ingles </span>
        </h4>
        <a href="https://drive.google.com/file/d/1kptiTfWfnhOdv0QiMoYnX63sKn6_6w4w/view?usp=sharing "
            target="_blank">
            <h4 class="download-box__registgro">« <?php echo $lang['publica-link']  ?> »</h4>
        </a>
    </div>
</div>
</section>