<?php
$pageTitle  = 'Inicio';
$activePage = 'inicio';
require_once 'includes/head.php';
?>

<link rel="stylesheet" href="css/buscador.css" rel="stylesheet">
</head>
<body>

<!-- Spinner -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
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
                <img src="img/carousel-2.jpg" class="img-fluid" alt="Club Vidatur" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Programa De Lealtad</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">CLUB VIDATUR</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid" alt="Vidatur Online" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Registro del Cotizador Online</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">VIDATUR ONLINE</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="img-fluid" alt="GEA" loading="lazy">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Beneficios GEA</h4>
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
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">VPR</h4>
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


<!-- ========== BUSCADOR ========== -->
<div class="container-fluid search-bar-custom">
    <div class="container">
        <div class="search-wrapper position-relative">
            <div class="row align-items-center g-3">
                <div class="col-12 col-md-9 position-relative">
                    <input
                        class="form-control search-input"
                        type="text"
                        id="buscadorDestinos"
                        placeholder="Busca tu destino... Ej: Brasil, Cancún, Miami"
                        autocomplete="off"
                    >
                    <div id="resultadosBusqueda" class="search-dropdown d-none"></div>
                </div>
                <div class="col-12 col-md-3">
                    <button type="button" class="btn btn-primary search-btn w-100" id="btnBuscar">
                        <i class="fas fa-search me-2"></i>Buscar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN BUSCADOR ========== -->


<!-- ========== ABOUT ========== -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <img src="img/images-index/general.jpg" class="img-fluid w-100 h-100" alt="Vidatur">
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255,255,255,.8), rgba(255,255,255,.8)) ;"> <!--, url(img/about-img-1.png) esto es para el fonde en el about--> 
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
</div>
<!-- ========== FIN ABOUT ========== -->


