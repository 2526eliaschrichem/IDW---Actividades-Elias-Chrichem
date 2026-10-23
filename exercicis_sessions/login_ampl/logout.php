<?php
session_start();
session_destroy();   // esborra la sessió
header("Location: index.html");
exit;
?>