@echo off
setlocal enabledelayedexpansion

REM Obté la ruta del directori de l'script BAT
set "SCRIPTPATH=%~dp0"

REM Substitueix tots els "\" per "/"
set "SCRIPTPATH=!SCRIPTPATH:\=/!"

REM Substitueix tots els ":" per un string buit ""
set "SCRIPTPATH=!SCRIPTPATH::=!"

start "" "C:\Program Files (x86)\Mobatek\MobaXterm\MobaXterm.exe" -newtab "bash /drives/%SCRIPTPATH%rsync.sh" -exitwhendone

endlocal