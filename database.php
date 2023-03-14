<?php 

function conectarDb() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'bienes_raices');

    if(!$db) {
        echo "No se pudo conectar";
        exit;
    }   

    return $db;
} 

/* Programacion orientada a objetos para conectar a DB
function conectarDb() {
    $dsn = 'mysql:host=localhost;dbname=bienes_raices';
    $username = 'root';
    $password = 'enzomarotti123';
    try {
        $db = new PDO($dsn, $username, $password);
        echo "se conecto";
    } catch (PDOException $e) {
        echo "No se pudo conectar" . $e->getMessage();
        $db = null;
    }
    if ($db !== null) {
        return $db;
    } else {
        // Stop the code execution here
        die("No se pudo conectar a la base de datos");
    }
}
*/