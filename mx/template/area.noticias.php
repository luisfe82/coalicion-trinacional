<section class="noticias-destacadas">
    <h2 class="noticias__title">
        <?php echo $lang['titulodestacado'] ?>
    </h2>
    <div class="container-noticias">

        <section class="noticias-principal__box">
            <div class="noticias-principal__texto">
                <div class="noticias-principal__title">
                    <h2><?php echo $articulo['1']['titulo'] ?></h2>
                </div>
                <div class="noticias-principal__descripcion">
                    <img class="img-float" src="../admin/files/articulo/<?php echo$articulo['1']['imagen'] ?>"
                        alt="<?php echo $articulo['1']['titulo'] ?>">
                    <?php echo $articulo['1']['contcorto'] ?>
                </div>
                <div class="noticias-principal__boton">
                    <a class="noticias__boton" href="articulo.php?tipo=2&id=1&<?php echo str_replace(' ','-',$articulo['1']['titulo']); ?>"><?php echo $lang['leer-mas'] ?></a>
                </div>
            </div>
            <div class="noticias-principal__imagen no-imagen">
                <img class="img-marco" src="../admin/files/articulo/<?php echo$articulo['1']['imagen'] ?>"
                    alt="<?php echo $articulo['1']['titulo'] ?>">
            </div>
        </section>

        <section class="noticias-secundarias__box">

            <?php
                for ($ind=2; $ind < 6; $ind++) { 
            ?>
            <div class="secundarias__box">
                <div class="secundarias__title">
                    <h2><?php echo $articulo[$ind]['titulo'] ?></h2>
                </div>
                <div class="secundarias__box-texto">
                    <img class="secundarias__img-float" src="../admin/files/articulo/<?php echo$articulo[$ind]['imagen'] ?>"
                        alt="<?php echo $articulo[$ind]['titulo'] ?>">
                    <p class="secundarias__box-descripcion"><?php echo $articulo[$ind]['contcorto'] ?></p>
                    <p class="secundarias__box-fecha">
                        <?php echo $articulo[$ind]['pais']; ?> ──
                        <span>
                            <?php echo $articulo[$ind]['fecha']; ?>
                        </span>
                    </p>
                </div>                
                <div class="noticias-principal__boton">
                    <a class="noticias__boton" href="articulo.php?tipo=2&id=<?php echo $ind ?>&<?php echo str_replace(' ','-',$articulo[$ind]['titulo']); ?>"><?php echo $lang['leer-mas'] ?></a>
                </div>
            </div>
            <?php
                }
            ?>

        </section><!-- end noticias-secundarias__box  -->

    </div>
</section>