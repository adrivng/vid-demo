<?php
/**
 * vid-cms/templates/opcionales.php
 *
 * Plantilla para programas de tipo: opcionales
 * Mismas variables que principal.php
 */
?>
<?php
$pageTitle  = <?= var_export($titulo ?? 'Programa', true) ?>;
$activePage = '';

$base = dirname(__DIR__, 4) . '/';
require_once $base . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= str_repeat('../', 4) ?>css/programa.css">
</head>
<body>

<?php require_once $base . 'includes/header.php'; ?>

<!-- HERO — versión opcionales (sin precio destacado) -->
<div class="prog-hero prog-hero--opcionales"
     style="background-image:url('img/<?= htmlspecialchars($imagen_pr ?? '') ?>')">
    <div class="prog-hero__overlay"></div>
    <div class="prog-hero__content">
        <span class="prog-hero__tipo prog-hero__tipo--opc">OPCIONALES</span>
        <h1 class="prog-hero__title"><?= htmlspecialchars($titulo ?? '') ?></h1>
        <?php if (!empty($subtitulo)): ?>
        <p class="prog-hero__sub"><?= htmlspecialchars($subtitulo) ?></p>
        <?php endif; ?>
    </div>
</div>

<!-- CONTENIDO -->
<div class="container py-5">
    <div class="prog-layout">

        <div class="prog-main">
            <?php if (!empty($imagen_in)): ?>
            <img class="prog-img-in img-fluid rounded-3 mb-4"
                 src="img/<?= htmlspecialchars($imagen_in) ?>"
                 alt="<?= htmlspecialchars($titulo ?? '') ?>">
            <?php endif; ?>
        </div>

        <aside class="prog-sidebar">
            <div class="prog-card">

                <ul class="prog-card__meta">
                    <?php if (!empty($duracion)): ?>
                    <li><i class="fa fa-clock"></i> <?= htmlspecialchars($duracion) ?></li>
                    <?php endif; ?>
                    <?php if (!empty($aerolinea)): ?>
                    <li><i class="fa fa-plane"></i> <?= htmlspecialchars($aerolinea) ?></li>
                    <?php endif; ?>
                    <?php if (!empty($fecha_limite_texto)): ?>
                    <li><i class="fa fa-calendar-alt"></i> Hasta: <?= htmlspecialchars($fecha_limite_texto) ?></li>
                    <?php endif; ?>
                </ul>

                <?php if (!empty($ruta_word)): ?>
                <a class="prog-card__btn-word"
                   href="<?= htmlspecialchars($ruta_word) ?>"
                   target="_blank">
                    <i class="fa fa-file-word"></i> Descargar opcionales
                </a>
                <?php endif; ?>

                <button class="prog-card__btn-wa"
                        onclick="openWA('<?= htmlspecialchars($titulo ?? '') ?>')">
                    <i class="fab fa-whatsapp"></i> Consultar
                </button>

            </div>
        </aside>

    </div>
</div>

<?php if (!empty($imagen_cn)): ?>
<div class="container pb-5">
    <img class="img-fluid rounded-3"
         src="img/<?= htmlspecialchars($imagen_cn) ?>"
         alt="Newsletter <?= htmlspecialchars($titulo ?? '') ?>">
</div>
<?php endif; ?>

<?php require_once $base . 'includes/footer.php'; ?>
<?php require_once $base . 'includes/scripts.php'; ?>
<script src="<?= str_repeat('../', 4) ?>js/whatsapp-cotizar.js"></script>

</body>
</html>