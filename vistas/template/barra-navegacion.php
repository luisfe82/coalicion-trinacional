</head>

<body>

    <!------------------------------------- Top Navbar -->
    <div id="inicio" class="container-fluid bg-top-navbar">
        <div class="row  px-5">
            <div class="col-9">
                <div class="d-flex text-blanco">
                    <a class="nav-link text-body small" href="home.php?lang=<?php echo $lang['despañol']; ?>"> 
                        <small>
                            <i class="bi-chat-right-quote"></i>
                            <?php echo (isset($lang['tespañol']) && $lang['tespañol']!='')?$lang['tespañol']:""; ?> <!-- Titulo  -->
                        </small>
                    </a>
                    <a class="nav-link text-body small" href="home.php?lang=<?php echo $lang['dingles']; ?>"> <!-- Titulo  -->
                        <small>
                            <i class="bi-chat-right-quote"></i>
                            <?php echo (isset($lang['tingles']) && $lang['tingles']!="")?$lang['tingles']:""; ?> <!-- Titulo  -->
                        </small>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-top-navbar">
        <div class="row">
            <nav class="navbar navbar-expand-lg py-0 px-4">
                <div class="navbar-brand  align-items-center text-center">
                    <a href="home.php?lang" class="nav-item nav-link d-flex">
                        <img class="logo-blanco" src="../public/svg/logo.svg" alt="Logo">
                        <div class="d-navbar ms-3">
                            <h1 class="m-0 text-uppercase text-white">
                                <?php echo (isset($lang['tcoalicion']) && $lang['tcoalicion']!="")?$lang['tcoalicion']:""; ?> <!-- Titulo  -->
                            </h1>
                            <h1 class="m-0 text-uppercase text-white">
                                <?php echo (isset($lang['tdefensa']) && $lang['tdefensa']!="")?$lang['tdefensa']:""; ?> <!-- Titulo  -->
                            </h1>
                            <h1 class="m-0 text-uppercase text-white">
                                <?php echo (isset($lang['teducacion']) && $lang['teducacion'])?$lang['teducacion']:""; ?> <!-- Titulo  -->
                            </h1>
                        </div>
                    </a>
                </div>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <i class="bi-columns-gap"></i>
                </button>

                <div class="collapse navbar-collapse mt-4" id="navbarCollapse">
                    <div class="navbar-nav ms-auto text-blanco">
                        <a href="home.php?lang" class="nav-item nav-link">
                            <?php echo (isset($lang['tinicio']) && $lang['tinicio']!="")?$lang['tinicio']:""; ?> <!-- Titulo  -->
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                style="color: #fff !important;">
                                <?php echo (isset($lang['tcontacto']) && $lang['tcontacto']!="")?$lang['tcontacto']:""; ?> <!-- Titulo  -->
                            </a>
                            <div class="dropdown-menu rounded-1 m-0">
                                <a href="contact-mex.php?lang" class="dropdown-item">
                                    <i class="fa fa-envelope-open"></i> 
                                    <?php echo (isset($lang['tseccionmx']) && $lang['tseccionmx']!="")?$lang['tseccionmx']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="contact-inf.php?lang" class="dropdown-item">
                                    <i class="fa fa-envelope-open"></i> 
                                    <?php echo (isset($lang['tseccioninfo']) && $lang['tseccioninfo']!="")?$lang['tseccioninfo']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="contact-usa.php?lang" class="dropdown-item">
                                    <i class="fa fa-envelope-open"></i> 
                                    <?php echo (isset($lang['tseccionus']) && $lang['tseccionus']!="")?$lang['tseccionus']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="contact-can.php?lang" class="dropdown-item" >
                                    <i class="fa fa-envelope-open"></i> 
                                    <?php echo (isset($lang['tseccionca']) && $lang['tseccionca']!="")?$lang['tseccionca']:""; ?> <!-- Titulo  -->
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                style="color: #fff !important;">
                                <?php echo (isset($lang['tquienes']) && $lang['tquienes']!="")?$lang['tquienes']:""; ?> <!-- Titulo  -->
                            </a>
                            <div class="dropdown-menu rounded-1 m-0">
                                <a href="origen.php?lang" class="dropdown-item">
                                    <i class="fa fa-university"></i>
                                    <?php echo (isset($lang['torigen']) && $lang['torigen']!="")?$lang['torigen']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="defendemos.php?lang" class="dropdown-item">
                                    <i class="fa fa-hand-rock"></i>
                                    <?php echo (isset($lang['tdefendemos']) && $lang['tdefendemos']!="")?$lang['tdefendemos']:""; ?> <!-- Titulo  -->
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                style="color: #fff !important;">
                                <?php echo (isset($lang['tactualidad']) && $lang['tactualidad']!="")?$lang['tactualidad']:""; ?> <!-- Titulo  -->
                            </a>
                            <div class="dropdown-menu rounded-1 m-0">
                                <a href="acciones.php?lang" class="dropdown-item">
                                    <i class="fa fa-user-cog"></i>
                                    <?php echo (isset($lang['tacciones']) && $lang['tacciones']!="")?$lang['tacciones']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="colabora.php?lang" class="dropdown-item">
                                    <i class="fa fa-handshake"></i>
                                    <?php echo (isset($lang['tcolabora']) && $lang['tcolabora']!="")?$lang['tcolabora']:""; ?> <!-- Titulo  -->
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                style="color: #fff !important;">
                                <?php echo (isset($lang['tluchas']) && $lang['tluchas']!="")?$lang['tluchas']:""; ?> <!-- Titulo  -->
                            </a>
                            <div class="dropdown-menu rounded-1 m-0">
                                <a href="campania.php?lang" class="dropdown-item">
                                    <i class="fa fa-users"></i>
                                    <?php echo (isset($lang['tcampañas']) && $lang['tcampañas']!="")?$lang['tcampañas']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="foro.php?lang" class="dropdown-item">
                                    <i class="fa fa-comments"></i>
                                    <?php echo (isset($lang['tforos']) && $lang['tforos']!="")?$lang['tforos']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="conferencia.php?lang" class="dropdown-item">
                                    <i class="fa fa-user-friends"></i>
                                    <?php echo (isset($lang['tconferencias']) && $lang['tconferencias']!="")?$lang['tconferencias']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="solidaridad.php?lang" class="dropdown-item">
                                    <i class="fa fa-hands-helping"></i>
                                    <?php echo (isset($lang['tsolidaridad']) && $lang['tsolidaridad']!="")?$lang['tsolidaridad']:""; ?> <!-- Titulo  -->
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                style="color: #fff !important;">
                                <?php echo (isset($lang['tarchivo']) && $lang['tarchivo']!="")?$lang['tarchivo']:""; ?> <!-- Titulo  -->
                            </a>
                            <div class="dropdown-menu rounded-1 m-0">
                                <a href="biblioteca.php?lang" class="dropdown-item">
                                    <i class="fa fa-folder-open"></i>
                                    <?php echo (isset($lang['tbiblioteca']) && $lang['tbiblioteca']!="")?$lang['tbiblioteca']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="hemeroteca.php?lang" class="dropdown-item">
                                    <i class="fa fa-file-pdf"></i>
                                    <?php echo (isset($lang['themeroteca']) && $lang['themeroteca']!="")?$lang['themeroteca']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="videoteca.php?lang" class="dropdown-item">
                                    <i class="fa fa-file-video"></i>
                                    <?php echo (isset($lang['tvideoteca']) && $lang['tvideoteca']!="")?$lang['tvideoteca']:""; ?> <!-- Titulo  -->
                                </a>
                                <a href="galeria.php?lang" class="dropdown-item">
                                    <i class="fa fa-images"></i>
                                    <?php echo (isset($lang['tgaleria']) && $lang['tgaleria']!="")?$lang['tgaleria']:""; ?> <!-- Titulo  -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Navbar End -->