<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tacciones'] ?></h1>
    </div>
</div>

<!-- main -->
<div class="container-fluid my-5 lead" style="font-size: 0.9rem !important;">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <!-----------------------------------------------------articulo  -->
                    <div class="col-md-8 my-3">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true"><?php echo $lang['tpagina'] ?> 1</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false"><?php echo $lang['tpagina'] ?> 2</button>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="row">

                                    <?php

                                        for ($i=0; $i < 6; $i++) {
                                            if (isset($acciones[$i])) { 
                                    ?>

                                    <div class="col-md-6 my-2 p-4">
                                        <div class="position-relative contx">
                                            <img class="img-fluid rounded-3 efecto-img"
                                                src="../admin/files/articulo/<?php echo $articulo[$acciones[$i]]['imagen'] ?>"
                                                alt="">
                                            <div class="position-absolute bottom-0 start-50 w-100 translate-middle-x">
                                                <h4 class="bg-primario text-secundario px-2">
                                                    <?php echo $articulo[$acciones[$i]]['titulo'] ?></h4>
                                            </div>
                                            <p class="position-absolute top-0 end-0">
                                                <span><a class="bg-boton px-2"
                                                        href="articulo.php?id=<?php echo $acciones[$i] ?>&<?php echo str_replace(' ','-',$articulo[$acciones[$i]]['titulo']); ?>"><?php echo $lang['tboton'] ?><i
                                                            class="fa fa-angle-double-right"></i></a></span>
                                            </p>
                                        </div>
                                        <p class="justify text-primario">
                                            <?php echo $articulo[$acciones[$i]]['contcorto'] ?>
                                            (<span
                                                class="text-muted text-small"><?php echo $articulo[$acciones[$i]]['pais'] ?>-<?php echo $articulo[$acciones[$i]]['fecha'] ?></span>)
                                        </p>
                                    </div>
                                    <?php
                                        }
                                     }
                                    ?>


                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="row">

                                    <?php
                                        for ($i=6; $i < 12; $i++) { 
                                            if (isset($acciones[$i])) {
                                    ?>

                                    <div class="col-md-6 my-2 p-4">
                                        <div class="position-relative contx">
                                            <img class="img-fluid rounded-3 efecto-img"
                                                src="../admin/files/articulo/<?php echo $acciones[$acciones[$i]]['imagen'] ?>"
                                                alt="">
                                            <div class="position-absolute bottom-0 start-50 w-100 translate-middle-x">
                                                <h4 class="bg-primario text-secundario px-2">
                                                    <?php echo $acciones[$acciones[$i]]['titulo'] ?></h4>
                                            </div>
                                            <p class="position-absolute top-0 end-0">
                                                <span><a class="bg-boton px-2"
                                                        href="articulo-acciones.php?id=<?php echo $acciones[$i] ?>&<?php echo str_replace(' ','-',$acciones[$acciones[$i]]['titulo']); ?>"><?php echo $lang['tboton'] ?><i
                                                            class="fa fa-angle-double-right"></i></a></span>
                                            </p>
                                        </div>
                                        <p class="justify text-primario">
                                            <?php echo $acciones[$acciones[$i]]['contcorto'] ?>
                                            (<span
                                                class="text-muted text-small"><?php echo $acciones[$acciones[$i]]['pais'] ?>-<?php echo $acciones[$acciones[$i]]['fecha'] ?></span>)
                                        </p>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------Fin articulo Inicio Barra -->

                    <?php include 'template/sidebar.php'; ?>
                    <!-------------------------------------Fin Barra -->
                </div>

            </div>
        </div>
    </div>
</div>



<?php include 'template/footer.php'; ?>