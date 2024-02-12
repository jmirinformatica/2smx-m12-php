<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats de temperatura</title>
</head>
<body>

<?php
    // Ruta del fitxer
    $nom_fitxer = "dades.txt";

    // Obrir el fitxer en mode de lectura
    $fitxer = fopen($nom_fitxer, "r");

    // Comprovar si s'ha pogut obrir el fitxer
    if (!$fitxer) {
        // Si no s'ha pogut obrir el fitxer, mostrar un missatge d'error i acaba el programa
        die("Error: No s'ha pogut obrir el fitxer.");
    }

    // Llegir el fitxer línia per línia fins al final
    while (($linia = fgets($fitxer)) !== false) {
        // Dividir la línia en valors (dia i temperatura) utilitzant la coma com a separador
        $valors = explode(",", $linia);
        
        // Comprovar si s'han obtingut els dos valors (dia i temperatura)
        if (count($valors) == 2) {
            $dia = $valors[0];
            $temperatura = $valors[1];
            
            // Mostrar el dia i la temperatura en format HTML
    ?>
            <table border="1">
                <tr><th>Dia</th><th>Temperatura</th></tr>
                <tr>
                    <td><?= $dia ?></td>
                    <td><?= $temperatura ?></td>
                </tr>
            </table>

    <?php
        } else {
            // Si la línia no té el format esperat, mostrar un missatge d'error
            echo "Error: Format de línia incorrecte - $linia<br>";
        }
    }

    // Tancar el fitxer
    fclose($fitxer);
?>

</body>
</html>