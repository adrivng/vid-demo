<?php
/* ============================================================
 *  PLANTILLA: Programa individual
 *  ► EDITA SOLO ESTA SECCIÓN al copiar a cada paquete
 * ============================================================ */

$titulo       = 'Las Vegas Desiertos del Oeste TEST 2026';
$subtitulo    = 'Programa con aéreo - LATAM';
$precio       = '1,200';           // solo número/texto, sin $
$duracion     = '4 Días - 3 Noches';
$fechaLimite  = '20 May. 2026';    // '' para ocultar
$rutaWord     = 'words/mi-programa.docx'; // '' para ocultar botón
$rutaFlyer    = 'img/flyer_mi_programa.jpg'; // '' para ocultar botón
$imagenIn     = 'in_mi_programa.jpg';  // '' para ocultar
$imagenCn     = 'cn_mi_programa.jpg';  // '' para ocultar

/* ============================================================
 *  NO EDITAR DEBAJO DE ESTA LÍNEA
 * ============================================================ */

$pageTitle  = $titulo;
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
     HERO
===================================================== -->
<div class="prog-hero">
    <div class="prog-hero__inner">
        <h1 class="prog-hero__title"><?= htmlspecialchars($titulo) ?></h1>
        <?php if ($subtitulo !== ''): ?>
        <p class="prog-hero__sub"><?= htmlspecialchars($subtitulo) ?></p>
        <?php endif; ?>
    </div>
</div>

<!-- =====================================================
     LAYOUT
===================================================== -->
<div class="container py-5">
    <div class="prog-layout">

        <!-- ── SIDEBAR ── -->
        <aside class="prog-sidebar">
            <div class="prog-card">

                <!-- Duración -->
                <?php if ($duracion !== ''): ?>
                <p class="prog-card__duracion"><?= htmlspecialchars($duracion) ?></p>
                <?php endif; ?>

                <!-- Fecha límite -->
                <?php if ($fechaLimite !== ''): ?>
                <div class="prog-card__fecha">
                    <i class="fa fa-check"></i> Compra hasta <?= htmlspecialchars($fechaLimite) ?>
                </div>
                <?php endif; ?>

                <!-- Precio -->
                <?php if ($precio !== ''): ?>
                <div class="prog-card__price-box">
                    <span class="prog-card__desde">DESDE</span>
                    <span class="prog-card__monto">$ <?= htmlspecialchars($precio) ?></span>
                </div>
                <?php endif; ?>

                <!-- Botones de descarga -->
                <div class="prog-card__btns">

                    <?php if ($rutaWord !== ''): ?>
                    <a class="prog-btn prog-btn--word"
                       href="<?= htmlspecialchars($rutaWord) ?>"
                       target="_blank" download>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM8.5 17l-1.5-6h1.2l.9 4 1-4h1.2l1 4 .9-4H14l-1.5 6h-1.2l-1-3.8-1 3.8H8.5z"/>
                        </svg>
                        Descargar Word
                    </a>
                    <?php endif; ?>

                    <?php if ($rutaFlyer !== ''): ?>
                    <a class="prog-btn prog-btn--flyer"
                       href="<?= htmlspecialchars($rutaFlyer) ?>"
                       download>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M21 3H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 16H4V5h16v14zm-5-7-4 5-3-3-4 5h14l-3-7z"/>
                        </svg>
                        Descargar Flyer
                    </a>
                    <?php endif; ?>

                </div>

                <!-- Botones WhatsApp — abren el popup modal -->
                <div class="prog-card__wa-btns">
                    <a class="prog-wa-btn" href="#"
                       onclick="openWA('<?= addslashes($titulo) ?>'); return false;">
                        <i class="fab fa-whatsapp"></i> Guliana
                    </a>
                    <a class="prog-wa-btn" href="#"
                       onclick="openWA('<?= addslashes($titulo) ?>'); return false;">
                        <i class="fab fa-whatsapp"></i> Brenda Cornejo
                    </a>
                    <a class="prog-wa-btn" href="#"
                       onclick="openWA('<?= addslashes($titulo) ?>'); return false;">
                        <i class="fab fa-whatsapp"></i> Brendha Juarez
                    </a>
                </div>

            </div><!-- /prog-card -->
        </aside>

        <!-- ── IMÁGENES ── -->
        <div class="prog-main">

            <?php if ($imagenIn !== ''): ?>
            <img class="prog-img"
                 src="<?= $baseUrl ?>img/<?= htmlspecialchars($imagenIn) ?>"
                 alt="<?= htmlspecialchars($titulo) ?>">
            <?php endif; ?>

            <?php if ($imagenCn !== ''): ?>
            <img class="prog-img"
                 src="<?= $baseUrl ?>img/<?= htmlspecialchars($imagenCn) ?>"
                 alt="<?= htmlspecialchars($titulo) ?>">
            <?php endif; ?>

        </div>

    </div><!-- /prog-layout -->
</div><!-- /container -->


<!-- =====================================================
     MODAL WHATSAPP
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
/* ── Footer ── */
ob_start();
require_once $base . 'includes/footer.php';
$footer = ob_get_clean();
$footer = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $footer);
$footer = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $footer);
echo $footer;

/* ── Scripts ── */
ob_start();
require_once $base . 'includes/scripts.php';
$scripts = ob_get_clean();
$scripts = str_replace('src="lib/', 'src="' . $baseUrl . 'lib/', $scripts);
$scripts = str_replace('src="js/',  'src="' . $baseUrl . 'js/',  $scripts);
echo $scripts;
?>

<script src="<?= $baseUrl ?>js/whatsapp-cotizar.js"></script>
</body>
</html>