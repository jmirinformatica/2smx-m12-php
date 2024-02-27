<!DOCTYPE html>
<html lang="ca">
    <head>
        <title>Exemple d'accés a base de dades</title>
        <meta charset="utf-8">
        <style>
            table {
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #dddddd;
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <h1>Exemple d'accés a base de dades</h1>

        <table> 
            <tr>
                <th>id</th>
                <th>nom</th>
            </tr>

        <?php
            //obro la connexió a la base de dades
            $conn = mysqli_connect('localhost', 'pablo0', 'Melilla2024', "pablo0_db");

            //consulta SQL que es farà servir
            $sql = 'SELECT id, nom FROM futbolistes';

            //resultats de la consulta
            $result = mysqli_query($conn, $sql);

            //bucle que recorre tots els resultats
            while($row = mysqli_fetch_array($result)) {
        ?>

            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nom'] ?></td>
            </tr>

        <?php
            }

            // tanco la connexió
            $result->close();
            mysqli_close($conn);
        ?>
        </table>
    </body>
</html>
