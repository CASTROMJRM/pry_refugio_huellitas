
<main> 
 <!-- Incluir vista de slider -->
 <?php require_once "./app/views/content/slider-view.php" ?>

<!-- Incluir contenido de cartas-->
<section class="vision py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>SOMOS</p>
                    <h4 class="mb-4">El primer Refugio comprometido al bienenstar de nuestros amigos peludos</h4>
                    <p>Somos una organización dedicada al rescate y la protección de animales, 
                        comprometidos con crear un mundo donde cada ser vivo sea respetado y amado. Ofrecemos rescate y 
                        rehabilitación para animales en peligro, facilitamos adopciones responsables y promovemos la educación 
                        sobre el trato ético hacia los animales. Abogamos por políticas que protejan a los animales 
                        y colaboramos con otras entidades para ampliar nuestro impacto. Trabajamos con pasión para asegurar 
                        que cada animal tenga una vida digna y agradecemos el apoyo de la comunidad en nuestra misión.</p>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo APP_URL; ?>app/views/img/In_somos.png" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- Incluir contenido de cartas-->
<?php require_once "./app/views/content/cardmascotas-view.php" ?>

<div class="container mt-5 text-centerr">
    <div class="row justify-content-center">
        <div class="col-md-12 donation-section">
         
                    
            <h5>Tu Donacion Hace la diferencia</h5>
                    
             <a href="#" class="btn" id="btn_donar">DONAR AQUÍ</a>
            <p>Donaciones libres de impuestos</p>
            
        </div>
    </div>
</div>


<footer class="footer_main">
<p>&copy; 2024 Huellitas. Todos los derechos reservados.</p>
<nav class="footer_menu">
<ul>
    <li><a href="#">Política de Privacidad</a></li>
    <li><a href="#">Términos de Servicio</a></li>
    <li><a href="#">Contacto</a></li>
</ul>
</nav>
</footer>
</main>
