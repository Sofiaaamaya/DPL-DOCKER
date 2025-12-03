<?php
include 'db.php';
// Título en el idioma
echo "<h1> Welcome to the English page 🇬🇧</h1>";

$result = $conn->query("SELECT username FROM users");

echo "<h3>System users:</h3>";
echo "<ul>";
// Iterar e imprimir los elementos
while ($u = $result->fetch_assoc()) {
 echo "<li>{$u['username']}</li>";
}
echo "</ul>";
?>
