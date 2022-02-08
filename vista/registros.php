
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
    <link rel="stylesheet" href="../css/diseño_tablas.css">
</head>
<body>
    <div class="flex">
        <a class="aDos" href="busquedaPorFecha.php">Volver</a>
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

        $fechVencimiento = $_POST['fehaVencimiento'];

        $sql = "SELECT id, nombreReferencia, laboratorio, fechaVencimiento, cantidad, fechaIngreso
        FROM tbl_productos
        WHERE '$fechVencimiento' <= fechaVencimiento";

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
</body>
</html>