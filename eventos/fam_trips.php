<?php
$pageTitle  = 'Fam Trips';
$activePage = 'eventos';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<style>
.sticky-top.navbar-light .navbar-nav .nav-link { color: var(--bs-white) !important; }
body { background: #f5f5f5; }
.ev-page-header { text-align: center; padding: 130px 20px 0; margin-bottom: 10px; }
.ev-page-header h1 { font-size: 2rem; font-weight: 900; color: #1a7a4a; margin-bottom: 15px; }
.ev-page-header p { font-size: .95rem; color: #666; max-width: 560px; margin: 0 auto 15px; }
.ev-back-btn { display: inline-block; margin-bottom: 20px; padding: 8px 24px; background: #1a7a4a; color: #fff; border-radius: 6px; text-decoration: none; font-weight: 700; font-size: .85rem; transition: background .2s; }
.ev-back-btn:hover { background: #145c37; color: #fff; text-decoration: none; }
.ev-fam-grid { margin-top: 36px; }
</style>
<link rel="stylesheet" href="<?= $subir ?>css/eventos.css">
</head>
<body>
<?php require_once $subir . 'includes/header-green.php'; ?>
<div class="ev-page-header">
    <h1>Fam Trips</h1>
    <p>Viajes de familiarización diseñados para capacitar a nuestros agentes con experiencias reales en destino</p>
    <a href="../eventos.php" class="ev-back-btn">&larr; Volver a Eventos</a>
</div>
<div class="container py-5">
    <div class="ev-fam-grid" >
        <?php
        $famTrips = [
            ['year'=>'2025','title'=>'Cuba: Herencia y Sol','desc'=>'Exploración de cadenas hoteleras y destinos emergentes en Varadero y La Habana.','img'=>'images/fam_cuba_2025/fam_cuba_1.jpg','href'=>'fam_trip_cuba_2025.php','gallery'=>true],
            ['year'=>'2021','title'=>'Cancún All-Inclusive','desc'=>'Inspección técnica de resorts de lujo y protocolos de seguridad post-pandemia.','img'=>'images/fam_cancun_2021/FAM CANCUN 2.jpg','href'=>'fam_cancun_2021.php','gallery'=>true],
            ['year'=>'2019','title'=>'Ruta de los Cayos','desc'=>'Descubriendo los secretos de Cayo Santa María y la costa de Varadero.','img'=>'images/VIAJE_CAPACITACION_ANUAL_CANCUN/portada.png','href'=>'viaje_capa_anual_cancun.php','gallery'=>true],
            ['year'=>'2018','title'=>'Panamá — Ciudad y Canal','desc'=>'Conociendo la infraestructura hotelera y circuitos especiales en Panamá.','img'=>'images/fam_panama/foto01.jpg','href'=>'fam_panama.php','gallery'=>true],
            ['year'=>'2017','title'=>'Varadero — Cuba','desc'=>'Familiarización con resorts todo incluido y experiencias locales.','img'=>'images/fam_varadero/foto01.jpg','href'=>'fam_varadero.php','gallery'=>true],
            ['year'=>'2017','title'=>'Miami — USA','desc'=>'Recorrido por hoteles boutique, circuitos y cultura del sur de Florida.','img'=>'images/fam_miami/foto01.jpg','href'=>'fam_miami.php','gallery'=>true],
        ];
        foreach ($famTrips as $trip): ?>
        <div class="ev-fam-card">
            <a href="<?= $trip['href'] ?>" class="ev-fam-card__img-wrap"><img src="<?= $trip['img'] ?>" alt="<?= $trip['title'] ?>"><span class="ev-fam-card__year"><?= $trip['year'] ?></span></a>
            <div class="ev-fam-card__body">
                <strong><?= $trip['title'] ?></strong>
                <p><?= $trip['desc'] ?></p>
                <?php if ($trip['gallery']): ?><a class="ev-fam-card__link" href="<?= $trip['href'] ?>">Ver Galería →</a><?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>
</body>
</html>
