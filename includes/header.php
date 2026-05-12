<?php
/**
 * header.php — Componente compartido: Topbar + Navbar
 *
 * USO en cualquier página:
 *   <?php
 *     $activePage = 'inicio'; // cambia según la página
 *     require_once 'includes/header.php';
 *   ?>
 *
 * VALORES de $activePage:
 *   'inicio' | 'nosotros' | 'peru' | 'internacional' | 'bloqueos' | 'contacto'
 */

// Función auxiliar: devuelve 'active' si coincide con la página actual
function isActive(string $page): string {
    global $activePage;
    return ($activePage === $page) ? 'active' : '';
}
?>

<!-- ==================== TOPBAR ==================== -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">

        <!-- Izquierda: redes sociales -->
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"      href="#"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>

        <!-- Derecha: accesos rápidos -->
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Afiliate - Online 2.0</small></a>
                <a href="#"><small class="text-light"><i class="fa fa-sign-in-alt me-2"></i>Club Vidatur</small></a>
            </div>
        </div>

    </div>
</div>
<!-- ==================== FIN TOPBAR ==================== -->


<!-- ==================== NAVBAR ==================== -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">

        <!-- Logo -->
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0"><img src="img/images-index/logo.png" alt=""></h1> <!-- <i class="fa fa-map-marker-alt me-3"> </i> -->
        </a>
    
        <!-- Botón hamburguesa (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php"          class="nav-item nav-link <?= isActive('inicio') ?>">Inicio</a>
                <a href="nosotros.php"        class="nav-item nav-link <?= isActive('nosotros') ?>">Nosotros</a>
                <a href="peru.php"            class="nav-item nav-link <?= isActive('peru') ?>">Perú</a>
                <a href="internacional.php"   class="nav-item nav-link <?= isActive('internacional') ?>">Internacional</a>
                <a href="bloqueos.php"        class="nav-item nav-link <?= isActive('bloqueos') ?>">Bloqueos & Programas</a>

                <!-- Dropdown: Más -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Más</a>
                    <div class="dropdown-menu m-0">
                        <a href="eventos.php"      class="dropdown-item">EVENTOS</a>
                        <a href="videos.php"        class="dropdown-item">VIDEOS</a>
                        <a href="lgbt.php"          class="dropdown-item">LGBT</a>
                        <a href="circuitos.php"     class="dropdown-item">CIRCUITOS PERÚ</a>
                        <a href="404.php"    class="dropdown-item">CONVENCIÓN</a>
                        <a href="404.php"   class="dropdown-item">PROMOCIONES AGENTES</a>
                    </div>
                </div>

                <a href="contact.php" class="nav-item nav-link <?= isActive('contacto') ?>">Contacto</a>
            </div>

            <!-- Botón Online -->
            <a href="https://vidatur.paquetedinamico.com/" target="_blank"
               class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Online</a>
        </div>

    </nav>
</div>
<!-- ==================== FIN NAVBAR ==================== -->