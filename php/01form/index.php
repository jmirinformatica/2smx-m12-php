<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola!</title>
</head>

<body>
    <form method="GET" action="hola.php">
        <p><label>Nom: <input type="text" name="nom" required /></label></p>
        <p><label>Cognoms: <input type="text" name="cognoms" required /></label></p>
        <p><label>N: <input type="number" name="n" required /></label></p>
        <p><label>Color de fons: <input type="color" name="bgcolor" value="#ffffff" required /></label></p>
        <p><label>Nom en negreta: <input type="radio" name="bold" value="bold" required /></label></p>
        <p><label>Nom normal: <input type="radio" name="bold" value="normal" required /></label></p>
        <p>
            <label>Color de la lletra:
                <select name="color">
                    <option value="green">Verd</option>
                    <option value="blue">Blau</option>
                    <option value="red">Vermell</option>
                    <option value="yellow">Groc</option>
                </select>
            </label>
        </p>
        <p><input type="submit" value="Envia!" /></p>
    </form>
</body>

</html>