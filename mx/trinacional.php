<!-- Header -->
<?php include './template/header.php'; ?>
<!-- Estilos Bootstrap -->

<link rel="stylesheet" href="../assets/css/index/1.3.pestanias.css">
<link rel="stylesheet" href="../assets/css/trinacional/1.header.css">
<link rel="stylesheet" href="../assets/css/trinacional/2.prensa.css">
<link rel="stylesheet" href="../assets/css/trinacional/3.pestanias.css">
<link rel="stylesheet" href="../assets/css/trinacional/4.visitas.css">
<link rel="stylesheet" href="../assets/css/trinacional/5.inicio.css">
<link rel="stylesheet" href="../assets/css/trinacional/6.descarga.css">
<link rel="stylesheet" href="../assets/css/trinacional/7.talleres.css">
<link rel="stylesheet" href="../assets/css/trinacional/8.gracias.css">
<link rel="stylesheet" href="../assets/css/trinacional/11.declaracionPolitica.css">
<link rel="stylesheet" href="../assets/css/trinacional/12.final.css">


</head>

<body>

    <!-- barra de navegacion-->
    <?php include './template/barra.navegacion.php'; ?>

    <header>
        <section>
            <img class="img-trinacional" src="../admin/files/galeria/trinacional/<?php echo $lang['trina-timg'] ?>"
                alt="portada inicio de conferencia trinacional">
        </section>
    </header>

    <!-- Barra de Redes Sociales -->
    <?php include './template/redes.sociales.php' ?>

    <main class="container">
        <header class="prensa">

            <div class="prensa__box">
                <iframe class="prensa__video"
                    src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F5377786408975227%2F&show_text=false&width=560&t=0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    allowFullScreen="true">
                </iframe>
            </div>

            <div class="prensa__box">
                <h2 class="prensa__box-title">
                    <?php echo $lang['trina-title1']  ?>
                </h2>
                <p class="prensa__box-subtitle">
                    <?php echo $lang['trina-title2']  ?>
                </p>
                <p class="prensa__box-descripcion">
                    &nbsp;&nbsp;<?php echo $lang['trina-title3']  ?>
                </p>
                <div class="prensa__box-imagen">
                    <img class="box-imagen__firma" src="../admin/files/galeria/trinacional/nombre-maestra.png"
                        alt="nombre de la maestra maria de la luz">
                </div>
            </div>
        </header>

        <main>
            <section class="contenido-conferencia">
                <div class="contenido-conferencia__box">
                    <h3 class="contenido-conferencia__box-subtitle"><?php echo $lang['trina-title4']  ?> ═══</h3>
                    <h2 class="contenido-conferencia__box-title"><?php echo $lang['trina-title5']  ?></h2>
                </div>

                <div class="tabs-container" id="tabs-Tresdias">
                    <div class="tab-buttons">
                        <button class="tab-button active" id="button-Tresdias"><?php echo $lang['trina-title6']  ?></button>
                        <button class="tab-button" id="button-Tresdias"><?php echo $lang['trina-title7']  ?></button>
                        <button class="tab-button" id="button-Tresdias"><?php echo $lang['trina-title8']  ?></button>
                    </div>
                    <div class="tab-panels">
                        <div class="tab-panel active" id="panel-Tresdias">
                            <?php include('./template/7.octubre.trinacional.php') ?>
                        </div>

                        <div class="tab-panel" id="panel-Tresdias">
                            <?php include('./template/8.octubre.trinacional.php') ?>
                        </div>

                        <div class="tab-panel" id="panel-Tresdias">
                            <?php include('./template/9.octubre.trinacional.php') ?>
                        </div>

                    </div>
                </div>

                <h4> <?php echo $lang['trina-title22']  ?></h4>
            </section>

        </main>
    </main>

    <section class="declaracionPolitica">
        <div class="container">
            <h2 class="declaracionPolitica-title"><?php echo $lang['trina-title23']  ?></h2>
            <div class="declaracionPolitica__documento">
                <img class="img-fluid" src="../admin/files/galeria/trinacional/<?php echo $lang['trina-img2']  ?>"
                    alt="imagen declaracion politica">
                <h2 class="documento__title">
                    <?php echo $lang['trina-title24']  ?>
                </h2>
                <h3 class="documento__subtitle">
                    <?php echo $lang['trina-title25']  ?>
                </h3>
                <h2 class="documento__titleTwo">
                    “<?php echo $lang['trina-title26']  ?>D”
                </h2>
                <h3 class="documento__subtitleTwo">
                    <?php echo $lang['trina-title27']  ?>
                </h3>
                <p>
                    <?php echo $lang['trina-title28']  ?>
                </p>
                <p>
                    <?php echo $lang['trina-title29']  ?> 
                </p>
                <p>
                    <?php echo $lang['trina-title30']  ?>
                </p>
                <h4>
                    <?php echo $lang['trina-title31']  ?>
                </h4>
                <p><i>
                    <?php echo $lang['trina-title32']  ?>
                </i></p>
                <p>
                    <?php echo $lang['trina-title33']  ?>
                </p>
                <p><b>
                    <?php echo $lang['trina-title34']  ?> 
                </b></p>
                <p><b>
                    <?php echo $lang['trina-title35']  ?>
                </b></p>
                <p class="documento__boton"><a
                        href="https://drive.google.com/file/d/1dWBqGu3JDm9Y_WucoNyuVO176y3JjB7z/view?usp=share_link"
                        target="_blank">
                        « <?php echo $lang['trina-title36']  ?> »
                    </a></p>
            </div>
        </div>
    </section>

    <section class="container final">
        <h2 class="final-title"><?php echo $lang['trina-title37']  ?></h2>
        <img class="img-fluid" src="../admin/files/galeria/trinacional/XVconferencia.jpg" alt="">
    </section>


    <script src="../assets/js/tabs.js"></script>


    <?php include './template/footer.php'; ?>