<?php
include 'db.php';
// Título en el idioma
echo "<h1> Bienvenido a la página en español 🇪🇸</h1>";

$result = $conn->query("SELECT username FROM users");

echo "<h3>Usuarios del sistema:</h3>";
echo "<ul>";
// Iterar e imprimir los elementos
while ($u = $result->fetch_assoc()) {
 echo "<li>{$u['username']}</li>";
}
echo "</ul>";
?>
