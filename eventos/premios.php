<?php
$pageTitle  = 'Eventos';
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
.ev-carousel .carousel-inner .carousel-item { min-height: 500px; max-height: 600px; background: #1a1a2e; }
.ev-carousel .carousel-inner .carousel-item img { width: 100%; height: 500px; object-fit: contain; }
.ev-carousel .carousel-control-prev-icon, .ev-carousel .carousel-control-next-icon { padding: 25px 30px; border-radius: 50%; }
.carousel-indicators button { width: 12px; height: 12px; border-radius: 50%; margin: 0 4px; }
.row-premios { padding-left: 40px; padding-right: 40px; }
@media (max-width: 768px) { .ev-carousel .carousel-inner .carousel-item { min-height: 300px; } .ev-carousel .carousel-inner .carousel-item img { height: 300px; } .ev-page-header { padding: 100px 15px 0; } .ev-page-header h1 { font-size: 1.3rem; } }
</style>
<link rel="stylesheet" href="<?= $subir ?>css/eventos.css">
</head>
<body>

<?php require_once $subir . "includes/header-green.php"; ?>

<div class="ev-page-header">
    <h1>Eventos</h1>
    <a href="../eventos.php" class="ev-back-btn">&larr; Volver a Eventos</a>
</div>

<div class="row row-premios">
    <center> 
        <div class="gallery">
            <a target="_blank" href="images/agentepreferente/1.jpg">
            <img src="images/agentepreferente/1.jpg" alt="Cinque Terre" width="800" height="600">
            </a>
            <div class="titulo">PREMIO A AYNI EXPLORERS</div>
            <div class="desc">
            Carmen Linares de la agencia AYNI EXPLORERS 1 Morral cruzado con acabado en cuero ecológico como premio por poner su confianza en nosotros desde 2018.</div>
        </div>
    </center>   
</div>
<div class="hr">
</div>

<?php require_once $subir . "includes/footer.php"; ?>
<?php require_once $subir . "includes/scripts.php"; ?>
</body>
</html>
