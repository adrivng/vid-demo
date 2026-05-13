<?php
$pageTitle  = 'Caravana 2017 - Lim';
$activePage = 'eventos';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<style>
.sticky-top.navbar-light .navbar-nav .nav-link { color: var(--bs-white) !important; }
.ev-page-header { text-align: center; padding: 120px 20px 0; margin-bottom: 10px; }
.ev-page-header h1 { font-size: 1.8rem; font-weight: 900; color: #1a7a4a; text-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 15px; }
.ev-back-btn { display: inline-block; margin-bottom: 20px; padding: 8px 24px; background: #1a7a4a; color: #fff; border-radius: 6px; text-decoration: none; font-weight: 700; font-size: .85rem; transition: background .2s; }
.ev-back-btn:hover { background: #145c37; color: #fff; text-decoration: none; }
.ev-carousel { max-width: 850px; margin: 0 auto 60px; }
.ev-carousel .carousel-inner .carousel-item { min-height: 500px; max-height: 600px; background: #1a1a2e; }

.ev-carousel .carousel-inner .carousel-item img { width: 100%; height: 500px; object-fit: contain; }
.ev-carousel .carousel-control-prev-icon, .ev-carousel .carousel-control-next-icon { padding: 25px 30px; border-radius: 50%; }
.carousel-indicators button { width: 12px; height: 12px; border-radius: 50%; margin: 0 4px; }
@media (max-width: 768px) { 
.ev-carousel .carousel-inner .carousel-item { min-height: 300px; } 
.ev-carousel .carousel-inner .carousel-item img { height: 300px; } .ev-page-header { padding: 100px 15px 0; } .ev-page-header h1 { font-size: 1.3rem; } }
</style>
<link rel="stylesheet" href="<?= $subir ?>css/eventos.css">
</head>
<body>

<?php require_once $subir . "includes/header-green.php"; ?>

<div class="ev-page-header">
    <h1>Caravana 2017 - Lim</h1>
    <a href="../eventos.php" class="ev-back-btn">&larr; Volver a Eventos</a>
</div>

<div id="carouselcaravanalima" class="carousel slide ev-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="5"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="6"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="7"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="8"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="9"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="10"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="11"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="12"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="13"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="14"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="15"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="16"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="17"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="18"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="19"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="20"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="21"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="22"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="23"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="24"></button>
        <button type="button" data-bs-target="#carouselcaravanalima" data-bs-slide-to="25"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/caravana_lima/foto1.jpg" class="d-block w-100" alt="Slide 1" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto2.jpg" class="d-block w-100" alt="Slide 2" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto3.jpg" class="d-block w-100" alt="Slide 3" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto4.jpg" class="d-block w-100" alt="Slide 4" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto5.jpg" class="d-block w-100" alt="Slide 5" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto6.jpg" class="d-block w-100" alt="Slide 6" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto7.jpg" class="d-block w-100" alt="Slide 7" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto8.jpg" class="d-block w-100" alt="Slide 8" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto9.jpg" class="d-block w-100" alt="Slide 9" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto10.jpg" class="d-block w-100" alt="Slide 10" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto11.jpg" class="d-block w-100" alt="Slide 11" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto12.jpg" class="d-block w-100" alt="Slide 12" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto13.jpg" class="d-block w-100" alt="Slide 13" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto14.jpg" class="d-block w-100" alt="Slide 14" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto15.jpg" class="d-block w-100" alt="Slide 15" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto16.jpg" class="d-block w-100" alt="Slide 16" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto17.jpg" class="d-block w-100" alt="Slide 17" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto18.jpg" class="d-block w-100" alt="Slide 18" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto19.jpg" class="d-block w-100" alt="Slide 19" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto20.jpg" class="d-block w-100" alt="Slide 20" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto21.jpg" class="d-block w-100" alt="Slide 21" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto22.jpg" class="d-block w-100" alt="Slide 22" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto23.jpg" class="d-block w-100" alt="Slide 23" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto24.jpg" class="d-block w-100" alt="Slide 24" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto25.jpg" class="d-block w-100" alt="Slide 25" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="images/caravana_lima/foto26.jpg" class="d-block w-100" alt="Slide 26" loading="lazy">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselcaravanalima" data-bs-slide="prev">
        <span class="carousel-control-prev-icon btn bg-primary"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselcaravanalima" data-bs-slide="next">
        <span class="carousel-control-next-icon btn bg-primary"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<?php require_once $subir . "includes/footer.php"; ?>
<?php require_once $subir . "includes/scripts.php"; ?>
</body>
</html>
