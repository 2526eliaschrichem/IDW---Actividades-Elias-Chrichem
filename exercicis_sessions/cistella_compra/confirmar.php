<?php
session_start();
session_destroy();   // simula el pagament i esborra la cistella
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Compra confirmada</title>
</head>
<body>
    <h1>Compra confirmada</h1>
    <p>Gràcies per la teva compra!</p>
    <a href="index.html">Tornar a la botiga</a>
</body>
</html>