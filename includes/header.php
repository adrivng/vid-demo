<?php

function isActive(string $page): string {
    global $activePage;
    return ($activePage === $page) ? 'active' : '';
}

$subir = $subir ?? '';
?>

<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center topbar-height">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-youtube fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.tiktok.com/@vidatur" target="_blank">
                    <i class="fab fa-tiktok fw-normal"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center topbar-height">
               <a href="https://vidatur.paquetedinamico.com/user/signup.xhtml?back=https://tuweb.com" target="_blank">
                     <small class="me-3 text-light"><i class="fa fa-users me-2"></i><?= __('top_afiliate') ?></small>
                </a>
                <a href="#"><small class="text-light"><i class="fa fa-gift me-2"></i><?= __('top_vpr') ?></small></a>
                <div class="lang-switcher ms-3">
                    <button class="btn btn-language-top" type="button" id="langBtn">
                        <i class="fas fa-globe"></i> <span class="lang-label"><?= $lang === 'en' ? 'English' : 'Español' ?></span> <i class="fas fa-chevron-down" style="font-size:10px;margin-left:2px;"></i>
                    </button>
                    <ul class="lang-menu" id="langMenu">
                        <li><a class="lang-option<?= $lang === 'es' ? ' active' : '' ?>" data-lang="es" href="#">Español</a></li>
                        <li><a class="lang-option<?= $lang === 'en' ? ' active' : '' ?>" data-lang="en" href="#">English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="<?= $subir ?>index.php" class="navbar-brand p-0">
            <h1 class="m-0"><img src="<?= $subir ?>img/images-index/logo.png" alt="Vidatur Mayorista de Viajes"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?= $subir ?>index.php" class="nav-item nav-link <?= isActive('inicio') ?>"><?= __('nav_inicio') ?></a>
                <a href="<?= $subir ?>nosotros.php" class="nav-item nav-link <?= isActive('nosotros') ?>"><?= __('nav_nosotros') ?></a>
                <a href="<?= $subir ?>peru.php" class="nav-item nav-link <?= isActive('peru') ?>"><?= __('nav_peru') ?></a>
                <a href="<?= $subir ?>internacional.php" class="nav-item nav-link <?= isActive('internacional') ?>"><?= __('nav_internacional') ?></a>
                <a href="<?= $subir ?>bloqueos.php" class="nav-item nav-link <?= isActive('bloqueos') ?>"><?= __('nav_bloqueos') ?></a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= __('nav_mas') ?></a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= $subir ?>eventos.php" class="dropdown-item"><?= __('nav_eventos') ?></a>
                        <a href="<?= $subir ?>videos.php" class="dropdown-item"><?= __('nav_videos') ?></a>
                        <a href="<?= $subir ?>lgbt.php" class="dropdown-item"><?= __('nav_lgbt') ?></a>
                        <a href="<?= $subir ?>circuitos.php" class="dropdown-item"><?= __('nav_circuitos') ?></a>
                        <a href="<?= $subir ?>404.php" class="dropdown-item"><?= __('nav_convencion') ?></a>
                        <a href="<?= $subir ?>404.php" class="dropdown-item"><?= __('nav_promo_agentes') ?></a>
                    </div>
                </div>
            </div>
            <a href="https://vidatur.paquetedinamico.com/" target="_blank"
               class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4"><?= __('nav_online') ?></a>
        </div>
    </nav>
</div>