<?php
/* ============================================================
 *  TEMPLATE: principal.php
 *  SOLO TOKENS — SIN VARIABLES PHP
 * ============================================================ */
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Africa</title>

    <!-- CSS GLOBAL -->
    <link rel="stylesheet"
          href="../../../../../../css/bootstrap.min.css">

    <link rel="stylesheet"
          href="../../../../../../css/style.css">

    <link rel="stylesheet"
          href="../../../../../../css/programa.css">

    <!-- FontAwesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

<!-- =====================================================
     HEADER
===================================================== -->
<?php include __DIR__ . '/../../../../../includes/header.php'; ?>

<!-- =====================================================
     HERO
===================================================== -->
<div class="prog-hero">

    <div class="prog-hero__inner">

        <h1 class="prog-hero__title">
            Africa
        </h1>

        <p class="prog-hero__sub">
            Programa con aéreo - FLYBONDI
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
                    10 Días | 9 Días
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
                        $ 1,200
                    </span>

                </div>

                <!-- ===============================
                     DESCARGAS
                ================================ -->
                <div class="prog-card__btns">

                    <!-- WORD -->
                    <a class="prog-btn prog-btn--word"
                       href="word_africa_flybondi_31_5_2026.docx"
                       download>

                        <i class="fa fa-file-word"></i>

                        Descargar Word

                    </a>

                    <!-- FLYER -->
                    <a class="prog-btn prog-btn--flyer"
                       href="img/africa_flybondi_31_5_2026_pr.jpg"
                       download>

                        <i class="fa fa-image"></i>

                        Descargar Flyer

                    </a>

                </div>

                <!-- ===============================
                     WHATSAPP
                ================================ -->
                <div class="prog-card__wa-btns">

                    <a class="prog-wa-btn"
                       href="#"
                       onclick="openWA('Africa'); return false;">

                        <i class="fab fa-whatsapp"></i>

                        Guliana

                    </a>

                    <a class="prog-wa-btn"
                       href="#"
                       onclick="openWA('Africa'); return false;">

                        <i class="fab fa-whatsapp"></i>

                        Brenda Cornejo

                    </a>

                    <a class="prog-wa-btn"
                       href="#"
                       onclick="openWA('Africa'); return false;">

                        <i class="fab fa-whatsapp"></i>

                        Brendha Juarez

                    </a>

                </div>

            </div>

        </aside>

        <!-- =========================================
             CONTENIDO
        ========================================== -->
        <div class="prog-main">

            <!-- Imagen IN -->
            <img class="prog-img"
                 src="img/africa_flybondi_31_5_2026_in.jpg"
                 alt="Africa">

            <!-- Imagen CN -->
            <img class="prog-img"
                 src="img/africa_flybondi_31_5_2026_cn.jpg"
                 alt="Africa">

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

<!-- =====================================================
     FOOTER
===================================================== -->
<?php include __DIR__ . '/../../../../../includes/footer.php'; ?>

<!-- JS -->
<script src="../../../../../../js/bootstrap.bundle.min.js"></script>

<script src="../../../../../../js/whatsapp-cotizar.js"></script>

</body>
</html>