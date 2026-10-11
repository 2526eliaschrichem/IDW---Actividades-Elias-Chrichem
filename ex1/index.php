<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Contacte</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    echo "<p>Missatge rebut, $nom. Gràcies per contactar. Et respondrem a $email</p>";
} else {
?>
    <form method="post" action="index.php">
        Nom: <input type="text" name="nom" required><br>
        Cognoms: <input type="text" name="cognoms" required><br>
        Email: <input type="email" name="email" required><br>
        Missatge:<br>
        <textarea name="missatge" required></textarea><br>
        <input type="submit" value="Enviar">
    </form>
<?php } ?>
</body>
</html>