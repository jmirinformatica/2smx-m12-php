<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemple d'accés a base de dades</title>
    </head>
    <body>
        <h1>Missatges que hi ha a la base de dades</h1>
        <ul>
        <?php
            //obro la connexió a la base de dades
            $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

            //consulta SQL que es farà servir
            $sql = 'SELECT id, contingut, dia_i_hora FROM missatges';

            //resultats de la consulta
            $result = mysqli_query($conn, $sql);

            //bucle que recorre tots els resultats
            while($row = mysqli_fetch_array($result)):
        ?>

            <li>
                <b>#<?= $row['id'] ?> (<?= $row['dia_i_hora'] ?>)</b>: <?= $row['contingut'] ?>
            </li>

        <?php
            endwhile;

            // tanco la connexió
            $result->close();
            mysqli_close($conn);
        ?>
        </ul>

        <p><a href="select.php">Veure tots els missatges</a></p>
        <p><a href="index.php">Inserir un nou missatge</a></p>

    </body>
</html>
