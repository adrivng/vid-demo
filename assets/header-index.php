<?php
/**
 * assets/header-index.php
 * Header exclusivo del INICIO (index).
 * Incluye: topbar, navbar, carrusel de imágenes y buscador de destinos.
 * 
 * Uso: <?php include 'assets/header-index.php'; ?>
 *      (solo en index.php / index.html)
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Vidatur - Agencia Mayorista</title>
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

    <!-- Buscador de destinos (CSS propio) -->
    <link href="/VID-DEMO/css/buscador.css" rel="stylesheet">
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

    <!-- ── Navbar + Héroe (carrusel) ──────────────────────────────────────── -->
    <div class="container-fluid position-relative p-0">

        <!-- Navbar principal -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/VID-DEMO/index.php" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Vidatur - Agencia Mayorista</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/VID-DEMO/index.php"          class="nav-item nav-link active">Inicio</a>
                    <a href="/VID-DEMO/nosotros.php"        class="nav-item nav-link">Nosotros</a>
                    <a href="/VID-DEMO/peru.php"            class="nav-item nav-link">Perú</a>
                    <a href="/VID-DEMO/internacional.php"   class="nav-item nav-link">Internacional</a>
                    <a href="/VID-DEMO/bloqueos.php"        class="nav-item nav-link">Bloqueos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Más</a>
                        <div class="dropdown-menu m-0">
                            <a href="/VID-DEMO/destination.html" class="dropdown-item">EVENTOS</a>
                            <a href="/VID-DEMO/tour.html"        class="dropdown-item">VIDEOS</a>
                            <a href="/VID-DEMO/booking.html"     class="dropdown-item">LGBT</a>
                            <a href="/VID-DEMO/gallery.html"     class="dropdown-item">CIRCUITOS PERÚ</a>
                            <a href="/VID-DEMO/guides.html"      class="dropdown-item">CONVENCIÓN</a>
                            <a href="/VID-DEMO/testimonial.html" class="dropdown-item">PROMOCIONES AGENTES</a>
                        </div>
                    </div>
                    <a href="/VID-DEMO/contact.html" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="https://vidatur.paquetedinamico.com/" target="_blank"
                   class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Online</a>
            </div>
        </nav>

        <!-- Carrusel de imágenes hero (solo en el index) -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicadores de slide -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
                </ol>

                <!-- Slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <img src="/VID-DEMO/img/carousel-2.jpg" class="img-fluid" alt="Salidas Confirmadas">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Promos</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Salidas Confirmadas</h1>
                                <p class="mb-5 fs-5">Descubre nuestros paquetes con salidas garantizadas para grupos.</p>
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Explorar</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="/VID-DEMO/img/carousel-1.jpg" class="img-fluid" alt="Estados Unidos">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Promos</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Vende Estados Unidos</h1>
                                <p class="mb-5 fs-5">Los mejores paquetes al destino más solicitado por tus clientes.</p>
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Explorar</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="/VID-DEMO/img/carousel-3.jpg" class="img-fluid" alt="SeaWorld">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Promos</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Parques Seaworld</h1>
                                <p class="mb-5 fs-5">Representantes oficiales. Las mejores tarifas para tus agencias.</p>
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Explorar</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="/VID-DEMO/img/carousel-3.jpg" class="img-fluid" alt="Xcaret">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Promos</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Parques Xcaret</h1>
                                <p class="mb-5 fs-5">Experiencias únicas en México con tarifas exclusivas para agencias.</p>
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Explorar</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controles del carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>

            </div>
        </div>
        <!-- ── Fin Carrusel ────────────────────────────────────────────────── -->

    </div>
    <!-- ── Fin Navbar + Héroe ─────────────────────────────────────────────── -->

    <!-- ── Buscador Inteligente de Destinos ───────────────────────────────── -->
    <!--
        El buscador lee dinámicamente las carpetas de /internacional/
        via la API en /api/destinos.php y muestra un dropdown con resultados.
        El JS (buscador.js) se carga al final del body en footer.php.
    -->
    <div class="container-fluid search-bar-custom">
        <div class="container">
            <div class="search-wrapper position-relative">
                <div class="row align-items-center g-3">

                    <!-- Input de búsqueda -->
                    <div class="col-12 col-md-9 position-relative">
                        <input
                            class="form-control search-input"
                            type="text"
                            id="buscadorDestinos"
                            placeholder="Busca tu destino... Ej: Colombia, Cuba, R. Dominicana"
                            autocomplete="off"
                        >
                        <!-- Dropdown de resultados (lo llena buscador.js) -->
                        <div id="resultadosBusqueda" class="search-dropdown d-none"></div>
                    </div>

                    <!-- Botón buscar -->
                    <div class="col-12 col-md-3">
                        <button type="button" class="btn btn-primary search-btn w-100" id="btnBuscar">
                            <i class="fas fa-search me-2"></i>Buscar
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ── Fin Buscador ────────────────────────────────────────────────────── -->