<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $wasap = htmlspecialchars($_POST["wasap"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $destinatario = "altcoop.gestionweb@gmail.com";
    $asunto = "Nuevo mensaje desde el formulario de la web";

    $cuerpo = "Has recibido un nuevo mensaje desde tu formulario:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo: $email\n";
    $cuerpo .= "WhatsApp: $wasap\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        header("Location: /?status=ok");
        exit;
    } else {
        header("Location: /?status=error");
        exit;
    }
}
?>