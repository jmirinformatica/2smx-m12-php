<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de fotos</title>
</head>
<body>
    <?php
    // aquest codi PHP busca totes les subcarpetes que hi ha i crea un enllaç per cadascuna
    $all_photos = array_filter(glob("img/*"), 'is_file');
    foreach ($all_photos as $photo) {
    ?>
        
        <img src='<?= $photo ?>' />

    <?php 
    } // tanco el foreach 
    ?>
</body>
</html>