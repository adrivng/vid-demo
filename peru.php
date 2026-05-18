<?php
$pageTitle  = 'Perú';
$activePage = 'peru';
require_once 'includes/head.php';
?>

</head>
<body>


<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="img/images-index/logo.png" alt="Cargando...">
</div>

<?php require_once 'includes/header.php'; ?>


<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 text-max-900">
        <h3 class="text-white display-3 mb-4">Paquetes Perú</h3>
    </div>
</div>

<br><br><br><br>


<div class="container py-5">
    <div class="destinos-grid">

        <?php
        $destinos = [
            ['nombre' => 'Arequipa',     'slug' => 'arequipa'],
            ['nombre' => 'Ayacucho',     'slug' => 'ayacucho'],
            ['nombre' => 'Cajamarca',    'slug' => 'cajamarca'],
            ['nombre' => 'Chachapoyas',  'slug' => 'chachapoyas'],
            ['nombre' => 'Chiclayo',     'slug' => 'chiclayo'],
            ['nombre' => 'Cusco',        'slug' => 'cusco'],
            ['nombre' => 'Huaraz',       'slug' => 'huaraz'],
            ['nombre' => 'Ica',          'slug' => 'ica'],
            ['nombre' => 'Iquitos',      'slug' => 'iquitos'],
            ['nombre' => 'Lima',         'slug' => 'lima'],
            ['nombre' => 'Playas Norte', 'slug' => 'playas-norte'],
            ['nombre' => 'Puno',         'slug' => 'puno'],
            ['nombre' => 'Tarapoto',     'slug' => 'tarapoto'],
            ['nombre' => 'Trujillo',     'slug' => 'trujillo'],
            ['nombre' => 'Punta Sal',    'slug' => 'punta-sal'],
            ['nombre' => 'Junín',        'slug' => 'junin'],
        ];
        ?>

        <?php foreach ($destinos as $d): ?>
        <a class="destino-card" href="nacional/<?= $d['slug'] ?>.php">
            <img src="img/images-paises/pe.png" alt="Perú">
            <span><?= $d['nombre'] ?></span>
        </a>
        <?php endforeach; ?>

    </div>
</div>
<br><br><br><br>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>

</body>
</html>