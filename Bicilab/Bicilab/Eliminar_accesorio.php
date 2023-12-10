<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <title>Inventario</title>
        <link href="resources/css/formularios.css" rel="stylesheet" type="text/css"/>
        <script src="resources/js/validaciones.js" type="text/javascript"></script>
    </head>
    <body>
        <?php 
        include '.\Header.php';
        include '.\BDconect.php'; 
        $id = $_POST['id1'];
        $sql= "SELECT * FROM inventario_accesorios WHERE idInventario = :id1"; 
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id1', $id, PDO::PARAM_INT); 
        $stmt->execute();
        $obj = $stmt->fetchObject();
        //var_dump($obj);

        ?>
        <h2>¿Desea eliminar el registro?</h2>
        <table><tbody><th>
        <form method="post" action="logicaborrar.php" >
                   <input type="text" name="id1" id="id1" value="<?php echo $id; ?>" style="display: none;" />
            <button class="botons" type="submit" > Si </button>
        </form> </th>
        <th><form action="inventario.php" method="get">
        <button class="botons" type="submit">No</button>
        </form> </th>
        
    </body>
</html>