<?php
$titulo       = 'Tours Opcionales Buenos Aires 2026';
$subtitulo    = '';
$rutaWord     = 'word_tours_opcionales_buenos_aires_2026.docx';
$imagenMail   = '';
$imagenIn     = 'tours_opcionales_buenos_aires_2026_in.jpg';

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
        </div>
    </div>
</div>

<div class="container py-5">
    <a class="prog-back" href="javascript:history.back()">
        <i class="fa fa-arrow-left"></i> Volver
    </a>
    <div class="prog-layout">
        <aside class="prog-sidebar">
            <div class="prog-card">
                <div class="prog-card__btns">
                    <?php if ($rutaWord !== ''): ?>
                    <a class="prog-btn prog-btn--word" href="<?= htmlspecialchars($rutaWord) ?>" target="_blank" download>
                        <img src="../../../../../img/icons/word_programas.svg" width="18" height="18" alt="Word">
                        Descargar Word
                    </a>
                    <?php endif; ?>
                    <?php if ($imagenIn !== ''): ?>
                    <a class="prog-btn prog-btn--flyer" href="img/<?= htmlspecialchars($imagenIn) ?>" download>
                        <img src="../../../../../img/icons/imagen-download.png" width="18" height="18" alt="Descargar">
                        Descargar Flyer
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
            <?php if ($imagenIn !== ''): ?>
            <span class="prog-main__label">Flyer</span>
            <img class="prog-img prog-img--in" src="img/<?= htmlspecialchars($imagenIn) ?>" alt="<?= htmlspecialchars($titulo) ?>">
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once $subir . 'includes/whatsapp-modal.php'; ?>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>
</body>
</html>
