<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid encabezado text-end text-uppercase lead">
    <div class="col-6">
        <h1><?php echo $lang['tbiblioteca'] ?></h1>
    </div>
</div>

<!-- main -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <!-----------------------------------------------------articulo  -->
                    <div class="col-md-8 my-3">

                        <div class="col-md-12  mb-3">
                            <h2 class="card text-terciario text-center mb-3">
                                <span><?php echo (isset($lang['tluchas']) && $lang['tluchas']!="")?$lang['tluchas']:""; ?></span>
                            </h2>

                            <div class="d-flex align-items-start my-5">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">
                                        <?php echo (isset($lang['tcampañas']) && $lang['tcampañas']!="")?$lang['tcampañas']:""; ?>
                                    </button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">
                                        <?php echo (isset($lang['tforos']) && $lang['tforos']!="")?$lang['tforos']:""; ?>
                                    </button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">
                                        <?php echo (isset($lang['tconferencias']) && $lang['tconferencias']!="")?$lang['tconferencias']:""; ?>
                                    </button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false">
                                        <?php echo (isset($lang['tsolidaridad']) && $lang['tsolidaridad']!="")?$lang['tsolidaridad']:""; ?>
                                    </button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">

                                        <div style="height:200px !important;">
                                            <?php include "template/carousel-campanias.php"; ?>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">

                                        <div style="height:200px !important;">
                                            <?php include "template/carousel-foro.php"; ?>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">

                                        <div style="height:200px !important;">
                                            <?php include "template/carousel-conferencia.php"; ?>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">

                                        <div style="height:200px !important;">
                                            <?php include "template/carousel-solidaridad.php"; ?>
                                        </div>

                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="col-md-12 mb-3">

                            <h2 class="card text-center text-terciario mb-3">
                                <?php echo (isset($lang['tactualidad']) && $lang['tactualidad']!="")?$lang['tactualidad']:""; ?>
                            </h2>

                            <div class="d-flex align-items-start my-5">
                                <div class="nav flex-column nav-pills me-3 w-25" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">

                                    <button class="nav-link active" id="v-pills-acciones-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-acciones" type="button" role="tab"
                                        aria-controls="v-pills-acciones" aria-selected="true">
                                        <?php echo (isset($lang['tacciones']) && $lang['tacciones']!="")?$lang['tacciones']:""; ?>
                                    </button>

                                    <button class="nav-link" id="v-pills-colaboraciones-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-colaboraciones" type="button" role="tab"
                                        aria-controls="v-pills-colaboraciones" aria-selected="false">
                                        <?php echo (isset($lang['tcolabora']) && $lang['tcolabora']!="")?$lang['tcolabora']:""; ?>
                                    </button>

                                </div>

                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-acciones" role="tabpanel"
                                        aria-labelledby="v-pills-acciones-tab">

                                        <div style="height:200px !important;">
                                            <?php include "template/carousel-acciones.php"; ?>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-colaboraciones" role="tabpanel"
                                        aria-labelledby="v-pills-colaboraciones-tab">

                                        <div style="height:200px !important;">
                                            <?php include "template/carousel-colabora.php"; ?>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div> <!-- Fin de Col - 8  -->
                    <!-----------------------------------------Fin articulo Inicio Barra -->

                    <?php include 'template/sidebar.php'; ?>
                    <!-------------------------------------Fin Barra -->
                </div>

            </div>
        </div>
    </div>
</div>



<?php include 'template/footer.php'; ?>