<?php
$subir = '../';
$pageTitle = 'Punta Sal - Perú';
$activePage = 'peru';
require_once $subir . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= $subir ?>css/internacional.css">
</head>
<body>

<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary custom-spinner" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<?php require_once $subir . 'includes/header.php'; ?>

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 text-max-900">
        <h3 class="text-white display-3 mb-4">Perú</h3>
    </div>
</div>

<div class="container intl-ciudad">
    <a class="intl-ciudad__back" href="<?= $subir ?>peru.php">
        <i class="fa fa-arrow-left"></i> Volver a Perú
    </a>
    <h1 class="intl-ciudad__title">Punta Sal, Perú</h1>
    <p class="intl-ciudad__subtitle">Encuentra los mejores paquetes y programas para tu viaje</p>

    <div class="intl-ciudad-section">
        <h2 class="intl-ciudad-section__title">
            <i class="fa fa-plane"></i> Programas con aéreo
        </h2>
        <div class="intl-ciudad-card">
            <i class="fa fa-suitcase-rolling"></i>
            <p>Próximamente encontrarás aquí los paquetes con vuelo incluido.</p>
        </div>
    </div>

    <div class="intl-ciudad-section">
        <h2 class="intl-ciudad-section__title">
            <i class="fa fa-map-marked-alt"></i> Programas sin aéreo
        </h2>
        <div class="intl-ciudad-card">
            <i class="fa fa-map"></i>
            <p>Próximamente encontrarás aquí los paquetes terrestres.</p>
        </div>
    </div>

    <div class="intl-ciudad-section">
        <h2 class="intl-ciudad-section__title">
            <i class="fa fa-hotel"></i> Tours opcionales y Solo hotelería
        </h2>
        <div class="intl-ciudad-card">
            <i class="fa fa-bed"></i>
            <p>Próximamente encontrarás aquí los tours opcionales y alojamiento.</p>
        </div>
    </div>
</div>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>

</body>
</html>