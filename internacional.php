<?php
$pageTitle  = 'Internacional';
$activePage = 'internacional';
require_once 'includes/head.php';
?>
<!-- CSS propio del módulo -->
<link rel="stylesheet" href="css/internacional.css">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary custom-spinner" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php require_once 'includes/header.php'; ?>

    <div class="container-fluid bg-breadcrumb bg-breadcrumb--internacional">
        <div class="container text-center py-5 text-max-900">
            <h3 class="text-white display-3 mb-4">Paquetes Internacional</h3>
        </div>
    </div>

    <div class="container intl-explorer-wrap">
        <div class="intl-explorer">
            <div class="intl-explorer__heading">
                <i class="fa fa-compass"></i> Explorar
            </div>
            <div class="intl-explorer__grid">

                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/ar.png" alt="Argentina">
                    <span>Argentina</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/br.png" alt="Brasil">
                    <span>Brasil</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/cl.png" alt="Chile">
                    <span>Chile</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/co.png" alt="Colombia">
                    <span>Colombia</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/ec.png" alt="Ecuador">
                    <span>Ecuador</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/uy.png" alt="Uruguay">
                    <span>Uruguay</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/mx.png" alt="México">
                    <span>México</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/us.png" alt="EE.UU.">
                    <span>EE.UU.</span>
                </a>

                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/pa.png" alt="Panamá">
                    <span>Panamá</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/do.png" alt="R. Dominicana">
                    <span>R. Dominicana</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/aw.png" alt="Aruba">
                    <span>Aruba</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/cw.png" alt="Curaçao">
                    <span>Curaçao</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/jm.png" alt="Jamaica">
                    <span>Jamaica</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/bs.png" alt="Bahamas">
                    <span>Bahamas</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/cr.png" alt="Costa Rica">
                    <span>Costa Rica</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/cu.png" alt="Cuba">
                    <span>Cuba</span>
                </a>

                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/europe.png" alt="Europa">
                    <span>Europa</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/asia.png" alt="Asia">
                    <span>Asia</span>
                </a>
                <a class="intl-explorer__item" href="bloqueos.php">
                    <img class="intl-explorer__flag" src="img/images-paises/africa.png" alt="Africa">
                    <span>Africa</span>
                </a>

            </div>
        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?>
    <?php require_once 'includes/scripts.php'; ?>

</body>
</html>