<?php
/*
 * ============================================================
 *  PLANTILLA: Página de programa / paquete individual
 *  Uso: copiar este archivo a la carpeta del destino,
 *       reemplazar los {{TOKENS}} con los datos reales.
 *
 *  TOKENS disponibles:
 *    Costa Rica (San José) 2026       — Nombre del paquete
 *    Programa con aéreo - LATAM    — Ej: "Programa con aéreo - LATAM"
 *    1,099       — Solo el número, ej: 999
 *    4 Días - 3 Noches     — Ej: "4 Días - 3 Noches"
 *    LATAM    — Ej: "LATAM"
 *    20 May. 2026 — Ej: "20 May. 2026"
 *    word_costa-rica-san-jose-2026_latam_31_5_2026.docx    — Ruta al .docx, ej: "words/programa.docx"
 *    {{RUTA_FLYER}}   — Ruta al flyer/mail .jpg para descargar
 *    costa-rica-san-jose-2026_latam_31_5_2026_in.jpg    — Nombre del archivo _in (flyer interior)
 *    costa-rica-san-jose-2026_latam_31_5_2026_cn.jpg    — Nombre del archivo _cn (continuación)
 * ============================================================
 */

$pageTitle  = 'Costa Rica (San José) 2026';
$activePage = '';

$base     = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/vid-demo/';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$baseUrl  = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/vid-demo/';

/* ── Head ── */
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
/* ── Header ── */
ob_start();
require_once $base . 'includes/header.php';
$header = ob_get_clean();
$header = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $header);
$header = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $header);
$header = str_replace('href="',     'href="' . $baseUrl,          $header);
echo $header;
?>

<!-- =====================================================
     HERO — Fondo verde con título centrado
===================================================== -->
<div class="prog-hero">
    <div class="prog-hero__content">
        <h1 class="prog-hero__title">Costa Rica (San José) 2026</h1>
        <?php if ('Programa con aéreo - LATAM' !== ''): ?>
        <p class="prog-hero__sub">Programa con aéreo - LATAM</p>
        <?php endif; ?>
    </div>
</div>

<!-- =====================================================
     LAYOUT PRINCIPAL — Sidebar + Contenido
===================================================== -->
<div class="container py-5">
    <div class="prog-layout">

        <!-- ── SIDEBAR ── -->
        <aside class="prog-sidebar">
            <div class="prog-card">

                <!-- Precio con símbolo $ -->
                <?php if ('1,099' !== ''): ?>
                <div class="prog-card__price">
                    <span class="prog-card__price-from">Desde</span>
                    <strong><span class="prog-card__currency">$</span>1,099</strong>
                    <span class="prog-card__per">/ persona</span>
                </div>
                <hr class="prog-card__divider">
                <?php endif; ?>

                <!-- Meta: duración, aerolínea, fecha límite -->
                <ul class="prog-card__meta">
                    <?php if ('4 Días - 3 Noches' !== ''): ?>
                    <li><i class="fa fa-clock"></i> 4 Días - 3 Noches</li>
                    <?php endif; ?>

                    <?php if ('LATAM' !== ''): ?>
                    <li><i class="fa fa-plane"></i> LATAM</li>
                    <?php endif; ?>

                    <?php if ('20 May. 2026' !== ''): ?>
                    <li><i class="fa fa-calendar-alt"></i> Compra hasta: 20 May. 2026</li>
                    <?php endif; ?>
                </ul>

                <hr class="prog-card__divider">

                <!-- Botones de descarga -->
                <div class="prog-card__downloads">

                    <?php if ('word_costa-rica-san-jose-2026_latam_31_5_2026.docx' !== ''): ?>
                    <!-- Descarga el Word del programa -->
                    <a class="prog-card__btn prog-card__btn--word"
                       href="word_costa-rica-san-jose-2026_latam_31_5_2026.docx"
                       target="_blank"
                       download>
                        <i class="fa fa-file-word"></i> Descargar programa
                    </a>
                    <?php endif; ?>

                    <?php if ('{{RUTA_FLYER}}' !== ''): ?>
                    <!-- Descarga el flyer/mail como imagen -->
                    <a class="prog-card__btn prog-card__btn--flyer"
                       href="{{RUTA_FLYER}}"
                       download>
                        <i class="fa fa-image"></i> Descargar flyer
                    </a>
                    <?php endif; ?>

                </div>

                <!-- Botón WhatsApp -->
                <button class="prog-card__btn prog-card__btn--wa"
                        onclick="openWA('Costa Rica (San José) 2026')">
                    <i class="fab fa-whatsapp"></i> Cotizar ahora
                </button>

            </div><!-- /prog-card -->
        </aside>

        <!-- ── CONTENIDO PRINCIPAL (imágenes) ── -->
        <div class="prog-main">

            <?php if ('costa-rica-san-jose-2026_latam_31_5_2026_in.jpg' !== ''): ?>
            <!-- Imagen interior del programa (_in) -->
            <img class="prog-img img-fluid rounded-3 mb-3"
                 src="img/costa-rica-san-jose-2026_latam_31_5_2026_in.jpg"
                 alt="Costa Rica (San José) 2026">
            <?php endif; ?>

            <?php if ('costa-rica-san-jose-2026_latam_31_5_2026_cn.jpg' !== ''): ?>
            <!-- Continuación del programa (_cn) -->
            <img class="prog-img img-fluid rounded-3"
                 src="img/costa-rica-san-jose-2026_latam_31_5_2026_cn.jpg"
                 alt="Costa Rica (San José) 2026">
            <?php endif; ?>

        </div><!-- /prog-main -->

    </div><!-- /prog-layout -->
</div><!-- /container -->


<?php
/* ── Footer ── */
ob_start();
require_once $base . 'includes/footer.php';
$footer = ob_get_clean();
$footer = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $footer);
$footer = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $footer);
echo $footer;

/* ── Scripts de la plantilla ── */
ob_start();
require_once $base . 'includes/scripts.php';
$scripts = ob_get_clean();
$scripts = str_replace('src="lib/', 'src="' . $baseUrl . 'lib/', $scripts);
$scripts = str_replace('src="js/',  'src="' . $baseUrl . 'js/',  $scripts);
echo $scripts;
?>

<!-- JS del cotizador WhatsApp (debe ir siempre al final) -->
<script src="<?= $baseUrl ?>js/whatsapp-cotizar.js"></script>

</body>
</html>