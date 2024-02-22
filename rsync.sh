#!/bin/bash

SCRIPTPATH="$( cd -- "$(dirname "$0")" >/dev/null 2>&1 ; pwd -P )"

# Carreguem les variables del fitxer de configuració
source "$SCRIPTPATH/conf.txt"

# Executem rsync per sincronitzar la carpeta php amb el servidor remot
sshpass -p "$ssh_password" rsync -avz --delete -e "ssh -p $ssh_port" "$SCRIPTPATH/php" "$remote_path"
