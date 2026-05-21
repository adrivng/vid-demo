<?php
$titulo       = 'Japón al Completo';
$subtitulo    = 'Solo Servicios';
$precio       = '3,990';
$duracion     = '10 Días - 9 Días';
$fechaLimite  = 'Para comprar hasta el 01 Sep. 2026';
$rutaWord     = 'word_solo_servicios_japon_al_completo_specialtours_01_sep_2026.docx';
$imagenMail   = 'solo_servicios_japon_al_completo_specialtours_01_sep_2026_mail.jpg';
$imagenIn     = 'solo_servicios_japon_al_completo_specialtours_01_sep_2026_in.jpg';
$imagenCn     = 'solo_servicios_japon_al_completo_specialtours_01_sep_2026_cn.jpg';

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
    <a class="prog-back" href="../../../../../internacional.php">
        <i class="fa fa-arrow-left"></i> Volver a Internacional
    </a>
    <div class="prog-layout">
        <aside class="prog-sidebar">
            <div class="prog-card">
                <?php if ($duracion !== ''): ?>
                <p class="prog-card__duracion"><?= htmlspecialchars($duracion) ?></p>
                <?php endif; ?>

                <?php if ($fechaLimite !== ''): ?>
                <div class="prog-card__fecha">
                    <i class="fa fa-check"></i> <?= htmlspecialchars($fechaLimite) ?>
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
                        <img src="../../../../../img/icons/word_programas.svg" width="18" height="18" alt="Word">
                        Descargar Word
                    </a>
                    <?php endif; ?>

                    <?php if ($imagenMail !== ''): ?>
                    <a class="prog-btn prog-btn--flyer" href="img/<?= htmlspecialchars($imagenMail) ?>" download>
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

            <?php if ($imagenCn !== '' && $imagenIn !== ''): ?>
            <img class="prog-img prog-img--cn" src="img/<?= htmlspecialchars($imagenCn) ?>" alt="<?= htmlspecialchars($titulo) ?>">
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once $subir . 'includes/whatsapp-modal.php'; ?>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>
</body>
</html>
