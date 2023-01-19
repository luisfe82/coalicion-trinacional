<?php
//Reseteamos variables a 0.
$nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

if (isset($_POST['submit'])) {
    //Obtenemos valores input formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mensaje = $_POST['mensaje'];
    $para = $_POST['para'];

    //Creamos cabecera.
    $headers = 'From' . " " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";
    
    //Componemos cuerpo correo.
    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Asunto: " . $subject;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Mensaje: " . $mensaje;
    $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
    ?>
        <script languaje="javascript" type="text/javascript">
            alert("Tu mensaje a sido enviado correctamente");
        </script>
    <?php
    } else {
    ?>
        <script languaje="javascript" type="text/javascript">
            alert("Error, no se ha podido enviar el correo, comunicate con el administrador de la pagina");
        </script>
    <?php
        }
    }
    ?>