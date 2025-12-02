<?php
// Detectar idioma del navegador
$accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
$lang = substr($accept, 0, 2);
// Idiomas soportados
$supported = ['es', 'fr', 'de', 'en'];
if (!in_array($lang, $supported)) {
    $lang = 'en'; // fallback
}
// Conectar a DB para mostrar usuarios
include 'db.php';
$users = $conn->query("SELECT username FROM users");
// Contenido por idioma
$text = [
    'es' => ['flag' => '🇪🇸', 'msg' => 'Bienvenido a la página en español'], 
    'fr' => ['flag' => '🇫🇷', 'msg' => 'Bienvenue sur la page en français'], 
    'de' => ['flag' => '🇩🇪', 'msg' => 'Willkommen auf der deutschen Seite'], 
    'en' => ['flag' => '🇬🇧', 'msg' => 'Welcome to the English page']
];
$t = $text[$lang];
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>
    <h1><?= $t['flag'] ?> <?= $t['msg'] ?></h1>
    <h3>Usuarios del sistema:</h3>
    <ul>
    <?php while ($u = $users->fetch_assoc()) : ?>
    <li><?= $u['username'] ?></li>
    <?php endwhile; ?>
    </ul>
</body>
</html>
