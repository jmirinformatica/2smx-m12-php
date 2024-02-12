<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de fotos</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #contenidor {
            display: grid;
            gap: 1px;
            width: 100vw;
            max-width:100%;
            grid-template-columns: repeat(1, 1fr); /* 1 columna */
        }

        /* pantalla de 800px o mes d'amplada */
        @media only screen and (min-width: 800px) {
            #contenidor {
                grid-template-columns: repeat(2, 1fr); /* 2 columnes */
            }
        }

        /* pantalla de 1200px o mes d'amplada */
        @media only screen and (min-width: 1200px) {
            #contenidor {
                grid-template-columns: repeat(3, 1fr); /* 3 columnes */
            }
        }

        /* pantalla de 1600px o mes d'amplada */
        @media only screen and (min-width: 1600px) {
            #contenidor {
                grid-template-columns: repeat(4, 1fr); /* 4 columnes */
            }
        }

        img {
            cursor: pointer;
            object-fit: contain;
            height: 100%;
            width: 100%;
        }

        #div-imatge-gran {
            width: 100vw;
            max-width: 100%;
            height: 100vh;
            max-height: 100%;
            cursor: pointer;
            display: none;
        }
    </style>
</head>
<body>
    <div id="div-imatge-gran" onclick="ocultaImatgeGran()" >
        <img id="imatge-gran" />
    </div>
    <div id="contenidor">
        <?php
        // aquest codi PHP busca totes les subcarpetes que hi ha i crea un enllaç per cadascuna
        $all_photos = array_filter(glob("img/*"), 'is_file');
        foreach ($all_photos as $photo) {
        ?>
            <div>
                <img src="<?= $photo ?>" onclick="mostraImatgeGran(this)" />
            </div>
        <?php 
        } // tanco el foreach 
        ?>
    </div>
    <script>
    function mostraImatgeGran(img) {
        document.getElementById("imatge-gran").src = img.src;
        document.getElementById("div-imatge-gran").style.display = "block";
        document.getElementById("contenidor").style.display = "none";
    }
    function ocultaImatgeGran() {
        document.getElementById("div-imatge-gran").style.display = "none";
        document.getElementById("contenidor").style.display = "grid";
    }
    </script>
</body>
</html>