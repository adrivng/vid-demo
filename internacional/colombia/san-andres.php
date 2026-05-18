<?php
$subir = '../../';
$pageTitle = 'San Andrés - Colombia';
$activePage = 'internacional';
require_once $subir . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= $subir ?>css/internacional.css">
<link rel="stylesheet" href="<?= $subir ?>css/bloqueos.css">
</head>
<body>

<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="../../img/images-index/logo.png" alt="Cargando...">
</div>

<?php require_once $subir . 'includes/header.php'; ?>

<div class="container-fluid bg-breadcrumb bg-breadcrumb--internacional">
    <div class="container text-center py-5 text-max-900">
        <h3 class="text-white display-3 mb-4">Colombia</h3>
    </div>
</div>

<div class="container intl-ciudad">
    <a class="intl-ciudad__back" href="<?= $subir ?>internacional.php">
        <i class="fa fa-arrow-left"></i> Volver a Internacional
    </a>
    <h1 class="intl-ciudad__title">San Andrés, Colombia</h1>
    <p class="intl-ciudad__subtitle">Encuentra los mejores paquetes y programas para tu viaje</p>

        <?php
        $paisSlug   = 'colombia';
        $ciudadSlug = 'san-andres';
        require_once $subir . 'includes/ciudad-programas.php';
        ?>
</div>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>

</body>
</html>