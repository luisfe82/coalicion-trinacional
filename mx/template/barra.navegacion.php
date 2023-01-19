<header class="header sticky-top">
    <div class="container">

        <div class="idiomas">
            <a href="index.php?lang=<?php echo $lang['despañol']; ?>" class="idiomas__title"
                title="<?php echo $lang['tespañol']; ?>">
                <?php echo $lang['tespañol']; ?>
            </a>
            <div class="divisor"></div>
            <a href="index.php?lang=<?php echo $lang['dingles']; ?>" class="idiomas__title"
                title="<?php echo $lang['tingles']; ?>">
                <?php echo $lang['tingles']; ?>
            </a>
            <img class="idiomas__icono" src="../assets/img/es-en.svg" alt="icono idiomas" title="icono idiomas">
        </div>

        <div class="header__box">
            <div class="header__box-logo">
                <a href="./">
                    <img class="logo" loading="lazy" src="../assets/svg/logo.svg" alt="logo coalicion trinacional"
                        title="logo coalicion trinacional">
                    <h1 class="header__title text-uppercase" title="<?php echo $lang['titulop']; ?>">
                        <?php echo $lang['titulop']; ?></h1>
                </a>
            </div>
            <div class="hamburger" title="boton de menu principal" data-botonMenu>
                <div class="linea" data-linea title="linea"></div>
                <div class="linea" data-linea title="linea"></div>
                <div class="linea" data-linea title="linea"></div>
            </div>

            <nav class="no-mostrar" data-navbar>
                <div class="navbar">
                    <a href="./index.php?lang" class=" navbar__link" title="link" onclick="location.reload(true)">
                        <?php echo $lang['tinicio']; ?>
                    </a>

                    <div class="navbar__dropdown">
                        <a class="item-links navbar__link" id="0" title="link">
                            <?php echo $lang['tcontacto']; ?>
                        </a>
                        <div class="navbar__dropdown-content submenu ">
                            <a href="contacto.php?lang&idcorreo=1&texto=<?php echo $lang['tseccionmx'] ?>" title="link">
                                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                                <?php echo $lang['tseccionmx'] ?>
                            </a>
                            <a href="contacto.php?lang&idcorreo=2&texto=<?php echo $lang['tseccioninfo'] ?>" title="link">
                                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                                <?php echo $lang['tseccioninfo'] ?>
                            </a>
                            <a href="contacto.php?lang&idcorreo=3&texto=<?php echo $lang['tseccionus'] ?>" title="link">
                                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                                <?php echo $lang['tseccionus'] ?>
                            </a>
                            <a href="contacto.php?lang&idcorreo=4&texto=<?php echo $lang['tseccionca'] ?>" title="link">
                                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                                <?php echo $lang['tseccionca'] ?>
                            </a>
                        </div>
                    </div>

                    <div class="navbar__dropdown">
                        <a class="item-links navbar__link" id="1" title="link">
                            <?php echo $lang['tquienes'] ?>
                        </a>
                        <div class="navbar__dropdown-content submenu">
                            <a href="origen.php?lang" title="link">
                                <img class="icono" src="../assets/svg/origin.svg" alt="icono origen">
                                <?php echo $lang['torigen'] ?>
                            </a>
                            <a href="defendemos.php?lang" title="link">
                                <img class="icono" src="../assets/svg/defendemos.svg" alt="icono defendemos">
                                <?php echo $lang['tdefendemos'] ?>
                            </a>
                        </div>
                    </div>

                    <div class="navbar__dropdown">
                        <a class="item-links navbar__link" id="2" title="link">
                            <?php echo $lang['tactualidad'] ?>
                        </a>
                        <div class="navbar__dropdown-content  submenu">
                            <a href="acciones.php?lang" title="link">
                                <img class="icono" src="../assets/svg/acciones.svg" alt="icono acciones">
                                <?php echo $lang['tacciones'] ?>
                            </a>
                            <a href="colabora.php?lang" title="link">
                                <img class="icono" src="../assets/svg/colabora.svg" alt="icono colabora">
                                <?php echo $lang['tcolabora'] ?>
                            </a>
                        </div>
                    </div>

                    <div class="navbar__dropdown">
                        <a class="item-links navbar__link" id="3" title="link">
                            <?php echo $lang['tluchas'] ?>
                        </a>
                        <div class="navbar__dropdown-content  submenu">
                            <a href="campania.php?lang" title="link">
                                <img class="icono" src="../assets/svg/campaña.svg" alt="icono campaña">
                                <?php echo $lang['tcampañas'] ?>
                            </a>
                            <a href="foro.php?lang" title="link">
                                <img class="icono" src="../assets/svg/foro.svg" alt="icono foro">
                                <?php echo $lang['tforos'] ?>
                            </a>
                            <a href="conferencia.php?lang" title="link">
                                <img class="icono" src="../assets/svg/conferencia.svg" alt="icono conferencia">
                                <?php echo $lang['tconferencias'] ?>
                            </a>
                            <a href="solidaridad.php?lang" title="link">
                                <img class="icono" src="../assets/svg/solidaridad.svg" alt="icono solidaridad">
                                <?php echo $lang['tsolidaridad'] ?>
                            </a>
                        </div>
                    </div>
                    <div class="navbar__dropdown">
                        <a class="item-links navbar__link" id="4" title="link">
                            <?php echo $lang['tarchivo'] ?>
                        </a>
                        <div class="navbar__dropdown-content submenu">
                            <a href="biblioteca.php?lang" title="link">
                                <img class="icono" src="../assets/svg/biblioteca.svg" alt="icono biblioteca">
                                <?php echo $lang['tbiblioteca'] ?>
                            </a>
                            <a href="hemeroteca.php?lang" title="link">
                                <img class="icono" src="../assets/svg/hemeroteca.svg" alt="icono hemeroteca">
                                <?php echo $lang['themeroteca'] ?>
                            </a>
                            <a href="videoteca.php?lang" title="link">
                                <img class="icono" src="../assets/svg/videoteca.svg" alt="icono videoteca">
                                <?php echo $lang['tvideoteca'] ?>
                            </a>
                            <a href="galeria.php?lang" title="link">
                                <img class="icono" src="../assets/svg/galeria.svg" alt="icono galeria">
                                <?php echo $lang['tgaleria'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</header>