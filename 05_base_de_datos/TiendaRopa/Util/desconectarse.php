<?php
    session_start();
    session_destroy();
    header("location: http://localhost/05_base_de_datos/TiendaRopa/public/clientes/iniciar_sesion.php");
?>