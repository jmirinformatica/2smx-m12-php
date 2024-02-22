<?php
// Iniciem la sessió
session_start();

function post($param, $valor_per_defecte) {
    if (isset($_POST[$param])) {
        return $_POST[$param];
    } else {
        return $valor_per_defecte;
    }
}

//variables per post
$usuari = post("usuari", "?????");
$contrasenya = post("contrasenya", "?????");

// Connexió a la base de dades
$conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

// Consulta per comprovar les credencials
$sql = "SELECT * FROM usuaris WHERE usuari='$usuari' AND contrasenya='$contrasenya'";
$result = mysqli_query($conn, $sql);

$num_resultats = mysqli_num_rows($result);

// Tancar la connexió
mysqli_close($conn);

// Comprovar si l'usuari existeix a la base de dades
if ($num_resultats == 0) {
    // Inici de sessió fallit
    echo "Nom d'usuari o contrasenya incorrectes.";
    header("Location: index.php");
    exit();
} else {
    // Inici de sessió correcte
    $_SESSION['usuari'] = $usuari;
    // L'usuari ja estaba autenticat, pot veure el contigut protegit
    header("Location: protegit.php");
    exit();
}
?>
