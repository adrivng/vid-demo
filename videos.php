<?php
$pageTitle  = 'Videos';
$activePage = 'videos';
require_once 'includes/head.php';
?>
<link href="css/videos.css" rel="stylesheet">
</head>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="img/images-index/logo.png" alt="Cargando...">
</div>
<!-- Spinner End -->

<?php require_once 'includes/header.php'; ?>

<div class="cont-hero">
    <h1>Material Multimedia<br>para Agencias</h1>
</div>

<!-- ══════════════════════════════════════
     CATÁLOGO
     ══════════════════════════════════════ -->
<section class="vid-catalog" id="catalogo">
    <div class="container">

        

        <!-- Filtros -->
        <div class="vid-tabs" role="tablist">
            <button class="vid-tab active" data-filter="all">Todos</button>
            <button class="vid-tab" data-filter="destino">Destinos</button>
            <button class="vid-tab" data-filter="hotel-int">Hoteles Internacionales</button>
            <button class="vid-tab" data-filter="hotel-nac">Hoteles Nacionales</button>
        </div>

        <?php
         /*
          * ── DATOS ──────────────────────────────────────────────────
          * Para agregar un video: añade un elemento al array.
          * tags: array de categorías para filtrado.
          * ────────────────────────────────────────────────────────── */
        $videos = [
            /* ── DESTINOS ── */
            [
                'title'   => 'Dubai Luxury',
                'src'     => 'videos/destino_dubai_mc_v1.mp4',
                'poster'  => 'videos/destino_dubai_mc_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Curaçao Beaches',
                'src'     => 'videos/curacao_marca_de_agua_v1.mp4',
                'poster'  => 'videos/curacao_marca_de_agua_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Iguazú Falls',
                'src'     => 'videos/iguazu_marca_agua_v1.mp4',
                'poster'  => 'videos/iguazu_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Rio de Janeiro',
                'src'     => 'videos/rio_destino_ma_v1.mp4',
                'poster'  => 'videos/rio_destino_ma_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Cuba — Varadero',
                'src'     => 'videos/varadero_cuba_marca_agua_v1.mp4',
                'poster'  => 'videos/varadero_cuba_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Punta Cana',
                'src'     => 'videos/punta_cana_marca_agua_v1.mp4',
                'poster'  => 'videos/punta_cana_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Camboriú',
                'src'     => 'videos/camboriu_marca_agua_v1.mp4',
                'poster'  => 'videos/camboriu_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
            ],
            [
                'title'   => 'Jamaica',
                'src'     => 'videos/jamaica_11_03_2026_v1.mp4',
                'poster'  => 'videos/jamaica_11_03_2026_f1.jpg',
                'tags'    => ['all','destino'],
            ],

            /* ── HOTELES INTERNACIONALES ── */
            [
                'title'   => 'Hotel Nickelodeon',
                'src'     => 'videos/nickelodeon_11_03_2026_v1.mp4',
                'poster'  => 'videos/nickelodeon_11_03_2026_f1.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Hotel Cartagena Plaza',
                'src'     => 'videos/cartagena_plaza_v1.mp4',
                'poster'  => 'videos/cartagena_plaza_f1.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Radisson Cartagena Ocean Pavillion',
                'src'     => 'videos/raddison_3.mp4',
                'poster'  => 'videos/raddison_2.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Mangrove Beach Corendon Curaçao',
                'src'     => 'videos/corendon_curazao.mp4',
                'poster'  => 'videos/corendon_curazao.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Bahia Principe Grand Punta Cana',
                'src'     => 'videos/bahia_principe_punta_cana_2.mp4',
                'poster'  => 'videos/bahia_principe_punta_cana.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Coral Costa Caribe Beach Resort',
                'src'     => 'videos/coral_costa_caribe.mp4',
                'poster'  => 'videos/coral_costa_caribe.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Dorado Plaza Cartagena',
                'src'     => 'videos/dorado_plaza.mp4',
                'poster'  => 'videos/dorado_plaza.jpg',
                'tags'    => ['all','hotel-int'],
            ],
            [
                'title'   => 'Meliá Orlando Celebration',
                'src'     => 'videos/melia_orlando.mp4',
                'poster'  => 'videos/melia_orlando.jpg',
                'tags'    => ['all','hotel-int'],
            ],

            /* ── HOTELES NACIONALES ── */
            [
                'title'   => 'Hotel Hacienda San Juan — Ica',
                'src'     => 'videos/hotel_hacienda_san_juan_ica.mp4',
                'poster'  => 'videos/hotel_hacienda_san_juan_ica.png',
                'tags'    => ['all','hotel-nac'],
            ],
            [
                'title'   => 'Hotel Irapay Amazon Lodge',
                'src'     => 'videos/hotel_irapay_lodge_vidatur_2.mp4',
                'poster'  => 'videos/hotel_las_dunas_ica.png',
                'tags'    => ['all','hotel-nac'],
            ],
            [
                'title'   => 'Hotel Aranwa Paracas',
                'src'     => 'videos/hotel_aranwa_paracas_vidatur.mp4',
                'poster'  => 'videos/hotel_aranwa_paracas_vidatur_2.png',
                'tags'    => ['all','hotel-nac'],
            ],
            [
                'title'   => 'Hotel Viñas Queirolo',
                'src'     => 'videos/hotel_vinas_queirolo.mp4',
                'poster'  => 'videos/hotel_vinas_queirolo.jpg',
                'tags'    => ['all','hotel-nac'],
            ],
        ];
        ?>

        <!-- Grid de cards -->
        <div class="vid-grid" id="vidGrid">
            <?php foreach ($videos as $v): ?>
            <div class="vid-card" data-tags="<?= implode(' ', $v['tags']) ?>">
                <strong class="vid-card__title"><?= $v['title'] ?></strong>
                <div class="vid-card__media">
                    <img src="<?= $v['poster'] ?>" alt="<?= $v['title'] ?>">
                </div>
                <div class="vid-card__body">
                    <a class="vid-card__dl" href="<?= $v['src'] ?>" download>
                        <i class="fa fa-download"></i> Descargar
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /vid-grid -->

        <p class="vid-empty d-none" id="vidEmpty">No hay videos en esta categoría.</p>

    </div>
