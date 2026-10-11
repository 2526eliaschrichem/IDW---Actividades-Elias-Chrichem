<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Conversor euros / dòlars</title>
</head>
<body>
<?php
$taxa = 1.10; // 1 euro ≈ 1,10 dòlars (valor aproximat)

if (isset($_GET["quantitat"]) && isset($_GET["conversio"])) {
    $quantitat = (float) $_GET["quantitat"];

    if ($_GET["conversio"] == "eur_usd") {
        $resultat = $quantitat * $taxa;
        echo "<p>" . $quantitat . " € són " . round($resultat, 2) . " $</p>";
    } else {
        $resultat = $quantitat / $taxa;
        echo "<p>" . $quantitat . " $ són " . round($resultat, 2) . " €</p>";
    }
}
?>
    <form method="get" action="index.php">
        Quantitat: <input type="number" step="0.01" name="quantitat" required><br>
        <input type="radio" name="conversio" value="eur_usd" checked> Euros a dòlars<br>
        <input type="radio" name="conversio" value="usd_eur"> Dòlars a euros<br>
        <input type="submit" value="Convertir">
    </form>
</body>
</html>