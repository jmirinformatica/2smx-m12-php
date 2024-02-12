<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espai personal</title>
    <style>
    body {
        background-color: lightgreen;
    }
    </style>
</head>
<body>
    <h1>Espai personal d'Alfonso da Silva </h1>
    <p>Hola! En aquesta pàgina web hi ha totes les pràctiques de PHP que faig al mòdul de projecte.</p>
    
    <ul>
    <?php
    // aquest codi PHP busca totes les subcarpetes que hi ha i crea un enllaç per cadascuna
    $all_dirs = glob('*' , GLOB_ONLYDIR);
    foreach ($all_dirs as $dir) {
    ?>
        
        <li><a href='<?= $dir ?>'><?= $dir ?></li>

    <?php 
    } // tanco el foreach 
    ?>
    </ul>
</body>
</html>