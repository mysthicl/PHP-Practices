<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
    }

    .tabla {
        width: 300px;
        border-collapse: collapse;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    th, td{
        padding: 8px;
        border: 1px solid #ddd;
    }
</style>

<body>
    <div class="container">
        <table border="1" class="tabla">
            <thead>
                <th>Operacion</th>
                <th>Resultado</th>
            </thead>
            <tbody>
                <?php
                $num = 7;
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $num * $i;
                    echo "<tr>";
                    echo "<td> $num x $i = </td>";
                    echo "<td> $resultado </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>