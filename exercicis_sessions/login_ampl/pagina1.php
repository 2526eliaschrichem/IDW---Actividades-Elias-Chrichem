<?php
session_start();

if (!isset($_SESSION["usuari"])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 1</title>
</head>
<body>
    <p>Usuari: <strong><?php echo htmlspecialchars($_SESSION["usuari"]); ?></strong>
       | <a href="logout.php">Desconnectar</a></p>
    <h1>Pàgina d'informació 1</h1>
    <p>Contingut només per a usuaris validats.</p>
    <a href="pagina2.php">Anar a la pàgina 2</a>
</body>
</html>