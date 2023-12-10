<?php

include '.\BDconect.php'; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Accesorio_idAccesorio = $_POST["nombre_accesorio"];
    $cantidad_disponible = $_POST["cantidad_disponible"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $ubicacion_bodega_id = $_POST["nombre"];
    $id=$_POST["id"];

    $sql = "UPDATE inventario_accesorios SET Accesorio_idAccesorio=:nombre_accesorio, cantidad_disponible=:cantidad_disponible,fecha_ingreso=:fecha_ingreso,ubicacion_bodega_id=:nombre"
    . " WHERE idInventario=:id";

    $query = $connect->prepare($sql);

    $query->bindParam(':id',$id);
    $query->bindParam(':nombre_accesorio',$Accesorio_idAccesorio);
    $query->bindParam(':cantidad_disponible',$cantidad_disponible);
    $query->bindParam(':fecha_ingreso',$fecha_ingreso);
    $query->bindParam(':nombre',$ubicacion_bodega_id);
    
    
    if($query->execute()){
        echo "<script>alert('El registro se actualizo correctamente'); window.location='inventario.php';</script>";        
    }else{
        echo "<script>alert('Error actualizando registro'); window.location='inventario.php';</script>";
    }
    
    
    $connect=null;
    
   }
