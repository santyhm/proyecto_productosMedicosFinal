<?php
header('Content-Type:aplicacion/json');
require('../db/Conectar.php');

//seleccionar los eventos del calendario
    $conexionDB;
    $conexionDB = new Conectar();
    
    $fecha_actual=date("Y-m-d");
    //$hoy=date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
   

    //Recupero el array de tblmedicamentos
    $sql = "SELECT * from tbl_productos";
    $query = $conexionDB->connect()->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $datos=$result;
    
    
    
    //Recupero el array de eventos
    
    
    
    
    $aux;
    $count=0;

    foreach($datos as $listado){
        if($listado['fechaIngreso']==$fecha_actual)
        {
            $count=$count+1;
        }

    }
    //echo "$hoy";
    //echo "$fecha_actual";
    
    
    
    //$cantidadProductos=count($datos);
    
    $title="TOTAL MEDICAMENTOS $count";
    $descripcion="CANTIDAD DE PRODUCTOS EL DIA DE HOY $count";
    $color="#FF0F0";
    $textColor="#FFFFFF";
    
        try{
            $sql = "INSERT INTO eventos(title,descripcion,color,textColor) VALUES (?,?,?,?)";
            
            $stmt = $conexionDB->connect()->prepare($sql);
            
            $stmt->bindParam(1, $title);
            $stmt->bindParam(2, $descripcion);
            $stmt->bindParam(3, $color);
            $stmt->bindParam(4, $textColor);
            

            
            //Ejecutar la sentencia
            $stmt->execute();
        }
        catch(Exception $error)
        {
            
            die ("No se pudo almacenar el registro: $error");
        }
        
        if(isset($stmt))
        {
            $sql1= "SELECT * from eventos";
            $query = $conexionDB->connect()->prepare($sql1);
            $query->execute();
            $result1 = $query->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($result1);

            //echo "Registro almacenado";
            exit();
        }
        else
        {
            echo "Hay problemas con la sentencia SQL";
        }

?>