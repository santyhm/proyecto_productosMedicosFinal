<?php
    include '../modelo/conexion.php';

    $id = $_POST['id'];
    
    $eliminar = "DELETE FROM tbl_productos
    WHERE id = '$id'";

    $resultados=mysqli_query($conexion,$eliminar);

    if($resultados){
        echo '
            <script>
            alert ("Producto eliminado exítosamente");
            window.location="../vista/registrosCompletos.php";
            </script>
            ';
    }else{
        echo '
            <script>
            alert ("Error al intentar eliminar el producto verifique el id");
            window.location="../vista/registrosCompletos.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>