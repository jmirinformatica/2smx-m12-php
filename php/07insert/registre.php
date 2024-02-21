<!DOCTYPE html>
<html lang="ca">
<head>
<?php
    function post($param, $valor_per_defecte) {
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } else {
            return $valor_per_defecte;
        }
    }

    //variable per post
    $contingut = post("contingut", "?????");

    // dia d'avui
    $dia_i_hora =  date("Y-m-d h:i:sa");
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple d'accés a base de dades</title>
</head>
    <body>

        <?php
            //obro la connexió a la base de dades
            $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

            // Sentència SQL per a la inserció
            $sql = "INSERT INTO missatges (contingut, dia_i_hora) VALUES ('$contingut', '$dia_i_hora')";

            // Executar la consulta d'inserció
            mysqli_query($conn, $sql);

            // tanco la connexió
            mysqli_close($conn);
        ?>

        <p>S'han insertat els valors següents:</p>
        <ul>
            <li>Missatge: <?= $contingut ?></li>
            <li>Dia i hora: <?= $dia_i_hora ?></li>
        </ul>

        <p><a href="resultats.php">Veure tots els missatges</a></p>
        <p><a href="index.php">Inserir un nou missatge</a></p>
    </body>
</html>
