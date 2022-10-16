<div class="container-fluid lead" style="font-size: 0.9rem !important;">
    <div class="container">

        <div class="col-md-12">
            <h3 class="col-sm-10 text-uppercase">
                <?php echo (isset($lang['torganiza']) && $lang['torganiza']!="")?$lang['torganiza']:""; ?>
            </h3>
        </div>

        <div class="row fondo-organiza rounded">

            <div class="col-md-4" style="min-height:270px !important;max-height:270px !important;">
                <div class="d-flex py-2">
                    <div class="col-md-12 d-flex m-2">
                        <img class="img-fluid logo-azul me-3" src="../public/svg/logo.svg" alt="Logo">
                        <div class="d-navbar mt-2">
                            <h1 class="m-0 text-uppercase text-terciario">
                                <?php echo (isset($lang['tdefensa']) && $lang['tcoalicion']!="")?$lang['tcoalicion']:""; ?>
                            </h1>
                            <h1 class="m-0 text-uppercase text-terciario">
                                <?php echo (isset($lang['tdefensa']) && $lang['tdefensa'])?$lang['tdefensa']:""; ?>
                            </h1>
                            <h1 class="m-0 text-uppercase text-terciario">
                                <?php echo (isset($lang['teducacion']) && $lang['teducacion'])?$lang['teducacion']:""; ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="justify text-400">
                    <p>
                        <?php echo (isset($lang['corganiza']) && $lang['corganiza']!="")?$lang['corganiza']:""; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-8">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="7000">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-center"
                                        style="min-height:270px !important;max-height:270px !important;">
                                        <img class="m-auto"
                                            src="../admin/files/organiza/<?= (isset($organiza['1']['imagen']) && $organiza['1']['imagen'] != "") ? $organiza['1']['imagen'] : ""; ?>"
                                            height="220" width="220" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-8 my-4">
                                    <div class="container">
                                        <div class="row">
                                            <h5 class="col-md-12 my-1 text-terciario">
                                                <?= (isset($organiza['1']['titulo']) && $organiza['1']['titulo'] != "") ? $organiza['1']['titulo'] : ""; ?>
                                            </h5>
                                            <div class="col-md-12 my-1">
                                                <i class="fa fa-phone-alt"></i> &nbsp;&nbsp;
                                                <?= (isset($organiza['1']['fone']) && $organiza['1']['fone'] != "") ? $organiza['1']['fone'] : ""; ?>
                                            </div>
                                            <div class="col-md-12 my-1">
                                                <i class="fa fa-map-marked-alt"></i> &nbsp;&nbsp;
                                                <?= (isset($organiza['1']['direc']) && $organiza['1']['direc'] != "") ? $organiza['1']['direc'] : ""; ?>
                                            </div>
                                            <div class="col-md-12 my-1 text-terciario">
                                                <a href="<?= (isset($organiza['1']['url']) && $organiza['1']['url'] != "") ? $organiza['1']['url'] : ""; ?>"
                                                    target="_blank">
                                                    <i class="fa fa-globe"></i> &nbsp;&nbsp;
                                                    <?= (isset($organiza['1']['url']) && $organiza['1']['url'] != "") ? $organiza['1']['url'] : ""; ?>
                                                </a>
                                            </div>
                                            <div class="col-md-12 my-1 text-muted">
                                                <?= (isset($organiza['1']['tipo']) && $organiza['1']['tipo'] != "") ? $organiza['1']['tipo'] : ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            $reg=1;
                            foreach ($organiza as $key => $value) {
                                if ($key != 1) {
                                    $reg+=1;
                        ?>
                        <div class="carousel-item" data-bs-interval="7000">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-center"
                                        style="min-height:270px !important;max-height:270px !important;">
                                        <img class="m-auto"
                                            src="../admin/files/organiza/<?= (isset($organiza[$reg]['imagen']) && $organiza[$reg]['imagen'] != "") ? $organiza[$reg]['imagen'] : ""; ?>"
                                            height="220" width="220" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-8 my-4">
                                    <div class="container">
                                        <div class="row">
                                            <h5 class="col-md-12 my-1 text-terciario">
                                                <?= (isset($organiza[$reg]['titulo']) && $organiza[$reg]['titulo'] != "") ? $organiza[$reg]['titulo'] : ""; ?>
                                            </h5>
                                            <div class="col-md-12 my-1">
                                                <i class="fa fa-phone-alt"></i> &nbsp;&nbsp;
                                                <?= (isset($organiza[$reg]['fone']) && $organiza[$reg]['fone'] != "") ? $organiza[$reg]['fone'] : ""; ?>
                                            </div>
                                            <div class="col-md-12 my-1">
                                                <i class="fa fa-map-marked-alt"></i> &nbsp;&nbsp;
                                                <?= (isset($organiza[$reg]['direc']) && $organiza[$reg]['direc'] != "") ? $organiza[$reg]['direc'] : ""; ?>
                                            </div>
                                            <div class="col-md-12 my-1 text-terciario">
                                                <a href="<?= (isset($organiza[$reg]['url']) && $organiza[$reg]['url'] != "") ? $organiza[$reg]['url'] : ""; ?>"
                                                    target="_blank">
                                                    <i class="fa fa-globe"></i> &nbsp;&nbsp;
                                                    <?= (isset($organiza[$reg]['url']) && $organiza[$reg]['url'] != "") ? $organiza[$reg]['url'] : ""; ?>
                                                </a>
                                            </div>
                                            <div class="col-md-12 my-1 text-muted">
                                                <?= (isset($organiza[$reg]['tipo']) && $organiza[$reg]['tipo'] != "") ? $organiza[$reg]['tipo'] : ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                            }
                        ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

    </div>
</div>