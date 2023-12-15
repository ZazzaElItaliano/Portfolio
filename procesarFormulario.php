<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

  
    $destinatario = "alextoroviejo@gmail,com"; 


    $asunto = "Nuevo mensaje de $nombre $apellido";

    $cuerpo = "Nombre: $nombre $apellido\n";
    $cuerpo .= "Correo Electrónico: $correo\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    $enviado = mail($destinatario, $asunto, $cuerpo);

    // Verificamos si el correo se envió correctamente
    if ($enviado) {
        echo "El mensaje se envió correctamente.";
        header("Location: " . $_SERVER["HTTP_REFERER"]);

    } else {
        echo "Hubo un problema al enviar el mensaje.";
        header("Location: " . $_SERVER["HTTP_REFERER"]);

    }
} else {
    echo "Acceso no permitido.";
    header("Location: " . $_SERVER["HTTP_REFERER"]);

}
?>