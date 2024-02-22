<?php
// Iniciem la sessió
session_start();

// Comprovem si l'usuari ha iniciat sessió
if (isset($_SESSION['usuari'])) {
    // L'usuari ja estaba autenticat, pot veure el contigut protegit
    header("Location: protegit.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p>L'usuari és alumne i la contrasenya és patata.</p>
    <form action="login.php" method="post">
        <p>
            <label for="usuari">Nom d'usuari:</label>
            <input type="text" id="usuari" name="usuari">
        </p>
        <p>
            <label for="contrasenya">Contrasenya:</label>
            <input type="password" id="contrasenya" name="contrasenya">
        </p>
        <p>
            <input type="submit" value="LOGIN!">
        </p> 
    </form>
</body>
</html>