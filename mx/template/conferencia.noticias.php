<div class="tabs-container" id="tabs-acciones">
    <div class="tab-buttons">
        <button class="tab-button active" id="button-acciones">Pagina 1</button>
        <button class="tab-button" id="button-acciones">Pagina 2</button>
    </div>
    <div class="tab-panels">
        <div class="tab-panel active" id="panel-acciones">
            <div class="container-categoriaTwo">

                <?php
                for ($i=0; $i < 6; $i++) {
                    if (isset($confe[$i])) { 
                ?>

                <div class="largo">
                    <div class="card">
                        <div class="card-boxOne">
                            <div class="card-header">
                                <p>
                                    <?php echo $articulo[$confe[$i]]['pais'] ?>-<?php echo $articulo[$confe[$i]]['fecha'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h4>
                                    <?php echo $articulo[$confe[$i]]['titulo'] ?>
                                </h4>
                                <h5>
                                    <?php echo $articulo[$confe[$i]]['contcorto'] ?>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="articulo.php?tipo=2&id=<?php echo $confe[$i] ?>&<?php echo str_replace(' ','-',$articulo[$confe[$i]]['titulo']); ?>">
                                    Leer mas ...
                                </a>
                            </div>
                        </div>
                        <div class="card-boxTwo">
                            <img class="img-categoria"
                                src="../admin/files/articulo/<?php echo $articulo[$confe[$i]]['imagen'] ?>"
                                alt="<?php echo $articulo[$confe[$i]]['titulo'] ?>">
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
                    if (isset($confe[$i])) { 
                ?>

                <div class="largo">
                    <div class="card">
                        <div class="card-boxOne">
                            <div class="card-header">
                                <p>
                                    <?php echo $articulo[$confe[$i]]['pais'] ?>-<?php echo $articulo[$confe[$i]]['fecha'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h4>
                                    <?php echo $articulo[$confe[$i]]['titulo'] ?>
                                </h4>
                                <h5>
                                    <?php echo $articulo[$confe[$i]]['contcorto'] ?>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="articulo.php?tipo=2&id=<?php echo $confe[$i] ?>&<?php echo str_replace(' ','-',$articulo[$confe[$i]]['titulo']); ?>">
                                    Leer mas ...
                                </a>
                            </div>
                        </div>
                        <div class="card-boxTwo">
                            <img class="img-categoria"
                                src="../admin/files/articulo/<?php echo $articulo[$confe[$i]]['imagen'] ?>"
                                alt="<?php echo $articulo[$confe[$i]]['titulo'] ?>">
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