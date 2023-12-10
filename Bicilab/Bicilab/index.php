<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/css/Styleinicio.css" rel="stylesheet" type="text/css"/>
    <title>inicio Bicilab</title>
    <script>
        function mostrarMensajeExito() {
            var email = document.getElementById("email").value;

            if (email.trim() === "") {
                alert("El campo no puede estar vacío");
            } else {
                alert("Datos almacenados con éxito");
            }
        }
    </script>
</head>
<body>
    <header>
        <img class="imagen1" src="img/logo3.jpg" alt="logo">
        <img class="imagen2" src="img/logo3.jpg" alt="logo">
        <nav>
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

    <img class="imagencuerpo" src="img/BICILAB (2).jpg">

        <div class="barra-gris">
            <h1 >SUSCRIBETE A NUESTRO PLAN DE INCENTIVOS</h1>                     
            <div class="registro-email">
                <form class="form-register" onsubmit="mostrarMensajeExito(); return false;">
                    <label for="usuario" class="controls">Correo Electrónico:</label>
                    <input type="email" name="email" id="email" placeholder="" class="inputs">
                    <button type="submit" class="botons">Enviar</button>
                </form>
            </div>
        </div>  
        
 <footer>
        <p><center>Copyright © 2023</center></p>
 </footer>
  
</body>
</html>