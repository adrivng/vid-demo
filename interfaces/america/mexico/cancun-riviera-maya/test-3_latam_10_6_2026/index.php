<?php
/*
 * Plantilla: principal
 */

$pageTitle  = 'test 3';
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
<div class="prog-hero" style="background-image:url('img/test-3_latam_10_6_2026_pr.jpg')">
    <div class="prog-hero__overlay"></div>
    <div class="prog-hero__content">
        <span class="prog-hero__tipo">CON AEREO</span>
        <h1 class="prog-hero__title">test 3</h1>
        <?php if ('Solo Servicios' !== ''): ?>
        <p class="prog-hero__sub">Solo Servicios</p>
        <?php endif; ?>
    </div>
</div>

<div class="container py-5">
    <div class="prog-layout">

        <div class="prog-main">
            <?php if ('test-3_latam_10_6_2026_in.jpg' !== ''): ?>
            <img class="prog-img-in img-fluid rounded-3 mb-4"
                 src="img/test-3_latam_10_6_2026_in.jpg"
                 alt="test 3">
            <?php endif; ?>
        </div>

        <aside class="prog-sidebar">
            <div class="prog-card">

                <?php if ('1,099' !== ''): ?>
                <div class="prog-card__price">
                    <span class="prog-card__price-from">Desde</span>
                    <strong>1,099</strong>
                </div>
                <?php endif; ?>

                <ul class="prog-card__meta">
                    <?php if ('4 Días - 3 Noches' !== ''): ?>
                    <li><i class="fa fa-clock"></i> 4 Días - 3 Noches</li>
                    <?php endif; ?>
                    <?php if ('LATAM' !== ''): ?>
                    <li><i class="fa fa-plane"></i> LATAM</li>
                    <?php endif; ?>
                    <?php if ('20 May. 2026' !== ''): ?>
                    <li><i class="fa fa-calendar-alt"></i> Hasta: {{FECHA}}</li>
                    <?php endif; ?>
                </ul>

                <?php if ('word_test-3_latam_10_6_2026.docx' !== ''): ?>
                <a class="prog-card__btn-word"
                   href="word_test-3_latam_10_6_2026.docx"
                   target="_blank">
                    <i class="fa fa-file-word"></i> Descargar programa
                </a>
                <?php endif; ?>

                <button class="prog-card__btn-wa"
                        onclick="openWA('test 3')">
                    <i class="fab fa-whatsapp"></i> Cotizar ahora
                </button>

            </div>
        </aside>

    </div>
</div>

<?php if ('test-3_latam_10_6_2026_cn.jpg' !== ''): ?>
<div class="container pb-5">
    <img class="img-fluid rounded-3"
         src="img/test-3_latam_10_6_2026_cn.jpg"
         alt="test 3">
</div>
<?php endif; ?>

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