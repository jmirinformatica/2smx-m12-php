<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrasenya</title>
</head>
<body>
<?php
    function post($nom, $valor_per_defecte) {
        if (isset($_POST[$nom])) {
            return $_POST[$nom];
        } else {
            return $valor_per_defecte;
        }
    }
    $contrasenya = post("contrasenya", ""); //sense valor per defecte
?>

<?php
if ($contrasenya != "patata") {
?>
    <form action="." method="post">
        <input type="password" name="contrasenya" placeholder="Contrasenya per accedir-hi" required />
        <input type="submit" value="Entra" />
    </form> 

<?php
    if ($contrasenya == "") {
        exit("Si us plau, introdueix una contrasenya.");
    } else {
        exit("Contrasenya incorrecta. Torna-ho a provar.");
    }
}
?>

<p>
    Aqui hi ha el contingut que tan sols pots veure si poses la contrasenya correcta.
</p>

</body>
</html>