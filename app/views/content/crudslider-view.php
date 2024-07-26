<?php 
require_once "./app/views/inc/head.php";
require_once "./config/server.php";

use app\controllers\sliderController;

//Crear instancia del controlador
$sliderController = new sliderController();
$imagenesSlider = $sliderController->seleccionarImgSlider();
?>

<body>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Texto alternativo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($imagenesSlider as $imagen): { ?>
        <tr>
            <td><?php echo $imagen['slider_id']; ?></td>
            <td><img width="150px" height="80px" src="<?php echo $imagen['slider_url']; ?>"></td>
            <td><?php echo $imagen['slider_alt']; ?></td>
            <td><?php echo $imagen['status']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $imagen['slider_id']; ?>" class="btn  ">
                <i class="fas fa-pencil-alt"></i> Editar
            </a>
                |
            <a href="delete.php?id=<?php echo $imagen['slider_id']; ?>" class="btn">
                <i class="fas fa-times"></i> Eliminar
            </a>

            </td>
        </tr>
    <?php } endforeach; ?>

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
                "lengthMenu": "Slider Adopción",
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
