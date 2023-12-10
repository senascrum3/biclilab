<html>
    <head>
        <title>Inventario</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></link>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"></link>        
        <link href="resources/css/formularios.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    
    <?php
    include '.\header.php';
    ?>
    <button type="button" class="nuevo" onclick="location.href='nuevoregistro.php'" >Nuevo Registro</button>
        <?php
      
       include '.\BDconect.php'; 
                $sql = " SELECT
                    E.idInventario,
                    D.nombre_accesorio,
                    E.cantidad_disponible,
                    E.fecha_ingreso ,
                    U.ubicacion
                    FROM inventario_accesorios E INNER JOIN accesorio D ON E.Accesorio_idAccesorio=D.`idaccesorio`
                    INNER JOIN ubicacion_bodega U ON E.ubicacion_bodega_id=u.`id_Ubicacion`";
        $query = $connect->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
        //var_dump($results);
        
         if ($query->rowCount() > 0) {
                    echo '<table id="t-all" class="display nowrap" style="width: 100%" border="1"> <thead>';
                    echo '<th>CÓDIGO</th>';
                    echo '<th>NOMBRES</th>';
                    echo '<th>CANTIDAD DISPONIBLE</th>';
                    echo '<th>FECHA INGRESO</th>';
                    echo '<th>UBICACIÓN</th>';
                    echo '<th>ACCIONES</th></thead><tbody>';
                    foreach ($results as $result) {
                        echo '<tr>
                <td>' . $result->idInventario . '</td>
                <td>' . $result->nombre_accesorio . '</td>
                <td>' . $result->cantidad_disponible . '</td>
                <td>' . $result->fecha_ingreso . '</td>
                <td>' . $result->ubicacion . '</td>'
                        . '<td><form action="Actualizar_accesorio.php" method="POST">  
                        <input type="hidden" name="id" id="id" value="' . $result->idInventario. '">
                        <button type="submit" > Actualizar </button>
                        </form>
                        <form action="Eliminar_accesorio.php" method="POST">
                        <input type="hidden" name="id1" id="id1" value="' . $result->idInventario. '">
                        <button  type="submit"> Eliminar </button></form>
                        </td> </tr>';
                    }
                    echo '</tbody></table>';
                }
        ?>
        
         <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> 
        <script>
            $(document).ready(function () {
                $('#t-all').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    </body>
    <?php
    include '.\footer.php'
    ?>
</html>
