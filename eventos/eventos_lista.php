<?php
$pageTitle  = 'Archivo de Eventos';
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
.ev-archive-grid { margin-top: 36px; }
</style>
<link rel="stylesheet" href="<?= $subir ?>css/eventos.css">
</head>
<body>
<?php require_once $subir . 'includes/header-green.php'; ?>
<div class="ev-page-header">
    <h1>Archivo de Eventos</h1>
    <p>Explora nuestro archivo histórico de eventos, lanzamientos y capacitaciones</p>
    <a href="../eventos.php" class="ev-back-btn">&larr; Volver a Eventos</a>
</div>
<div class="container py-5">
    <div class="ev-archive-grid" >
        <?php
        $archivo = [
            ['title'=>'Lanzamiento Programas 2022','img'=>'images/programas_2022/foto06.jpg','href'=>'programas_2022.php'],
            ['title'=>'Excursion Travel Perú — Xavage 2019','img'=>'images/xavage/foto01.jpg','href'=>'xavage.php'],
            ['title'=>'19 Aniversario Equipo Vidatur','img'=>'images/19_aniversario/foto1.jpg','href'=>'19_aniversario.php'],
            ['title'=>'Caravana 2017 — Lima','img'=>'images/caravana_lima/foto1.jpg','href'=>'caravana_lima.php'],
            ['title'=>'Caravana 2017 — Arequipa','img'=>'images/caravana_arequipa/foto4.jpg','href'=>'caravana_arequipa.php'],
            ['title'=>'Fam Trip Iguazú 2017','img'=>'images/fam_iguazu/foto01.jpg','href'=>'fam_iguazu.php'],
            ['title'=>'Presentación Caribe y USA','img'=>'images/caribe_usa/foto14.jpg','href'=>'caribe_usa.php'],
            ['title'=>'Feria AVIT — Arequipa','img'=>'images/feria_avit_arequipa/avit1.jpg','href'=>'feria_avit_aqp.php'],
            ['title'=>'Evento Lima 2017','img'=>'images/evento_lima_2017/foto_10.jpg','href'=>'evento_lima_2017.php'],
            ['title'=>'Evento Arequipa 2017','img'=>'images/evento_aqp_2017/foto02.jpg','href'=>'evento_aqp_2017.php'],
            ['title'=>'Evento Trujillo 2017','img'=>'images/evento_tru_2017/foto02.jpg','href'=>'evento_tru_2017.php'],
            ['title'=>'Evento Chiclayo 2017','img'=>'images/evento_cix_2017/foto02.jpg','href'=>'evento_cix_2017.php'],
            ['title'=>'Evento Tacna 2017','img'=>'images/evento_tacna_2017/foto02.jpg','href'=>'evento_tacna_2017.php'],
            ['title'=>'Fiesta Fin de Año — Trujillo','img'=>'images/fiesta_fin_year_tru/foto7.jpg','href'=>'fiesta_fin_year_tru.php'],
            ['title'=>'Fam Trip — Puerto Vallarta','img'=>'images/evento_puerto_vallarta/foto01.jpg','href'=>'evento_puerto_vallarta.php'],
            ['title'=>'Capacitación Cancún 2017','img'=>'images/fam_cancun/foto01.jpg','href'=>'fam_cancun.php'],
            ['title'=>'Destino Arequipa — Argentina','img'=>'images/evento_aqp_dargentina/foto01.jpg','href'=>'evento_aqp_dargentina.php'],
            ['title'=>'Destino Tacna — Argentina','img'=>'images/evento_tacna_dargentina/foto01.jpg','href'=>'evento_tacna_dargentina.php'],
            ['title'=>'Destino Trujillo — Isla Margarita','img'=>'images/evento_trujillo_2017/foto01.jpg','href'=>'evento_trujillo.php'],
            ['title'=>'Destino Lima — Isla Margarita','img'=>'images/evento_lima/foto01.jpeg','href'=>'evento_lima.php'],
            ['title'=>'Destino Cusco — Isla Margarita','img'=>'images/evento_cusco_im/foto01.jpg','href'=>'evento_cusco_im.php'],
            ['title'=>'Destino Arequipa — Isla Margarita','img'=>'images/evento_arequipa_im/foto01.jpg','href'=>'evento_arequipa_im.php'],
            ['title'=>'Destino Arequipa — México','img'=>'images/evento_arequipa_m/foto01.jpg','href'=>'evento_arequipa_m.php'],
        ];
        foreach ($archivo as $ev): ?>
        <a class="ev-archive-card" href="<?= $ev['href'] ?>"><img src="<?= $ev['img'] ?>" alt="<?= $ev['title'] ?>"><div class="ev-archive-card__overlay"><span><?= $ev['title'] ?></span></div></a>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>
</body>
</html>
