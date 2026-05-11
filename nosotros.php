<?php
$pageTitle  = 'Nosotros';
$activePage = 'nosotros';
require_once 'includes/head.php';
?>
</head>
<body>

<!-- Spinner -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>

<?php require_once 'includes/header.php'; ?>

<!-- ========== BREADCRUMB ========== -->
<div class="container-fluid bg-breadcrumb bg-breadcrumb--nosotros">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Nosotros</h3>
    </div>
</div>
<!-- ========== FIN BREADCRUMB ========== -->


<!-- ========== CARDS DE SERVICIOS ========== -->
<div class="container-fluid about service py-5">
    <div class="container py-5">

        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h1 class="mb-4">Explora nuestros <span class="text-primary">servicios</span></h1>
            <p class="mb-0">Descubre nuestras plataformas, promociones, representaciones y servicios exclusivos diseñados para agencias y viajeros.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm"
                     onclick="window.location.href='https://vidatur.paquetedinamico.com/home'"
                     style="cursor:pointer;">
                    <img src="img/cotizador_logo.png" class="img-fluid mb-4" style="height: 90px; object-fit: contain;">
                    <h5 class="mb-3">INGRESA AL COTIZADOR</h5>
                    <p class="mb-0">Cotiza paquetes y experiencias turísticas rápidamente.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm"
                     onclick="window.location.href='https://vidatur.net/vidatur_online_formulario_registro.html'"
                     style="cursor:pointer;">
                    <img src="img/formulario.png" class="img-fluid mb-4" style="height: 90px; object-fit: contain;">
                    <h5 class="mb-3">REGISTRO ONLINE</h5>
                    <p class="mb-0">Regístrate online de forma rápida y segura.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm"
                     onclick="window.location.href='videos.php'"
                     style="cursor:pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         style="width:70px; height:70px; fill:#28a745;" class="mb-4">
                        <path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V174.9l14.2-9.5 96-64c9.9-6.6 22.6-7.1 32.9-1.6z"/>
                    </svg>
                    <h5 class="mb-3">VIDEOS</h5>
                    <p class="mb-0">Mira contenido audiovisual y promociones exclusivas.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white"
                     onclick="window.location.href='promociones_nacionales.php'"
                     style="cursor:pointer; background:#198754;">
                    <img src="img/bandera_peru_2.png" class="img-fluid mb-4" style="height: 90px; object-fit: contain;">
                    <h5 class="mb-3 text-white">PAQUETES NACIONALES</h5>
                    <p class="mb-0 text-white">Descubre destinos increíbles dentro del Perú.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white"
                     onclick="window.location.href='promociones_internacionales.php'"
                     style="cursor:pointer; background:#0b1238;">
                    <i class="bi bi-globe text-white mb-4" style="font-size: 70px; display:block;"></i>
                    <h5 class="mb-3 text-white">PAQUETES INTERNACIONALES</h5>
                    <p class="mb-0 text-white">Viaja por el mundo con ofertas internacionales.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white"
                     id="abrirModalRepresentaciones"
                     style="cursor:pointer; background:#055888;">
                    <div class="d-flex justify-content-center align-items-center gap-3 mb-4">
                        <img src="img/xcaret.png" style="height:70px; object-fit:contain;">
                        <img src="img/united_park_4.png" style="height:70px; object-fit:contain;">
                    </div>
                    <h5 class="mb-3 text-white">REPRESENTACIONES</h5>
                    <p class="mb-0 text-white">Marcas y aliados turísticos internacionales.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm"
                     onclick="window.location.href='socios_estrategicos/aliados.php'"
                     style="cursor:pointer;">
                    <i class="bi bi-people-fill text-success mb-4" style="font-size: 70px; display:block;"></i>
                    <h5 class="mb-3">SOCIOS ESTRATÉGICOS</h5>
                    <p class="mb-0">Conoce nuestros aliados y socios comerciales.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm"
                     onclick="window.location.href='equipo_vidatur/equipo_vidatur.php'"
                     style="cursor:pointer;">
                    <i class="bi bi-person-bounding-box text-primary mb-4" style="font-size: 70px; display:block;"></i>
                    <h5 class="mb-3">EQUIPO VIDATUR</h5>
                    <p class="mb-0">Descubre al equipo detrás de nuestras experiencias.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm"
                     onclick="window.location.href='cuentas_bancarias/cta_bancaria.php'"
                     style="cursor:pointer;">
                    <img src="https://mcusercontent.com/c184c181a3697a5d0bd22417a/images/37d37574-f34d-828a-34d0-cb862ece3c60.png"
                         class="img-fluid mb-4" style="height: 90px; object-fit: contain;">
                    <h5 class="mb-3">CUENTAS BANCARIAS</h5>
                    <p class="mb-0">Consulta nuestras cuentas bancarias oficiales.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ========== FIN CARDS ========== -->


<!-- ========== SUBSCRIBE ========== 
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h1 class="text-white mb-4">Nuestro Boletín</h1>
            <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo?</p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Tu email">
                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Enviar</button>
            </div>
        </div>
    </div>
</div>
========== FIN SUBSCRIBE ========== -->


<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>

</body>
</html>