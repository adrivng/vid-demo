<?php
/*
 * ============================================================
 *  PLANTILLA: Página de programa / paquete individual
 *
 *  TOKENS a reemplazar en cada paquete:
 *    Asia        — Nombre del paquete
 *    Programa con aéreo - LATAM     — Ej: "Programa con aéreo - LATAM"
 *    1,099        — Solo el número, ej: 999
 *    4 Días - 3 Noches      — Ej: "5 Días - 4 Noches"
 *    LATAM     — Ej: "LATAM"
 *    20 May. 2026  — Ej: "20 May. 2026"
 *    word_asia_latam_30_5_2026.docx     — Ruta al .docx, ej: "words/programa.docx"
 *    {{RUTA_FLYER}}    — Ruta al flyer .jpg para descargar
 *    asia_latam_30_5_2026_in.jpg     — Archivo _in (flyer principal), ej: in_cancun.jpg
 *    asia_latam_30_5_2026_cn.jpg     — Archivo _cn (continuación),   ej: cn_cancun.jpg
 * ============================================================
 */

$pageTitle  = 'Asia';
$activePage = '';

$base     = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/vid-demo/';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$baseUrl  = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/vid-demo/';

/* ── Head ─────────────────────────────────────────────────── */
ob_start();
require_once $base . 'includes/head.php';
$head = ob_get_clean();
$head = str_replace('href="lib/', 'href="' . $baseUrl . 'lib/', $head);
$head = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $head);
echo $head;
?>
<link rel="stylesheet" href="<?= $baseUrl ?>css/programa.css">
</head>
<body>

<?php
/* ── Header ───────────────────────────────────────────────── */
ob_start();
require_once $base . 'includes/header.php';
$header = ob_get_clean();
$header = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $header);
$header = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $header);
$header = str_replace('href="',     'href="' . $baseUrl,          $header);
echo $header;
?>


<!-- =====================================================
     HERO — Fondo verde, título + subtítulo centrados
===================================================== -->
<div class="prog-hero">
    <div class="prog-hero__inner">
        <h1 class="prog-hero__title">Asia</h1>
        <?php if ('Programa con aéreo - LATAM' !== ''): ?>
        <p class="prog-hero__sub">Programa con aéreo - LATAM</p>
        <?php endif; ?>
    </div>
</div>


<!-- =====================================================
     LAYOUT: sidebar izquierda + imágenes derecha
