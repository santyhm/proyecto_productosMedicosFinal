<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busqueda</title>
    <link rel="stylesheet" href="../css/diseño_fechaVencimiento.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unna&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex">
        <a href="index.html">Volver</a>
    </div>
    <h1>Ver productos que no se han vencido hasta la fecha</h1>
    <h2>Ingrese la fecha</h2>
    <form action="registros.php" method="POST">
        <div>
            <input class="" type="date" name="fehaVencimiento" autocomplete="off" required>
        </div>
        <br>
        <button class="btnRegistro">Buscar</button>
    </form>
</body>
</html>