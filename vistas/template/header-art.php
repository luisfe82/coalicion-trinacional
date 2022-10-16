<?php include "../config/config.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title><?php echo $articulo[$_GET['id']]['titulo'] ?></title>
    <link rel="canonical" href="https://coaliciontrinacional.org/vistas/articulo.php?id=<?php echo $_GET['id']  ?>&<?php echo str_replace(' ','-',$articulo[$_GET['id']]['titulo']) ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="../public/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/img/favicon-16x16.png">
    <link rel="manifest" href="../public/img/manifest.json">
    <link rel="mask-icon" href="../public/svg/logo.svg" color="#FF2D00">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../public/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="twitter:dnt" content="on">
    <meta property="og:url" content="https://coaliciontrinacional.org/vistas/articulo.php?id=<?php echo $_GET['id']  ?>&<?php echo str_replace(' ','-',$articulo[$_GET['id']]['titulo']) ?>">
    <meta property="og:title" content="<?php echo $articulo[$_GET['id']]['titulo'] ?>">
    <meta property="twitter:title" content="<?php echo $articulo[$_GET['id']]['titulo'] ?>">
    <meta name="description" content="<?php echo $articulo[$_GET['id']]['contcorto'] ?>">
    <meta property="og:description" content="<?php echo $articulo[$_GET['id']]['contcorto'] ?>">
    <meta property="twitter:description" content="<?php echo $articulo[$_GET['id']]['contcorto'] ?>">
    <meta property="og:site_name" content="<?php echo $lang['titulop']; ?>">
    <meta property="og:locale" content="es">
    <meta property="og:image" content="https://coaliciontrinacional.org/admin/files/articulo/<?php echo $articulo[$_GET['id']]['imagen'] ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:type" content="article">

    <!-- Estilos y Fonts Externos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:wght@100&display=swap"
        rel="stylesheet">

    <!-- Normalize -->
    <link rel="stylesheet" href="../public/css/normalize.css">
    <!-- Css dataTables -->
    <link rel="stylesheet" href="../public/dataTables/dataTables.bootstrap5.min.css">
    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Icons Font Awesome -->
    <link href="../public/fontawesome/all.min.css" rel="stylesheet">
    <!-- Estilos Bootstrap v5.0.2  -->
    <link href="../public/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos Propios Pagina -->
    <link href="../public/css/estilos.css" rel="stylesheet">

    <link href="../public/css/biblioteca.css" rel="stylesheet">

