<?php
// Archivo: apache-php/src/check_login.php (MODIFICADO)
include 'db.php';

// 1. Verificar si hay datos POST
if (isset($_POST['user']) && isset($_POST['pass'])) {
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    // 2. Usar Prepared Statements para prevenir inyección SQL
    // La contraseña ingresada también se hashea con SHA256 para coincidir con la DB
    $sql = "SELECT username FROM users WHERE username = ? AND password = SHA2(?, 256)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die('Error en la preparación SQL: ' . $conn->error);
    }
    
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // 3. Verificar Autenticación
    if ($result->num_rows == 1) {
        // AUTENTICACIÓN EXITOSA: Redirigir a la raíz (/)
        // La raíz disparará la negociación de idioma de Apache
        header("Location: /");
        exit;
    } else {
        // AUTENTICACIÓN FALLIDA
        echo "<h1>Usuario o contraseña incorrectos.</h1>";
        echo "<p><a href='login.php'>Intentar de nuevo</a></p>";
    }
} else {
    
    // En caso de éxito, redirigir a la carpeta src para que Apache negocie
    header("Location: /apache-php/src/"); 
    exit;
    
}
?>
