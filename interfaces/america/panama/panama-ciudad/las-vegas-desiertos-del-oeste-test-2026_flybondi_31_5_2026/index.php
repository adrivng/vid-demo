<?php
/*
 * Plantilla: principal
 */

$pageTitle  = 'Las Vegas Desiertos del Oeste TEST 2026';
$activePage = '';

$base     = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/vid-demo/';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$baseUrl  = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/vid-demo/';

// Captura head.php y corrige rutas relativas
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
ob_start();
require_once $base . 'includes/header.php';
$header = ob_get_clean();
$header = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $header);
$header = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $header);
$header = str_replace('href="',     'href="' . $baseUrl,          $header);
echo $header;
?>


<!-- HERO -->
<div class="prog-hero">
    <div class="prog-hero__content">
        <h1 class="prog-hero__title">Las Vegas Desiertos del Oeste TEST 2026</h1>
        <?php if ('Programa con aéreo - LATAM' !== ''): ?>
        <p class="prog-hero__sub">Programa con aéreo - LATAM</p>
        <?php endif; ?>
    </div>
</div>

<div class="container py-5">
    <div class="prog-layout">

        <aside class="prog-sidebar">
            <div class="prog-card">

                <?php if ('1,200' !== ''): ?>
                <div class="prog-card__price">
                    <span class="prog-card__price-from">Desde</span>
                    <strong>1,200</strong>
                </div>
                <?php endif; ?>

                <ul class="prog-card__meta">
                    <?php if ('4 Días - 3 Noches' !== ''): ?>
                    <li><i class="fa fa-clock"></i> 4 Días - 3 Noches</li>
                    <?php endif; ?>
                    <?php if ('FLYBONDI' !== ''): ?>
                    <li><i class="fa fa-plane"></i> FLYBONDI</li>
                    <?php endif; ?>
                    <?php if ('20 May. 2026' !== ''): ?>
                    <li><i class="fa fa-calendar-alt"></i> Hasta: 20 May. 2026</li>
                    <?php endif; ?>
                </ul>

                <?php if ('word_las-vegas-desiertos-del-oeste-test-2026_flybondi_31_5_2026.docx' !== ''): ?>
                <a class="prog-card__btn-word" href="word_las-vegas-desiertos-del-oeste-test-2026_flybondi_31_5_2026.docx" target="_blank">
                    <i class="fa fa-file-word"></i> Descargar programa
                </a>
                <?php endif; ?>

                <button class="prog-card__btn-wa" onclick="openWA('Las Vegas Desiertos del Oeste TEST 2026')">
                    <i class="fab fa-whatsapp"></i> Cotizar ahora
                </button>

            </div>
        </aside>

        <div class="prog-main">
            <?php if ('las-vegas-desiertos-del-oeste-test-2026_flybondi_31_5_2026_in.jpg' !== ''): ?>
            <img class="prog-img-in img-fluid rounded-3 mb-4"
                src="img/las-vegas-desiertos-del-oeste-test-2026_flybondi_31_5_2026_in.jpg"
                alt="Las Vegas Desiertos del Oeste TEST 2026">
            <?php endif; ?>

            <?php if ('las-vegas-desiertos-del-oeste-test-2026_flybondi_31_5_2026_cn.jpg' !== ''): ?>
            <img class="img-fluid rounded-3"
                src="img/las-vegas-desiertos-del-oeste-test-2026_flybondi_31_5_2026_cn.jpg"
                alt="Las Vegas Desiertos del Oeste TEST 2026">
            <?php endif; ?>
        </div><!-- /prog-main -->
    </div><!-- /prog-layout -->
</div><!-- /container -->



<?php
ob_start();
require_once $base . 'includes/footer.php';
$footer = ob_get_clean();
$footer = str_replace('href="css/', 'href="' . $baseUrl . 'css/', $footer);
$footer = str_replace('src="img/',  'src="'  . $baseUrl . 'img/', $footer);
echo $footer;

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