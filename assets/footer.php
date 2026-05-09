<?php
/**
 * assets/footer.php
 * Footer compartido por TODAS las páginas del sitio.
 * Incluye: footer con links, copyright, back-to-top y todos los scripts JS.
 *
 * Uso: <?php include 'assets/footer.php'; ?>
 *      (al final del <body> de cada página, antes de </body>)
 *
 * Nota: el script buscador.js solo se carga en las páginas que lo necesiten.
 *       Para activarlo, define $usarBuscador = true; ANTES de incluir este footer.
 *       Ejemplo: <?php $usarBuscador = true; include 'assets/footer.php'; ?>
 */

$usarBuscador = $usarBuscador ?? false; // false por defecto
?>

    <!-- ── Footer ─────────────────────────────────────────────────────────── -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">

                <!-- Contacto -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contáctanos</h4>
                        <a href="#"><i class="fas fa-home me-2"></i> Lima, Perú</a>
                        <a href="mailto:info@vidatur.com"><i class="fas fa-envelope me-2"></i> info@vidatur.com</a>
                        <a href="tel:+51999999999"><i class="fas fa-phone me-2"></i> +51 999 999 999</a>
                        <a href="#" class="mb-3"><i class="fas fa-print me-2"></i> +51 999 999 999</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Links de la empresa -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Empresa</h4>
                        <a href="/VID-DEMO/nosotros.php"><i class="fas fa-angle-right me-2"></i> Nosotros</a>
                        <a href="/VID-DEMO/blog.html">   <i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="/VID-DEMO/contact.html"><i class="fas fa-angle-right me-2"></i> Contacto</a>
                        <a href="#">                     <i class="fas fa-angle-right me-2"></i> Afiliarme</a>
                        <a href="#">                     <i class="fas fa-angle-right me-2"></i> Club Vidatur</a>
                    </div>
                </div>

                <!-- Links de soporte -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Soporte</h4>
                        <a href="/VID-DEMO/contact.html"><i class="fas fa-angle-right me-2"></i> Contacto</a>
                        <a href="#">                     <i class="fas fa-angle-right me-2"></i> Aviso Legal</a>
                        <a href="#">                     <i class="fas fa-angle-right me-2"></i> Política de Privacidad</a>
                        <a href="#">                     <i class="fas fa-angle-right me-2"></i> Términos y Condiciones</a>
                        <a href="#">                     <i class="fas fa-angle-right me-2"></i> Política de Cookies</a>
                    </div>
                </div>

                <!-- Métodos de pago -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-3">Pagos aceptados</h4>
                        <div class="footer-bank-card">
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                            <a href="#" class="text-white">    <i class="fas fa-credit-card fa-2x"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ── Fin Footer ─────────────────────────────────────────────────────── -->

    <!-- ── Copyright ──────────────────────────────────────────────────────── -->
    <div class="container-fluid copyright text-body py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <i class="fas fa-copyright me-2"></i>
                    <a class="text-white" href="#">Vidatur</a>, Todos los derechos reservados.
                </div>
                <div class="col-md-6 text-center text-md-start">
                    Agencia Mayorista de Viajes — Lima, Perú
                </div>
            </div>
        </div>
    </div>
    <!-- ── Fin Copyright ───────────────────────────────────────────────────── -->

    <!-- ── Botón volver arriba ────────────────────────────────────────────── -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!-- ══════════════════════════════════════════════════════════════════════
         SCRIPTS — Se cargan al final del body para no bloquear el render
    ═══════════════════════════════════════════════════════════════════════ -->

    <!-- jQuery (requerido por OwlCarousel y Lightbox) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Bootstrap JS (incluye Popper para dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Librerías de animación y carrusel -->
    <script src="/VID-DEMO/lib/easing/easing.min.js"></script>
    <script src="/VID-DEMO/lib/waypoints/waypoints.min.js"></script>
    <script src="/VID-DEMO/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/VID-DEMO/lib/lightbox/js/lightbox.min.js"></script>

    <!-- JS principal de la plantilla (spinner, sticky navbar, contadores, etc.) -->
    <script src="/VID-DEMO/js/main.js"></script>

    <?php if ($usarBuscador): ?>
    <!-- Buscador de destinos (solo se carga en páginas que lo usan) -->
    <script src="/VID-DEMO/js/buscador.js" defer></script>
    <?php endif; ?>

</body>
</html>