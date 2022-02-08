<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
    <link rel="stylesheet" href="../css/diseño_tablas.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="flex">
        <a class="aDos" href="index.html">Volver</a>
    </div>
    <TABLE>
        <thead>
            <TR>
                <Th>ID</Th>
                <Th>NOMBRE DE REFERENCIA</Th>
                <Th>LABORATORIO</Th>
                <Th>FECHA DE VENCIMIENTO</Th>
                <Th>CANTIDAD</Th>
                <Th>FECHA DE INGRESO</Th>
            </TR>
        </thead>
        <?php
        include '../modelo/conexion.php';

        $sql = "SELECT id, nombreReferencia, laboratorio, fechaVencimiento, cantidad, fechaIngreso
        FROM tbl_productos";

        $resultados=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($resultados)){
            ?>
            <TR>
                <td> <?php echo $mostrar['id']?> </td>
                <td> <?php echo $mostrar['nombreReferencia']?> </td>
                <td> <?php echo $mostrar['laboratorio']?> </td>
                <td> <?php echo $mostrar['fechaVencimiento']?> </td>
                <td> <?php echo $mostrar['cantidad']?> </td>
                <td> <?php echo $mostrar['fechaIngreso']?> </td>
            </TR>
        <?php
        }
        mysqli_close($conexion);
        ?>
    </TABLE>
    <br>
    <form action="../controlador/eliminar.php" method="POST" class="contenedor">
        <label for="" class="texto">Ingrese el ID del producto que desea Eliminar</label>
        <br>
        <input type="number" placeholder="ID" autocomplete="off" name="id" class="id">
        <button class="btnEliminar">ELIMINAR</button>
    </form>
</body>
</html>