<!-- ========== SERVICES / REPRESENTACIONES ========== -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">

        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h1 class="section-title px-3">Nuestras Fortalezas</h1>
            <hr>
            <h2 class="mb-0">Representaciones</h2>
        </div>

        <!-- Cards de representaciones -->
        <div class="container-fluid bg-light pb-5">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <a href="https://sw.vidatur.net/" target="_blank" class="text-decoration-none">
                            <div class="representacion-card bg-white rounded-4 shadow-sm p-5 text-center h-100 d-flex flex-column justify-content-center align-items-center" style="min-height: 200px;">
                                <img src="img/images-index/united_parks_resorts.png" alt="United Parks & Resorts" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <a href="https://www.excursiontravelperu.com/" target="_blank" class="text-decoration-none">
                            <div class="representacion-card bg-white rounded-4 shadow-sm p-5 text-center h-100 d-flex flex-column justify-content-center align-items-center" style="min-height: 200px;">
                                <img src="img/images-index/xcaret_mexico_repre.png" alt="Xcaret Mexico" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parques SeaWorld -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <h3 class="text-primary fw-bold">PARQUES DE SEAWORLD</h3>
                <hr class="w-25 mx-auto border-primary border-2">
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                        <div class="service-content text-end">
                            <h5 class="mb-4">SeaWorld Orlando</h5>
                            <p class="mb-0">El parque marino más famoso del mundo. Shows con orcas, delfines y leones marinos. Atracciones acuáticas y experiencias únicas con animales.</p>
                        </div>
                        <div class="service-icon p-4"><i class="fa fa-water fa-4x text-primary"></i></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                        <div class="service-icon p-4"><i class="fa fa-umbrella-beach fa-4x text-primary"></i></div>
                        <div class="service-content">
                            <h5 class="mb-4">Aquatica Orlando</h5>
                            <p class="mb-0">Parque acuático de SeaWorld con toboganes, ríos lentos y playas de arena blanca. Perfecto para toda la familia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                        <div class="service-content text-end">
                            <h5 class="mb-4">Busch Gardens Tampa</h5>
                            <p class="mb-0">Parque temático con montañas rusas de clase mundial y safaris. La mejor combinación de adrenalina y naturaleza.</p>
                        </div>
                        <div class="service-icon p-4"><i class="fa fa-hippo fa-4x text-primary"></i></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                        <div class="service-icon p-4"><i class="fa fa-fish fa-4x text-primary"></i></div>
                        <div class="service-content">
                            <h5 class="mb-4">Discovery Cove</h5>
                            <p class="mb-0">Experiencia exclusiva de nado con delfines, arrecifes de coral y aves tropicales. All-inclusive de lujo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parques Xcaret -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <h3 class="text-primary fw-bold">PARQUES DE XCARET</h3>
                <hr class="w-25 mx-auto border-primary border-2">
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                        <div class="service-content text-end">
                            <h5 class="mb-4">Xcaret Park</h5>
                            <p class="mb-0">El parque eco-arqueológico más famoso de México. Ríos subterráneos, fauna maya, espectáculo nocturno y cultura mexicana.</p>
                        </div>
                        <div class="service-icon p-4"><i class="fa fa-leaf fa-4x text-primary"></i></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                        <div class="service-icon p-4"><i class="fa fa-parachute-box fa-4x text-primary"></i></div>
                        <div class="service-content">
                            <h5 class="mb-4">Xplor Park</h5>
                            <p class="mb-0">Aventura extrema con tirolesas, vehículos anfibios, ríos subterráneos y rappel. Para los amantes de la adrenalina.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                        <div class="service-content text-end">
                            <h5 class="mb-4">Xel-Há Park</h5>
                            <p class="mb-0">Caleta natural con snorkel ilimitado, toboganes naturales y actividades acuáticas. Un paraíso ecológico todo incluido.</p>
                        </div>
                        <div class="service-icon p-4"><i class="fa fa-mask fa-4x text-primary"></i></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                        <div class="service-icon p-4"><i class="fa fa-swimmer fa-4x text-primary"></i></div>
                        <div class="service-content">
                            <h5 class="mb-4">Xenses Park</h5>
                            <p class="mb-0">Parque de los sentidos con actividades que desafían tu percepción. Experiencias visuales, táctiles y de equilibrio únicas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aliados carrusel -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <h3 class="text-primary fw-bold">ALIADOS</h3>
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
            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Ver Socios Estratégicos</a>
        </div>

    </div>
</div>
<!-- ========== FIN SERVICES ========== -->


<!-- ========== DESTINATIONS ========== -->
<div class="container-fluid destination py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Destinos</h5>
            <h1 class="mb-0">Destinos Populares</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">Caribe</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Cartagena</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Punta Cana</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark" style="width: 150px;">Cancún</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark" style="width: 150px;">Varadero</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-8">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-1.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">New York City</h4>
                                            <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-1.jpg" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-2.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Las Vegas</h4>
                                            <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-2.jpg" data-lightbox="destination-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-7.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Los Angeles</h4>
                                            <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-7.jpg" data-lightbox="destination-7"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-8.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Miami</h4>
                                            <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-8.jpg" data-lightbox="destination-8"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="destination-img h-100">
                                <img class="img-fluid rounded w-100 h-100" src="img/destination-9.jpg" style="object-fit: cover; min-height: 300px;" alt="">
                                <div class="destination-overlay p-4">
                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                    <h4 class="text-white mb-2 mt-3">San Francisco</h4>
                                    <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="search-icon">
                                    <a href="img/destination-9.jpg" data-lightbox="destination-9"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="destination-img">
                                <img class="img-fluid rounded w-100" src="img/destination-4.jpg" alt="">
                                <div class="destination-overlay p-4">
                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                    <h4 class="text-white mb-2 mt-3">Chicago</h4>
                                    <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="search-icon">
                                    <a href="img/destination-4.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="destination-img">
                                <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                <div class="destination-overlay p-4">
                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                    <h4 class="text-white mb-2 mt-3">Orlando</h4>
                                    <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="search-icon">
                                    <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="destination-img">
                                <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                <div class="destination-overlay p-4">
                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                    <h4 class="text-white mb-2 mt-3">Washington D.C.</h4>
                                    <a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="search-icon">
                                    <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs 2-5: agrega tus imágenes reales cuando las tengas -->
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Cartagena</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Cartagena</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Punta Cana</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Punta Cana</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Cancún</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Cancún</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Varadero</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                        <div class="col-lg-6"><div class="destination-img"><img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt=""><div class="destination-overlay p-4"><h4 class="text-white mb-2 mt-3">Varadero</h4><a href="#" class="btn-hover text-white">Ver destino <i class="fa fa-arrow-right ms-2"></i></a></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN DESTINATIONS ========== -->


