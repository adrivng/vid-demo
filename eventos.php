<?php
$pageTitle  = 'Eventos';
$activePage = 'eventos';
require_once 'includes/head.php';
?>
<link href="css/eventos.css" rel="stylesheet">
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

<!-- ── HERO ── -->
<div class="ev-hero">
    <div class="ev-hero__overlay"></div>
    <div class="ev-hero__content">
        <h1>Eventos y Experiencias Vidatur</h1>
        <p>Transformando viajes corporativos en historias de éxito inolvidables.</p>
    </div>
</div>

<!-- ── INTRO ── -->
<section class="ev-intro">
    <span class="ev-intro__label">NUESTRA TRAYECTORIA</span>
    <h2>Excelencia en cada detalle</h2>    

    <p>Contamos con más de 25 años de experiencia, recordando los buenos momentos vividos en nuestro reciente viaje de integración a Cancún y Cartagena.
    Sabemos que el turismo esta pasando un momento difícil, pero con el respaldo de un equipo consolidado, podemos salir adelante junto a nuestros clientes-amigos, aliados comerciales y colaboradores.
    Les Agradecemos por estos 23 años de confianza y reafirmamos nuestro compromiso de seguir brindándoles servicios de calidad..... 💛Vidatur siempre contigo.💚

    </p>
</section>

<!-- ════════════════════════════════════════
     SECCIÓN 1 — CONVENCIONES
     ════════════════════════════════════════ -->
<section class="ev-section">
    <div class="container">

        <div class="ev-section__head">
            <div>
                <h3 class="ev-section__title">Convenciones</h3>
                <p class="ev-section__sub">Nuestros hitos anuales más importantes</p>
            </div>
            <a href="eventos/convencion_25.html" class="ev-btn-ghost">Ver Histórico</a>
        </div>

        <!-- Hero card grande + 2 pequeñas -->
        <div class="ev-conv-grid">

            <!-- Card principal -->
            <a class="ev-conv-main" href="eventos/convencion_25.html">
                <img src="eventos/images/convencion_cuba/image__001.jpg" alt="Convención Anual Vidatur 2025">
                <div class="ev-conv-main__overlay"></div>
                <div class="ev-conv-main__badge">DESTACADO</div>
                <div class="ev-conv-main__info">
                    <strong>Convención Anual Vidatur 2025</strong>
                    <span>Lanzamiento oficial de nuevas rutas y alianzas estratégicas.</span>
                </div>
            </a>

            <!-- Cards secundarias -->
            <div class="ev-conv-side">

                <a class="ev-conv-side__card" href="eventos/convencion3.html">
                    <img src="eventos/images/convencion3/foto09.jpg" alt="3ra Convención Cusco 2022">
                    <div class="ev-conv-side__info">
                        <strong>3ra. Convención — Cusco 2022</strong>
                    </div>
                </a>

                <a class="ev-conv-side__card" href="eventos/convencion2.html">
                    <img src="eventos/images/convencion2/foto01.jpg" alt="2da Convención Lima 2019">
                    <div class="ev-conv-side__info">
                        <strong>2da. Convención — Lima 2019</strong>
                    </div>
                </a>

                <a class="ev-conv-side__card" href="eventos/convencion_vidatur.html">
                    <img src="eventos/images/convencion_vidatur/foto01.jpg" alt="1ra Convención Arequipa 2018">
                    <div class="ev-conv-side__info">
                        <strong>1ra. Convención — Arequipa 2018</strong>
                    </div>
                </a>

            </div>
        </div>

    </div>
</section>

<!-- ════════════════════════════════════════
     SECCIÓN 2 — FAM TRIPS
     ════════════════════════════════════════ -->
