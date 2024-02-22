<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NBA!</title>
    </head>
    <body>
        <h1>NBA!</h1>

        <form method="POST" action="registre.php">
            <p><label>Jugador: <input type="text" name="jugador" required /></label></p>
            <p><label>Dorsal: <input type="number" name="dorsal" required /></label></p>

            <p>
                <label>Equip: <select name="equip">

                <?php
                    //obro la connexió a la base de dades
                    $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

                    //consulta SQL que es farà servir
                    $sql = 'SELECT nom_equip FROM equips_nba';

                    //resultats de la consulta
                    $result = mysqli_query($conn, $sql);

                    //bucle que recorre tots els resultats
                    while($row = mysqli_fetch_array($result)):
                ?>
                        <option value="<?= $row['nom_equip'] ?>"><?= $row['nom_equip'] ?></option>
                <?php
                    endwhile;
                    
                    // tanco la connexió
                    $result->close();
                    mysqli_close($conn);
                ?>

                </select></label>
            </p>
            <p><input type="submit" value="Afegeix" /></p>
        </form>

        <p><a href="resultats.php">Veure tots els jugadors</a></p>

    </body>
</html>
