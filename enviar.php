<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);


    $destinatario = "altcoop.gestionweb@gmail.com";  // <-- email de ALT
    $asunto = "Nuevo mensaje desde el formulario de la web";


    $cuerpo = "Has recibido un nuevo mensaje desde tu formulario:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        // echo "<h2>✅ Mensaje enviado correctamente. ¡Gracias por contactarnos!</h2>";
        echo "<script>
            alert('✅ Mensaje enviado correctamente. ¡Gracias por contactarnos!');
            window.location.href = '/'; // vuelve a la página principal
        </script>";
    } else {
        // echo "<h2>❌ Error al enviar el mensaje. Intenta de nuevo más tarde.</h2>";
        echo "<script>
            alert('❌ Error al enviar el mensaje. Intenta de nuevo más tarde.');
            window.location.href = '/'; // vuelve igual a la página principal
        </script>";
    }
}
?>
