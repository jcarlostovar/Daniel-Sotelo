<?php
    $destino = "meren69@hotmail.com";
    $nombre = $_POST["nombre"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $evento = $_POST["evento"];
    $contenido = "Nombre: ".$nombre.
                "\nTelefono: ".$tel.
                "\nCorreo: ".$email.
                "\nCiudad: ".$ciudad.
                "\nEstado: ".$estado.
                "\nTipo de Evento: ".$Evento;
    mail($destino,"Solicitud de Cotizacion",$contenido);
    header("Location:cotiza.html");



 ?>
