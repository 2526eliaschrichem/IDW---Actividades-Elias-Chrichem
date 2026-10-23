<?php
session_start();

// Si no s'ha validat, el tornem al login
if (!isset($_SESSION["usuari"])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 2</title>
</head>
<body>
    <p>Usuari: <strong><?php echo htmlspecialchars($_SESSION["usuari"]); ?></strong>
       | <a href="logout.php">Desconnectar</a></p>
    <h1>Pàgina d'informació 2</h1>
    <p>Més contingut només per a usuaris validats.</p>
    <a href="pagina1.php">Anar a la pàgina 1</a>
</body>
</html>