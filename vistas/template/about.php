<div class="container-fluid lead" style="font-size: 0.9rem !important;">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../public/img/somos.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">
                                <?php echo (isset($lang['tquienes']) && $lang['tquienes']!="")?$lang['tquienes']:""; ?>
                            </h5>
                            <p class="card-text text-terciario">
                                <?php echo (isset($lang['cquienes']) && $lang['cquienes']!="")?$lang['cquienes']:""; ?>
                            </p>
                            <ul class="card-text text-terciario">
                                <small class="text-muted">
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="origen.php?lang">
                                            <?php echo (isset($lang['torigen']) && $lang['torigen']!="")?$lang['torigen']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="defendemos.php?lang">
                                            <?php echo (isset($lang['tdefendemos']) && $lang['tdefendemos']!="")?$lang['tdefendemos']:""; ?>
                                        </a>
                                    </li>
                                </small>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../public/img/actual.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">
                                <?php echo (isset($lang['tactualidad']) && $lang['tactualidad']!="")?$lang['tactualidad']:""; ?>
                            </h5>
                            <p class="card-text text-terciario">
                                <?php echo (isset($lang['cactualidad']) && $lang['cactualidad']!="")?$lang['cactualidad']:""; ?>
                            </p>
                            <ul class="card-text text-terciario">
                                <small class="text-muted">
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="acciones.php?lang">
                                            <?php echo (isset($lang['tacciones']) && $lang['tacciones']!="")?$lang['tacciones']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="colabora.php?lang">
                                            <?php echo (isset($lang['tcolabora']) && $lang['tcolabora']!="")?$lang['tcolabora']:""; ?>
                                        </a>
                                    </li>
                                </small>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../public/img/luchas.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">
                                <?php echo (isset($lang['tluchas']) && $lang['tluchas']!="")?$lang['tluchas']:""; ?>
                            </h5>
                            <p class="card-text text-terciario">
                                <?php echo (isset($lang['cluchas']) && $lang['cluchas']!="")?$lang['cluchas']:""; ?>
                            </p>
                            <ul class="card-text text-terciario">
                                <small class="text-muted">
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="campania.php?lang">
                                            <?php echo (isset($lang['tcampañas']) && $lang['tcampañas']!="")?$lang['tcampañas']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="foro.php?lang">
                                            <?php echo (isset($lang['tforos']) && $lang['tforos']!="")?$lang['tforos']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="conferencia.php?lang">
                                            <?php echo (isset($lang['tconferencias']) && $lang['tconferencias']!="")?$lang['tconferencias']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="solidaridad.php?lang">
                                            <?php echo (isset($lang['tsolidaridad']) && $lang['tsolidaridad']!="")?$lang['tsolidaridad']:""; ?>
                                        </a>
                                    </li>
                                </small>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../public/img/archivos.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">
                                <?php echo (isset($lang['tdefendemos']) && $lang['tdefendemos']!="")?$lang['tarchivo']:""; ?>
                            </h5>
                            <p class="card-text text-terciario">
                                <?php echo (isset($lang['carchivo']) && $lang['carchivo']!="")?$lang['carchivo']:""; ?>
                            </p>
                            <ul class="card-text text-terciario">
                                <small class="text-muted">
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="biblioteca.php?lang">
                                            <?php echo (isset($lang['tbiblioteca']) && $lang['tbiblioteca']!="")?$lang['tbiblioteca']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="hemeroteca.php?lang">
                                            <?php echo (isset($lang['themeroteca']) && $lang['themeroteca']!="")?$lang['themeroteca']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="videoteca.php?lang">
                                            <?php echo (isset($lang['tvideoteca']) && $lang['tvideoteca']!="")?$lang['tvideoteca']:""; ?>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" title="<?php echo $lang['tpresiona']; ?>">
                                        <a href="galeria.php?lang">
                                            <?php echo (isset($lang['tgaleria']) && $lang['tgaleria']!="")?$lang['tgaleria']:""; ?>
                                        </a>
                                    </li>
                                </small>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Fin Row -->
    </div><!-- Fin Container -->
</div>
<!--Fin Container-fluid -->