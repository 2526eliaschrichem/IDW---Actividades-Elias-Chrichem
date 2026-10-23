<?php
session_start();

$preu_pa = 1.50;
$preu_llet = 0.90;

// Llegim les quantitats (0 si no n'hi ha)
if (isset($_SESSION["pa"])) {
    $pa = $_SESSION["pa"];
} else {
    $pa = 0;
}
if (isset($_SESSION["llet"])) {
    $llet = $_SESSION["llet"];
} else {
    $llet = 0;
}

$total = $pa * $preu_pa + $llet * $preu_llet;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la compra</title>
</head>
<body>
    <h1>Resum de la compra</h1>

    <?php
    if ($pa == 0 && $llet == 0) {
        echo "<p>La cistella és buida.</p>";
    } else {
        if ($pa > 0) {
            echo "<p>Pa: $pa x 1,50 € = " . number_format($pa * $preu_pa, 2) . " €</p>";
        }
        if ($llet > 0) {
            echo "<p>Llet: $llet x 0,90 € = " . number_format($llet * $preu_llet, 2) . " €</p>";
        }
        echo "<p><strong>Total: " . number_format($total, 2) . " €</strong></p>";
    ?>
        <form method="post" action="confirmar.php">
            <input type="submit" value="Confirmar compra">
        </form>
    <?php } ?>

    <p><a href="index.html">Seguir comprant</a></p>
</body>
</html>