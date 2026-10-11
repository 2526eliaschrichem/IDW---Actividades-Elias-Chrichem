<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Calculadora d'IVA</title>
</head>
<body>
<?php
if (isset($_GET["preu"]) && isset($_GET["iva"])) {
    $preu = (float) $_GET["preu"];
    $iva = (int) $_GET["iva"];

    $import_iva = $preu * $iva / 100;
    $total = $preu + $import_iva;

    echo "<p>Preu sense IVA: " . round($preu, 2) . " €<br>";
    echo "IVA (" . $iva . "%): " . round($import_iva, 2) . " €<br>";
    echo "<strong>Total amb IVA: " . round($total, 2) . " €</strong></p>";
}
?>
    <form method="get" action="index.php">
        Preu: <input type="number" step="0.01" name="preu" required><br>
        Tipus d'IVA:
        <select name="iva">
            <option value="21">General (21%)</option>
            <option value="10">Reduït (10%)</option>
            <option value="4">Superreduït (4%)</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>