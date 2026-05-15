/**
 * main.js — Vidatur
 * =====================================================
 * Contiene toda la lógica JS compartida del sitio.
 * Se carga desde includes/scripts.php en todas las páginas.
 *
 * ÍNDICE:
 *   1. Spinner
 *   2. Navbar sticky al hacer scroll
 *   3. Testimonial Carousel (OwlCarousel)
 *   4. Botón "volver arriba"
 * =====================================================
 */

(function ($) {
    "use strict";


    /* -------------------------------------------------
       1. SPINNER
       Oculta el overlay de carga apenas ejecuta el JS.
    ------------------------------------------------- */
    function initSpinner() {
        if ($('#spinner').length > 0) {
            $('#spinner').removeClass('show');
        }
    }

    initSpinner();


    /* -------------------------------------------------
       2. NAVBAR STICKY
       Agrega clase .sticky-top cuando el usuario
       baja más de 45px desde el tope de la página.
    ------------------------------------------------- */
    function initStickyNavbar() {
        $(window).on('scroll.navbar', function () {
            var scrolled = $(this).scrollTop() > 45;
            $('.navbar').toggleClass('sticky-top shadow-sm', scrolled);
        });
    }

    initStickyNavbar();


    /* -------------------------------------------------
       3. TESTIMONIAL CAROUSEL
       Requiere OwlCarousel cargado en scripts.php.
       Solo se activa si existe el elemento en la página.
    ------------------------------------------------- */
    function initTestimonialCarousel() {
        var $carousel = $('.testimonial-carousel');
        if ($carousel.length === 0) return; // no existe en esta página

        $carousel.owlCarousel({
            autoplay:        true,
            smartSpeed:      1000,
            center:          true,
            dots:            true,
            loop:            true,
            margin:          25,
            nav:             true,
            responsiveClass: true,
            responsive: {
                0:    { items: 1 },
                768:  { items: 2 },
                992:  { items: 2 },
                1200: { items: 3 }
            }
        });
    }

    initTestimonialCarousel();


    /* -------------------------------------------------
       4. BOTÓN "VOLVER ARRIBA"
       Aparece con fadeIn cuando el usuario baja 300px.
       Al hacer clic, sube suavemente hasta el tope.
    ------------------------------------------------- */
    function initBackToTop() {
        var $btn = $('.back-to-top');

        // Mostrar / ocultar según scroll
        $(window).on('scroll.backToTop', function () {
            if ($(this).scrollTop() > 300) {
                $btn.fadeIn('slow');
            } else {
                $btn.fadeOut('slow');
            }
        });

        // Subir al hacer clic
        $btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        });
    }

    initBackToTop();


})(jQuery);