<section class="ev-section ev-section--light">
    <div class="container">

        <div class="ev-section__head ev-section__head--center">
            <div>
                <h3 class="ev-section__title">Fam Trips</h3>
                <p class="ev-section__sub">Viajes de familiarización diseñados para capacitar a nuestros agentes con experiencias reales en destino</p>
            </div>
        </div>

        <div class="ev-fam-grid">

            <?php
            /*
             * ── DATO ESTRUCTURADO ──────────────────────────────────────
             * Para agregar un Fam Trip solo añade un elemento al array.
             * ─────────────────────────────────────────────────────────── */
            $famTrips = [
                [
                    'year'    => '2025',
                    'title'   => 'Cuba: Herencia y Sol',
                    'desc'    => 'Exploración de cadenas hoteleras y destinos emergentes en Varadero y La Habana.',
                    'img'     => 'eventos/images/fam_cuba_2025/fam_cuba_1.jpg',
                    'href'    => 'eventos/fam_trip_cuba_2025.html',
                    'gallery' => true,
                ],
                [
                    'year'    => '2021',
                    'title'   => 'Cancún All-Inclusive',
                    'desc'    => 'Inspección técnica de resorts de lujo y protocolos de seguridad post-pandemia.',
                    'img'     => 'eventos/images/fam_cancun_2021/FAM CANCUN 2.jpg',
                    'href'    => 'eventos/fam_cancun_2021.html',
                    'gallery' => true,
                ],
                [
                    'year'    => '2019',
                    'title'   => 'Ruta de los Cayos',
                    'desc'    => 'Descubriendo los secretos de Cayo Santa María y la costa de Varadero.',
                    'img'     => 'eventos/images/VIAJE_CAPACITACION_ANUAL_CANCUN/portada.png',
                    'href'    => 'eventos/viaje_capa_anual_cancun.html',
                    'gallery' => true,
                ],
                [
                    'year'    => '2018',
                    'title'   => 'Panamá — Ciudad y Canal',
                    'desc'    => 'Conociendo la infraestructura hotelera y circuitos especiales en Panamá.',
                    'img'     => 'eventos/images/fam_panama/foto01.jpg',
                    'href'    => 'eventos/fam_panama.html',
                    'gallery' => true,
                ],
                [
                    'year'    => '2017',
                    'title'   => 'Varadero — Cuba',
                    'desc'    => 'Familiarización con resorts todo incluido y experiencias locales.',
                    'img'     => 'eventos/images/fam_varadero/foto01.jpg',
                    'href'    => 'eventos/fam_varadero.html',
                    'gallery' => true,
                ],
                [
                    'year'    => '2017',
                    'title'   => 'Miami — USA',
                    'desc'    => 'Recorrido por hoteles boutique, circuitos y cultura del sur de Florida.',
                    'img'     => 'eventos/images/fam_miami/foto01.jpg',
                    'href'    => 'eventos/fam_miami.html',
                    'gallery' => true,
                ],
            ];
            foreach ($famTrips as $trip): ?>
            <div class="ev-fam-card">
                <a href="<?= $trip['href'] ?>" class="ev-fam-card__img-wrap">
                    <img src="<?= $trip['img'] ?>" alt="<?= $trip['title'] ?>">
                    <span class="ev-fam-card__year"><?= $trip['year'] ?></span>
                </a>
                <div class="ev-fam-card__body">
                    <strong><?= $trip['title'] ?></strong>
                    <p><?= $trip['desc'] ?></p>
                    <?php if ($trip['gallery']): ?>
                    <a class="ev-fam-card__link" href="<?= $trip['href'] ?>">Ver Galería →</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     SECCIÓN 3 — ARCHIVO HISTÓRICO
     ════════════════════════════════════════ -->
