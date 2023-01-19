<section class="publicar">
    <h2 class="publicar__title">
        <?php echo $lang['publica']; ?>.
    </h2>

    <?php
        for ($indP=1; $indP < 3; $indP++) { 
    ?>
    <div class="container-publicar">
        <img class="img-publicar" src="../admin/files/publica/<?php echo $publica[$indP]['imagen'] ?>" alt="">
        <div class="container-publica__box">
            <div class="container-publicar__registro">
                <?php echo $lang['publica-titulo'] ?> : <span class="container-publicar__texto"><?php echo $publica[$indP]['titulo'] ?>.</span>
            </div>
            <div class="container-publicar__registro">
                <?php echo $lang['publica-content'] ?> : <span class="container-publicar__texto"><?php echo $publica[$indP]['contenido'] ?>.</span>
            </div>
            <div class="container-publicar__registro">
                <?php echo $lang['publica-autor'] ?> : <span class="container-publicar__texto"><?php echo $publica[$indP]['autor'] ?>.</span>
            </div>
            <div class="container-publicar__registro">
                <?php echo $lang['publica-fecha'] ?> : <span class="container-publicar__texto"><?php echo $publica[$indP]['pais'] ?> ---
                    <?php echo $publica[$indP]['fecha'] ?>.</span>
            </div>
            <div class="container-publicar__registro">
                <?php echo $lang['publica-downloa'] ?> : <a href="<?php echo $publica[$indP]['link'] ?>">« <?php echo $lang['publica-enlace'] ?> »</a>
            </div>
        </div>
    </div>

    <?php
        }
    ?>
</section>