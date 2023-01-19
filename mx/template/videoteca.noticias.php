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
                    if (isset($datosv[$i])) {                   
                ?>

                <div class="container-videos">
                    <div class="videos__box-texto">
                        <div class="box-texto__title">
                            <h2><?php echo $datosv[$i]['titulo'] ?></h2>
                        </div>
                        <div class="box-texto__contenido">
                            <?php echo $datosv[$i]['contenido'] ?>
                        </div>
                        <div class="box-texto__fecha">
                            <?php echo $datosv[$i]['pais'] ?> --- <?php echo $datosv[$i]['fecha'] ?>
                        </div>
                        <div class="box-texto__compartir">
                            <div class="box-texto__compartir-title">
                                <?php echo $lang['compartir'] ?>
                            </div>
                            <div class="box-texto__compartir-botones">
                                <a href="<?php echo $datosv[$i]['facebook'] ?>" target="_blank">
                                    <img class="ico__redes-sociales" src="../assets/svg/facebook.svg"
                                        alt="icono facebook">
                                </a>
                                <a href="<?php echo $datosv[$i]['twitter'] ?>" target="_blank">
                                    <img class="ico__redes-sociales" src="../assets/svg/twittersvg.svg"
                                        alt="icono twitter">
                                </a>
                                <a href="<?php echo $datosv[$i]['whatsapp'] ?>" target="_blank">
                                    <img class="ico__redes-sociales" src="../assets/svg/whatsapp.svg"
                                        alt="icono twitter">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="videos__box-video">
                        <iframe class="box-video" src="<?php echo $datosv[$i]['link'] ?>" frameborder="0"
                            allowfullscreen></iframe>
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
                    if (isset($datosv[$i])) {                    
                ?>

                <div class="container-videos">
                    <div class="videos__box-texto">
                        <div class="box-texto__title">
                            <h2><?php echo $datosv[$i]['titulo'] ?></h2>
                        </div>
                        <div class="box-texto__contenido">
                            <?php echo $datosv[$i]['contenido'] ?>
                        </div>
                        <div class="box-texto__fecha">
                            <?php echo $datosv[$i]['pais'] ?> --- <?php echo $datosv[$i]['fecha'] ?>
                        </div>
                        <div class="box-texto__compartir">
                            <div class="box-texto__compartir-title">
                                <?php echo $lang['compartir'] ?>
                            </div>
                            <div class="box-texto__compartir-botones">
                                <a href="<?php echo $datosv[$i]['facebook'] ?>" target="_blank">
                                    <img class="ico__redes-sociales" src="../assets/svg/facebook.svg"
                                        alt="icono facebook">
                                </a>
                                <a href="<?php echo $datosv[$i]['twitter'] ?>" target="_blank">
                                    <img class="ico__redes-sociales" src="../assets/svg/twittersvg.svg"
                                        alt="icono twitter">
                                </a>
                                <a href="<?php echo $datosv[$i]['whatsapp'] ?>" target="_blank">
                                    <img class="ico__redes-sociales" src="../assets/svg/whatsapp.svg"
                                        alt="icono twitter">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="videos__box-video">
                        <iframe class="box-video" src="<?php echo $datosv[$i]['link'] ?>" frameborder="0"
                            allowfullscreen></iframe>
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