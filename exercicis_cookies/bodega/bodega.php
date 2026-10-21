<?php
// Si s'ha enviat el formulari, guardem les cookies i anem a la pàgina d'informació
if (isset($_POST["majoredat"]) && isset($_POST["idioma"]) && isset($_POST["moneda"])) {
    setcookie("majoredat", $_POST["majoredat"], time() + 60 * 60 * 24 * 30);
    setcookie("idioma", $_POST["idioma"], time() + 60 * 60 * 24 * 30);
    setcookie("moneda", $_POST["moneda"], time() + 60 * 60 * 24 * 30);

    header("Location: informacio.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>
    <h1>Benvingut a la bodega</h1>

    <form method="post" action="bodega.php">
        <p>Ets major d'edat?<br>
            <input type="radio" name="majoredat" value="si" required> Sí<br>
            <input type="radio" name="majoredat" value="no"> No
        </p>

        <p>Idioma:
            <select name="idioma" required>
                <option value="">Escull...</option>
                <option value="ca">Català</option>
                <option value="es">Español</option>
                <option value="en">English</option>
            </select>
        </p>

        <p>Moneda:
            <select name="moneda" required>
                <option value="">Escull...</option>
                <option value="eur">Euros (€)</option>
                <option value="gbp">Lliures (£)</option>
                <option value="usd">Dòlars ($)</option>
            </select>
        </p>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>