<?php

include '.\BDconect.php'; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Accesorio_idAccesorio = $_POST["nombre_accesorio"];
    $cantidad_diponible = $_POST["cantidad_diponible"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $ubicacion_bodega_id = $_POST["nombre"];
    
    $sql = "INSERT INTO inventario_accesorios (Accesorio_idAccesorio,cantidad_disponible,fecha_ingreso,ubicacion_bodega_id) "
        . "VALUES (:nombre_accesorio,:cantidad_diponible,:fecha_ingreso,:nombre)";
    $query = $connect->prepare($sql);
    
    $query->bindParam(':nombre_accesorio',$Accesorio_idAccesorio);
    $query->bindParam(':cantidad_diponible',$cantidad_diponible);
    $query->bindParam(':fecha_ingreso',$fecha_ingreso);
    $query->bindParam(':nombre',$ubicacion_bodega_id);
    
    if($query->execute()){
        echo "<script>alert('El registro se inserto correctamente'); window.location='inventario.php';</script>";        
    }else{
        echo "<script>alert('Error insertando registro'); window.location='inventario.php';</script>";
    }
    
    
    $connect=null;
    
   }
