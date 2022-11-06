<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA</title>
</head>
<body>
    <?php
        $pdo = new PDO("pgsql:host=localhost;dbname=biblioteca", "biblioteca", "biblioteca");

        $sent = $pdo->query("SELECT * FROM biblioteca");

        $filas = $sent->fetchAll();
    ?>
    <h1 style="text-align: center;">BIBLIOTECAS</h1>
    <table border="1" style="margin: auto;">
        <th>Código</th>
        <th>denominación</th>
        <th>Posición</th>
        <?php foreach ($filas as $fila): ?>
        <tr>
            <td><?= $fila['codigo'] ?></td>
            <td><?= $fila['denominacion'] ?></td>
            <td><?= $fila['posicion'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
