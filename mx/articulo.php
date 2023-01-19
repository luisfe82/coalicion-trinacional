    <!-- Head de pagina y Metas -->
    <?php include './template/header.php' ?>

    <title><?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['titulo'] : $articulo[$_GET['id']]['titulo']; ?>
    </title>
    <meta name="description"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contcorto'] : $articulo[$_GET['id']]['contcorto']; ?>" />
    <meta name="author" content="<?php echo $lang['titulop']; ?>" />
    <meta name="copyright"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contcorto'] : $articulo[$_GET['id']]['contcorto']; ?>" />

    <!-- Para compartir en Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@su_usuario_de_twitter">
    <meta name="twitter:title"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['titulo'] : $articulo[$_GET['id']]['titulo']; ?>">
    <meta name="twitter:description"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contcorto'] : $articulo[$_GET['id']]['contcorto']; ?>">
    <meta name="twitter:image"
        content="https://coaliciontrinacional.org/admin/files/articulo/<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['imagen'] : $articulo[$_GET['id']]['imagen']; ?>">

    <!-- Para compartir en Facebook -->
    <meta property="og:url"
        content="https://coaliciontrinacional.org/mx/articulo.php?tipo=<?php echo $_GET['tipo'] ?>&id=<?php echo $_GET['id'] ?>&<?php echo ($_GET['tipo'] == 1) ? str_replace(' ','-',$carousel[$_GET['id']]['titulo']) : str_replace(' ','-',$articulo[$_GET['id']]['titulo']); ?>">

    <meta property="og:type" content="article">
    <meta property="og:title"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['titulo'] : $articulo[$_GET['id']]['titulo']; ?>">
    <meta property="og:description"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contcorto'] : $articulo[$_GET['id']]['contcorto']; ?>">
    <meta property="og:image"
        content="https://coaliciontrinacional.org/admin/files/articulo/<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['imagen'] : $articulo[$_GET['id']]['imagen']; ?>">

    <!-- Para compartir en WhatsApp -->
    <meta property="og:site_name"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['titulo'] : $articulo[$_GET['id']]['titulo']; ?>">
    <meta property="og:title"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['titulo'] : $articulo[$_GET['id']]['titulo']; ?>">
    <meta property="og:description"
        content="<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contcorto'] : $articulo[$_GET['id']]['contcorto']; ?>">
    <meta property="og:image"
        content="https://coaliciontrinacional.org/admin/files/articulo/<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['imagen'] : $articulo[$_GET['id']]['imagen']; ?>">

    <link rel="stylesheet" href="../assets/css/index/1.1.carousel.css">
    <link rel="stylesheet" href="../assets/css/index/5.contenidoprincipal.css">
    <link rel="stylesheet" href="../assets/css/index/10.barra.eventos.css">
    <link rel="stylesheet" href="../assets/css/articulo/1.titulo.css">

    </head>

    <body>
        <!--Header Principl y Barra de navegacion -->
        <?php include './template/barra.navegacion.php' ?>

        <section class="container">
            <h2 class="articulo__title">
                Articulo:
            </h2>
            <h2 class="articulo__subtitle">
                <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['titulo'] : $articulo[$_GET['id']]['titulo']; ?>
            </h2>
        </section>

        <!-- Barra de Redes Sociales -->
        <?php include './template/redes.sociales.php' ?>

        <main class="articulo-contenido">
            <div class="container contenidoPrincipal">
                <section class="area-noticias">

                    <div class="articulo__imagen">
                        <img class="imagen-fluid"
                            src="../admin/files/articulo/<?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['imagen'] : $articulo[$_GET['id']]['imagen']; ?>"
                            alt="">
                    </div>

                    <h2 class="articulo__categoria">
                        <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['categoria'] : $articulo[$_GET['id']]['categoria']; ?>
                    </h2>

                    <h3 class="articulo__resumenTexto">
                        <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contcorto'] : $articulo[$_GET['id']]['contcorto']; ?>
                    </h3>

                    <h4 class="articulo__pais-fecha-autor">
                        <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['pais'] : $articulo[$_GET['id']]['pais']; ?>
                        |
                        <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['fecha'] : $articulo[$_GET['id']]['fecha']; ?>
                        |
                        <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['autor'] : $articulo[$_GET['id']]['autor']; ?>
                    </h4>
                    <div class="articulo__completo">
                        <?php echo ($_GET['tipo'] == 1) ? $carousel[$_GET['id']]['contlargo'] : $articulo[$_GET['id']]['contlargo']; ?>
                    </div>

                    <h4 class="articulo__compartir">
                        Compartir con tus Redes Sociales.
                    </h4>
                    <div class="articulo__redes-sociales">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcoaliciontrinacional.org%2Fmx%2Farticulo.php%3Ftipo%3D<?php echo $_GET['tipo'] ?>%26id%3D<?php echo $_GET['id'] ?>%26<?php echo ($_GET['tipo'] == 1) ? str_replace(' ','-',$carousel[$_GET['id']]['titulo']) : str_replace(' ','-',$articulo[$_GET['id']]['titulo']); ?>" target="_blank">
                            <img class="ico__redes-sociales" src="../assets/svg/facebook.svg" alt="icono facebook"
                            title="icono facebook"> - Facebook
                        </a>

                        <a href="https://twitter.com/intent/tweet?url=https://coaliciontrinacional.org/mx/articulo.php%3Ftipo%3D<?php echo $_GET['tipo'] ?>%26id%3D<?php echo $_GET['id'] ?>%26<?php echo ($_GET['tipo'] == 1) ? str_replace(' ','-',$carousel[$_GET['id']]['titulo']) : str_replace(' ','-',$articulo[$_GET['id']]['titulo']); ?>&text=<?php echo ($_GET['tipo'] == 1) ? str_replace(' ','-',$carousel[$_GET['id']]['titulo']) : str_replace(' ','-',$articulo[$_GET['id']]['titulo']); ?>" target="_blank">
                            <img class="ico__redes-sociales" src="../assets/svg/twittersvg.svg" alt="icono twitter"
                            title="icono twitter"> - Twitter
                        </a>
                        <a href="whatsapp://send?text=https://coaliciontrinacional.org/mx/articulo.php%3Ftipo%3D<?php echo $_GET['tipo'] ?>%26id%3D<?php echo $_GET['id'] ?>%26<?php echo ($_GET['tipo'] == 1) ? str_replace(' ','-',$carousel[$_GET['id']]['titulo']) : str_replace(' ','-',$articulo[$_GET['id']]['titulo']); ?>" target="_blank">
                            <img class="ico__redes-sociales" src="../assets/svg/whatsapp.svg" alt="icono whatsapp"
                            title="icono whatsapp"> - Whatsapp
                        </a>
                    </div>

                </section>
                <aside class="barra-eventos">

                    <?php include './template/barra.lateral.php' ?>

                </aside>
            </div>
        </main>

        <!-- Footer -->
        <?php include './template/footer.php' ?> 