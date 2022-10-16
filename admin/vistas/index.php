<?php
//Limpiamos las variables de sesión   
session_unset();
//Destruìmos la sesión
session_destroy();
 //redireccionando a la vista de logins
 header('Location: vistas/login.html')
?>