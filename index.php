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

        var_dump($pdo);
    ?>
</body>
</html>
