<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\sliderController;

    $sliderController = new sliderController;
    $imagenesSlider = $sliderController->seleccionarImgSlider();
?>

<style>
    .carousel-inner .carousel-item {
        height: 500px; /* Ajusta la altura según tus necesidades */
    }
    .carousel-item img {
        object-fit: cover;
        height: 100%;
    }
    .carousel-caption {
        background: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <?php foreach ($imagenesSlider as $index => $imagen): ?>
      <div class="carousel-item <?php echo $index === 0 ? 'active' : '' ?>">
        <img src="<?php echo $imagen['slider_url']?>" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>ADOTAR ES LO MEJOR QUE PUEDES HACER</h5>
          <p>>No te quedes sin tu amiguito peludo</p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




