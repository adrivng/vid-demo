<?php
$pageTitle  = 'Inicio';
$activePage = 'inicio';
require_once 'includes/head.php';
require_once 'config/database.php';
?>

<link rel="stylesheet" href="css/buscador.css">
</head>
<body>


<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary custom-spinner" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>

<?php require_once 'includes/header.php'; ?>

<!-- ========== CAROUSEL ========== -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <img src="img/images-portadas/mod-index-carrusel-avion-nubes.png" class="img-fluid" alt="Club Vidatur" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3 text-max-900">
                        <h4 class="text-white text-uppercase fw-bold mb-4 letter-spacing-3">Programa De Lealtad</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">CLUB VIDATUR</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/images-portadas/mod-index-carrusel-crucero.png" class="img-fluid" alt="Vidatur Online" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3 text-max-900">
                        <h4 class="text-white text-uppercase fw-bold mb-4 letter-spacing-3">Registro del Cotizador Online</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">VIDATUR ONLINE</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/images-portadas/mod-index-carrusel-playas.png" class="img-fluid" alt="GEA" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3 text-max-900">
                        <h4 class="text-white text-uppercase fw-bold mb-4 letter-spacing-3">Beneficios GEA</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">GEA</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="img-fluid" alt="VPR" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3 text-max-900">
                        <h4 class="text-white text-uppercase fw-bold mb-4 letter-spacing-3">VPR</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">PROGRAMA DE RECOMPENSA</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
<!-- ========== FIN CAROUSEL ========== -->

<!-- ========== BENEFICIOS ========== -->
<div class="container-fluid beneficios-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <a href="#" class="beneficio-card" target="_blank" rel="noopener">
                    <div class="beneficio-img">
                        <img src="img/beneficios/club_vidatur.png" alt="Club Vidatur">
                    </div>
                    <h6>Club Vidatur</h6>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#" class="beneficio-card" target="_blank" rel="noopener">
                    <div class="beneficio-img">
                        <img src="img/beneficios/cotizador_online_logo.png" alt="Cotizador Online">
                    </div>
                    <h6>Cotizador Online</h6>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#" class="beneficio-card" target="_blank" rel="noopener">
                    <div class="beneficio-img">
                        <img src="img/beneficios/gea_logo.png" alt="GEA">
                    </div>
                    <h6>GEA</h6>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#" class="beneficio-card" target="_blank" rel="noopener">
                    <div class="beneficio-img">
                        <img src="img/beneficios/logo-programa-recompensa.png" alt="Programa Recompensa">
                    </div>
                    <h6>Programa Recompensa</h6>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN BENEFICIOS ========== -->


<!-- ========== ABOUT ========== -->
<!-- <div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <img src="img/images-index/general.jpg" class="img-fluid w-100 h-100" alt="Vidatur">
            </div>
            <div class="col-lg-7 about-bg"> 
                <h5 class="section-about-title pe-3">Sobre Nosotros</h5>
                <h1 class="mb-4">Agencia Mayorista +25 años</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero numquam perferendis provident placeat molestiae quia?</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cotizador Online 2.0</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Videos Promocionales Exclusivos</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Paquetes Nacionales</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Paquetes Internacionales</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Socios Estrategicos</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Equipo Vidatur</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cuentas Bancarias</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Soporte 24/7</p></div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="nosotros.php">Más</a>
            </div>
        </div>
    </div>
</div> -->
<!-- ========== FIN ABOUT ========== -->


