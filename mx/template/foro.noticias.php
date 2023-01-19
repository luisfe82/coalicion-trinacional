<div class="tabs-container" id="tabs-acciones">
    <div class="tab-buttons">
        <button class="tab-button active" id="button-acciones">Pagina 1</button>
        <button class="tab-button" id="button-acciones">Pagina 2</button>
    </div>
    <div class="tab-panels">
        <div class="tab-panel active" id="panel-acciones">
            <div class="container-acciones">

                <?php
                for ($i=0; $i < 6; $i++) {
                    if (isset($foro[$i])) { 
                ?>

                <div class="mediano">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-categoria"
                                src="../admin/files/articulo/<?php echo $articulo[$foro[$i]]['imagen'] ?>"
                                alt="<?php echo $articulo[$foro[$i]]['titulo'] ?>">
                        </div>
                        <div class="card-body">
                            <h4>
                                <?php echo $articulo[$foro[$i]]['titulo'] ?>
                            </h4>
                            <h5>
                                <?php echo $articulo[$foro[$i]]['contcorto'] ?>
                            </h5>
                        </div>
                        <div class="card-footer">
                            <a href="articulo.php?tipo=2&id=<?php echo $foro[$i] ?>&<?php echo str_replace(' ','-',$articulo[$foro[$i]]['titulo']); ?>"> Leer mas ...</a>
                            <p>
                                <?php echo $articulo[$foro[$i]]['pais'] ?>-<?php echo $articulo[$foro[$i]]['fecha'] ?>
                            </p>
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
            <div class="container-acciones">

                <?php
                for ($i=6; $i < 12; $i++) {
                    if (isset($foro[$i])) { 
                ?>

                <div class="mediano">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-categoria"
                                src="../admin/files/articulo/<?php echo $articulo[$foro[$i]]['imagen'] ?>"
                                alt="<?php echo $articulo[$foro[$i]]['titulo'] ?>">
                        </div>
                        <div class="card-body">
                            <h4>
                                <?php echo $articulo[$foro[$i]]['titulo'] ?>
                            </h4>
                            <h5>
                                <?php echo $articulo[$foro[$i]]['contcorto'] ?>
                            </h5>
                        </div>
                        <div class="card-footer">
                            <a href="articulo.php?tipo=2&id=<?php echo $foro[$i] ?>&<?php echo str_replace(' ','-',$articulo[$foro[$i]]['titulo']); ?>"> Leer mas ...</a>
                            <p>
                                <?php echo $articulo[$foro[$i]]['pais'] ?>-<?php echo $articulo[$foro[$i]]['fecha'] ?>
                            </p>
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