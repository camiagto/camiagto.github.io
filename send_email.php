<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "cami79112@gmail.com"; // Tu correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Has recibido un nuevo mensaje de contacto:\n\n".
            "Nombre: $name\n".
            "Correo Electrónico: $email\n".
            "Mensaje:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "El mensaje se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>