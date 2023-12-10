<?php
include '.\BDconect.php'; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST["id1"];

    $sql = "DELETE FROM inventario_accesorios WHERE idInventario=:id1";

    $query = $connect->prepare($sql);

    $query->bindParam(':id1',$id);

    if($query->execute()){
        echo "<script>alert('El registro se elimino correctamente'); window.location='inventario.php';</script>";        
    }else{
        echo "<script>alert('Error eliminando registro'); window.location='inventario.php';</script>";
    }
    
    $connect=null;
    
   }