<div class="col-md-8 my-3">

    <div class="marco">
        <h2 class="text-terciario">
            <?php echo (isset($lang['titulodestacado']) && $lang['titulodestacado']!="")?$lang['titulodestacado']:""; ?>
        </h2>
    </div>

    <!-- Seccion de Noticias Destacadas -->
    <div class="row my-4">
        <!-- noticia principal -->
        <div class="col-md-6 mb-2">
            <a href="articulo.php?id=1&<?php echo str_replace(' ','-',(isset($articulo['1']['titulo']) && $articulo['1']['titulo']!="")?$articulo['1']['titulo']:""); ?>">
                <img src="../admin/files/articulo/<?php echo (isset($articulo['1']['imagen']) && $articulo['1']['imagen']!="no-imagen.jpg")?$articulo['1']['imagen']:""; ?>" class="img-fluid" alt="">
                <h5 class="text-terciario pt-2 lead">
                    <?php echo (isset($articulo['1']['titulo']) && $articulo['1']['titulo']!="")?$articulo['1']['titulo']:""; ?>
                </h5>
            </a>
            <h6 class="text-primario text-small lead">
                <?php echo (isset($articulo['1']['pais']) && $articulo['1']['pais']!="")?$articulo['1']['pais']:""; ?>
                -
                <span class="text-muted">
                    <?php echo (isset($articulo['1']['fecha']) && $articulo['1']['fecha']!="")?$articulo['1']['fecha']:""; ?>
                </span>
            </h6>
        </div>
        <!-- 4 noticias principales -->
        <div class="col-md-6">
            <?php
                for ($i=2; $i < 6; $i++) { 
            ?>
            <div class="row mb-2">
                <div class="col-4">
                    <a href="articulo.php?id=<?php echo $i ?>&<?php echo str_replace(' ','-',$articulo[$i]['titulo']); ?>">
                        <img src="../admin/files/articulo/<?php echo (isset($articulo[$i]['imagen']) && $articulo[$i]['imagen']!="")?$articulo[$i]['imagen']:"no-imagen.jpg"; ?>"
                            class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-8">
                    <a href="articulo.php?id=<?php echo $i ?>&<?php echo str_replace(' ','-',$articulo[$i]['titulo']); ?>">
                        <h6 class="text-terciario lead" style="font-size: 1rem !important;">
                            <?php echo (isset($articulo[$i]['titulo']) && $articulo[$i]['titulo']!="")?$articulo[$i]['titulo']:""; ?>
                        </h6>
                    </a>
                    <h6 class="text-primario text-small lead">
                        <?php echo (isset($articulo[$i]['pais']) && $articulo[$i]['pais']!="")?$articulo[$i]['pais']:""; ?>
                        - <span class="text-muted"><?php echo (isset($articulo[$i]['fecha']) && $articulo[$i]['fecha']!="")?$articulo[$i]['fecha']:""; ?></span>
                    </h6>
                </div>
            </div>
            <?php
                }
            ?>

        </div>
    </div>

    <div class="marco">
        <h2 class="text-terciario"><?php echo $lang['titulovideo']; ?></h2>
    </div>

    <!-- Seccion de Video Desc -->
    <div class="row my-4">
        
        <div class="col-md-7">
            <div class="video-responsive">
                <iframe
                    src="<?php echo (isset($datosv['1']['link']) && $datosv['1']['link'] != "") ? $datosv['1']['link'] : ""; ?>"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-5">
            <h6 class="text-primario  lead">
                <?php echo (isset($datosv['1']['titulo']) && $datosv['1']['titulo'] != "") ? $datosv['1']['titulo'] : ""; ?>
            </h6>
            <h6 class="text-terciario lead" style="font-size: 1rem !important;">
                <?php echo (isset($datosv['1']['contenido']) && $datosv['1']['contenido'] != "") ? $datosv['1']['contenido'] : ""; ?>
            </h6>
            <h6 class="text-primario text-small lead">
                <?php echo (isset($datosv['1']['pais']) && $datosv['1']['pais'] != "") ? $datosv['1']['pais'] : ""; ?> -
                <span
                    class="text-muted"><?php echo (isset($datosv['1']['fecha']) && $datosv['1']['fecha'] != "") ? $datosv['1']['fecha'] : ""; ?></span>
            </h6>
            <hr>
            <h4 class="text-uppercase text-primario"><?php echo $lang['compartir'] ?> </h4>
            <ul class="nav justify-content-evenly social text-center">
                <li class="nav-item " style="font-size:x-large;">
                    <a class="trans" href="<?php echo $datosv['1']['facebook'] ?>" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item " style="font-size:x-large;">
                    <a a class="trans" href="<?php echo $datosv['1']['twitter'] ?>" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item " style="font-size:x-large;">
                    <a a class="trans" href="<?php echo $datosv['1']['whatsapp'] ?>" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="col-md-12">
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2"
                aria-expanded="false" aria-controls="collapseExample2">
                <?php echo $lang['verv']; ?> &nbsp;<i class="fa fa-angle-double-down"></i>
                &nbsp;<i class="fa fa-angle-double-up"></i>
            </button>
        </div>
    </div>

    <div class="collapse" id="collapseExample2">
        <!-- -------------------------video 2 -->
        <div class="row my-4">
            <div class="col-md-7">
                <div class="video-responsive">
                    <iframe
                        src="<?php echo (isset($datosv['2']['link']) && $datosv['2']['link'] != "") ? $datosv['2']['link'] : ""; ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-5">
                <h6 class="text-primario  lead">
                    <?php echo (isset($datosv['2']['titulo']) && $datosv['2']['titulo'] != "") ? $datosv['2']['titulo'] : ""; ?>
                </h6>
                <h6 class="text-terciario lead" style="font-size: 1rem !important;">
                    <?php echo (isset($datosv['2']['contenido']) && $datosv['2']['contenido'] != "") ? $datosv['2']['contenido'] : ""; ?>
                </h6>
                <h6 class="text-primario text-small lead">
                    <?php echo (isset($datosv['2']['pais']) && $datosv['2']['pais'] != "") ? $datosv['2']['pais'] : ""; ?>
                    -
                    <span
                        class="text-muted"><?php echo (isset($datosv['2']['fecha']) && $datosv['2']['fecha'] != "") ? $datosv['2']['fecha'] : ""; ?></span>
                </h6>
                <hr>
                <h4 class="text-uppercase text-primario"><?php echo $lang['compartir'] ?> </h4>
                <ul class="nav justify-content-evenly social text-center">
                    <li class="nav-item " style="font-size:x-large;">
                        <a class="trans" href="<?php echo $datosv['2']['facebook'] ?>" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item " style="font-size:x-large;">
                        <a class="trans" href="<?php echo $datosv['2']['twitter'] ?>" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item " style="font-size:x-large;">
                        <a class="trans" href="<?php echo $datosv['2']['whatsapp'] ?>" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ---------------------video 3 -->
        <div class="row my-4">
            <div class="col-md-7">
                <div class="video-responsive">
                    <iframe
                        src="<?php echo (isset($datosv['3']['link']) && $datosv['3']['link'] != "") ? $datosv['3']['link'] : ""; ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-5">
                <h6 class="text-primario  lead">
                    <?php echo (isset($datosv['3']['titulo']) && $datosv['3']['titulo'] != "") ? $datosv['3']['titulo'] : ""; ?>
                </h6>
                <h6 class="text-terciario lead" style="font-size: 1rem !important;">
                    <?php echo (isset($datosv['3']['contenido']) && $datosv['3']['contenido'] != "") ? $datosv['3']['contenido'] : ""; ?>
                </h6>
                <h6 class="text-primario text-small lead">
                    <?php echo (isset($datosv['3']['pais']) && $datosv['3']['pais'] != "") ? $datosv['3']['pais'] : ""; ?>
                    -
                    <span
                        class="text-muted"><?php echo (isset($datosv['3']['fecha']) && $datosv['3']['fecha'] != "") ? $datosv['3']['fecha'] : ""; ?></span>
                </h6>
                <hr>                
                <h4 class="text-uppercase text-primario "><?php echo $lang['compartir'] ?> </h4>
                <ul class="nav justify-content-evenly social text-center">
                    <li class="nav-item " style="font-size:x-large;">
                        <a class="trans" href="<?php echo $datosv['3']['facebook'] ?>" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item " style="font-size:x-large;">
                        <a class="trans" href="<?php echo $datosv['3']['twitter'] ?>" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item " style="font-size:x-large;">
                        <a class="trans" href="<?php echo $datosv['3']['whatsapp'] ?>" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------->

    <div class="marco">
        <h2 class="text-terciario"><?php echo $lang['publica']; ?></h2>
    </div>

    <!-- Seccion de Publicaciones -->
    <div class="row my-4">
        <div class="col-md-12 mb-2">
            <img class="img-fluid shadow p-3 mb-2 bg-body rounded"
                src="../admin/files/publica/<?php echo $publica['1']['imagen'] ?>" class="img-fluid w-100" alt="">
            <div class="row">
                <div class="col-2"><a href="<?php echo $publica['1']['link'] ?>"
                        target="_blank"><?php echo $lang['tdescargar'] ?> >></a></div>
                <div class="col-2">
                    <h5 class="text-terciario"><?php echo $publica['1']['titulo'] ?></h5>
                </div>
                <div class="col-3 m-auto">
                    <h6 class="text-primario text-small"><?php echo $publica['1']['pais'] ?> -<span
                            class="text-muted"><?php echo $publica['1']['fecha'] ?></span></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-5">
        <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3"
            aria-expanded="false" aria-controls="collapseExample3">
            <?php echo $lang['verp']; ?> &nbsp;<i class="fa fa-angle-double-down"></i>
            &nbsp;<i class="fa fa-angle-double-up"></i>
        </button>
    </div>

    <div class="collapse" id="collapseExample3">
        <!-- Seccion de Publicaciones 2 -->
        <div class="row my-4">
            <div class="col-md-12 mb-2">
                <img class="img-fluid shadow p-3 mb-2 bg-body rounded"
                    src="../admin/files/publica/<?php echo $publica['2']['imagen'] ?>" class="img-fluid w-100"
                    alt="">
                <div class="row">
                    <div class="col-2"><a href="<?php echo $publica['2']['link'] ?>"
                            target="_blank"><?php echo $lang['tdescargar'] ?> >></a></div>
                    <div class="col-2">
                        <h5 class="text-terciario"><?php echo $publica['2']['titulo'] ?></h5>
                    </div>
                    <div class="col-3 m-auto">
                        <h6 class="text-primario text-small"><?php echo $publica['2']['pais'] ?> -<span
                                class="text-muted"><?php echo $publica['2']['fecha'] ?></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>