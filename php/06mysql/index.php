<!DOCTYPE html>
<html lang="ca">
    <head>
        <title>Exemple d'accés a base de dades</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Exemple d'accés a base de dades</h1>

        <p>Llistat de jugadors i jugadores que hi ha a la taula <code>futbolistes</code> creada amb el codi següent:</p>
        <pre>
        <code>
        CREATE TABLE futbolistes (
            id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nom varchar(255) NOT NULL
        );

        INSERT INTO futbolistes(nom) VALUE ('Leo Messi');
        INSERT INTO futbolistes(nom) VALUE ('Aitana Bonmatí');
        </code>
        </pre>

        <ul>
        <?php
            //obro la connexió a la base de dades
            $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

            //consulta SQL que es farà servir
            $query = 'SELECT id, nom FROM futbolistes';

            //resultats de la consulta
            $result = mysqli_query($conn, $query);

            //bucle que recorre tots els resultats
            while($row = mysqli_fetch_array($result)):
        ?>

            <li><b><?= $row['id'] ?></b>: <?= $row['nom'] ?></li>

        <?php
            endwhile;

            // tanco la connexió
            $result->close();
            mysqli_close($conn);
        ?>
        </ul>
    </body>
</html>
