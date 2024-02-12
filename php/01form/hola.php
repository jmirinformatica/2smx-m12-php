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
    $nom = get("nom", "Sense nom");
    $cognoms = get("cognoms", "Sense cognoms");
    $n = get("n", 0);
    $bgcolor = get("bgcolor", "white");
    $color = get("color", "black");
    $bold = get("bold", "normal");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola!</title>
    <style>
        body {
            background-color: <?= $bgcolor ?>;
            color: <?= $color ?>;
        }
        .nom-i-cognoms {
            font-weight: <?= $bold ?>;
        }
    </style>
</head>

<body>
    <p>Nom: <span class='nom-i-cognoms'><?= $nom ?></span></p>
    <p>Cognoms: <span class='nom-i-cognoms'><?= $cognoms ?></span></p>
    <ul>
    <?php for( $i = 0; $i < $n; $i++ ) { ?>
    
        <li><?= $i ?></li>
    
    <?php 
    } // end for 
    ?>
    </ul>
    <a href="index.php">&#x3c;&#x3c; Torna al formulari</a>
</html>