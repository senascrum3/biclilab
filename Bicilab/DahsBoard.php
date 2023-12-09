<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="resources/css/Styledash.css" rel="stylesheet" type="text/css"/>
    <title>Bicilab</title>
</head>
<body>
    <?php
    include './session.php'; 
    ?>
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

<body>
    <div class="dashboard">
        <div class="modulo">
            <a href="produccion.html">0001 Producción</a>
        </div>
        <div class="modulo">
            <a href="planeacion_compras.html">0002 Planeación y Compras</a>
        </div>
        <div class="modulo">
            <a href="inventario.php">0003 Inventario</a>
        </div>
        <div class="modulo">
            <a href="ventas_cliente.html">0004 Ventas y Cliente</a>
        </div>
    </div>
</body>
</html>

</body>
</html>