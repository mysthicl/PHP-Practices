<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        text-align: center;
        padding-top: 50px;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }
</style>

<body>
    <div class="container">
        <?php
        $precioOriginal = 100;
        $descuento = 15; //15%

        if ($descuento >= 10) {
            //Calculo del precio final con descuento
            $precioFinal = $precioOriginal - (($precioOriginal * $descuento) / 100);
            //Mostrar resultados
            echo "Precio orginal: $$precioOriginal <br>";
            echo "Porcentaje de descuento $descuento% <br>";
            echo "El precio final con descuento es $" . number_format($precioFinal,2);
        } else {
            echo "El precio orginal es $" . $precioOriginal . " No aplica a descuento";
        }
        ?>
    </div>
</body>

</html>