<!-- ========== SERVICES / REPRESENTACIONES ========== -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">

        <div class="mx-auto text-center mb-5 text-max-900">
            <h1 class="section-title px-3">Nuestras Fortalezas</h1>
            <hr class="section-divider">
            <h2 class="fw-bold color-primary-green">Representaciones</h2>
        </div>

        <!-- Cards de representaciones -->
        <div class="container-fluid bg-light pb-5">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <a href="https://sw.vidatur.net/" target="_blank" class="text-decoration-none">
                            <div class="representacion-card bg-white rounded-4 shadow-sm p-5 text-center h-100 d-flex flex-column justify-content-center align-items-center" >
                                <img src="img/images-index/united_parks_resorts.png" alt="United Parks & Resorts" class="img-fluid" >
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <a href="https://www.excursiontravelperu.com/" target="_blank" class="text-decoration-none">
                            <div class="representacion-card bg-white rounded-4 shadow-sm p-5 text-center h-100 d-flex flex-column justify-content-center align-items-center" >
                                <img src="img/images-index/xcaret_mexico_repre.png" alt="Xcaret Mexico" class="img-fluid" >
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <BR>
        <!-- Parques SeaWorld -->
        <?php
        $parques = [
            ['nombre' => 'SeaWorld Orlando',    'img' => 'img/images-index/sea_world_2025.png'],
            ['nombre' => 'Busch Gardens Tampa', 'img' => 'img/images-index/bush_garden_2025.png'],
            ['nombre' => 'Aquatica Orlando',    'img' => 'img/images-index/aquatica_2025.png'],
            ['nombre' => 'Discovery Cove',      'img' => 'img/images-index/discovery_cove.png'],
        ];
        ?>

        <div class="mb-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold color-primary-green">PARQUES DE SEAWORLD</h3>
                <hr class="w-25 mx-auto border-primary border-2">
            </div>
            <div class="row g-3">
                <?php foreach ($parques as $p): ?>
                <div class="col-6 col-lg-3 park-col">
                    <img src="<?= $p['img'] ?>"
                        alt="<?= $p['nombre'] ?>"
                        class="img-fluid rounded w-100 park-img">
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <BR>
                    <!-- Parques Xcaret -->
        <?php
        $xcaret = [
            ['nombre' => 'Xcaret México', 'img' => 'img/images-index/parques_xcaret_mexico_update.png'],
            ['nombre' => 'Xel-Há',        'img' => 'img/images-index/parque_xcaret_xeiha.png'],
            ['nombre' => 'Xenotes',       'img' => 'img/images-index/parque_xenotes.png'],
            ['nombre' => 'Xplor',         'img' => 'img/images-index/parque_xplor.png'],
            ['nombre' => 'Xavage',        'img' => 'img/images-index/parque_xavage.png'],
            ['nombre' => 'Xichén',        'img' => 'img/images-index/parques_xichen_update.png'],
            ['nombre' => 'Xplor Fuego',   'img' => 'img/images-index/parques_xplor_fuego_update.png'],
            ['nombre' => 'Xenses',        'img' => 'img/images-index/parques_xenenses_update.png'],
            ['nombre' => 'Xoximilco',     'img' => 'img/images-index/parques_xomilco_update.png'],
        ];
        ?>

        <div class="mb-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold color-primary-green">PARQUES XCARET</h3>
                <hr class="w-25 mx-auto border-2 border-primary-green">
            </div>

            <div class="d-flex align-items-center gap-2">
                <button class="team-arrow" id="xcaretPrev"><i class="fa fa-chevron-left"></i></button>

                <div class="xcaret-viewport flex-grow-1" id="xcaretViewport">
                    <div class="xcaret-track" id="xcaretTrack">
                        <?php foreach ($xcaret as $p): ?>
                        <div class="xcaret-slide">
                            <img src="<?= $p['img'] ?>" alt="<?= $p['nombre'] ?>"
                                class="img-fluid rounded w-100 park-img">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button class="team-arrow" id="xcaretNext"><i class="fa fa-chevron-right"></i></button>
            </div>
        </div>

         <BR>                   

        <!-- Aliados carrusel -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold color-primary-green">ALIADOS</h3>
                <hr class="w-25 mx-auto border-primary border-2">
            </div>
            <div class="aliados-carousel-wrapper">
                <div class="aliados-carousel-track">
                    <!-- PRIMERA VUELTA -->
                    <div class="aliado-item"><img src="img/images-index/aliado_copa_airlens.png" alt="Copa Airlines"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_latam.png" alt="LATAM"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_plus_ultra.png" alt="Plus Ultra"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_jet_smart.png" alt="JetSmart"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_avianca.png" alt="Avianca"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_arajet.png" alt="Arajet"></div>
                    <div class="aliado-item"><img src="img/images-index/best_wester.png" alt="Best Western"></div>
                    <div class="aliado-item"><img src="img/images-index/blue_diamond_6.png" alt="Blue Diamond"></div>
                    <div class="aliado-item"><img src="img/images-index/bth_hoteles.png" alt="BTH Hoteles"></div>
                    <div class="aliado-item"><img src="img/images-index/cartagena_plaza.png" alt="Cartagena Plaza"></div>
                    <div class="aliado-item"><img src="img/images-index/casa_andina.png" alt="Casa Andina"></div>
                    <div class="aliado-item"><img src="img/images-index/arangua.png" alt="Aranwa"></div>
                    <div class="aliado-item"><img src="img/images-index/bahia_principe.png" alt="Bahia Principe"></div>
                    <div class="aliado-item"><img src="img/images-index/barcelo.png" alt="Barcelo"></div>
                    <div class="aliado-item"><img src="img/images-index/costa_blanca.png" alt="Costa Blanca"></div>
                    <div class="aliado-item"><img src="img/images-index/catalonia.png" alt="Catalonia"></div>
                    <div class="aliado-item"><img src="img/images-index/coral_costa_caribe.png" alt="Coral Costa Caribe"></div>
                    <div class="aliado-item"><img src="img/images-index/corendon.png" alt="Corendon"></div>
                    <div class="aliado-item"><img src="img/images-index/dorado_plaza.png" alt="Dorado Plaza"></div>
                    <div class="aliado-item"><img src="img/images-index/faranda.png" alt="Faranda"></div>
                    <div class="aliado-item"><img src="img/images-index/hacienda_la_caravedo.png" alt="Hacienda La Caravedo"></div>
                    <div class="aliado-item"><img src="img/images-index/hacienda_san_juan.png" alt="Hacienda San Juan"></div>
                    <div class="aliado-item"><img src="img/images-index/HELICONIA.png" alt="Heliconia"></div>
                    <div class="aliado-item"><img src="img/images-index/costa_sol.png" alt="Costa del Sol"></div>
                    <div class="aliado-item"><img src="img/images-index/irapay.png" alt="Irapay"></div>
                    <div class="aliado-item"><img src="img/images-index/hotel_san_agustin.png" alt="Hotel San Agustin"></div>
                    <div class="aliado-item"><img src="img/images-index/hotel_viña_de_queirolo.png" alt="Hotel Viña de Queirolo"></div>
                    <div class="aliado-item"><img src="img/images-index/iberostar.png" alt="Iberostar"></div>
                    <div class="aliado-item"><img src="img/images-index/impressive.png" alt="Impressive"></div>
                    <div class="aliado-item"><img src="img/images-index/inkaterra.png" alt="Inkaterra"></div>
                    <div class="aliado-item"><img src="img/images-index/melia.png" alt="Melia"></div>
                    <div class="aliado-item"><img src="img/images-index/nickelodeon.png" alt="Nickelodeon"></div>
                    <div class="aliado-item"><img src="img/images-index/norte_swites.png" alt="Norte Suites"></div>
                    <div class="aliado-item"><img src="img/images-index/oasis.png" alt="Oasis"></div>
                    <div class="aliado-item"><img src="img/images-index/princess.png" alt="Princess"></div>
                    <div class="aliado-item"><img src="img/images-index/isla_del_encanto.png" alt="Isla del Encanto"></div>
                    <div class="aliado-item"><img src="img/images-index/ivice.png" alt="Ivice"></div>
                    <div class="aliado-item"><img src="img/images-index/libertador.png" alt="Libertador"></div>
                    <div class="aliado-item"><img src="img/images-index/sauce_resort.png" alt="Sauce Resort"></div>
                    <div class="aliado-item"><img src="img/images-index/sirenis.png" alt="Sirenis"></div>
                    <div class="aliado-item"><img src="img/images-index/terra_adina.png" alt="Terra Andina"></div>
                    <div class="aliado-item"><img src="img/images-index/tierra_viva.png" alt="Tierra Viva"></div>
                    <div class="aliado-item"><img src="img/images-index/vista_sol.png" alt="Vista Sol"></div>
                    <div class="aliado-item"><img src="img/images-index/punta_sal_suites.png" alt="Punta Sal Suites"></div>
                    <div class="aliado-item"><img src="img/images-index/raddison.png" alt="Radisson"></div>
                    <div class="aliado-item"><img src="img/images-index/riu.png" alt="RIU"></div>
                    <!-- SEGUNDA VUELTA (duplicado para loop infinito) -->
                    <div class="aliado-item"><img src="img/images-index/aliado_copa_airlens.png" alt="Copa Airlines"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_latam.png" alt="LATAM"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_plus_ultra.png" alt="Plus Ultra"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_jet_smart.png" alt="JetSmart"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_avianca.png" alt="Avianca"></div>
                    <div class="aliado-item"><img src="img/images-index/aliado_arajet.png" alt="Arajet"></div>
                    <div class="aliado-item"><img src="img/images-index/best_wester.png" alt="Best Western"></div>
                    <div class="aliado-item"><img src="img/images-index/blue_diamond_6.png" alt="Blue Diamond"></div>
                    <div class="aliado-item"><img src="img/images-index/bth_hoteles.png" alt="BTH Hoteles"></div>
                    <div class="aliado-item"><img src="img/images-index/cartagena_plaza.png" alt="Cartagena Plaza"></div>
                    <div class="aliado-item"><img src="img/images-index/casa_andina.png" alt="Casa Andina"></div>
                    <div class="aliado-item"><img src="img/images-index/arangua.png" alt="Aranwa"></div>
                    <div class="aliado-item"><img src="img/images-index/bahia_principe.png" alt="Bahia Principe"></div>
                    <div class="aliado-item"><img src="img/images-index/barcelo.png" alt="Barcelo"></div>
                    <div class="aliado-item"><img src="img/images-index/costa_blanca.png" alt="Costa Blanca"></div>
                    <div class="aliado-item"><img src="img/images-index/catalonia.png" alt="Catalonia"></div>
                    <div class="aliado-item"><img src="img/images-index/coral_costa_caribe.png" alt="Coral Costa Caribe"></div>
                    <div class="aliado-item"><img src="img/images-index/corendon.png" alt="Corendon"></div>
                    <div class="aliado-item"><img src="img/images-index/dorado_plaza.png" alt="Dorado Plaza"></div>
                    <div class="aliado-item"><img src="img/images-index/faranda.png" alt="Faranda"></div>
                    <div class="aliado-item"><img src="img/images-index/hacienda_la_caravedo.png" alt="Hacienda La Caravedo"></div>
                    <div class="aliado-item"><img src="img/images-index/hacienda_san_juan.png" alt="Hacienda San Juan"></div>
                    <div class="aliado-item"><img src="img/images-index/HELICONIA.png" alt="Heliconia"></div>
                    <div class="aliado-item"><img src="img/images-index/costa_sol.png" alt="Costa del Sol"></div>
                    <div class="aliado-item"><img src="img/images-index/irapay.png" alt="Irapay"></div>
                    <div class="aliado-item"><img src="img/images-index/hotel_san_agustin.png" alt="Hotel San Agustin"></div>
                    <div class="aliado-item"><img src="img/images-index/hotel_viña_de_queirolo.png" alt="Hotel Viña de Queirolo"></div>
                    <div class="aliado-item"><img src="img/images-index/iberostar.png" alt="Iberostar"></div>
                    <div class="aliado-item"><img src="img/images-index/impressive.png" alt="Impressive"></div>
                    <div class="aliado-item"><img src="img/images-index/inkaterra.png" alt="Inkaterra"></div>
                    <div class="aliado-item"><img src="img/images-index/melia.png" alt="Melia"></div>
                    <div class="aliado-item"><img src="img/images-index/nickelodeon.png" alt="Nickelodeon"></div>
                    <div class="aliado-item"><img src="img/images-index/norte_swites.png" alt="Norte Suites"></div>
                    <div class="aliado-item"><img src="img/images-index/oasis.png" alt="Oasis"></div>
                    <div class="aliado-item"><img src="img/images-index/princess.png" alt="Princess"></div>
                    <div class="aliado-item"><img src="img/images-index/isla_del_encanto.png" alt="Isla del Encanto"></div>
                    <div class="aliado-item"><img src="img/images-index/ivice.png" alt="Ivice"></div>
                    <div class="aliado-item"><img src="img/images-index/libertador.png" alt="Libertador"></div>
                    <div class="aliado-item"><img src="img/images-index/sauce_resort.png" alt="Sauce Resort"></div>
                    <div class="aliado-item"><img src="img/images-index/sirenis.png" alt="Sirenis"></div>
                    <div class="aliado-item"><img src="img/images-index/terra_adina.png" alt="Terra Andina"></div>
                    <div class="aliado-item"><img src="img/images-index/tierra_viva.png" alt="Tierra Viva"></div>
                    <div class="aliado-item"><img src="img/images-index/vista_sol.png" alt="Vista Sol"></div>
                    <div class="aliado-item"><img src="img/images-index/punta_sal_suites.png" alt="Punta Sal Suites"></div>
                    <div class="aliado-item"><img src="img/images-index/raddison.png" alt="Radisson"></div>
                    <div class="aliado-item"><img src="img/images-index/riu.png" alt="RIU"></div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="btn btn-primary rounded-pill py-3 px-5" href="socios_estrategicos/aliados.php">Ver Socios Estratégicos</a>
        </div>

    </div>
