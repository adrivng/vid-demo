<?php
$pageTitle  = 'Registro Online';
$activePage = 'nosotros';
$subir = '../';
require_once '../includes/head.php';
?>
<style>
.form-page {
    padding: 60px 0;
    background: #f8f9fa;
    min-height: 60vh;
}
.form-page iframe {
    max-width: 100%;
    border-radius: 12px;
    box-shadow: 0 4px 24px rgba(0,0,0,.08);
}
@media (max-width: 768px) {
    .form-page { padding: 30px 0; }
    .form-page iframe { width: 100% !important; }
}
</style>
</head>
<body>

<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="../img/images-index/logo.svg" alt="Cargando...">
</div>

<?php require_once '../includes/header.php'; ?>

<div class="container-fluid bg-breadcrumb bg-breadcrumb--registro">
    <div class="container text-center py-5">
        <h3 class="text-white display-4 mb-4">Registro Online</h3>        
    </div>
</div>

<div class="container-fluid form-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSezzk-M8LqgoVHY5Hf5GwhlDrrdgXltEstwpK377QQWgsKxtw/viewform?embedded=true" width="640" height="3277" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
            </div>
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
<?php require_once '../includes/scripts.php'; ?>
</body>
</html>
