<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\cardController;

    $cardController= new cardController;
    $imagenesCard = $cardController->seleccionarImgCard();
?>

<section class="py-5 bg-light" id="adopta">
    <div class="container">
        <h2 class="text-center tracking-in-contract-bck">Mascotas en Adopción</h2>
        <div class="row">
            <?php foreach ($imagenesCard as $card): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $card['url_img']; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $card['Nombre']; ?></h5>
                            <p class="card-text"><?php echo $card['descripcion']; ?></p>
                            <a href="#" class="btn btn-primary">Adoptar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
