<?php
include 'db.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM users WHERE username = ? AND password = SHA2(?, 256)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows == 1) {
 echo "Autenticación correcta. Bienvenido, $user";
} else {
 echo "Usuario o contraseña incorrectos.";
}
?>
