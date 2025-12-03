<?php
// Archivo: apache-php/src/db.php

// Usamos el nombre del servicio 'mysql' del docker-compose.yml como host
$servername = "mysql"; 
$username = "myuser";
$password = "mypassword";
$dbname = "mydatabase";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    // Si falla, se puede mostrar un error o simplemente terminar la ejecución.
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
