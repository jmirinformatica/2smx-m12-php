<?php
    function post($param, $valor_per_defecte) {
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } else {
            return $valor_per_defecte;
        }
    }

    //variable per post
    $id = post("id", "-1");

    //obro la connexió a la base de dades
    $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

    // Sentència SQL per a la inserció
    $sql = "DELETE FROM jugadors_nba WHERE id = $id";

    // Executar la consulta d'inserció
    mysqli_query($conn, $sql);

    // tanco la connexió
    mysqli_close($conn);

    header("Location: resultats.php", true, 301); 
    exit(); 
?>