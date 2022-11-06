<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/comunes/style.css">
    <title>BIBLIOTECA</title>
</head>

<body style="background-image: url('/comunes/img/beige.jpg');">
    <?php

    require '../comunes/auxiliar.php';

    $pdo = conectar();
    $sent = $pdo->query("SELECT * FROM biblioteca");
    $filas = $sent->fetchAll();
    ?>
    <div class="div_principal_biblioteca">
        <h1 style="text-align: center;">BIBLIOTECAS</h1>

        //TODO
        <div id="buscador_biblioteca">
            <form action="" method="get">
                <h3>CRITERIOS DE BÚSQUEDA:</h3>
                <p>
                    <label>
                    Desde código:
                    <input type="text" name="desde_codigo">
                    </label>
                </p>
                <p>
                    <label>
                    Hasta código:
                    <input type="text" name="hasta_codigo">
                    </label>
                </p>
                <p>
                    <label>
                    Denominación:
                    <input type="text" name="denominacion">
                    </label>
                </p>
                <p>
                    <label>
                    Posición:
                    <input type="text" name="posicion">
                    </label>
                </p>
            </form>
        </div>
        <table border="1" style="margin: auto;">
            <th>Código</th>
            <th>denominación</th>
            <th>Posición</th>
            <?php foreach ($filas as $fila) : ?>
                <tr>
                    <td><?= $fila['codigo'] ?></td>
                    <td><?= $fila['denominacion'] ?></td>
                    <td><?= $fila['posicion'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="../index.php" id="volver_inicio">Inicio</a>
    </div>
</body>

</html>
