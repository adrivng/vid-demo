<?php
$pageTitle  = 'Internacional';
$activePage = 'internacional';
require_once 'includes/head.php';
?>
</head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        
        <?php require_once 'includes/header.php'; ?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Paquetes Internacional</h1>
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Packages</li>
                </ol>     -->
            </div>
        </div>
        <!-- Header End -->

        <!-- =======================
            INTERNACIONAL - MODULO
        ======================= -->
<div class="container-fluid py-5">
    <div class="container">

        <!-- Título -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Internacional</h1>
            <p class="text-muted">Explora nuestros destinos internacionales</p>
        </div>

        <!-- Filtros o categorías (opcional) -->
        <div class="d-flex justify-content-center gap-3 flex-wrap mb-4">
            <button class="btn btn-outline-primary rounded-pill">Europa</button>
            <button class="btn btn-outline-primary rounded-pill">Asia</button>
            <button class="btn btn-outline-primary rounded-pill">América</button>
            <button class="btn btn-outline-primary rounded-pill">Caribe</button>
        </div>

        <!-- GRID DE PAQUETES -->
        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="packages-item bg-light rounded overflow-hidden shadow-sm">

                    <div class="packages-img position-relative">
                        <img src="img/paris.jpg" class="img-fluid w-100" alt="">
                        <div class="packages-price px-3 py-2">Desde $999</div>
                    </div>

                    <div class="p-4">
                        <h5 class="mb-2">París - Francia</h5>
                        <p class="text-muted">Tour completo por la ciudad del amor.</p>
                        <a href="#" class="btn btn-primary rounded-pill w-100">Ver más</a>
                    </div>

                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="packages-item bg-light rounded overflow-hidden shadow-sm">

                    <div class="packages-img position-relative">
                        <img src="img/tokyo.jpg" class="img-fluid w-100" alt="">
                        <div class="packages-price px-3 py-2">Desde $1299</div>
                    </div>

                    <div class="p-4">
                        <h5 class="mb-2">Tokio - Japón</h5>
                        <p class="text-muted">Tecnología, cultura y tradición.</p>
                        <a href="#" class="btn btn-primary rounded-pill w-100">Ver más</a>
                    </div>

                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="packages-item bg-light rounded overflow-hidden shadow-sm">

                    <div class="packages-img position-relative">
                        <img src="img/newyork.jpg" class="img-fluid w-100" alt="">
                        <div class="packages-price px-3 py-2">Desde $899</div>
                    </div>

                    <div class="p-4">
                        <h5 class="mb-2">New York - USA</h5>
                        <p class="text-muted">La ciudad que nunca duerme.</p>
                        <a href="#" class="btn btn-primary rounded-pill w-100">Ver más</a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- =======================
     FIN INTERNACIONAL
======================= -->
        

        <?php require_once 'includes/footer.php'; ?>
        <?php require_once 'includes/scripts.php'; ?>
    </body>

</html>