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
$sql = "SELECT contrasenya FROM usuaris WHERE usuari='$usuari'";

// Resultats de la consulta
$result = mysqli_query($conn, $sql);

// Comprovar si l'usuari existeix a la base de dades
$contrasenya_correcta = false;

// Comprovar si l'usuari existeix a la base de dades
if (mysqli_num_rows($result) == 1) {
    
    // Obtenir les dades de l'usuari
    $row = mysqli_fetch_assoc($result);
    
    // Verificar la contrasenya
    if ($contrasenya == $row['contrasenya']) {
        
        // Inici de sessió correcte
        $_SESSION['usuari'] = $usuari;
        $contrasenya_correcta = true;

    } else {
        // Inici de sessió fallit
        echo "Contrasenya incorrecta";
        $contrasenya_correcta = false;
    }
} else {
    // Inici de sessió fallit (usuari no trobat)
    echo "L'usuari no existeix";
    $contrasenya_correcta = false;
}

// Tancar la connexió
mysqli_close($conn);

if($contrasenya_correcta) {
    // L'usuari ja està autenticat, pot veure el contigut protegit
    header("Location: protegit.php");
    exit();
} else {
    echo "<br/><a href='index.php'>Torna a fer login</a>";
}
?>