</div>
<!-- ========== FIN SERVICES ========== -->


<!-- ========== DESTINATIONS ========== -->
<?php require_once 'includes/sections/destinations.php'; ?>
<!-- ========== FIN DESTINATIONS ========== -->


<!-- ========== BOOKING ========== -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">COTIZADOR VIDATUR ONLINE 2.0</h5>
                <h1 class="text-white mb-4">Online</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?</p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?</p>
                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Registrarse</a>
            </div>
            <div class="col-lg-6">
                <div class="booking-modules">
                    <div class="booking-module">
                        <i class="fas fa-hotel"></i>
                        <span>Alojamiento</span>
                    </div>
                    <div class="booking-module">
                        <i class="fas fa-hiking"></i>
                        <span>Actividades</span>
                    </div>
                    <div class="booking-module">
                        <i class="fas fa-shuttle-van"></i>
                        <span>Traslados</span>
                    </div>
                    <div class="booking-module">
                        <i class="fas fa-suitcase"></i>
                        <span>Paquetes</span>
                    </div>
                    <div class="booking-module">
                        <i class="fas fa-globe-americas"></i>
                        <span>Multidestinos</span>
                    </div>
                    <div class="booking-module">
                        <i class="fas fa-car"></i>
                        <span>Alquilar un coche</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN BOOKING ========== -->


