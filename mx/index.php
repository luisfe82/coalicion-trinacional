    <!-- Head de pagina y Metas -->
    <?php include './template/header.php' ?>

    <!-- Metas Pagina principal-->
    <?php include './template/metas.principal.php' ?>

    <link rel="stylesheet" href="../assets/css/index/1.1.carousel.css">
    <link rel="stylesheet" href="../assets/css/index/2.organiza.css">
    <link rel="stylesheet" href="../assets/css/index/3.content.css">
    <link rel="stylesheet" href="../assets/css/index/4.memorias.css">
    <link rel="stylesheet" href="../assets/css/index/5.contenidoprincipal.css">
    <link rel="stylesheet" href="../assets/css/index/6.noticias.css">
    <link rel="stylesheet" href="../assets/css/index/7.noticias.secundarias.css">
    <link rel="stylesheet" href="../assets/css/index/8.videos.css">
    <link rel="stylesheet" href="../assets/css/index/9.publicar.css">
    <link rel="stylesheet" href="../assets/css/index/10.barra.eventos.css">

    </head>

    <body>
        <!--Header Principl y Barra de navegacion -->
        <?php include './template/barra.navegacion.php' ?>

        <!-- Carousel 3 noticias Importantes -->
        <?php include './template/carousel.principal.php' ?>

        <!-- Barra de Redes Sociales -->
        <?php include './template/redes.sociales.php' ?>

        <!-- Area de Organizaciones integrantes de la Coalicion -->
        <?php include './template/organizaciones.php' ?>

        <!-- Sobre nosotros y nuestro contenido -->
        <?php include './template/about.php' ?>

        <!-- Memorias de Eventos relevantes -->
        <?php include './template/memoria.php' ?>

        <main>
            <div class="container contenidoPrincipal">
                <div class="area-noticias">

                    <?php include './template/area.noticias.php' ?>

                    <?php include './template/area.videos.php' ?>

                    <?php include './template/publicaciones.php' ?>

                </div>
                <aside class="barra-eventos">

                    <?php include './template/barra.lateral.php' ?>

                </aside>
            </div>
        </main>

        <!-- Footer -->
        <?php include './template/footer.php' ?>