<?php
// Iniciem la sessió
session_start();

// Eliminem totes les variables de sessió
session_unset();

// Destruïm la sessió
session_destroy();

// Redirigim a la pàgina del formulari de login
header("Location: index.php");
exit();
?>
