<?php
$textoOriginal = "Hola Mundo";

function invertir($texto)
{
    $cadena = "";
    for ($i = strlen($texto)-1; $i >= 0; $i--) {
        $cadena .= $texto[$i];
    }
    return $cadena;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        <?php
        echo invertir($textoOriginal);
        ?>
    </div>
</body>

</html>