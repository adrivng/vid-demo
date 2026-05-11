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
    <div class="spinner-border text-primary" style="width:3rem;height:3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<?php require_once 'includes/header.php'; ?>

<!-- ══════════════════════════════════════
     HERO
     ══════════════════════════════════════ -->
<div class="vid-hero">
    <div class="vid-hero__overlay"></div>
    <div class="vid-hero__content">
        <h1 >Material Multimedia<br>para Agencias</h1>
        <p>Descarga recursos visuales de alta calidad diseñados para impulsar tus ventas.<br>
           Videos optimizados para redes sociales y presentaciones premium.</p>
        <div class="vid-hero__actions">
            <a href="#catalogo" class="vid-hero__btn vid-hero__btn--gold">
                <i class="fa fa-download"></i> Descargar material
            </a>
            <a href="#catalogo" class="vid-hero__btn vid-hero__btn--outline">
                <i class="fa fa-play"></i> Ver catálogo
            </a>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════
     CATÁLOGO
     ══════════════════════════════════════ -->
<section class="vid-catalog" id="catalogo">
    <div class="container">

        <h2 class="vid-catalog__title">Catálogo de Destinos</h2>

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
         * badge: etiqueta visible en la card (opcional).
         * ────────────────────────────────────────────────────────── */
        $videos = [
            /* ── DESTINOS ── */
            [
                'title'   => 'Dubai Luxury',
                'desc'    => 'Recorrido por los hoteles más lujosos y experiencias únicas en el desierto.',
                'src'     => 'videos/destino_dubai_mc_v1.mp4',
                'poster'  => 'videos/destino_dubai_mc_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => 'REEL',
            ],
            [
                'title'   => 'Curaçao Beaches',
                'desc'    => 'Selección de las mejores calas y playas turquesas del Caribe holandés.',
                'src'     => 'videos/curacao_marca_de_agua_v1.mp4',
                'poster'  => 'videos/curacao_marca_de_agua_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => '4K',
            ],
            [
                'title'   => 'Iguazú Falls',
                'desc'    => 'Tomas aéreas impactantes de una de las siete maravillas naturales del mundo.',
                'src'     => 'videos/iguazu_marca_agua_v1.mp4',
                'poster'  => 'videos/iguazu_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => 'DRONE',
            ],
            [
                'title'   => 'Rio de Janeiro',
                'desc'    => 'Vistas espectaculares desde el Corcovado y vida urbana carioca.',
                'src'     => 'videos/rio_destino_ma_v1.mp4',
                'poster'  => 'videos/rio_destino_ma_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => 'PROMO',
            ],
            [
                'title'   => 'Cuba — Varadero',
                'desc'    => 'Playas de arena blanca, música y cultura caribeña auténtica.',
                'src'     => 'videos/varadero_cuba_marca_agua_v1.mp4',
                'poster'  => 'videos/varadero_cuba_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => 'REEL',
            ],
            [
                'title'   => 'Punta Cana',
                'desc'    => 'Los mejores resorts all-inclusive del Caribe dominicano.',
                'src'     => 'videos/punta_cana_marca_agua_v1.mp4',
                'poster'  => 'videos/punta_cana_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => 'REEL',
            ],
            [
                'title'   => 'Camboriú',
                'desc'    => 'La joya del litoral catarinense con playas urbanas de clase mundial.',
                'src'     => 'videos/camboriu_marca_agua_v1.mp4',
                'poster'  => 'videos/camboriu_marca_agua_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => '4K',
            ],
            [
                'title'   => 'Jamaica',
                'desc'    => 'Reggae, cascadas y playas de arena dorada en el corazón del Caribe.',
                'src'     => 'videos/jamaica_11_03_2026_v1.mp4',
                'poster'  => 'videos/jamaica_11_03_2026_f1.jpg',
                'tags'    => ['all','destino'],
                'badge'   => 'NUEVO',
            ],

            /* ── HOTELES INTERNACIONALES ── */
            [
                'title'   => 'Hotel Nickelodeon',
                'desc'    => 'El resort temático más divertido del Caribe para toda la familia.',
                'src'     => 'videos/nickelodeon_11_03_2026_v1.mp4',
                'poster'  => 'videos/nickelodeon_11_03_2026_f1.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => 'NUEVO',
            ],
            [
                'title'   => 'Hotel Cartagena Plaza',
                'desc'    => 'Elegancia colonial en el corazón de la Ciudad Amurallada.',
                'src'     => 'videos/cartagena_plaza_v1.mp4',
                'poster'  => 'videos/cartagena_plaza_f1.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => 'REEL',
            ],
            [
                'title'   => 'Radisson Cartagena Ocean Pavillion',
                'desc'    => 'Vista al mar, lujo y gastronomía premium en Cartagena de Indias.',
                'src'     => 'videos/raddison_3.mp4',
                'poster'  => 'videos/raddison_2.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => '4K',
            ],
            [
                'title'   => 'Mangrove Beach Corendon Curaçao',
                'desc'    => 'Un resort boutique único rodeado de manglares y aguas cristalinas.',
                'src'     => 'videos/corendon_curazao.mp4',
                'poster'  => 'videos/corendon_curazao.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => 'REEL',
            ],
            [
                'title'   => 'Bahia Principe Grand Punta Cana',
                'desc'    => 'Todo incluido de lujo con playa privada en el Caribe dominicano.',
                'src'     => 'videos/bahia_principe_punta_cana_2.mp4',
                'poster'  => 'videos/bahia_principe_punta_cana.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => 'PROMO',
            ],
            [
                'title'   => 'Coral Costa Caribe Beach Resort',
                'desc'    => 'Frente al mar en Juan Dolio con instalaciones todo incluido.',
                'src'     => 'videos/coral_costa_caribe.mp4',
                'poster'  => 'videos/coral_costa_caribe.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => 'REEL',
            ],
            [
                'title'   => 'Dorado Plaza Cartagena',
                'desc'    => 'Hotel de negocios y placer en la Bocagrande de Cartagena.',
                'src'     => 'videos/dorado_plaza.mp4',
                'poster'  => 'videos/dorado_plaza.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => '4K',
            ],
            [
                'title'   => 'Meliá Orlando Celebration',
                'desc'    => 'A minutos de los parques temáticos más famosos de Florida.',
                'src'     => 'videos/melia_orlando.mp4',
                'poster'  => 'videos/melia_orlando.jpg',
                'tags'    => ['all','hotel-int'],
                'badge'   => 'REEL',
            ],

            /* ── HOTELES NACIONALES ── */
            [
                'title'   => 'Hotel Hacienda San Juan — Ica',
                'desc'    => 'Entre viñedos y dunas, una experiencia única en el sur peruano.',
                'src'     => 'videos/hotel_hacienda_san_juan_ica.mp4',
                'poster'  => 'videos/hotel_hacienda_san_juan_ica.png',
                'tags'    => ['all','hotel-nac'],
                'badge'   => 'PERU',
            ],
            [
                'title'   => 'Hotel Irapay Amazon Lodge',
                'desc'    => 'Naturaleza pura en el corazón de la Amazonía peruana.',
                'src'     => 'videos/hotel_irapay_lodge_vidatur_2.mp4',
                'poster'  => 'videos/hotel_las_dunas_ica.png',
                'tags'    => ['all','hotel-nac'],
                'badge'   => 'PERU',
            ],
            [
                'title'   => 'Hotel Aranwa Paracas',
                'desc'    => 'Diseño colonial frente a la Reserva de Paracas y sus islas.',
                'src'     => 'videos/hotel_aranwa_paracas_vidatur.mp4',
                'poster'  => 'videos/hotel_aranwa_paracas_vidatur_2.png',
                'tags'    => ['all','hotel-nac'],
                'badge'   => 'PERU',
            ],
            [
                'title'   => 'Hotel Viñas Queirolo',
                'desc'    => 'Enoturismo y gastronomía en los viñedos de Ica.',
                'src'     => 'videos/hotel_vinas_queirolo.mp4',
                'poster'  => 'videos/hotel_vinas_queirolo.jpg',
                'tags'    => ['all','hotel-nac'],
                'badge'   => 'PERU',
            ],
        ];
        ?>

        <!-- Grid de cards -->
        <div class="vid-grid" id="vidGrid">
            <?php foreach ($videos as $v): ?>
            <div class="vid-card" data-tags="<?= implode(' ', $v['tags']) ?>">
                <div class="vid-card__media">
                    <?php if (!empty($v['badge'])): ?>
                    <span class="vid-card__badge"><?= $v['badge'] ?></span>
                    <?php endif; ?>
                    <video
                        src="<?= $v['src'] ?>"
                        poster="<?= $v['poster'] ?>"
                        preload="none"
                        controls
                        playsinline>
                        Tu navegador no soporta video HTML5.
                    </video>
                </div>
                <div class="vid-card__body">
                    <strong class="vid-card__title"><?= $v['title'] ?></strong>
                    <p class="vid-card__desc"><?= $v['desc'] ?></p>
                    <a class="vid-card__dl" href="<?= $v['src'] ?>" download>
                        <i class="fa fa-download"></i> Descargar
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /vid-grid -->

        <p class="vid-empty" id="vidEmpty" style="display:none;">No hay videos en esta categoría.</p>

    </div>
</section>

<!-- ══════════════════════════════════════
     CTA — Material personalizado
     ══════════════════════════════════════ -->
<section class="vid-cta">
    <div class="vid-cta__left">
        <h3>¿Necesitas material personalizado?</h3>
        <p>Si tu agencia requiere de material específico con tu logo o para un evento especial, nuestro equipo creativo está listo para ayudarte a crear contenido de alto impacto.</p>
        <a href="contacto.php" class="vid-cta__btn">Contactar Soporte de Ventas</a>
    </div>
    <!-- <div class="vid-cta__right">
        <div class="vid-cta__service">
            <strong><i class="fa fa-star"></i> Servicio exclusivo</strong>
            <ul>
                <li><i class="fa fa-check-circle"></i> Co-branding disponible</li>
                <li><i class="fa fa-check-circle"></i> Formatos a medida</li>
                <li><i class="fa fa-check-circle"></i> Entrega en 48h</li>
            </ul>
        </div>
    </div> -->
</section>

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