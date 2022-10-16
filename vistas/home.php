<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<!-- Organiza -->
<header class="col-md-12">
    <?php include 'template/carousel.php'; ?>
</header>

<!-- Siguenos -->
<div class="container-fluid bg-navbar">
    <div class="row py-2">
        <?php include 'template/siguenos.php'; ?>
    </div>
</div>

<!-- Organiza -->
<div class="container-fluid my-5">
    <div class="row">
        <?php include 'template/organiza.php'; ?>
    </div>
</div>


<!-- About -->
<div class="container-fluid justify my-5">
    <div class="row">
        <?php include 'template/about.php'; ?>
    </div>
</div>

<!-- <a href="conf-trinacional.php">
<a href="conf-nacional.php"> -->

<!-- Conferencias Importantes -->
<div class="container fondo-eventos text-center">
    <h3 class="text-primario text-uppercase"> Conoce todo acerca de nuestros eventos... </h3>
    <div class="row text-center my-4">
        <div class="col-lg-6">
            <a href="conf-trinacional.php">
                <img class="img-fluid" src="../admin/files/galeria/trinacional/evento-trinacional.png"
                    alt="conferencia trinacional en oaxaca">
            </a>
        </div>
        <div class="col-lg-6">
            <a href="conf-nacional.php">
                <img class="img-fluid" src="../admin/files/galeria/trinacional/evento-nacional.png"
                    alt="conferencia nacional UNAM">
        </div>
        </a>
    </div>
</div>

<!-- main -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <?php include 'template/main.php'; ?>

                    <?php include 'template/sidebar.php'; ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>