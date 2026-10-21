<?php
// Si algú entra sense enviar el formulari, el tornem a la botiga
if (!isset($_POST["codi"])) {
    header("Location: comptador_visites.php");
    exit;
}

$codi = strtoupper($_POST["codi"]);
$visites = $_COOKIE["visites"];

if ($codi == "BOTIGA20" && $visites >= 5 && !isset($_COOKIE["comprat"])) {
    $missatge = "Compra feta amb un 20% de descompte!";
    setcookie("comprat", "si", time() + 60 * 60 * 24 * 30);
} elseif ($codi == "BOTIGA50" && $visites >= 10 && !isset($_COOKIE["comprat"])) {
    $missatge = "Compra feta amb un 50% de descompte!";
    setcookie("comprat", "si", time() + 60 * 60 * 24 * 30);
} elseif ($codi == "") {
    $missatge = "Compra feta sense descompte.";
} else {
    $missatge = "El codi de descompte no és vàlid.";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Compra</title>
</head>
<body>
    <p><?php echo $missatge; ?></p>
    <a href="comptador_visites.php">Tornar a la botiga</a>
</body>
</html>