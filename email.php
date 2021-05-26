<?php

    $nombre = $_POST['nombre'];
    $destinatario = $_POST['emailDestino'];
    $asunto = $_POST['asunto'];
    $texto = $_POST['texto'];

    $cabecera = "From : jesustornerorojas@gmail.com\r\n";
    $cabecera .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $cabecera .= "MIME-Version: 1.0\r\n";

    $mensaje  ='<html><body>';
    $mensaje .='<p><strong>Hola, </strong>soy </p>' . $nombre;
    $mensaje .='<p>Mi consulta es la siguiente</p>';
    $mensaje .='<p>' . $texto . '</p> ';
    $mensaje .='<p>Gracias por su atencion</p>';
    $mensaje .='</body></html>';

    $Enviado = mail($nombre, $destinatario, $asunto, $mensaje , $cabecera );

    if ($Enviado){
        echo 'Correo enviado correctamente';
    }
    else{
        echo 'Error al enviar correo';
    }
?>