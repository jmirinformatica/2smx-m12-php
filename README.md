# 2smx-m12-php

Codi PHP introduït a M12 de 2n de SMX.

## Desplegament en entorn local

A les carpetes `setup-...` hi les les diferents opcions disponibles per a crear un entorn de desenvolupament amb PHP:

* [Fent servir docker](./setup-docker-compose/)
* [Instal·lant xampp](./setup-xampp/)

## Desplegament en entorn remot

Amb la utilitat `rsync` es pot sincronitzar el codi local amb una carpeta remota.

Amb entorn **Linux**, hi un script bash anomenat [rsync.sh](./rsync.sh) que permet sincronitzar la carpeta `php` amb una carpeta remota. És necessari tenir instal·lada la utilitat `sshpass`. Aquest script es configura amb un fitxer `conf.txt` que es pot crear a partir de [l'exemple proporcionat](./conf.txt.example).

Amb entorn **Windows** val tenir instal·lat [MobaXTerm](https://mobaxterm.mobatek.net/), que es fa servir des de l'script [rsync.bat](./rsync.bat) per a executar el mateix script bash que a l'entorn Linux. Per tant, també cal crear el fitxer `conf.txt`.
