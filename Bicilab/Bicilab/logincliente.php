<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BICICLETERIA JJ CLIENTE</title>
        <link href="resources/css/login.css" rel="stylesheet" type="text/css"/>
        <script src="resources/js/validaciones.js" type="text/javascript"></script>
    </head>
    <body>
       <header>
            <img class="imagen1" src="img/logo3.jpg" alt="logo">
            <img class="imagen2" src="img/logo3.jpg" alt="logo">
            <nav class="nav">
                <ul>
                   <li><a href="index.php">Inicio</a></li>
                    <li><a href="404.html">Quienes somos</a></li>
                    <li><a href="logincliente.php">Tienda Virtual</a></li>
                    <li><a href="Tiendas.html">Nuestras Tiendas</a></li>
                    <li><a href="contactenos.html">Contactenos</a></li>
                    <li><a href="loginusuario.php">Login Bicilab</a></li>
                </ul>
            </nav>
        </header>
        <main>
             <h1 class="titulo" style="text-align: center;">Bienvenido</h1>
             <div >
                <form action="validaciones.php" method="POST"   class="form-register">
                   <label for="user" class="controls">Usuario:</label>
                   <input type="email" name="user" id="user" required class="inputs">
                   <label for="contrasena" class="controls">Contraseña:</label>
                   <input type="password" name="contrasena" id="contrasena" required oninput="validartamano('contrasena'2,8)" class="inputs">
                   <button type="submit" class="botons">Iniciar Sesiòn</button>
                </form>
             </div>
              <footer>
                    <p><center>Copyright © 2023</center></p>
               </footer>
             
        </main>
    </body>
</html>
