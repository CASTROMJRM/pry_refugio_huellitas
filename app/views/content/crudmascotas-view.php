<?php 
require_once "./app/views/inc/head.php";
require_once "./config/server.php";

use app\controllers\cardController;

//Crear instancia del controlador
$cardController = new cardController();
$imagenesCard = $cardController->seleccionarImgCard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($imagenesCard as $img): { ?>
        <tr>
            <td><?php echo $img['id']; ?></td>
            <td><img width="150px" height="80px" src="<?php echo $img['url_img']; ?>"></td>
            <td><?php echo $img['Nombre']; ?></td>
            <td><?php echo $img['status']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $img['id']; ?>" class="btn  ">
                <i class="fas fa-pencil-alt"></i> Editar
            </a>
                |
            <a href="delete.php?id=<?php echo $img['id']; ?>" class="btn">
                <i class="fas fa-times"></i> Eliminar
            </a>

            </td>
        </tr>
    <?php } endforeach; ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#example').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando START a END de TOTAL entradas",
                "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                "infoFiltered": "(filtrado de MAX entradas totales)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar MENU entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron registros coincidentes",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>

</table>
</body>
</html>