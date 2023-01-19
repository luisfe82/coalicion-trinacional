    <!-- Head de pagina y Metas -->
    <?php include './template/header.php' ?>

    <?php include './template/metas.principal.php' ?>

    <link rel="stylesheet" href="../assets/css/categoria/1.categoria.css">
    <link rel="stylesheet" href="../assets/css/index/1.1.carousel.css">
    <link rel="stylesheet" href="../assets/css/categoria/3.card2.css">
    <link rel="stylesheet" href="../assets/css/index/1.3.pestanias.css">
    <link rel="stylesheet" href="../assets/css/index/10.barra.eventos.css">

    </head>

    <body>
        <!--Header Principl y Barra de navegacion -->
        <?php include './template/barra.navegacion.php' ?>

        <header class="container">
            <h1 class="categoria__title">
                <small> Categoría: </small>
                <span>
                <?php echo $lang['tsolidaridad'] ?>
                </span>
            </h1>
        </header>

        <!-- Barra de Redes Sociales -->
        <?php include './template/redes.sociales.php' ?>

        <main class="container">
            <div class="categoria-contenido">
                <section class="categoria__area-noticias">

                    <?php include './template/solidaridad.noticias.php' ?>
                    
                </section>
                <aside class="categoria__barra-eventos">

                    <?php include './template/barra.lateral.php' ?>

                </aside>
            </div>
        </main>

        <script src="../assets/js/tabs.js"></script>
        <!-- Footer -->
        <?php include './template/footer.php' ?> 