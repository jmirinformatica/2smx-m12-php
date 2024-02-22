<?php
// Iniciem la sessió
session_start();

// Comprovem si l'usuari ha iniciat sessió
if (!isset($_SESSION['usuari'])) {
    // Redirigim a la pàgina de amb el formulari de login si l'usuari no ha iniciat sessió
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Benvingut</title>
</head>
<body>
    <h1>Benvingut, <?php echo $_SESSION['usuari']; ?>!</h1>
    <a href="logout.php">Tanca sessió</a>
</body>
</html>
