<?php
// client.php
$host = 'localhost';
$port = 12345;

$client = stream_socket_client("tcp://$host:$port", $errno, $errstr);
if (!$client) {
    echo "$errstr ($errno)\n";
} else {
    // Enviar "Hello" al servidor
    fwrite($client, "Hello\n");

    // Recibir y mostrar la respuesta del servidor
    $response = fgets($client);
    echo "Respuesta del servidor: $response";

    fclose($client);
}
?>
