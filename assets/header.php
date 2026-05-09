<?php
/**
 * assets/header.php
 * Header genérico para páginas interiores (nosotros, internacional, etc.).
 * Incluye: topbar, navbar y un banner de título de página.
 * NO incluye carrusel ni buscador.
 *
 * Uso:
 *   <?php
 *     $pageTitulo  = 'Internacional';   // Título que se muestra en el banner
 *     $pageActivo  = 'internacional';   // Coincide con el nav-link a resaltar
 *     include 'assets/header.php';
 *   ?>
 *
 * Variables opcionales:
 *   $pageTitulo  — texto del banner (default: 'Página')
 *   $pageActivo  — slug del enlace activo en el navbar (default: '')
 */

// Valores por defecto si la página no los define
$pageTitulo = $pageTitulo ?? 'Página';
$pageActivo = $pageActivo ?? '';

/**
 * Función auxiliar: devuelve 'active' si el slug coincide con $pageActivo.
 * Así el enlace correcto se resalta automáticamente en cada página.
 */
function navActivo(string $slug, string $activo): string {
    return $slug === $activo ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Vidatur - <?= htmlspecialchars($pageTitulo) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"    content="">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerías CSS -->
    <link href="/VID-DEMO/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/VID-DEMO/lib/lightbox/css/lightbox.min.css"           rel="stylesheet">

    <!-- Bootstrap personalizado + Estilos del sitio -->
    <link href="/VID-DEMO/css/bootstrap.min.css" rel="stylesheet">
    <link href="/VID-DEMO/css/style.css"         rel="stylesheet">
</head>
<body>

    <!-- ── Spinner de carga ────────────────────────────────────────────────── -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>

    <!-- ── Topbar (barra superior con redes y accesos) ─────────────────────── -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">

            <!-- Redes sociales -->
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"       href="#"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>

            <!-- Accesos rápidos -->
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Afiliate - Online 2.0</small></a>
                    <a href="#"><small class="text-light"><i class="fa fa-sign-in-alt me-2"></i>Club Vidatur</small></a>
                </div>
            </div>

        </div>
    </div>
    <!-- ── Fin Topbar ──────────────────────────────────────────────────────── -->

    <!-- ── Navbar ─────────────────────────────────────────────────────────── -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/VID-DEMO/index.php" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Vidatur - Agencia Mayorista</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/VID-DEMO/index.php"        class="nav-item nav-link <?= navActivo('inicio',         $pageActivo) ?>">Inicio</a>
                    <a href="/VID-DEMO/nosotros.php"      class="nav-item nav-link <?= navActivo('nosotros',       $pageActivo) ?>">Nosotros</a>
                    <a href="/VID-DEMO/peru.php"          class="nav-item nav-link <?= navActivo('peru',           $pageActivo) ?>">Perú</a>
                    <a href="/VID-DEMO/internacional.php" class="nav-item nav-link <?= navActivo('internacional',  $pageActivo) ?>">Internacional</a>
                    <a href="/VID-DEMO/bloqueos.php"      class="nav-item nav-link <?= navActivo('bloqueos',       $pageActivo) ?>">Bloqueos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= navActivo('mas', $pageActivo) ?>" data-bs-toggle="dropdown">Más</a>
                        <div class="dropdown-menu m-0">
                            <a href="/VID-DEMO/destination.html" class="dropdown-item">EVENTOS</a>
                            <a href="/VID-DEMO/tour.html"        class="dropdown-item">VIDEOS</a>
                            <a href="/VID-DEMO/booking.html"     class="dropdown-item">LGBT</a>
                            <a href="/VID-DEMO/gallery.html"     class="dropdown-item">CIRCUITOS PERÚ</a>
                            <a href="/VID-DEMO/guides.html"      class="dropdown-item">CONVENCIÓN</a>
                            <a href="/VID-DEMO/testimonial.html" class="dropdown-item">PROMOCIONES AGENTES</a>
                        </div>
                    </div>
                    <a href="/VID-DEMO/contact.html" class="nav-item nav-link <?= navActivo('contacto', $pageActivo) ?>">Contacto</a>
                </div>
                <a href="https://vidatur.paquetedinamico.com/" target="_blank"
                   class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Online</a>
            </div>
        </nav>

        <!-- Banner de título de página interior -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">
                            <?= htmlspecialchars($pageTitulo) ?>
                        </h1>
                        <!-- Breadcrumb de navegación -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="/VID-DEMO/index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item text-white active" aria-current="page">
                                    <?= htmlspecialchars($pageTitulo) ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ── Fin Banner ─────────────────────────────────────────────────── -->

    </div>
    <!-- ── Fin Navbar ─────────────────────────────────────────────────────── -->