<!-- ========== EQUIPO VIDATUR ========== -->
<div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 text-max-900">
            <h1 class="section-title px-3">EQUIPO VIDATUR</h1>
        </div>

        <!-- Carrusel wrapper -->
        <div class="team-carousel-wrapper">

            <!-- Flecha izquierda -->
            <button class="team-arrow team-arrow--prev" id="teamPrev" aria-label="Anterior">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="team-carousel-viewport" id="teamViewport">
                <div class="team-carousel-track" id="teamTrack">

                    <?php
                    /*
                     * ── DATO ESTRUCTURADO ──────────────────────────────
                     * Para agregar un miembro: añade un elemento al array.
                     * ─────────────────────────────────────────────────── */
                    $equipo = [
                        [
                            'nombre' => 'Miguel Portugal',
                            'cargo'  => 'Gerente General',
                            'img'    => 'img/images-index/miguel_angel_gerente_4.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Mirko',
                            'cargo'  => 'Ventas',
                            'img'    => 'img/images-index/mirko_producto.png',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Naomi',
                            'cargo'  => 'Producto',
                            'img'    => 'img/images-index/naomi_producto_2.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Yulieth',
                            'cargo'  => 'Producto',
                            'img'    => 'img/images-index/yulieth_producto_2.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Miluska',
                            'cargo'  => 'Ventas',
                            'img'    => 'img/images-index/milureduc.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Daniel',
                            'cargo'  => 'Ventas',
                            'img'    => 'img/images-index/Daniel_campo_verde_ventas_3.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Brenda',
                            'cargo'  => 'Counter',
                            'img'    => 'img/images-index/brenda_cornejo_counter_2.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Giuliana',
                            'cargo'  => 'Counter',
                            'img'    => 'img/images-index/giuliana_portugal_2.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Liz',
                            'cargo'  => 'Counter',
                            'img'    => 'img/images-index/liz_tavera_counter.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Brendha',
                            'cargo'  => 'Counter',
                            'img'    => 'img/images-index/brendha_juarez_counter.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Lady',
                            'cargo'  => 'Atencion Al Cliente',
                            'img'    => 'img/images-index/lady_guillen_3.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Victor',
                            'cargo'  => 'Atencion Al Cliente',
                            'img'    => 'img/images-index/victor_cardenas_atc.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Rose Damian',
                            'cargo'  => 'Administración',
                            'img'    => 'img/images-index/administracion_rouse.jpg',
                            'wa'     => '51999999999',
                        ],
                        /* ── Agrega más miembros aquí ── */
                    ];
                    foreach ($equipo as $m): ?>

                    <div class="team-slide">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="<?= $m['img'] ?>" class="img-fluid w-100 rounded-top" alt="<?= $m['nombre'] ?>">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn-wa-team"
                                    href="https://wa.me/<?= $m['wa'] ?>?text=Hola+<?= urlencode($m['nombre']) ?>%2C+me+comunico+desde+la+web+de+Vidatur"
                                    target="_blank" rel="noopener">
                                        <i class="fab fa-whatsapp"></i> Contactar
                                    </a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3"><?= $m['nombre'] ?></h4>
                                    <p class="mb-0"><?= $m['cargo'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>

            <!-- Flecha derecha -->
            <button class="team-arrow team-arrow--next" id="teamNext" aria-label="Siguiente">
                <i class="fa fa-chevron-right"></i>
            </button>

        </div>

        <!-- Dots -->
        <div class="team-dots" id="teamDots"></div>

    </div>
</div>




<!-- ========== TESTIMONIAL ========== -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 text-max-900">
            <h2 class="section-title px-3">Agencias que trabajan con Nosotros</h2>
        </div>
        <div class="testimonial-carousel owl-carousel">
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis.</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="testimonial-offset">
                    <h5 class="mb-0">John Abraham</h5>
                    <p class="mb-0">New York, USA</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis.</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="testimonial-offset">
                    <h5 class="mb-0">Maria García</h5>
                    <p class="mb-0">Lima, Perú</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis.</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="testimonial-offset">
                    <h5 class="mb-0">Carlos López</h5>
                    <p class="mb-0">Bogotá, Colombia</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis.</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="testimonial-offset">
                    <h5 class="mb-0">Ana Torres</h5>
                    <p class="mb-0">Santiago, Chile</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i><i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN TESTIMONIAL ========== -->


<!-- ========== SUBSCRIBE ========== -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center text-max-900">
            <!-- <h5 class="subscribe-title px-3">Subscribe</h5> -->
            <h1 class="text-white mb-4">Nuestro Boletín</h1>
            <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo?</p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Tu email">
                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Enviar</button>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN SUBSCRIBE ========== -->


<?php require_once 'includes/footer.php'; ?>

<?php require_once 'includes/scripts.php'; ?>

<script src="js/buscador.js"></script>

<!-- Script exclusivo de esta página: inicializar el carousel de Bootstrap -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    new bootstrap.Carousel(document.querySelector('#carouselId'), {
        interval: 3000,
        ride: 'carousel',
        pause: false,
        wrap: true
    });
});
</script>

