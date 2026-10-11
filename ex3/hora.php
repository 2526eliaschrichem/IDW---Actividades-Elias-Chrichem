<?php
date_default_timezone_set("Europe/Madrid");

$hora = date("G");

if ($hora >= 5 && $hora < 14) {
    $salutacio = "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {
    $salutacio = "Bona tarda";
} else {
    $salutacio = "Bona nit";
}

echo "<h1>" . $salutacio . "</h1>";
echo "<p>Hora del servidor: " . date("H:i:s") . "</p>";
?>