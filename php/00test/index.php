<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera prova PHP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<img src="smiley.gif" alt="Somriu!" />
<hr />
<?php
echo "Avui és " . date("Y/m/d") . "<br>";
echo "L'hora del servidor és " . date("h:i:sa"). "<br>";
echo "<ul>";
for($i=0;$i<100;$i++) {
    echo "<li>$i</li>";
}
echo "</ul>";
?>
</body>
</html>