<script>
function initCarrusel(ids) {
    const track    = document.getElementById(ids.track);
    const viewport = document.getElementById(ids.viewport);
    const btnPrev  = document.getElementById(ids.prev);
    const btnNext  = document.getElementById(ids.next);
    const dotsWrap = ids.dots ? document.getElementById(ids.dots) : null;

    const slides = track.querySelectorAll(ids.slide);
    const total  = slides.length;
    let current  = 0;
    let timer;

    function visible() {
        const w = viewport.offsetWidth;
        if (w >= 992) return ids.cols?.lg ?? 4;
        if (w >= 640) return ids.cols?.md ?? 2;
        return 1;
    }

    function buildDots() {
        if (!dotsWrap) return;
        dotsWrap.innerHTML = '';
        const pages = Math.ceil(total / visible());
        for (let i = 0; i < pages; i++) {
            const d = document.createElement('button');
            d.className = 'team-dot' + (i === 0 ? ' active' : '');
            d.addEventListener('click', () => { stopAuto(); goTo(i * visible()); startAuto(); });
            dotsWrap.appendChild(d);
        }
    }

    function goTo(idx) {
        const vs  = visible();
        const max = Math.max(0, total - vs);
        current   = Math.min(Math.max(idx, 0), max);

        // Equipo usa offsetWidth, Xcaret usa porcentaje
        if (ids.usePercent) {
            track.style.transform = `translateX(-${current * (100 / vs)}%)`;
        } else {
            track.style.transform = `translateX(-${current * slides[0].offsetWidth}px)`;
        }

        if (dotsWrap) {
            const activePage = Math.floor(current / vs);
            dotsWrap.querySelectorAll('.team-dot').forEach((d, i) =>
                d.classList.toggle('active', i === activePage)
            );
        }

        if (btnPrev) btnPrev.disabled = current === 0;
        if (btnNext) btnNext.disabled = current >= max;
    }

    function startAuto() { timer = setInterval(() => goTo(current + visible()), 3000); }
    function stopAuto()  { clearInterval(timer); }

    btnPrev?.addEventListener('click', () => { stopAuto(); goTo(current - visible()); startAuto(); });
    btnNext?.addEventListener('click', () => { stopAuto(); goTo(current + visible()); startAuto(); });

    viewport.addEventListener('mouseenter', stopAuto);
    viewport.addEventListener('mouseleave', startAuto);

    let startX = 0;
    viewport.addEventListener('touchstart', e => { startX = e.touches[0].clientX; stopAuto(); }, { passive: true });
    viewport.addEventListener('touchend',   e => {
        const diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(current + (diff > 0 ? visible() : -visible()));
        startAuto();
    });

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => { buildDots(); goTo(0); }, 150);
    });

    buildDots();
    goTo(0);
    startAuto();
}

// ── Equipo Vidatur ──
initCarrusel({
    track: 'teamTrack', viewport: 'teamViewport',
    prev: 'teamPrev',   next: 'teamNext',
    dots: 'teamDots',   slide: '.team-slide',
    cols: { lg: 4, md: 2 },
    usePercent: false
});

// ── Xcaret ──
initCarrusel({
    track: 'xcaretTrack', viewport: 'xcaretViewport',
    prev: 'xcaretPrev',   next: 'xcaretNext',
    dots: null,           slide: '.xcaret-slide',
    cols: { lg: 4, md: 3 },
    usePercent: true
});

// ── Destinos Caribe ──
initCarrusel({
    track: 'destTrack', viewport: 'destViewport',
    prev: 'destPrev',   next: 'destNext',
    dots: 'destDots',   slide: '.dest-slide',
    cols: { lg: 3, md: 2 },
    usePercent: true
});
</script>
</body>
</html>