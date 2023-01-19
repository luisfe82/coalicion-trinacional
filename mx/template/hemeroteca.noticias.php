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
                    if (isset($publica[$i])) {                   
                ?>

                <div class="mediano">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-categoria"
                                src="../admin/files/publica/<?php echo $publica[$i]['imagen'] ?>"
                                alt="<?php echo $publica[$i]['titulo'] ?>">
                        </div>
                        <div class="card-body">
                            <h4>
                                <?php echo $publica[$i]['titulo'] ?>
                            </h4>
                            <h5>
                                <?php echo $publica[$i]['contenido'] ?>
                            </h5>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo $publica[$i]['link'] ?>"> Descargar ...</a>
                            <p>
                                <?php echo $publica[$i]['pais'] ?> / <?php echo $publica[$i]['fecha'] ?>
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
                    if (isset($publica[$i])) {                    
                ?>

                <div class="mediano">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-categoria"
                                src="../admin/files/publica/<?php echo $publica[$i]['imagen'] ?>"
                                alt="<?php echo $publica[$i]['titulo'] ?>">
                        </div>
                        <div class="card-body">
                            <h4>
                                <?php echo $publica[$i]['titulo'] ?>
                            </h4>
                            <h5>
                                <?php echo $publica[$i]['contenido'] ?>
                            </h5>
                        </div>
                        <div class="card-footer">
                            <a href="publica.php?tipo=2&id=<?php echo $i ?>&<?php echo str_replace(' ','-',$publica[$i]['titulo']); ?>"> Leer mas ...</a>
                            <p>
                                <?php echo $publica[$i]['pais'] ?>-<?php echo $publica[$i]['fecha'] ?>
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