<section class="ev-section ev-section--archive">
    <div class="container">

        <div class="ev-section__head">
            <h3 class="ev-section__title ev-section__title--line">Eventos</h3>
        </div>

        <div class="ev-archive-grid">

            <?php
            /*
             * ── DATO ESTRUCTURADO ──────────────────────────────────────
             * Para agregar un evento al archivo solo añade un elemento.
             * ─────────────────────────────────────────────────────────── */
            $archivo = [
                ['title' => 'Lanzamiento Programas 2022',               'img' => 'eventos/images/programas_2022/foto06.jpg',              'href' => 'eventos/programas_2022.html'],
                ['title' => 'Excursion Travel Perú — Xavage 2019',      'img' => 'eventos/images/xavage/foto01.jpg',                      'href' => 'eventos/xavage.html'],
                ['title' => '19 Aniversario Equipo Vidatur',             'img' => 'eventos/images/19_aniversario/foto1.jpg',               'href' => 'eventos/19_aniversario.html'],
                ['title' => 'Caravana 2017 — Lima',                     'img' => 'eventos/images/caravana_lima/foto1.jpg',                'href' => 'eventos/caravana_lima.html'],
                ['title' => 'Caravana 2017 — Arequipa',                 'img' => 'eventos/images/caravana_arequipa/foto4.jpg',            'href' => 'eventos/caravana_arequipa.html'],
                ['title' => 'Fam Trip Iguazú 2017',                     'img' => 'eventos/images/fam_iguazu/foto01.jpg',                  'href' => 'eventos/fam_iguazu.html'],
                ['title' => 'Presentación Caribe y USA',                'img' => 'eventos/images/caribe_usa/foto14.jpg',                  'href' => 'eventos/caribe_usa.html'],
                ['title' => 'Feria AVIT — Arequipa',                    'img' => 'eventos/images/feria_avit_arequipa/avit1.jpg',          'href' => 'eventos/feria_avit_aqp.html'],
                ['title' => 'Evento Lima 2017',                         'img' => 'eventos/images/evento_lima_2017/foto_10.jpg',           'href' => 'eventos/evento_lima_2017.html'],
                ['title' => 'Evento Arequipa 2017',                     'img' => 'eventos/images/evento_aqp_2017/foto02.jpg',             'href' => 'eventos/evento_aqp_2017.html'],
                ['title' => 'Evento Trujillo 2017',                     'img' => 'eventos/images/evento_tru_2017/foto02.jpg',             'href' => 'eventos/evento_tru_2017.html'],
                ['title' => 'Evento Chiclayo 2017',                     'img' => 'eventos/images/evento_cix_2017/foto02.jpg',             'href' => 'eventos/evento_cix_2017.html'],
                ['title' => 'Evento Tacna 2017',                        'img' => 'eventos/images/evento_tacna_2017/foto02.jpg',           'href' => 'eventos/evento_tacna_2017.html'],
                ['title' => 'Fiesta Fin de Año — Trujillo',             'img' => 'eventos/images/fiesta_fin_year_tru/foto7.jpg',          'href' => 'eventos/fiesta_fin_year_tru.html'],
                ['title' => 'Fam Trip — Puerto Vallarta',               'img' => 'eventos/images/evento_puerto_vallarta/foto01.jpg',      'href' => 'eventos/evento_puerto_vallarta.html'],
                ['title' => 'Capacitación Cancún 2017',                 'img' => 'eventos/images/fam_cancun/foto01.jpg',                  'href' => 'eventos/fam_cancun.html'],
                ['title' => 'Destino Arequipa — Argentina',             'img' => 'eventos/images/evento_aqp_dargentina/foto01.jpg',       'href' => 'eventos/evento_aqp_dargentina.html'],
                ['title' => 'Destino Tacna — Argentina',                'img' => 'eventos/images/evento_tacna_dargentina/foto01.jpg',     'href' => 'eventos/evento_tacna_dargentina.html'],
                ['title' => 'Destino Trujillo — Isla Margarita',        'img' => 'eventos/images/evento_trujillo_2017/foto01.jpg',        'href' => 'eventos/evento_trujillo.html'],
                ['title' => 'Destino Lima — Isla Margarita',            'img' => 'eventos/images/evento_lima/foto01.jpeg',                'href' => 'eventos/evento_lima.html'],
                ['title' => 'Destino Cusco — Isla Margarita',           'img' => 'eventos/images/evento_cusco_im/foto01.jpg',             'href' => 'eventos/evento_cusco_im.html'],
                ['title' => 'Destino Arequipa — Isla Margarita',        'img' => 'eventos/images/evento_arequipa_im/foto01.jpg',          'href' => 'eventos/evento_arequipa_im.html'],
                ['title' => 'Destino Arequipa — México',                'img' => 'eventos/images/evento_arequipa_m/foto01.jpg',           'href' => 'eventos/evento_arequipa_m.html'],
            ];
            foreach ($archivo as $ev): ?>
            <a class="ev-archive-card" href="<?= $ev['href'] ?>">
                <img src="<?= $ev['img'] ?>" alt="<?= $ev['title'] ?>">
                <div class="ev-archive-card__overlay">
                    <span><?= $ev['title'] ?></span>
                </div>
            </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- ── CTA FINAL ── -->
<section class="ev-cta">
    <div class="ev-cta__inner">
        <h3>¿Deseas participar en nuestro próximo evento?</h3>
        <p>Únete a nuestra red de agentes y vive la experiencia Vidatur de primera mano. Conoce los destinos antes que nadie.</p>
        <a href="contacto.php" class="ev-cta__btn">Contactar con Vidatur</a>
    </div>
</section>

<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>