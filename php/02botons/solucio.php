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
    $mode = get("mode", ""); //sense valor per defecte
    $lletra = get("lletra", "100");
    $tipus_font = get("tipus_font", "sans-serif");
    $n = rand(1,5);
    ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de botons</title>
    <style>
        body {
            background-color: white;
            color: black;
            font-family: monospace;
        }

        .lorem {
            font-size: <?= $lletra ?>%;
            font-family: <?= $tipus_font ?>;
        }

        .dark-mode {
            background-color: black;
            color: white;
        }

        .disco-mode {
            background-color: <?php printf( "#%06X\n", mt_rand( 0, 0xFFFFFF )); ?>;
            color: <?php printf( "#%06X\n", mt_rand( 0, 0xFFFFFF )); ?>;
        }

        form.boto {
            /* així faig que el formulari de buttons quedi millor */
            display: inline;
        }
    </style>
</head>
<body class='<?= $mode ?>'>

<p>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='mode' value='dark-mode' />
        <input type='hidden' name='lletra' value='<?= $lletra ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='MODE FOSC' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='mode' value='' />
        <input type='hidden' name='lletra' value='<?= $lletra ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='MODE CLAR' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='mode' value='disco-mode' />
        <input type='hidden' name='lletra' value='<?= $lletra ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='DISCO MODE' />
    </form>
</p>

<p>
    <!--
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='lletra' value='50%' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='LLETRA PETITA' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='lletra' value='100%' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='LLETRA MITJANA' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='lletra' value='150%' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='LLETRA GRAN' />
    </form>
    -->
    <form class='boto' action='index.php' method='get'>
        <input type="range" name="lletra" min="50" max="200" step="10" value="<?= $lletra ?>">
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='hidden' name='tipus_font' value='<?= $tipus_font ?>' />
        <input type='submit' value='CANVI LLETRA' />
    </form>
</p>

<p>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='tipus_font' value='serif' />
        <input type='hidden' name='lletra' value='<?= $lletra ?>' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='submit' value='SERIF' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='tipus_font' value='sans-serif' />
        <input type='hidden' name='lletra' value='<?= $lletra ?>' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='submit' value='SANS-SERIF' />
    </form>
</p>

<?php for($i = 0 ; $i < $n; $i ++) { ?>

    <p class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam labore nobis praesentium ipsa sunt magnam soluta alias, inventore, deleniti natus accusamus magni cumque impedit autem sit! Asperiores accusamus aut earum.</p>

<?php } //endfor ?>

</body>
</html>
