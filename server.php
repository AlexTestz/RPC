<?php
// server.php
$host = 'localhost';
$port = 12345;

// Crea un socket para escuchar las conexiones RPC
$server = stream_socket_server("tcp://$host:$port", $errno, $errstr);
if (!$server) {
    echo "$errstr ($errno)\n";
} else {
    echo "Esperando una conexión en $host:$port...\n";
    $client = stream_socket_accept($server);

    // Recibe el mensaje del cliente
    $request = fgets($client);
    if ($request == "Hello") {
        // Responde al cliente con un mensaje de "Hola Mundo"
        fwrite($client, "Hola Mundo desde RPC!\n");
    } else {
        fwrite($client, "Comando no reconocido\n");
    }

    fclose($client);
    fclose($server);
}
?>
