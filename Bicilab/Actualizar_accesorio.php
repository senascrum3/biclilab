<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="resources/js/validaciones.js" type="text/javascript"></script>
    </head>
    <body>
        <?php 
        include './session.php';
        include './BDconect.php'; 
        $id = $_POST['id'];
        $sql= "SELECT * FROM inventario_accesorios WHERE idInventario = :id"; 
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
        $stmt->execute();
        $obj = $stmt->fetchObject();
        //var_dump($obj);
        ?>
        <h2>Actualizar Registro</h2>
        <form method="post" action="logicaactualizaracce.php" >
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
                                ?> <option value="<?php echo $ace->idaccesorio; ?>" <?php if($ace->idaccesorio==$obj->Accesorio_idAccesorio ){echo 'selected';} ?>><?php echo $ace->nombre_accesorio; ?> </option>                           
                           <?php } }?>
                        </select> 
                    </td>
                   
                <tr>
                    <td><label for="cantidad_disponible">Cantidad:</label></td>
                    <td><input type="text" id="cantidad_disponible" name="cantidad_disponible" value="<?php echo $obj->cantidad_disponible;?>" required></td>
                </tr>
                <tr>
                    <td><label for="fecha_ingreso">Fecha de Ingreso:</label></td>
                    <td><input type="date" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $obj->fecha_ingreso;?>" required  > </td>
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
                           ?> <option value="<?php echo $ubi->id_ubicacion; ?>"<?php if($ubi->id_Ubicacion=$obj->ubicacion_bodega_id ){echo 'selected';} ?>><?php echo $ubi->ubicacion; ?></option>                           
                           <?php } }?>
                        </select> 
                    </td>
                </tr>
            </table>
            </table>
            <input type="hidden" "name="id" id="id" value="<?php echo $id; ?>" />
            <button type="submit" > Actualizar Registro </button>
        </form>        
    </body>
</html>