===================================================== -->
<div class="container py-5">
    <div class="prog-layout">

        <!-- ── SIDEBAR ─────────────────────────────────── -->
        <aside class="prog-sidebar">
            <div class="prog-card">

                <!-- Duración -->
                <?php if ('4 Días - 3 Noches' !== ''): ?>
                <p class="prog-card__duracion">4 Días - 3 Noches</p>
                <?php endif; ?>

                <!-- Fecha límite -->
                <?php if ('20 May. 2026' !== ''): ?>
                <div class="prog-card__fecha">
                    <i class="fa fa-check"></i> Compra hasta 20 May. 2026
                </div>
                <?php endif; ?>

                <!-- Precio -->
                <?php if ('1,099' !== ''): ?>
                <div class="prog-card__price-box">
                    <span class="prog-card__desde">DESDE</span>
                    <span class="prog-card__monto">$ 1,099</span>
                </div>
                <?php endif; ?>

                <!-- Aerolínea (opcional, debajo del precio) -->
                <?php if ('LATAM' !== ''): ?>
                <p class="prog-card__aerolinea">
                    <i class="fa fa-plane"></i> LATAM
                </p>
                <?php endif; ?>

                <!-- Botones de descarga -->
                <div class="prog-card__btns">

                    <?php if ('word_asia_latam_30_5_2026.docx' !== ''): ?>
                    <a class="prog-btn prog-btn--word"
                       href="word_asia_latam_30_5_2026.docx"
                       target="_blank"
                       download>
                        <!-- ícono W de Word en SVG inline para no depender de assets -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM8.5 17l-1.5-6h1.2l.9 4 1-4h1.2l1 4 .9-4H14l-1.5 6h-1.2l-1-3.8-1 3.8H8.5z"/>
                        </svg>
                        Descargar Word
                    </a>
                    <?php endif; ?>

                    <?php if ('{{RUTA_FLYER}}' !== ''): ?>
                    <a class="prog-btn prog-btn--flyer"
                       href="{{RUTA_FLYER}}"
                       download>
                        <!-- ícono imagen en SVG inline -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 3H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 16H4V5h16v14zm-5-7-4 5-3-3-4 5h14l-3-7z"/>
                        </svg>
                        Descargar Flyer
                    </a>
                    <?php endif; ?>

                </div>

                <!-- Botones WhatsApp por asesor (igual que en bloqueos) -->
                <div class="prog-card__wa-btns">
                    <a class="prog-wa-btn" id="waLink1" href="#" target="_blank" rel="noopener"
                       onclick="openWA('Asia'); return false;">
                        <i class="fab fa-whatsapp"></i> Guliana
                    </a>
                    <a class="prog-wa-btn" id="waLink2" href="#" target="_blank" rel="noopener"
                       onclick="openWA('Asia'); return false;">
                        <i class="fab fa-whatsapp"></i> Brenda Cornejo
                    </a>
                    <a class="prog-wa-btn" id="waLink3" href="#" target="_blank" rel="noopener"
                       onclick="openWA('Asia'); return false;">
                        <i class="fab fa-whatsapp"></i> Brendha Juarez
                    </a>
                </div>

            </div><!-- /prog-card -->
        </aside>

        <!-- ── IMÁGENES PRINCIPALES ─────────────────────── -->
        <div class="prog-main">

            <?php if ('asia_latam_30_5_2026_in.jpg' !== ''): ?>
            <!-- Flyer principal (_in) -->
            <img class="prog-img"
                 src="img/asia_latam_30_5_2026_in.jpg"
                 alt="Asia">
            <?php endif; ?>

            <?php if ('asia_latam_30_5_2026_cn.jpg' !== ''): ?>
            <!-- Continuación del programa (_cn) -->
            <img class="prog-img"
                 src="img/asia_latam_30_5_2026_cn.jpg"
                 alt="Asia">
            <?php endif; ?>

        </div>

    </div><!-- /prog-layout -->
</div><!-- /container -->


<!-- =====================================================
     MODAL WHATSAPP — mismo que en bloqueos.php
===================================================== -->
<div class="wa-overlay" id="waOverlay" onclick="closeWAOutside(event)">
    <div class="wa-modal">
        <button class="wa-modal__close" onclick="closeWA()">&#x2715;</button>
        <div class="wa-modal__icon"><i class="fab fa-whatsapp"></i></div>
        <h5>Habla con nuestros expertos</h5>
        <p id="waSubtitle">Un asesor te atiende ahora mismo.</p>

        <a class="wa-agent" id="waLink1" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">G</div>
            <div class="wa-agent__info">
                <strong>Guliana</strong>
                <span>Asesora de viajes</span>
            </div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink2" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">B</div>
            <div class="wa-agent__info">
                <strong>Brenda Cornejo</strong>
                <span>Asesora de viajes</span>
            </div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink3" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">B</div>
            <div class="wa-agent__info">
                <strong>Brendha Juarez</strong>
                <span>Asesora de viajes</span>
            </div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>

        <div class="wa-modal__footer">🔒 Atención personalizada · Sin costo adicional</div>
    </div>
</div>


<?php
/* ── Footer ───────────────────────────────────────────────── */
ob_start();
require_once $base . 'includes/footer.php';
$footer = ob_get_clean();
$footer = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $footer);
$footer = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $footer);
echo $footer;

/* ── Scripts ──────────────────────────────────────────────── */
ob_start();
require_once $base . 'includes/scripts.php';
$scripts = ob_get_clean();
$scripts = str_replace('src="lib/', 'src="' . $baseUrl . 'lib/', $scripts);
$scripts = str_replace('src="js/',  'src="' . $baseUrl . 'js/',  $scripts);
echo $scripts;
?>

<!-- JS del cotizador WhatsApp -->
<script src="<?= $baseUrl ?>js/whatsapp-cotizar.js"></script>

</body>
</html>