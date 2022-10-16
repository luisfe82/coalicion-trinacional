<?php
    if (strlen(session_id()) < 1) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coalición Trinacional en la Defensa de la Educación</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="escritorio.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img height="40" width="40" src="../public/svg/logo.svg" alt="Logo">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg fila">
                    <img height="40" width="150" src="../public/img/logo2.png" alt="Logo">
                </span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../files/usuarios/<?php echo $_SESSION['imagen'] ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['nombre'] ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../files/usuarios/<?php echo $_SESSION['imagen'] ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $_SESSION['nombre'] ?><br>
                                        <b><small><?php echo $_SESSION['login'] ?></small></b>
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"></li>
                    <?php
                        if ($_SESSION['escritorio']==1) {
                            echo '<li>
                                    <a href="escritorio.php">
                                        <i class="fa fa-tasks"></i> <span>Escritorio</span>
                                    </a>
                                </li>';
                        }
                    ?>
                    <?php
                        if ($_SESSION['contenido']==1) {
                            echo '<li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Contenido</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="articulo.php"><i class="fa fa-circle-o"></i> Articulo</a></li>
                                <li><a href="video.php"><i class="fa fa-circle-o"></i> Videos</a></li>
                                <li><a href="galeria.php"><i class="fa fa-circle-o"></i> Galeria</a></li>
                                <li><a href="publica.php"><i class="fa fa-circle-o"></i> Publicaciones</a></li>
                                <li><a href="https://htmleditor.tools/" target="_blank"><i class="fa fa-circle-o"></i> Crear Nota Principal</a></li>
                            </ul>
                        </li>';
                        }
                    ?>
                    <?php
                        if ($_SESSION['web']==1) {
                            echo '<li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Web</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="carousel.php"><i class="fa fa-circle-o"></i> Carousel</a></li>
                                <li><a href="organiza.php"><i class="fa fa-circle-o"></i> Organizaciones</a></li>
                                <li><a href="historia.php"><i class="fa fa-circle-o"></i> Historia</a></li>
                                <li><a href="web.php"><i class="fa fa-circle-o"></i> Web</a></li>
                            </ul>
                        </li>';
                        }
                    ?>
                    <?php
                        if ($_SESSION['acceso']==1) {
                            echo '<li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Acceso</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                                <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
                            </ul>
                        </li>';
                        }
                    ?>   
                    <!-- Zona de Ayuda-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                            <small class="label pull-right bg-red">?</small>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">                             
                                <a href="#"><i class="fa fa-circle-o"></i> Contenido</a>
                                <ul class="treeview-menu">
                                    <li><a href="ayuda-articulo.php"><i class="fa fa-circle-o"></i> Articulo</a></li>
                                    <li><a href="ayuda-video.php"><i class="fa fa-circle-o"></i> Videos</a></li>
                                    <li><a href="ayuda-galeria.php"><i class="fa fa-circle-o"></i> Galeria</a></li>
                                    <li><a href="ayuda-publica.php"><i class="fa fa-circle-o"></i> Publicaciones</a></li>
                                    <li><a href="ayuda-crear.php"><i class="fa fa-circle-o"></i> Crear Notar Principal</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Web</a>
                                <ul class="treeview-menu">
                                    <li><a href="ayuda-carousel.php"><i class="fa fa-circle-o"></i> Carousel</a></li>
                                    <li><a href="ayuda-organiza.php"><i class="fa fa-circle-o"></i> Organizaciones</a></li>
                                    <li><a href="ayuda-historia.php"><i class="fa fa-circle-o"></i> Historia</a></li>
                                    <li><a href="ayuda-web.php"><i class="fa fa-circle-o"></i> Web</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Acceso</a>
                                <ul class="treeview-menu">
                                    <li><a href="ayuda-usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                                    <li><a href="ayuda-permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="acerca.php">
                            <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                            <small class="label pull-right bg-yellow">CTDEP</small>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>