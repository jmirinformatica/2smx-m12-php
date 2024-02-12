<!DOCTYPE html>
<html lang="ca">
<head>
<?php
    function get($param, $valor_per_defecte) {
        if (isset($_GET[$param])) {
            return $_GET[$param];
        } else {
            return $valor_per_defecte;
        }
    }

    //variables per get
    $temperatura = get("t", "Desconeguda");

    // dia d'avui
    $dia = date("Y/m/d");
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre de temperatura</title>
</head>
<body>

<?php
    // Ruta del fitxer
    $nom_fitxer = "dades.txt";

    // Obrir el fitxer en mode append
    $fitxer = fopen($nom_fitxer, "a");
        
    // Comprovar si s'ha pogut obrir el fitxer
    if (!$fitxer) {
        // Si no s'ha pogut obrir el fitxer, mostrar un missatge d'error i acaba el programa
        die("Error: No s'ha pogut obrir el fitxer.");
    }

    // Crear la linia amb el format requerit
    $linia = "$dia,$temperatura\n";

    // Afegir la nova linia al final del fitxer
    fwrite($fitxer, $linia);
    
    // Tancar el fitxer
    fclose($fitxer);
?>

<p>S'han registrat els valors següents:</p>
<ul>
    <li>Dia: <?= $dia ?></li>
    <li>Temperatura: <?= $temperatura ?> °C</li>
</ul>

</body>
</html>