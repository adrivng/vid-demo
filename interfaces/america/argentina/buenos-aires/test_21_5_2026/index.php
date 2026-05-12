<?php
/*
 * Generado automáticamente por vid-cms. No editar manualmente.
 * Plantilla: principal
 */

$pageTitle  = 'TEST';
$activePage = '';

$base = __DIR__ . '/../../../../../../';
require_once 'includes/head.php';
?>
<link rel="stylesheet" href="../../../../../../css/programa.css">
</head>
<body>

<?php require_once $base . 'includes/header.php'; ?>

<!-- HERO -->
<div class="prog-hero" style="background-image:url('img/test_21_5_2026_pr.jpg')">
    <div class="prog-hero__overlay"></div>
    <div class="prog-hero__content">
        <span class="prog-hero__tipo">CON AEREO</span>
        <h1 class="prog-hero__title">TEST</h1>
        <?php if ('Programa con aéreo - COPA' !== ''): ?>
        <p class="prog-hero__sub">Programa con aéreo - COPA</p>
        <?php endif; ?>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container py-5">
    <div class="prog-layout">

        <div class="prog-main">
            <?php if ('test_21_5_2026_in.jpg' !== ''): ?>
            <img class="prog-img-in img-fluid rounded-3 mb-4"
                 src="img/test_21_5_2026_in.jpg"
                 alt="TEST">
            <?php endif; ?>
        </div>

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
                    <?php if ('' !== ''): ?>
                    <li><i class="fa fa-plane"></i> </li>
                    <?php endif; ?>
                    <?php if ('20 Mar. 2026' !== ''): ?>
                    <li><i class="fa fa-calendar-alt"></i> Hasta: 20 Mar. 2026</li>
                    <?php endif; ?>
                </ul>

                <?php if ('word_test_21_5_2026.docx' !== ''): ?>
                <a class="prog-card__btn-word"
                   href="word_test_21_5_2026.docx"
                   target="_blank">
                    <i class="fa fa-file-word"></i> Descargar programa
                </a>
                <?php endif; ?>

                <button class="prog-card__btn-wa"
                        onclick="openWA('TEST')">
                    <i class="fab fa-whatsapp"></i> Cotizar ahora
                </button>

            </div>
        </aside>

    </div>
</div>

<?php if ('test_21_5_2026_cn.jpg' !== ''): ?>
<div class="container pb-5">
    <img class="img-fluid rounded-3"
         src="img/test_21_5_2026_cn.jpg"
         alt="Newsletter TEST">
</div>
<?php endif; ?>

<?php require_once $base . 'includes/footer.php'; ?>
<?php require_once $base . 'includes/scripts.php'; ?>
<script src="../../../../../../js/whatsapp-cotizar.js"></script>

</body>
</html>