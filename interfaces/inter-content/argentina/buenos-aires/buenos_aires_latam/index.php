<?php
$titulo       = 'Buenos Aires 2026';
$subtitulo    = 'Programa con aéreo - LATAM';
$precio       = '1,200';
$duracion     = '6 Días - 5 Noches';
$fechaLimite  = '31 May. 2026';
$rutaWord     = 'word_buenos_aires_latam.docx';
$imagenMail   = 'buenos_aires_latam_mail.jpg';
$imagenIn     = 'buenos_aires_latam_in.jpg';
$imagenCn     = 'buenos_aires_latam_cn.jpg';

$pageTitle  = $titulo;
$activePage = '';

$subir = '../../../../../';
require_once $subir . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= $subir ?>css/programa.css">
<link rel="stylesheet" href="<?= $subir ?>css/bloqueos.css">
</head>
<body>

<?php require_once $subir . 'includes/header.php'; ?>

<div class="prog-hero prog-hero--page">
    <div class="prog-hero__inner">
        <div class="prog-hero__content">
            <h1 class="prog-hero__title"><?= htmlspecialchars($titulo) ?></h1>
            <?php if ($subtitulo !== ''): ?>
            <p class="prog-hero__sub"><?= htmlspecialchars($subtitulo) ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="prog-layout">
        <aside class="prog-sidebar">
            <div class="prog-card">
                <?php if ($duracion !== ''): ?>
                <p class="prog-card__duracion"><?= htmlspecialchars($duracion) ?></p>
                <?php endif; ?>

                <?php if ($fechaLimite !== ''): ?>
                <div class="prog-card__fecha">
                    <i class="fa fa-check"></i> Compra hasta <?= htmlspecialchars($fechaLimite) ?>
                </div>
                <?php endif; ?>

                <?php if ($precio !== ''): ?>
                <div class="prog-card__price-box">
                    <span class="prog-card__desde">DESDE</span>
                    <span class="prog-card__monto">$ <?= htmlspecialchars($precio) ?></span>
                </div>
                <?php endif; ?>

                <div class="prog-card__btns">
                    <?php if ($rutaWord !== ''): ?>
                    <a class="prog-btn prog-btn--word" href="<?= htmlspecialchars($rutaWord) ?>" target="_blank" download>
                        <i class="fas fa-file-word"></i> Descargar Word
                    </a>
                    <?php endif; ?>

                    <?php if ($imagenMail !== ''): ?>
                    <a class="prog-btn prog-btn--flyer" href="img/<?= htmlspecialchars($imagenMail) ?>" download>
                        <i class="fas fa-image"></i> Descargar Flyer
                    </a>
                    <?php endif; ?>
                </div>

                <div class="prog-card__wa-btns">
                    <a class="prog-wa-btn" href="#" onclick="openWA('<?= addslashes($titulo) ?>'); return false;">
                        <i class="fab fa-whatsapp"></i> Cotizar
                    </a>
                </div>
            </div>
        </aside>

        <div class="prog-main">
            <h3 class="prog-main__label">Flyer</h3>
            <?php if ($imagenIn !== ''): ?>
            <img class="prog-img prog-img--in" src="img/<?= htmlspecialchars($imagenIn) ?>" alt="<?= htmlspecialchars($titulo) ?>">
            <?php endif; ?>

            <?php if ($imagenCn !== '' && $imagenIn !== ''): ?>
            <img class="prog-img prog-img--cn" src="img/<?= htmlspecialchars($imagenCn) ?>" alt="<?= htmlspecialchars($titulo) ?>">
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="wa-overlay" id="waOverlay" onclick="closeWAOutside(event)">
    <div class="wa-modal">
        <button class="wa-modal__close" onclick="closeWA()">&#x2715;</button>
        <div class="wa-modal__icon"><i class="fab fa-whatsapp"></i></div>
        <h5>Habla con nuestros expertos</h5>
        <p id="waSubtitle">Un asesor te atiende ahora mismo.</p>
        <a class="wa-agent" id="waLink1" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">A</div>
            <div class="wa-agent__info"><strong>Andrea Ramos</strong><span>Experta en Caribe y Sudamérica</span></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink2" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">C</div>
            <div class="wa-agent__info"><strong>Carlos Mendoza</strong><span>Especialista en Europa y Asia</span></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink3" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">L</div>
            <div class="wa-agent__info"><strong>Lucía Torres</strong><span>Asesora Internacional y Nacional</span></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <div class="wa-modal__footer">🔒 Atención personalizada · Sin costo adicional</div>
    </div>
</div>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>
<script src="<?= $subir ?>js/whatsapp-cotizar.js"></script>
</body>
</html>
