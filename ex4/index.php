<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Enquesta de música</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["estil"])) {
    $estil = $_POST["estil"];

    if ($estil == "rock") {
        $missatge = "El rock mai mor! Bon gust.";
    } elseif ($estil == "pop") {
        $missatge = "El pop sempre fa ballar!";
    } elseif ($estil == "rap") {
        $missatge = "Les millors rimes són per a tu.";
    } elseif ($estil == "classica") {
        $missatge = "Un gust refinat, Mozart estaria content.";
    } elseif ($estil == "electronica") {
        $missatge = "Puja el volum i a ballar!";
    } else {
        $missatge = "Estil no reconegut.";
    }

    echo "<p>" . $missatge . "</p>";
} else {
?>
    <form method="post" action="index.php">
        <p>Quin estil de música t'agrada més?</p>
        <input type="radio" name="estil" value="rock" required> Rock<br>
        <input type="radio" name="estil" value="pop"> Pop<br>
        <input type="radio" name="estil" value="rap"> Rap<br>
        <input type="radio" name="estil" value="classica"> Clàssica<br>
        <input type="radio" name="estil" value="electronica"> Electrònica<br>
        <input type="submit" value="Votar">
    </form>
<?php } ?>
</body>
</html>