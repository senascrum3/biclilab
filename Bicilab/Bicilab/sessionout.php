<?php
include('./BDconect.php');

session_start();

if (isset($_SESSION['usuario'])) {
  session_destroy();
  echo "<script>alert('Sesión cerrada exitosamente.'); window.location.replace('index.php');</script>";
} else {
  echo "<script>alert('No hay una sesión iniciada.'); window.location.replace('index.php');</script>";
}
?>