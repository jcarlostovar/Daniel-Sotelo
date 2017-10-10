<?php

    $destino = "meren69@hotmail.com";
    $nombre = $_POST["nombre"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $evento = $_POST["evento"];
    $contenido = "
            Nombre: $_POST[nombre]
            Telefono: $_POST[tel]
            Correo: $_POST[email]
            Ciudad: $_POST[ciudad]
            Estado: $_POST[estado]
            Tipo de Evento: $_POST[evento]";

    $headers ='From:'.$_POST['email']."\r\n".
              'Reply-To:'.$_POST['email']."\r\n".
              'X-Mailer:PHP/' . phpversion();

              //  "\nCorreo: ".$email.
              //  "\nCiudad: ".$ciudad.
              //  "\nEstado: ".$estado.
              //  "\nTipo de Evento: ".$Evento;

    mail($destino,"Solicitud de Cotizacion",$contenido,$headers);
    //header("Location:cotiza.html");

    echo "Mensaje Enviado";

 ?>
