<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include './BDconect.php';

$user = $_POST['user'];
$pass = $_POST['contrasena'];

$sql = "SELECT * FROM usuario WHERE email  = :user AND Contraseña = :pass";
$query = $connect->prepare($sql);
$query->bindParam(':user',$user,PDO::PARAM_STR);
$query->bindParam(':pass',$pass,PDO::PARAM_STR);
$query->execute();

if($query->rowCount() > 0 ){
    session_start();
    $_SESSION['usuario'] = $user;
    echo "<script>window.location.replace('DahsBoard.php');</script>";
}else{
      echo "<script> alert('Nombre de usuario y/o contraseña incorrectos'); "
    . "window.location.replace('index.php');</script>";    
}

