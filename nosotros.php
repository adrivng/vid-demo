<?php
$pageTitle  = 'Nosotros';
$activePage = 'nosotros';
require_once 'includes/head.php';
?>
<style>
.service-content-inner.hover-white:hover img {
    filter: brightness(0) invert(1);
}
.service-content-inner.hover-white:hover svg {
    fill: #fff !important;
}
.bg-peru { background: #198754; }
.bg-intl { background: #0b1238; }
.bg-repres { background: #055888; }
.modal-repres-img {
    height: 120px;
    object-fit: contain;
    max-width: 100%;
}
@media (max-width: 576px) {
    .modal-repres-img { height: 80px; }
}
.modal-repres-card {
    border: 2px solid #e5e7eb;
    border-radius: 16px;
    padding: 40px 24px;
    transition: all .2s;
    cursor: pointer;
    display: block;
    text-decoration: none;
    color: inherit;
}
.modal-repres-card:hover {
    border-color: #055888;
    box-shadow: 0 8px 25px rgba(5,88,136,0.12);
    transform: translateY(-2px);
}
@media (max-width: 576px) {
    .modal-repres-card { padding: 24px 16px; }
}
</style>
</head>
<body>

<!-- Spinner -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="img/images-index/logo.svg" alt="Cargando...">
</div>

<?php require_once 'includes/header.php'; ?>

<!-- ========== BREADCRUMB ========== -->
<div class="container-fluid bg-breadcrumb bg-breadcrumb--nosotros">
    <div class="container text-center py-5 text-max-900">
        <h3 class="text-white display-3 mb-4">Nosotros</h3>
    </div>
</div>

<div class="container-fluid about service py-5">
    <div class="container py-5">

        <!-- <div class="text-center mx-auto mb-5 text-max-800">
            <h1 class="mb-4">Explora nuestros servicios</h1>
            
        </div> --> <br><br>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <a href="https://vidatur.paquetedinamico.com/home" target="_blank" rel="noopener noreferrer"
                   class="service-content-inner text-center border rounded p-4 h-100 shadow-sm hover-white cursor-pointer d-block">
                    <img src="img/cotizador_logo.png" class="img-fluid mb-4 img-card-logo">
                    <h5 class="mb-3">INGRESA AL COTIZADOR</h5>
                    <p class="mb-0">Cotiza paquetes y experiencias turísticas rápidamente.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="formularios/vidatur_online_formulario_registro.php" rel="noopener noreferrer"
                   class="service-content-inner text-center border rounded p-4 h-100 shadow-sm hover-white cursor-pointer d-block">
                    <img src="img/formulario.png" class="img-fluid mb-4 img-card-logo">
                    <h5 class="mb-3">REGISTRO ONLINE</h5>
                    <p class="mb-0">Regístrate online de forma rápida y segura.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="videos.php"
                   class="service-content-inner text-center border rounded p-4 h-100 shadow-sm hover-white cursor-pointer d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         class="vid-icon mb-4">
                        <path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V174.9l14.2-9.5 96-64c9.9-6.6 22.6-7.1 32.9-1.6z"/>
                    </svg>
                    <h5 class="mb-3">VIDEOS</h5>
                    <p class="mb-0">Mira contenido audiovisual y promociones exclusivas.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="peru.php"
                   class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white cursor-pointer bg-peru d-block">
                    <img src="img/bandera_peru_2.png" class="img-fluid mb-4 img-card-logo">
                    <h5 class="mb-3 text-white">PAQUETES NACIONALES</h5>
                    <p class="mb-0 text-white">Descubre destinos increíbles dentro del Perú.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="internacional.php"
                   class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white cursor-pointer bg-intl d-block">
                    <i class="bi bi-globe text-white mb-4 globe-icon"></i>
                    <h5 class="mb-3 text-white">PAQUETES INTERNACIONALES</h5>
                    <p class="mb-0 text-white">Viaja por el mundo con ofertas internacionales.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white d-flex flex-column align-items-center justify-content-center cursor-pointer bg-repres"
                     data-bs-toggle="modal" data-bs-target="#modalRepresentaciones">
                    <div class="d-flex justify-content-center align-items-center gap-3 mb-4">
                        <img src="img/xcaret.png" class="repre-icon">
                        <img src="img/united_park_4.png" class="repre-icon">
                    </div>
                    <h5 class="mb-3 text-white">REPRESENTACIONES</h5>
                    <p class="mb-0 text-white">Marcas y aliados turísticos internacionales.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="socios_estrategicos/aliados.php"
                   class="service-content-inner text-center border rounded p-4 h-100 shadow-sm cursor-pointer d-block">
                    <i class="bi bi-people-fill text-success mb-4 globe-icon"></i>
                    <h5 class="mb-3">SOCIOS ESTRATÉGICOS</h5>
                    <p class="mb-0">Conoce nuestros aliados y socios comerciales.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="equipo_vidatur/equipo_vidatur.php"
                   class="service-content-inner text-center border rounded p-4 h-100 shadow-sm cursor-pointer d-block">
                    <i class="bi bi-person-bounding-box text-primary mb-4 globe-icon"></i>
                    <h5 class="mb-3">EQUIPO VIDATUR</h5>
                    <p class="mb-0">Descubre al equipo detrás de nuestras experiencias.</p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="cuentas_bancarias/cta_bancaria.php"
                   class="service-content-inner text-center border rounded p-4 h-100 shadow-sm hover-white cursor-pointer d-block">
                    <img src="https://mcusercontent.com/c184c181a3697a5d0bd22417a/images/37d37574-f34d-828a-34d0-cb862ece3c60.png"
                         class="img-fluid mb-4 img-card-logo">
                    <h5 class="mb-3">CUENTAS BANCARIAS</h5>
                    <p class="mb-0">Consulta nuestras cuentas bancarias oficiales.</p>
                </a>
            </div>

        </div>
    </div>
</div>
<!-- ========== FIN CARDS ========== -->


<!-- ========== MODAL REPRESENTACIONES ========== -->
<div class="modal fade" id="modalRepresentaciones" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-header border-0 pb-0 pe-4 pt-4">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body px-4 pb-4 pt-2">
                <div class="row g-3 justify-content-center">
                    <div class="col-12 col-sm-6">
                        <a href="https://sw.vidatur.net/" target="_blank" rel="noopener noreferrer"
                           class="modal-repres-card text-center">
                            <img src="img/images-index/united_parks_resorts.png" alt="United Parks & Resorts" class="modal-repres-img">
                        </a>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a href="https://www.excursiontravelperu.com/" target="_blank" rel="noopener noreferrer"
                           class="modal-repres-card text-center">
                            <img src="img/images-index/xcaret_mexico_repre.png" alt="Xcaret Mexico" class="modal-repres-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>

</body>
</html>