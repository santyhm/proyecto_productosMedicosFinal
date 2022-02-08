<?php
    include '../modelo/conexion.php';

    $id = $_POST['id'];
    $nuevCantidad = $_POST['nuevCantidad'];
    $nuevFechaVencimiento = $_POST['nuevFechaVencimiento'];

    $actualizar = "UPDATE tbl_productos
    SET cantidad = '$nuevCantidad',
    fechaVencimiento = '$nuevFechaVencimiento'
    WHERE id = '$id'";

    $resultados=mysqli_query($conexion,$actualizar);

    if($resultados){
        echo '
            <script>
            alert ("Producto actualizado exítosamente");
            window.location="../vista/index.html";
            </script>
            ';
    }else{
        echo '
            <script>
            alert ("Error al intentar actualizar el producto verifique el id");
            window.location="../vista/index.html";
            </script>
        ';
    }
    mysqli_close($conexion);
?>