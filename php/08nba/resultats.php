<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NBA!</title>
    </head>
    <body>
        <h1>NBA!</h1>

        <table border="1">
            <tr>
                <th>Jugador</th>
                <th>Dorsal</th>
                <th>Equip</th>
                <th>Accions</th>
            </tr>

            <?php
                //obro la connexió a la base de dades
                $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

                //consulta SQL que es farà servir
                $sql = 'SELECT id, nom_jugador, dorsal, nom_equip FROM jugadors_nba';

                //resultats de la consulta
                $result = mysqli_query($conn, $sql);

                //bucle que recorre tots els resultats
                while($row = mysqli_fetch_array($result)):
            ?>

                <tr>
                    <td><?= $row['nom_jugador'] ?></td>
                    <td><?= $row['dorsal'] ?></td>
                    <td><?= $row['nom_equip'] ?></td>
                    <td>
                        <form method="POST" action="esborrar.php">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="submit" value="Esborrar">
                        </form>
                        <form method="GET" action="formulari_canvi.php">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                </tr>

            <?php
                endwhile;

                // tanco la connexió
                $result->close();
                mysqli_close($conn);
            ?>
            </table>

        <p><a href="index.php">Inserir un nou jugador</a></p>

    </body>
</html>
