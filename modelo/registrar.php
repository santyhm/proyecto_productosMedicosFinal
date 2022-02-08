<?php
    include 'conexion.php';

    $nomReferencia = $_POST['nomReferencia'];
    $labProducido =$_POST['labProducido'];
    $fechaVencimiento =$_POST['fechaVencimiento'];
    $cantidad =$_POST['cantidad'];

    $insert_registro = "INSERT INTO tbl_productos(nombreReferencia, laboratorio, fechaVencimiento, cantidad, fechaIngreso)
    VALUES('$nomReferencia', '$labProducido', '$fechaVencimiento', '$cantidad', CURDATE())";

    $ejecutar_register = mysqli_query($conexion, $insert_registro);

    if($ejecutar_register){
        echo '
                <script>
                alert ("Producto registrado exítosamente");
                window.location="../vista/index.html";
                </script>
            ';
        mysqli_close($conexion);
    }

?>