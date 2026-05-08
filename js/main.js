(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {

        // Quitamos el spinner inmediatamente
        if ($('#spinner').length > 0) {
            $('#spinner').removeClass('show');
        }

    };

    spinner();


    // Sticky Navbar
    $(window).scroll(function () {

        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }

    });


    /*
    ==========================================
    OWL CAROUSEL DESACTIVADO TEMPORALMENTE
    ==========================================

    Razón:
    owl.carousel.min.js no está cargando bien
    y genera este error:

    $(...).owlCarousel is not a function

    Eso rompe todo el JavaScript restante.

    Cuando arregles la librería OwlCarousel,
    puedes volver a activar estas secciones.
    */


    /*
    // International Tour carousel
    $(".InternationalTour-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : false,
        responsiveClass: true,
        responsive: {
            0:{ items:1 },
            768:{ items:2 },
            992:{ items:2 },
            1200:{ items:3 }
        }
    });
    */


    /*
    // packages carousel
    $(".packages-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        responsiveClass: true,
        responsive: {
            0:{ items:1 },
            768:{ items:2 },
            992:{ items:2 },
            1200:{ items:3 }
        }
    });
    */


    
    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        responsiveClass: true,
        responsive: {
            0:{ items:1 },
            768:{ items:2 },
            992:{ items:2 },
            1200:{ items:3 }
        }
    });
    


    // Back to top button
    $(window).scroll(function () {

        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }

    });


    $('.back-to-top').click(function () {

        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');

        return false;

    });

})(jQuery);