<?php
$temperaturas = [18, 22, 25, 20, 19, 24, 27];
$temperatuMax = max($temperaturas);
$temperaturaMin = min($temperaturas);
$promedioTemperatura = array_sum($temperaturas) / count($temperaturas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f0f8ff;
        color: #333;
        padding: 20px;
    }
    .container{
        max-width: 400px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
</style>
<body>
    <div class="container">
        <h1>Temperaturas de la Semana</h1>
        
        <?= implode(", ", $temperaturas); ?>
        
        <p>Temperatura Máxima: <?php echo $temperatuMax; ?>°C</p>
        <p>Temperatura Mínima: <?php echo $temperaturaMin; ?>°C</p>
        <p>Promedio de Temperaturas: <?php echo round($promedioTemperatura, 2); ?>°C</p>
    </div>
</body>
</html>