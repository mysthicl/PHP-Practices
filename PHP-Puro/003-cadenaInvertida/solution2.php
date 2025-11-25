<?php
$textoOriginal = "Hola Mundo";
function cadenaInvertida($texto){
    return strrev($texto);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>" . cadenaInvertida($textoOriginal) . "</h1>";
    ?>
</body>
</html>