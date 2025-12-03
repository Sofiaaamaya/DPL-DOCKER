<?php
// Archivo: apache-php/src/login.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="check_login.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="user" required>
        <br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="pass" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
