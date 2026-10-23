<?php
session_start();

// L'usuari és vàlid si usuari i contrasenya són iguals (i no estan buits)
if (isset($_POST["usuari"]) && isset($_POST["password"])
    && $_POST["usuari"] != "" && $_POST["usuari"] == $_POST["password"]) {

    $_SESSION["usuari"] = $_POST["usuari"];
    header("Location: pagina1.php");
} else {
    header("Location: index.html");
}
exit;
?>