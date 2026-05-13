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
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Afiliate - Online 2.0</small></a>
                <a href="#"><small class="text-light"><i class="fa fa-sign-in-alt me-2"></i>Club Vidatur</small></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="<?= $subir ?>index.php" class="navbar-brand p-0">
            <h1 class="m-0"><img src="<?= $subir ?>img/images-index/logo.png" alt=""></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?= $subir ?>index.php" class="nav-item nav-link <?= isActive('inicio') ?>">Inicio</a>
                <a href="<?= $subir ?>nosotros.php" class="nav-item nav-link <?= isActive('nosotros') ?>">Nosotros</a>
                <a href="<?= $subir ?>peru.php" class="nav-item nav-link <?= isActive('peru') ?>">Perú</a>
                <a href="<?= $subir ?>internacional.php" class="nav-item nav-link <?= isActive('internacional') ?>">Internacional</a>
                <a href="<?= $subir ?>bloqueos.php" class="nav-item nav-link <?= isActive('bloqueos') ?>">Bloqueos & Programas</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Más</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= $subir ?>eventos.php" class="dropdown-item">EVENTOS</a>
                        <a href="<?= $subir ?>videos.php" class="dropdown-item">VIDEOS</a>
                        <a href="<?= $subir ?>lgbt.php" class="dropdown-item">LGBT</a>
                        <a href="<?= $subir ?>circuitos.php" class="dropdown-item">CIRCUITOS PERÚ</a>
                        <a href="<?= $subir ?>404.php" class="dropdown-item">CONVENCIÓN</a>
                        <a href="<?= $subir ?>404.php" class="dropdown-item">PROMOCIONES AGENTES</a>
                    </div>
                </div>
                <a href="<?= $subir ?>contact.php" class="nav-item nav-link <?= isActive('contacto') ?>">Contacto</a>
            </div>
            <a href="https://vidatur.paquetedinamico.com/" target="_blank"
               class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Online</a>
        </div>
    </nav>
</div>