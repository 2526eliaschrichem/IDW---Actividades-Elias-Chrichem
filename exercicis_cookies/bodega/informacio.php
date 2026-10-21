<?php
// Si no hi ha cookies, tornem al formulari
if (!isset($_COOKIE["majoredat"]) || !isset($_COOKIE["idioma"]) || !isset($_COOKIE["moneda"])) {
    header("Location: bodega.php");
    exit;
}

$majoredat = $_COOKIE["majoredat"];
$idioma = $_COOKIE["idioma"];
$moneda = $_COOKIE["moneda"];

// Preus i símbol segons la moneda
if ($moneda == "eur") {
    $preu_vi = 39;
    $preu_whisky = 25;
    $simbol = "€";
} elseif ($moneda == "gbp") {
    $preu_vi = 33;
    $preu_whisky = 21;
    $simbol = "£";
} else {
    $preu_vi = 43;
    $preu_whisky = 28;
    $simbol = "$";
}

// Textos segons l'idioma
if ($idioma == "ca") {
    $text_menor = "No et podem vendre alcohol si ets menor d'edat.";
    $text_vi = "T'oferim el vi \"Les Terrasses\" a un preu de";
    $text_whisky = "T'oferim el whisky \"Old Highland\" a un preu de";
} elseif ($idioma == "es") {
    $text_menor = "No podemos venderte alcohol si eres menor de edad.";
    $text_vi = "Te ofrecemos el vino \"Les Terrasses\" a un precio de";
    $text_whisky = "Te ofrecemos el whisky \"Old Highland\" a un precio de";
} else {
    $text_menor = "We cannot sell you alcohol if you are under age.";
    $text_vi = "We offer you the wine \"Les Terrasses\" at a price of";
    $text_whisky = "We offer you the whisky \"Old Highland\" at a price of";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Informació</title>
</head>
<body>
<?php
if ($majoredat == "no") {
    echo "<p>$text_menor</p>";
} else {
    echo "<p>$text_vi $preu_vi $simbol</p>";
    echo "<p>$text_whisky $preu_whisky $simbol</p>";
}
?>
    <a href="bodega.php">Tornar</a>
</body>
</html>