</section>

<!-- ══════════════════════════════════════
     CTA — Material personalizado
     ══════════════════════════════════════ -->
<!-- <section class="vid-cta">
    <div class="vid-cta__left">
        <h3>¿Necesitas material personalizado?</h3>
        <p>Si tu agencia requiere de material específico con tu logo o para un evento especial, nuestro equipo creativo está listo para ayudarte a crear contenido de alto impacto.</p>
        <a href="nosotros.php" class="vid-cta__btn">Contactar Soporte de Ventas</a>
    </div>
</section> -->

<?php require_once 'includes/scripts.php'; ?>

<script>
/* ── Filtro de tabs ── */
const tabs    = document.querySelectorAll('.vid-tab');
const cards   = document.querySelectorAll('.vid-card');
const empty   = document.getElementById('vidEmpty');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const filter = tab.dataset.filter;
        let visible  = 0;

        cards.forEach(card => {
            const show = card.dataset.tags.includes(filter);
            card.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        empty.style.display = visible === 0 ? 'block' : 'none';
    });
});

/* ── Pausa videos al cambiar de tab ── */
tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        document.querySelectorAll('.vid-card video').forEach(v => { v.pause(); });
    });
});

/* ── Un solo video activo a la vez ── */
document.querySelectorAll('.vid-card video').forEach(vid => {
    vid.addEventListener('play', () => {
        document.querySelectorAll('.vid-card video').forEach(other => {
            if (other !== vid) other.pause();
        });
    });
});
</script>

<?php require_once 'includes/footer.php'; ?>
</body>
</html>