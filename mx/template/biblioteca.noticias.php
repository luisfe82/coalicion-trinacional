<div class="tabs-container" id="tabs-acciones">
    <div class="tab-buttons">
        <button class="tab-button active" id="button-acciones">Pag 1</button>
        <button class="tab-button" id="button-acciones">Pag 2</button>
        <button class="tab-button" id="button-acciones">Pag 3</button>
        <button class="tab-button" id="button-acciones">Pag 4</button>
    </div>
    <div class="tab-panels">
        <div class="tab-panel active" id="panel-acciones">
            <div class="container-categoriaTwo">

                <?php
                for ($i=0; $i < 6; $i++) {
                    if (isset($articulo[$i])) { 
                ?>

                <div class="largo">
                    <div class="card">
                        <div class="card-box__One">
                            <img class="img-categoriaTwo"
                                src="../admin/files/articulo/<?php echo $articulo[$i]['imagen'] ?>"
                                alt="<?php echo $articulo[$i]['titulo'] ?>">
                        </div>
                        <div class="card-box__Two">
                            <div class="card-header">
                                <p>
                                    [<?php echo $articulo[$i]['categoria']?>]
                                    <?php echo $articulo[$i]['pais'] ?>-<?php echo $articulo[$i]['fecha'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h4>
                                    <?php echo $articulo[$i]['titulo'] ?>
                                </h4>
                                <h5>
                                    <?php echo $articulo[$i]['contcorto'] ?>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="articulo.php?tipo=2&id=<?php echo $i ?>&<?php echo str_replace(' ','-',$articulo[$i]['titulo']); ?>">
                                    Leer mas ...
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>

        <div class="tab-panel" id="panel-acciones">
            <div class="container-categoriaTwo">

                <?php
                for ($i=6; $i < 12; $i++) {
                    if (isset($articulo[$i])) { 
                ?>

                <div class="largo">
                    <div class="card">
                        <div class="card-box__One">
                            <img class="img-categoriaTwo"
                                src="../admin/files/articulo/<?php echo $articulo[$i]['imagen'] ?>"
                                alt="<?php echo $articulo[$i]['titulo'] ?>">
                        </div>
                        <div class="card-box__Two">
                            <div class="card-header">
                                <p>
                                    [<?php echo $articulo[$i]['categoria']?>]
                                    <?php echo $articulo[$i]['pais'] ?>-<?php echo $articulo[$i]['fecha'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h4>
                                    <?php echo $articulo[$i]['titulo'] ?>
                                </h4>
                                <h5>
                                    <?php echo $articulo[$i]['contcorto'] ?>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="articulo.php?tipo=2&id=<?php echo $i ?>&<?php echo str_replace(' ','-',$articulo[$i]['titulo']); ?>">
                                    Leer mas ...
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>

        <div class="tab-panel" id="panel-acciones">
            <div class="container-categoriaTwo">

                <?php
                for ($i=12; $i < 18; $i++) {
                    if (isset($articulo[$i])) { 
                ?>

                <div class="largo">
                    <div class="card">
                        <div class="card-box__One">
                            <img class="img-categoriaTwo"
                                src="../admin/files/articulo/<?php echo $articulo[$i]['imagen'] ?>"
                                alt="<?php echo $articulo[$i]['titulo'] ?>">
                        </div>
                        <div class="card-box__Two">
                            <div class="card-header">
                                <p>
                                    [<?php echo $articulo[$i]['categoria']?>]
                                    <?php echo $articulo[$i]['pais'] ?>-<?php echo $articulo[$i]['fecha'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h4>
                                    <?php echo $articulo[$i]['titulo'] ?>
                                </h4>
                                <h5>
                                    <?php echo $articulo[$i]['contcorto'] ?>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="articulo.php?tipo=2&id=<?php echo $i ?>&<?php echo str_replace(' ','-',$articulo[$i]['titulo']); ?>">
                                    Leer mas ...
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>

        <div class="tab-panel" id="panel-acciones">
            <div class="container-categoriaTwo">

                <?php
                for ($i=18; $i < 24; $i++) {
                    if (isset($articulo[$i])) { 
                ?>

                <div class="largo">
                    <div class="card">
                        <div class="card-box__One">
                            <img class="img-categoriaTwo"
                                src="../admin/files/articulo/<?php echo $articulo[$i]['imagen'] ?>"
                                alt="<?php echo $articulo[$i]['titulo'] ?>">
                        </div>
                        <div class="card-box__Two">
                            <div class="card-header">
                                <p>
                                    [<?php echo $articulo[$i]['categoria']?>]
                                    <?php echo $articulo[$i]['pais'] ?>-<?php echo $articulo[$i]['fecha'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h4>
                                    <?php echo $articulo[$i]['titulo'] ?>
                                </h4>
                                <h5>
                                    <?php echo $articulo[$i]['contcorto'] ?>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="articulo.php?tipo=2&id=<?php echo $i ?>&<?php echo str_replace(' ','-',$articulo[$i]['titulo']); ?>">
                                    Leer mas ...
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>

    </div>
</div>