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

            <p><span class="char-key"><?= $dia ?></span>: <span class="char-value"><?= $temperatura ?></span> °C</p>

    <?php
        } else {
            // Si la línia no té el format esperat, mostrar un missatge d'error
            echo "Error: Format de línia incorrecte - $linia<br>";
        }
    }

    // Tancar el fitxer
    fclose($fitxer);
?>

<!-- AQUEST DIV CONTINDRÂ EL GRÀFIC GENERAT AMB JAVASCRIPT -->
<div id="chart" style="width:900px; height: 500px;"></div>

</body>

<!-- CODI JAVASCRIPT QUE GENERA EL GRÀFIC -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Labels que apareixen al gràfic
    var title_label = "Gràfic de temperatures";
    var key_label = "Dia";
    var value_label = "Temperatura";

    // Llista de tots els valors dels spans amb class igual a 'char-key'
    var keys = getContent("char-key");
    var values = getContent("char-value");

    // Uneixo per parelles les keys i els values
    var keys_and_values = zipArrays(keys, values);
    
    // Afegim la capcelera al principi de l'array
    keys_and_values.unshift([key_label, value_label]);

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(keys_and_values);

        var options = {
            title: title_label,
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart'));

        chart.draw(data, options);
    }

    function getContent(className) {
        // Obtenim totes les etiquetes <span> amb l'atribut class igual al className proporcionat
        var spans = document.querySelectorAll("span." + className);

        // Creem un array buit per emmagatzemar els textos
        var textos = [];

        // Iterem sobre les etiquetes <span> trobades
        spans.forEach(function(span) {
            // Afegim el text de cada etiqueta al nostre array
            textos.push(span.textContent);
        });

        return textos;
    }

    function zipArrays(array1, array2) {
        // Verifiquem que les dues arrays tenen la mateixa longitud
        if (array1.length !== array2.length) {
            throw new Error('Els dos arrays han de tenir la mateixa longitud');
        }

        // Creem un array buit per emmagatzemar les parelles de valors
        var zippedArray = [];

        // Iterem sobre la longitud d'una de les arrays (podríem iterar sobre qualsevol, ja que tenen la mateixa longitud)
        for (var i = 0; i < array1.length; i++) {
            // Verifiquem si el valor del segon array és numèric
            if (isNaN(array2[i])) {
                console.log("Valor no numèric: " + array2[i]);
            } else {
                // Si és numèric, afegim la parella amb els elements corresponents de les dues arrays
                zippedArray.push([array1[i], parseFloat(array2[i])]);
            }
        }

        // Retornem l'array zip
        return zippedArray;
    }
</script>
</html>