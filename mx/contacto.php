 <!-- Head de pagina -->
 <?php include '../config/PHPmailer.php' ?>

 <?php 
    $correo = array (
        '1'=>'contacto@coaliciontrinacional.org',
        '2'=>'infocoali@coaliciontrinacional.org',
        '3'=>'trinationalusa@coaliciontrinacional.org',
        '4'=>'trinationalcanada@coaliciontrinacional.org'
    )    
?>

 <!-- Head de pagina -->
 <?php include './template/header.php' ?>

 <!-- Metas Pagina principal-->
 <?php include './template/metas.principal.php' ?>

 <link rel="stylesheet" href="../assets/css/contact/1.contact.css">
 <link rel="stylesheet" href="../assets/css/contact/2.imputs.css">

 </head>

 <body>
     <!--Header Principl y Barra de navegacion -->
     <?php include './template/barra.navegacion.php' ?>

     <!-- Barra de Redes Sociales -->
     <?php include './template/redes.sociales.php' ?>

     <main>
         <div class="container">
             <h2 class="contact-title">
                 <?php echo $lang['tcontacto'] ?><br>
                 <span> <?php echo $_GET['texto'] ?></span>
             </h2>
             <div class="contenidoContact">
                 <div class="contenidoContact__imagen">
                     <img class="img-fluid img-height" src="../assets/img/contacto.jpg"
                         alt="foto de una peersona manifestandose">
                 </div>
                 <div class="contenidoContact__formulario">
                     <form class="formulario-container"
                         action="./contacto.php?texto=<?php echo $_GET['texto'] ?>&idcorreo=<?php echo $_GET['idcorreo']?>"
                         method="post">

                         <p class="formulario-container__descripcion">
                             <?php echo $lang['contacto-texto'] ?>
                         </p>

                         <input type="hidden" name="para" value="<?php echo $correo[$_GET['idcorreo']] ?>" id="para">

                         <div class="input-container">
                             <input name="nombre" id="nombre" class="input" type="text" placeholder="Nombre" required
                                 data-tipo="nombre">
                             <label class="input-label" for="nombre"><?php echo $lang['contacto-nombre'] ?></label>
                             <span class="input-message-error">Este campo no es valido</span>
                         </div>

                         <div class="input-container">
                             <input name="email" id="email" class="input" type="email" placeholder="Email" required
                                 data-tipo="email">
                             <label class="input-label" for="email">Email</label>
                             <span class="input-message-error">Este campo no es valido</span>
                         </div>

                         <div class="input-container">
                             <input name="subject" id="subject" class="input" type="text" placeholder="Asunto" required
                                 data-tipo="subject">
                             <label class="input-label" for="subject"><?php echo $lang['contacto-asunto'] ?></label>
                             <span class="input-message-error">Este campo no es valido</span>
                         </div>

                         <div class="textarea-container">
                             <textarea name="mensaje" id="mensaje" class="textarea" type="text" placeholder="Mensaje"
                                 cols="35" rows="3" required data-tipo="mensaje" minlegth="4" maxlength="500" required
                                 data-mensaje></textarea>
                             <label class="textarea-label" for="mensaje"><?php echo $lang['contacto-mensaj'] ?></label>
                             <span class="input-message-error">Este campo no puede quedar vacio</span>
                         </div>

                         <button class="formulario__boton" type="submit" id="submit" name="submit" onclik="mensaje()"><?php echo $lang['contacto-enviar'] ?></button>

                     </form>
                 </div>
             </div>
         </div>
     </main>

     <!-- Footer -->
     <?php include './template/footer.php' ?>