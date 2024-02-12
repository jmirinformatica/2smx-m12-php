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
    $lletra = get("lletra", "100%");
    ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de botons</title>
    <style>
        body {
            background-color: white;
            color: black;
            font-size: <?= $lletra ?>;
        }


        .dark-mode {
            background-color: black;
            color: white;
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
        <input type='submit' value='MODE FOSC' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='mode' value='' />
        <input type='hidden' name='lletra' value='<?= $lletra ?>' />
        <input type='submit' value='MODE CLAR' />
    </form>
</p>


<p>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='lletra' value='50%' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='submit' value='LLETRA PETITA' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='lletra' value='100%' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='submit' value='LLETRA MITJANA' />
    </form>
    <form class='boto' action='index.php' method='get'>
        <input type='hidden' name='lletra' value='150%' />
        <input type='hidden' name='mode' value='<?= $mode ?>' />
        <input type='submit' value='LLETRA GRAN' />
    </form>
</p>


<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam labore nobis praesentium ipsa sunt magnam soluta alias, inventore, deleniti natus accusamus magni cumque impedit autem sit! Asperiores accusamus aut earum.</p>


</body>
</html>
