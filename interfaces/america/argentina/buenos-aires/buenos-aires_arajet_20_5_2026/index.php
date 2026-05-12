<?php
/*
 * Generado automáticamente por vid-cms. No editar manualmente.
 * Plantilla: principal
 */

$pageTitle  = 'Buenos Aires';
$activePage = '';

$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/vid-demo/';

require_once $base . 'includes/head.php';
?>
<link rel="stylesheet" href="../../../../../../css/programa.css">
</head>
<body>

<?php require_once $base . 'includes/header.php'; ?>

<!-- HERO -->
<div class="prog-hero" style="background-image:url('img/buenos-aires_arajet_20_5_2026_pr.jpg')">
    <div class="prog-hero__overlay"></div>
    <div class="prog-hero__content">
        <span class="prog-hero__tipo">CON AEREO</span>
        <h1 class="prog-hero__title">Buenos Aires</h1>
        <?php if ('Programa con aéreo - LATAM' !== ''): ?>
        <p class="prog-hero__sub">Programa con aéreo - LATAM</p>
        <?php endif; ?>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container py-5">
    <div class="prog-layout">

        <div class="prog-main">
            <?php if ('buenos-aires_arajet_20_5_2026_in.jpg' !== ''): ?>
            <img class="prog-img-in img-fluid rounded-3 mb-4"
                 src="img/buenos-aires_arajet_20_5_2026_in.jpg"
                 alt="Buenos Aires">
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
                    <?php if ('6 Días - 5 Noches' !== ''): ?>
                    <li><i class="fa fa-clock"></i> 6 Días - 5 Noches</li>
                    <?php endif; ?>
                    <?php if ('ARAJET' !== ''): ?>
                    <li><i class="fa fa-plane"></i> ARAJET</li>
                    <?php endif; ?>
                    <?php if ('20 Abr. 2026' !== ''): ?>
                    <li><i class="fa fa-calendar-alt"></i> Hasta: 20 Abr. 2026</li>
                    <?php endif; ?>
                </ul>

                <?php if ('word_buenos-aires_arajet_20_5_2026.docx' !== ''): ?>
                <a class="prog-card__btn-word"
                   href="word_buenos-aires_arajet_20_5_2026.docx"
                   target="_blank">
                    <i class="fa fa-file-word"></i> Descargar programa
                </a>
                <?php endif; ?>

                <button class="prog-card__btn-wa"
                        onclick="openWA('Buenos Aires')">
                    <i class="fab fa-whatsapp"></i> Cotizar ahora
                </button>

            </div>
        </aside>

    </div>
</div>

<?php if ('buenos-aires_arajet_20_5_2026_cn.jpg' !== ''): ?>
<div class="container pb-5">
    <img class="img-fluid rounded-3"
         src="img/buenos-aires_arajet_20_5_2026_cn.jpg"
         alt="Newsletter Buenos Aires">
</div>
<?php endif; ?>

<?php require_once $base . 'includes/footer.php'; ?>
<?php require_once $base . 'includes/scripts.php'; ?>
<script src="../../../../../../js/whatsapp-cotizar.js"></script>

</body>
</html>