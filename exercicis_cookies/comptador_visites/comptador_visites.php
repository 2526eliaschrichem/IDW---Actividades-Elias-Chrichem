<?php
// Llegim el comptador de la cookie (si no existeix, comencem a 0)
if (isset($_COOKIE["visites"])) {
    $visites = $_COOKIE["visites"];
} else {
    $visites = 0;
}

// Sumem una visita i guardem la cookie (dura 30 dies)
$visites = $visites + 1;
setcookie("visites", $visites, time() + 60 * 60 * 24 * 30);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Botiga</title>
</head>
<body>
    <h1>La nostra botiga</h1>
    <p>Visites: <?php echo $visites; ?></p>

    <?php
    // Només mostrem ofertes si no ha comprat encara amb descompte
    if (!isset($_COOKIE["comprat"])) {
        if ($visites >= 10) {
            echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";
        } elseif ($visites >= 5) {
            echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
        }
    }
    ?>

    <form method="post" action="comprar.php">
        Codi de descompte:
        <input type="text" name="codi" maxlength="10" pattern="[A-Za-z0-9]*"
               title="Només lletres i números">
        <input type="submit" value="Comprar">
    </form>
</body>
</html>