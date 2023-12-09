<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="resources/js/validaciones.js" type="text/javascript"></script>
    </head>
    <body>
        <?php 
        include './session.php';
        include './BDconect.php'; ?>
        <h2>Nuevo Registro</h2>
        <form method="post" action="logicaregistro.php" >
            <table>
                <tr>
                    <td><label for="nombre_accesorio">Nombre Accesorio:</label></td>
                     <td>
                        <select id="nombre_accesorio" name="nombre_accesorio">
                           <?php 
                           $sql = "SELECT idaccesorio,nombre_accesorio FROM accesorio";
                           $query = $connect->prepare($sql);
                           $query->execute();
                           $resultsace = $query->fetchAll(PDO::FETCH_OBJ);
                           if($query->rowCount()>0){
                               foreach ($resultsace as $ace) {
                           ?> <option value="<?php echo $ace->idaccesorio; ?>"><?php echo $ace->nombre_accesorio; ?></option>                           
                           <?php } }?>
                        </select> 
                    </td>
                   
                <tr>
                    <td><label for="cantidad_diponible">Cantidad:</label></td>
                    <td><input type="text" id="cantidad_diponible" name="cantidad_diponible" required></td>
                </tr>
                <tr>
                    <td><label for="fecha_ingreso">Fecha de Ingreso:</label></td>
                    <td><input type="date" id="fecha_ingreso" name="fecha_ingreso" required  > </td>
                </tr>
                <tr>
                    <td><label for="ubicacion">Nombre Ubicacion:</label></td>
                    <td>
                        <select id="nombre" name="nombre">
                           <?php 
                           $sql = "SELECT id_ubicacion,ubicacion FROM ubicacion_bodega";
                           $query = $connect->prepare($sql);
                           $query->execute();
                           $resultsubi = $query->fetchAll(PDO::FETCH_OBJ);
                           if($query->rowCount()>0){
                               foreach ($resultsubi as $ubi) {
                           ?> <option value="<?php echo $ubi->id_ubicacion; ?>"><?php echo $ubi->ubicacion; ?></option>                           
                           <?php } }?>
                        </select> 
                    </td>
                </tr>
            </table>
            <button type="submit" > Crear registro </button>
        </form>        
    </body>
</html>

