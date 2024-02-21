#!/bin/bash

# Carreguem les variables del fitxer de configuració
source conf.txt

# Executem rsync per sincronitzar la carpeta php amb el servidor remot
sshpass -p "$password" rsync -avz --delete -e "ssh -p $port" "./php" "$remote"