<!-- ========== BOOKING ========== -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">COTIZADOR ONLINE 2.0</h5>
                <h1 class="text-white mb-4">Online</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?</p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?</p>
                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Registro directo</a>
            </div>
        </div>
    </div>
</div>
<!-- ========== FIN BOOKING ========== -->


<!-- ========== EQUIPO VIDATUR ========== -->
<div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
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
                            'img'    => 'img/images-index/giuliana_portugal_2.jpg',
                            'wa'     => '51999999999',
                        ],
                        [
                            'nombre' => 'Victor',
                            'cargo'  => 'Atencion Al Cliente',
                            'img'    => 'img/images-index/victor_cardenas_atc.jpg',
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

<script>
(function () {
    const track    = document.getElementById('teamTrack');
    const viewport = document.getElementById('teamViewport');
    const btnPrev  = document.getElementById('teamPrev');
    const btnNext  = document.getElementById('teamNext');
    const dotsWrap = document.getElementById('teamDots');

    let current = 0;

    /* ── Slides visibles según ancho ── */
    function visibleSlides() {
        const w = viewport.offsetWidth;
        if (w >= 992) return 4;
        if (w >= 640) return 2;
        return 1;
    }

    const slides = track.querySelectorAll('.team-slide');
    const total  = slides.length;

    /* ── Dots ── */
    function buildDots() {
        dotsWrap.innerHTML = '';
        const pages = Math.ceil(total / visibleSlides());
        for (let i = 0; i < pages; i++) {
            const d = document.createElement('button');
            d.className = 'team-dot' + (i === 0 ? ' active' : '');
            d.addEventListener('click', () => goTo(i * visibleSlides()));
            dotsWrap.appendChild(d);
        }
    }

    /* ── Ir a índice ── */
    function goTo(idx) {
        const vs   = visibleSlides();
        const maxI = Math.max(0, total - vs);
        current    = Math.min(Math.max(idx, 0), maxI);

        const slideW = slides[0].offsetWidth;
        track.style.transform = `translateX(-${current * slideW}px)`;

        /* dots activos */
        const activePage = Math.floor(current / vs);
        dotsWrap.querySelectorAll('.team-dot').forEach((d, i) => {
            d.classList.toggle('active', i === activePage);
        });

        /* flechas */
        btnPrev.disabled = current === 0;
        btnNext.disabled = current >= maxI;
    }

    btnPrev.addEventListener('click', () => goTo(current - visibleSlides()));
    btnNext.addEventListener('click', () => goTo(current + visibleSlides()));

    /* Touch / swipe */
    let startX = 0;
    viewport.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
    viewport.addEventListener('touchend', e => {
        const diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(current + (diff > 0 ? visibleSlides() : -visibleSlides()));
    });

    /* Recalcular en resize */
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => { buildDots(); goTo(0); }, 150);
    });

    buildDots();
    goTo(0);
})();
</script>


<!-- ========== TESTIMONIAL ========== -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
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
                <div style="margin-top: -35px;">
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
                <div style="margin-top: -35px;">
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
                <div style="margin-top: -35px;">
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
                <div style="margin-top: -35px;">
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

</body>
</html>