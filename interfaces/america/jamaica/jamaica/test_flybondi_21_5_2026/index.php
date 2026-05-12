<?php
$base = '../../../../../../';
include $base . 'includes/head.php';
?>

<link rel="stylesheet" href="<?= $base ?>css/programa.css">

<?php
include $base . 'includes/header.php';
?>

<!-- =====================================================
     HERO
===================================================== -->
<div class="prog-hero">

    <div class="prog-hero__inner">

        <h1 class="prog-hero__title">
            test
        </h1>

        <p class="prog-hero__sub">
            test
        </p>

    </div>

</div>

<!-- =====================================================
     LAYOUT
===================================================== -->
<div class="container py-5">

    <div class="prog-layout">

        <!-- =========================================
             SIDEBAR
        ========================================== -->
        <aside class="prog-sidebar">

            <div class="prog-card">

                <!-- Duración -->
                <p class="prog-card__duracion">
                    test
                </p>

                <!-- Fecha -->
                <div class="prog-card__fecha">

                    <i class="fa fa-check"></i>

                    Compra hasta 15 May. 2026

                </div>

                <!-- Precio -->
                <div class="prog-card__price-box">

                    <span class="prog-card__desde">
                        DESDE
                    </span>

                    <span class="prog-card__monto">
                        $ test
                    </span>

                </div>

                <!-- =================================
                     DESCARGAS
                ================================== -->
                <div class="prog-card__btns">

                    <!-- WORD -->
                    <a class="prog-btn prog-btn--word"
                       href="word_test_flybondi_21_5_2026.docx"
                       download>

                        <svg width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="#fff"
                             xmlns="http://www.w3.org/2000/svg">

                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM8.5 17l-1.5-6h1.2l.9 4 1-4h1.2l1 4 .9-4H14l-1.5 6h-1.2l-1-3.8-1 3.8H8.5z"/>

                        </svg>

                        Descargar Word

                    </a>

                    <!-- FLYER -->
                    <a class="prog-btn prog-btn--flyer"
                       href="img/test_flybondi_21_5_2026_pr.jpg"
                       download>

                        <svg width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="#fff"
                             xmlns="http://www.w3.org/2000/svg">

                            <path d="M21 3H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 16H4V5h16v14zm-5-7-4 5-3-3-4 5h14l-3-7z"/>

                        </svg>

                        Descargar Flyer

                    </a>

                </div>

                <!-- =================================
                     WHATSAPP
                ================================== -->
                <div class="prog-card__wa-btns">

                    <a class="prog-wa-btn"
                       href="#"
                       onclick="openWA('test'); return false;">

                        <i class="fab fa-whatsapp"></i>

                        Guliana

                    </a>

                    <a class="prog-wa-btn"
                       href="#"
                       onclick="openWA('test'); return false;">

                        <i class="fab fa-whatsapp"></i>

                        Brenda Cornejo

                    </a>

                    <a class="prog-wa-btn"
                       href="#"
                       onclick="openWA('test'); return false;">

                        <i class="fab fa-whatsapp"></i>

                        Brendha Juarez

                    </a>

                </div>

            </div>

        </aside>

        <!-- =========================================
             IMÁGENES
        ========================================== -->
        <div class="prog-main">

            <img class="prog-img"
                 src="img/test_flybondi_21_5_2026_in.jpg"
                 alt="test">

            <img class="prog-img"
                 src="img/test_flybondi_21_5_2026_cn.jpg"
                 alt="test">

        </div>

    </div>

</div>

<!-- =====================================================
     MODAL WHATSAPP
===================================================== -->
<div class="wa-overlay"
     id="waOverlay"
     onclick="closeWAOutside(event)">

    <div class="wa-modal">

        <button class="wa-modal__close"
                onclick="closeWA()">

            ×

        </button>

        <div class="wa-modal__icon">

            <i class="fab fa-whatsapp"></i>

        </div>

        <h5>
            Habla con nuestros expertos
        </h5>

        <p id="waSubtitle">
            Un asesor te atiende ahora mismo.
        </p>

        <!-- Asesor 1 -->
        <a class="wa-agent"
           id="waLink1"
           href="#"
           target="_blank">

            <div class="wa-agent__avatar">G</div>

            <div class="wa-agent__info">

                <strong>Guliana</strong>

                <span>Asesora de viajes</span>

            </div>

            <i class="fa fa-chevron-right wa-agent__arrow"></i>

        </a>

        <!-- Asesor 2 -->
        <a class="wa-agent"
           id="waLink2"
           href="#"
           target="_blank">

            <div class="wa-agent__avatar">B</div>

            <div class="wa-agent__info">

                <strong>Brenda Cornejo</strong>

                <span>Asesora internacional</span>

            </div>

            <i class="fa fa-chevron-right wa-agent__arrow"></i>

        </a>

        <!-- Asesor 3 -->
        <a class="wa-agent"
           id="waLink3"
           href="#"
           target="_blank">

            <div class="wa-agent__avatar">J</div>

            <div class="wa-agent__info">

                <strong>Brendha Juarez</strong>

                <span>Asesora nacional</span>

            </div>

            <i class="fa fa-chevron-right wa-agent__arrow"></i>

        </a>

        <div class="wa-modal__footer">

            Atención personalizada

        </div>

    </div>

</div>

<?php include $base . 'includes/footer.php'; ?>

<?php include $base . 'includes/scripts.php'; ?>

<script src="<?= $base ?>js/whatsapp-cotizar.js"></script>

</body>
</html>