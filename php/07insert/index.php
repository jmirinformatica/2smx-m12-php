<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemple d'accés a base de dades</title>
    </head>
    <body>
        <h1>Exemple de fer inserts i selects a la base de dades</h1>
        <p>He creat la taula següent a MySQL:</p>
        <pre>
        <code>
        CREATE TABLE missatges (
            id INT AUTO_INCREMENT PRIMARY KEY,
            contingut VARCHAR(255),
            dia_i_hora VARCHAR(255)
        );
        </code>
        </pre>

        <form method="POST" action="insert.php">
            <p><label>Missatge: <input type="text" name="contingut" required /></label></p>
            <p><input type="submit" value="Envia!" /></p>
        </form>
        <p><a href="select.php">Veure tots els missatges</a></p>

    </body>
</html>
