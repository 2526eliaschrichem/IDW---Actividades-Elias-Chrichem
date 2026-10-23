<?php
session_start();

if (isset($_POST["producte"]) && isset($_POST["quantitat"])) {
    $producte = $_POST["producte"];
    $quantitat = (int) $_POST["quantitat"];

    if ($quantitat > 0) {
        if ($producte == "pa") {
            if (!isset($_SESSION["pa"])) {
                $_SESSION["pa"] = 0;
            }
            $_SESSION["pa"] = $_SESSION["pa"] + $quantitat;
        } elseif ($producte == "llet") {
            if (!isset($_SESSION["llet"])) {
                $_SESSION["llet"] = 0;
            }
            $_SESSION["llet"] = $_SESSION["llet"] + $quantitat;
        }
    }
}

// Tornem a la mateixa pàgina de la botiga
header("Location: index.html");
exit;
?>