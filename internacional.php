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
                <i class="fa fa-compass"></i> Explora por Destino
            </div>
            <div class="intl-explorer__grid">

                <a class="intl-explorer__item" href="#" onclick="filterByPais('argentina'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/ar.png" alt="Argentina">
                    <span>Argentina</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('brasil'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/br.png" alt="Brasil">
                    <span>Brasil</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('chile'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/cl.png" alt="Chile">
                    <span>Chile</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('colombia'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/co.png" alt="Colombia">
                    <span>Colombia</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('ecuador'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/ec.png" alt="Ecuador">
                    <span>Ecuador</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('uruguay'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/uy.png" alt="Uruguay">
                    <span>Uruguay</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('mexico'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/mx.png" alt="México">
                    <span>México</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('eeuu'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/us.png" alt="EE.UU.">
                    <span>EE.UU.</span>
                </a>

                <a class="intl-explorer__item" href="#" onclick="filterByPais('panama'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/pa.png" alt="Panamá">
                    <span>Panamá</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('dominicana'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/do.png" alt="R. Dominicana">
                    <span>R. Dominicana</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('aruba'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/aw.png" alt="Aruba">
                    <span>Aruba</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('curacao'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/cw.png" alt="Curaçao">
                    <span>Curaçao</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('jamaica'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/jm.png" alt="Jamaica">
                    <span>Jamaica</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('bahamas'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/bs.png" alt="Bahamas">
                    <span>Bahamas</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('costarica'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/cr.png" alt="Costa Rica">
                    <span>Costa Rica</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByPais('cuba'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/cu.png" alt="Cuba">
                    <span>Cuba</span>
                </a>

                <a class="intl-explorer__item" href="#" onclick="filterByContinente('europa'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/europe.png" alt="Europa">
                    <span>Europa</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByContinente('asia'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/asia.png" alt="Asia">
                    <span>Asia</span>
                </a>
                <a class="intl-explorer__item" href="#" onclick="filterByContinente('africa'); return false;">
                    <img class="intl-explorer__flag" src="img/images-paises/africa.png" alt="Africa">
                    <span>Africa</span>
                </a>
        
                <a class="intl-explorer__btn-all" href="#" onclick="resetFiltros(); return false;">
                    <i class="fa fa-globe"></i>
                    <span>Ver Todos</span>
                </a>

            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">

            <!-- Título de sección -->
            <div class="text-center mb-5">
                <h5 class="section-title px-3">Internacional</h5>
                <h1 class="mb-2">Paquetes Destacados</h1>
                <p class="text-muted">Ofertas exclusivas por tiempo limitado en los destinos más buscados.</p>
            </div>

            <!-- ── Filtros de Continente ── -->
            <div class="intl-filters" id="filtrosContinente">
                <button class="intl-filter-btn active" data-continente="all" onclick="filterByContinente('all')">
                    🌍 Todos
                </button>
                <button class="intl-filter-btn" data-continente="america" onclick="filterByContinente('america')">
                    🌎 América
                </button>
                <button class="intl-filter-btn" data-continente="europa" onclick="filterByContinente('europa')">
                    🏰 Europa
                </button>
                <button class="intl-filter-btn" data-continente="asia" onclick="filterByContinente('asia')">
                    🏯 Asia
                </button>
                <button class="intl-filter-btn" data-continente="africa" onclick="filterByContinente('africa')">
                    🌿 África
                </button>
                <button class="intl-filter-btn" data-continente="oceania" onclick="filterByContinente('oceania')">
                    🐨 Oceanía
                </button>
            </div>

            <!-- ── Sub-filtros América ── -->
            <div class="intl-subfilters" id="subFiltrosAmerica">
                <button class="intl-subfilter-btn" data-sub="norteamerica" onclick="filterBySub('norteamerica')">Norteamérica</button>
                <button class="intl-subfilter-btn" data-sub="centroamerica" onclick="filterBySub('centroamerica')">Centroamérica</button>
                <button class="intl-subfilter-btn" data-sub="caribe" onclick="filterBySub('caribe')">Caribe</button>
                <button class="intl-subfilter-btn" data-sub="sudamerica" onclick="filterBySub('sudamerica')">Sudamérica</button>
            </div>

            <!-- Contador de resultados -->
            <p class="intl-results-count" id="resultsCount">
                Mostrando <strong id="countNum">0</strong> destinos
            </p>

            <!-- ══════════════════════════════════════
                 GRID DE PAÍSES
            ══════════════════════════════════════ -->
            <div class="intl-grid" id="intlGrid">

                <!-- ─────────── NORTEAMÉRICA ─────────── -->

                <!-- EE.UU. -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="norteamerica"
                     data-pais="eeuu">
                    <span class="country-card__badge country-card__badge--norteamerica">Norteamérica</span>
                    <a class="country-card" href="destinos.php?pais=eeuu">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/eeuu.jpg" alt="Estados Unidos">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">8 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Estados Unidos</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Norteamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">New York</span>
                                <span class="country-card__tag">Miami</span>
                                <span class="country-card__tag">Las Vegas</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$899</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Canadá -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="norteamerica"
                     data-pais="canada">
                    <span class="country-card__badge country-card__badge--norteamerica">Norteamérica</span>
                    <a class="country-card" href="destinos.php?pais=canada">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/canada.jpg" alt="Canadá">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">4 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Canadá</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Norteamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Toronto</span>
                                <span class="country-card__tag">Vancouver</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,199</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- México -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="norteamerica"
                     data-pais="mexico">
                    <span class="country-card__badge country-card__badge--norteamerica">Norteamérica</span>
                    <a class="country-card" href="destinos.php?pais=mexico">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/mexico.jpg" alt="México">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">6 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">México</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Norteamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Cancún</span>
                                <span class="country-card__tag">Riviera Maya</span>
                                <span class="country-card__tag">CDMX</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$799</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── CENTROAMÉRICA ─────────── -->

                <!-- Panamá -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="centroamerica"
                     data-pais="panama">
                    <span class="country-card__badge country-card__badge--centroamerica">Centroamérica</span>
                    <a class="country-card" href="destinos.php?pais=panama">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/panama.jpg" alt="Panamá">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Panamá</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Centroamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Ciudad de Panamá</span>
                                <span class="country-card__tag">Canal</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$650</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Costa Rica -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="centroamerica"
                     data-pais="costarica">
                    <span class="country-card__badge country-card__badge--centroamerica">Centroamérica</span>
                    <a class="country-card" href="destinos.php?pais=costarica">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/costarica.jpg" alt="Costa Rica">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">4 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Costa Rica</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Centroamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Ecoturismo</span>
                                <span class="country-card__tag">Naturaleza</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$720</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── CARIBE ─────────── -->

                <!-- R. Dominicana -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="caribe"
                     data-pais="dominicana">
                    <span class="country-card__badge country-card__badge--caribe">Caribe</span>
                    <a class="country-card" href="destinos.php?pais=dominicana">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/dominicana.jpg" alt="República Dominicana">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">5 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Rep. Dominicana</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Caribe</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Punta Cana</span>
                                <span class="country-card__tag">Todo incluido</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$849</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Aruba -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="caribe"
                     data-pais="aruba">
                    <span class="country-card__badge country-card__badge--caribe">Caribe</span>
                    <a class="country-card" href="destinos.php?pais=aruba">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/aruba.jpg" alt="Aruba">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Aruba</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Caribe</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Playa</span>
                                <span class="country-card__tag">Todo incluido</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$950</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Jamaica -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="caribe"
                     data-pais="jamaica">
                    <span class="country-card__badge country-card__badge--caribe">Caribe</span>
                    <a class="country-card" href="destinos.php?pais=jamaica">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/jamaica.jpg" alt="Jamaica">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Jamaica</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Caribe</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Montego Bay</span>
                                <span class="country-card__tag">Reggae</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$880</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── SUDAMÉRICA ─────────── -->

                <!-- Argentina -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="sudamerica"
                     data-pais="argentina">
                    <span class="country-card__badge country-card__badge--sudamerica">Sudamérica</span>
                    <a class="country-card" href="destinos.php?pais=argentina">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/argentina.jpg" alt="Argentina">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">5 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Argentina</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Sudamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Buenos Aires</span>
                                <span class="country-card__tag">Patagonia</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$750</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Brasil -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="sudamerica"
                     data-pais="brasil">
                    <span class="country-card__badge country-card__badge--sudamerica">Sudamérica</span>
                    <a class="country-card" href="destinos.php?pais=brasil">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/brasil.jpg" alt="Brasil">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">4 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Brasil</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Sudamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Río de Janeiro</span>
                                <span class="country-card__tag">São Paulo</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$820</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Colombia -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="sudamerica"
                     data-pais="colombia">
                    <span class="country-card__badge country-card__badge--sudamerica">Sudamérica</span>
                    <a class="country-card" href="destinos.php?pais=colombia">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/colombia.jpg" alt="Colombia">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">4 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Colombia</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Sudamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Cartagena</span>
                                <span class="country-card__tag">Bogotá</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$690</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Chile -->
                <div class="intl-country-card"
                     data-continente="america"
                     data-subregion="sudamerica"
                     data-pais="chile">
                    <span class="country-card__badge country-card__badge--sudamerica">Sudamérica</span>
                    <a class="country-card" href="destinos.php?pais=chile">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/chile.jpg" alt="Chile">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Chile</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Sudamérica</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Santiago</span>
                                <span class="country-card__tag">Torres del Paine</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$680</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── EUROPA ─────────── -->

                <!-- Francia -->
                <div class="intl-country-card"
                     data-continente="europa"
                     data-subregion="europa"
                     data-pais="francia">
                    <span class="country-card__badge country-card__badge--europa">Europa</span>
                    <a class="country-card" href="destinos.php?pais=francia">
                        <div class="country-card__img-wrap">
                            <img src="img/paris.jpg" alt="Francia">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">5 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Francia</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Europa</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">París</span>
                                <span class="country-card__tag">Niza</span>
                                <span class="country-card__tag">Lyon</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,499</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- España -->
                <div class="intl-country-card"
                     data-continente="europa"
                     data-subregion="europa"
                     data-pais="espana">
                    <span class="country-card__badge country-card__badge--europa">Europa</span>
                    <a class="country-card" href="destinos.php?pais=espana">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/espana.jpg" alt="España">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">6 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">España</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Europa</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Madrid</span>
                                <span class="country-card__tag">Barcelona</span>
                                <span class="country-card__tag">Sevilla</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,299</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Italia -->
                <div class="intl-country-card"
                     data-continente="europa"
                     data-subregion="europa"
                     data-pais="italia">
                    <span class="country-card__badge country-card__badge--europa">Europa</span>
                    <a class="country-card" href="destinos.php?pais=italia">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/italia.jpg" alt="Italia">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">4 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Italia</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Europa</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Roma</span>
                                <span class="country-card__tag">Venecia</span>
                                <span class="country-card__tag">Florencia</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,399</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── ASIA ─────────── -->

                <!-- Japón -->
                <div class="intl-country-card"
                     data-continente="asia"
                     data-subregion="asia"
                     data-pais="japon">
                    <span class="country-card__badge country-card__badge--asia">Asia</span>
                    <a class="country-card" href="destinos.php?pais=japon">
                        <div class="country-card__img-wrap">
                            <img src="img/tokyo.jpg" alt="Japón">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">4 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Japón</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Asia</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Tokio</span>
                                <span class="country-card__tag">Kioto</span>
                                <span class="country-card__tag">Osaka</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,299</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- India -->
                <div class="intl-country-card"
                     data-continente="asia"
                     data-subregion="asia"
                     data-pais="india">
                    <span class="country-card__badge country-card__badge--asia">Asia</span>
                    <a class="country-card" href="destinos.php?pais=india">
                        <div class="country-card__img-wrap">
                            <img src="img/packages-4.jpg" alt="India">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">India</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Asia</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Taj Mahal</span>
                                <span class="country-card__tag">Rajastán</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,150</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Tailandia -->
                <div class="intl-country-card"
                     data-continente="asia"
                     data-subregion="asia"
                     data-pais="tailandia">
                    <span class="country-card__badge country-card__badge--asia">Asia</span>
                    <a class="country-card" href="destinos.php?pais=tailandia">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/tailandia.jpg" alt="Tailandia">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Tailandia</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Asia</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Bangkok</span>
                                <span class="country-card__tag">Phuket</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,350</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── ÁFRICA ─────────── -->

                <!-- Marruecos -->
                <div class="intl-country-card"
                     data-continente="africa"
                     data-subregion="africa"
                     data-pais="marruecos">
                    <span class="country-card__badge country-card__badge--africa">África</span>
                    <a class="country-card" href="destinos.php?pais=marruecos">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/marruecos.jpg" alt="Marruecos">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Marruecos</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> África</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Marrakech</span>
                                <span class="country-card__tag">Sáhara</span>
                                <span class="country-card__tag">Fez</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,100</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Egipto -->
                <div class="intl-country-card"
                     data-continente="africa"
                     data-subregion="africa"
                     data-pais="egipto">
                    <span class="country-card__badge country-card__badge--africa">África</span>
                    <a class="country-card" href="destinos.php?pais=egipto">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/egipto.jpg" alt="Egipto">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">2 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Egipto</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> África</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">El Cairo</span>
                                <span class="country-card__tag">Pirámides</span>
                                <span class="country-card__tag">Luxor</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$1,250</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ─────────── OCEANÍA ─────────── -->

                <!-- Australia -->
                <div class="intl-country-card"
                     data-continente="oceania"
                     data-subregion="oceania"
                     data-pais="australia">
                    <span class="country-card__badge country-card__badge--oceania">Oceanía</span>
                    <a class="country-card" href="destinos.php?pais=australia">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/australia.jpg" alt="Australia">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">3 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Australia</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Oceanía</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Sídney</span>
                                <span class="country-card__tag">Melbourne</span>
                                <span class="country-card__tag">Gran Barrera</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$2,199</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Nueva Zelanda -->
                <div class="intl-country-card"
                     data-continente="oceania"
                     data-subregion="oceania"
                     data-pais="nuevazelanda">
                    <span class="country-card__badge country-card__badge--oceania">Oceanía</span>
                    <a class="country-card" href="destinos.php?pais=nuevazelanda">
                        <div class="country-card__img-wrap">
                            <img src="img/destinos/nuevazelanda.jpg" alt="Nueva Zelanda">
                            <div class="country-card__overlay"></div>
                            <span class="country-card__pkg-count">2 paquetes</span>
                        </div>
                        <div class="country-card__body">
                            <div class="country-card__name">Nueva Zelanda</div>
                            <div class="country-card__region"><i class="fa fa-map-marker-alt"></i> Oceanía</div>
                            <div class="country-card__tags">
                                <span class="country-card__tag">Auckland</span>
                                <span class="country-card__tag">Fiordos</span>
                            </div>
                            <div class="country-card__footer">
                                <div>
                                    <div class="country-card__price-from">Desde</div>
                                    <div class="country-card__price">$2,450</div>
                                </div>
                                <span class="country-card__cta">Ver más</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Estado vacío -->
                <div class="intl-empty" id="emptyState">
                    <i class="fa fa-search"></i>
                    No hay destinos disponibles en esta categoría por el momento.
                </div>

            </div><!-- /intl-grid -->

        </div>
    </div>

    <div class="container pb-5">
        <div class="intl-cta">
            <div class="intl-cta__text">
                <h2>¿No encuentras tu destino ideal?</h2>
                <p>Nuestros asesores expertos pueden diseñar un itinerario a tu medida. Suscríbete para recibir ofertas personalizadas.</p>
                <div class="intl-cta__badges">
                    <div class="intl-cta__badge">
                        <i class="fa fa-headset"></i>
                        Soporte 24/7
                    </div>
                    <div class="intl-cta__badge">
                        <i class="fa fa-shield-alt"></i>
                        Pago Seguro
                    </div>
                    <div class="intl-cta__badge">
                        <i class="fa fa-star"></i>
                        +20 años
                    </div>
                </div>
            </div>
            <div>
                <div class="intl-cta__form">
                    <input class="intl-cta__input" type="email" placeholder="Tu correo electrónico">
                    <button class="intl-cta__submit">Suscribirme</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?>
    <?php require_once 'includes/scripts.php'; ?>

    <!-- =====================================================
         JS — Filtros de continente y país
    ===================================================== -->
    <script>
    (function () {

        /* ── Estado ── */
        var continenteActivo = 'all';
        var subActiva        = null;

        /* ── Referencias DOM ── */
        var cards        = document.querySelectorAll('.intl-country-card');
        var countNum     = document.getElementById('countNum');
        var emptyState   = document.getElementById('emptyState');
        var subFilters   = document.getElementById('subFiltrosAmerica');

        /* ── Inicializar contador ── */
        updateCount();

        /* ═══════════════════════════════════════════
           filterByContinente(val)
           Llamado desde los botones de continente
        ═══════════════════════════════════════════ */
        window.filterByContinente = function (val) {
            continenteActivo = val;
            subActiva        = null;

            /* Botones activos */
            document.querySelectorAll('.intl-filter-btn').forEach(function (btn) {
                btn.classList.toggle('active', btn.dataset.continente === val);
            });

            /* Sub-filtros América */
            if (val === 'america') {
                subFilters.classList.add('visible');
            } else {
                subFilters.classList.remove('visible');
                document.querySelectorAll('.intl-subfilter-btn').forEach(function (b) {
                    b.classList.remove('active');
                });
            }

            aplicarFiltro();
            scrollToGrid();
        };

        /* ═══════════════════════════════════════════
           filterBySub(val)
           Llamado desde los sub-filtros de América
        ═══════════════════════════════════════════ */
        window.filterBySub = function (val) {
            subActiva = val;

            document.querySelectorAll('.intl-subfilter-btn').forEach(function (btn) {
                btn.classList.toggle('active', btn.dataset.sub === val);
            });

            aplicarFiltro();
            scrollToGrid();
        };

        /* ═══════════════════════════════════════════
           filterByPais(pais)
           Llamado desde el Explorer (acceso rápido)
        ═══════════════════════════════════════════ */
        window.filterByPais = function (pais) {
            /* Resetear filtros de continente */
            continenteActivo = 'all';
            subActiva        = null;
            subFilters.classList.remove('visible');
            document.querySelectorAll('.intl-filter-btn').forEach(function (b) {
                b.classList.remove('active');
            });
            document.querySelectorAll('[data-continente="all"]').forEach(function (b) {
                b.classList.add('active');
            });

            /* Mostrar solo el país */
            var visibles = 0;
            cards.forEach(function (card) {
                var mostrar = card.dataset.pais === pais;
                card.classList.toggle('hidden', !mostrar);
                if (mostrar) visibles++;
            });

            emptyState.classList.toggle('visible', visibles === 0);
            countNum.textContent = visibles;
            scrollToGrid();
        };

        /* ═══════════════════════════════════════════
           resetFiltros()
           Llamado desde "Ver Todos" del Explorer
        ═══════════════════════════════════════════ */
        window.resetFiltros = function () {
            filterByContinente('all');
        };

        /* ── Lógica interna de filtrado ── */
        function aplicarFiltro() {
            var visibles = 0;

            cards.forEach(function (card) {
                var continente = card.dataset.continente;
                var sub        = card.dataset.subregion;

                var mostrar = false;

                if (continenteActivo === 'all') {
                    mostrar = true;
                } else if (continenteActivo === 'america') {
                    if (subActiva) {
                        mostrar = continente === 'america' && sub === subActiva;
                    } else {
                        mostrar = continente === 'america';
                    }
                } else {
                    mostrar = continente === continenteActivo;
                }

                card.classList.toggle('hidden', !mostrar);
                if (mostrar) visibles++;
            });

            emptyState.classList.toggle('visible', visibles === 0);
            countNum.textContent = visibles;
        }

        function updateCount() {
            countNum.textContent = cards.length;
        }

        function scrollToGrid() {
            var grid = document.getElementById('intlGrid');
            if (grid) {
                grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

    })();
    </script>

</body>
</html>