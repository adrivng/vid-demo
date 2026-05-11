<?php
$pageTitle  = 'Bloqueos';
$activePage = 'bloqueos';
require_once 'includes/head.php';
?>
        <!-- Para pag bloqueos -->
     <link href="css/bloqueos.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php require_once 'includes/header.php'; ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb bg-breadcrumb--bloqueos">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Bloqueos</h3>
            <ol class="breadcrumb justify-content-center mb-0"></ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">

            <div class="mx-auto text-center mb-4" style="max-width:900px;">
                <!-- <h1 class="section-title px-3">Bloqueos</h1> -->
                <!-- <h1 class="mb-0">Programas y Paquetes Armados</h1> -->
            </div>

            <!-- Layout: Sidebar + Content -->
            <div class="pkg-layout">

                <!-- ======= SIDEBAR ======= -->
                <aside class="pkg-sidebar">

                    <!-- Filtros rápidos (móvil: se colapsa) -->
                    <div class="sidebar-section">
                        <button class="sidebar-section__toggle" onclick="toggleSidebar(this)">
                            <span>Categorías</span>
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <div class="sidebar-section__body">
                            <ul class="sidebar-list">
                                <li><button class="sidebar-btn active" onclick="filterPkg(this,'all')">Todos</button></li>
                                <li><button class="sidebar-btn" onclick="filterPkg(this,'confirmadas')">Salidas Confirmadas</button></li>
                                <li><button class="sidebar-btn" onclick="filterPkg(this,'cyber')">Cyber</button></li>
                                <li><button class="sidebar-btn" onclick="filterPkg(this,'semana-santa')">Semana Santa</button></li>
                                <li><button class="sidebar-btn" onclick="filterPkg(this,'fiestas-patrias')">Fiestas Patrias</button></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Destinos -->
                    <div class="sidebar-section">
                        <button class="sidebar-section__toggle" onclick="toggleSidebar(this)">
                            <span>Destinos</span>
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <div class="sidebar-section__body">
                            <ul class="sidebar-list sidebar-list--destinations">
                                <!-- Norteamérica -->
                                <li class="dest-parent">
                                    <button class="sidebar-btn sidebar-btn--dest" onclick="filterPkg(this,'norteamerica')">
                                        Norteamérica
                                        <span class="dest-count" id="count-norteamerica"></span>
                                    </button>
                                    <ul class="dest-children">
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'miami')">Miami</button></li>
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'cancun')">Cancún</button></li>
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'nueva-york')">Nueva York</button></li>
                                    </ul>
                                </li>
                                <!-- Centroamérica / Caribe -->
                                <li class="dest-parent">
                                    <button class="sidebar-btn sidebar-btn--dest" onclick="filterPkg(this,'centroamerica')">
                                        Caribe &amp; Centroamérica
                                        <span class="dest-count" id="count-centroamerica"></span>
                                    </button>
                                    <ul class="dest-children">
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'punta-cana')">Punta Cana</button></li>
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'aruba')">Aruba</button></li>
                                    </ul>
                                </li>
                                <!-- Sudamérica -->
                                <li class="dest-parent">
                                    <button class="sidebar-btn sidebar-btn--dest" onclick="filterPkg(this,'sudamerica')">
                                        Sudamérica
                                        <span class="dest-count" id="count-sudamerica"></span>
                                    </button>
                                    <ul class="dest-children">
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'rio')">Río de Janeiro</button></li>
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'cartagena')">Cartagena</button></li>
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'machu-picchu')">Machu Picchu</button></li>
                                    </ul>
                                </li>
                                <!-- Europa -->
                                <li class="dest-parent">
                                    <button class="sidebar-btn sidebar-btn--dest" onclick="filterPkg(this,'europa')">
                                        Europa
                                        <span class="dest-count" id="count-europa"></span>
                                    </button>
                                    <ul class="dest-children">
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'europa-clasica')">Circuitos Clásicos</button></li>
                                    </ul>
                                </li>
                                <!-- Asia -->
                                <li class="dest-parent">
                                    <button class="sidebar-btn sidebar-btn--dest" onclick="filterPkg(this,'asia')">
                                        Asia
                                        <span class="dest-count" id="count-asia"></span>
                                    </button>
                                    <ul class="dest-children">
                                        <li><button class="sidebar-btn sidebar-btn--child" onclick="filterPkg(this,'india')">India</button></li>
                                    </ul>
                                </li>
                                <!-- Nacionales -->
                                <li class="dest-parent">
                                    <button class="sidebar-btn sidebar-btn--dest" onclick="filterPkg(this,'nacionales')">
                                        Nacionales
                                        <span class="dest-count" id="count-nacionales"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                </aside>
                <!-- /SIDEBAR -->

                <!-- ======= CONTENT ======= -->
                <div class="pkg-content">

                    <!-- Filtros pill (desktop oculta, mobile muestra) -->
                    <div class="pkg-filters pkg-filters--mobile mb-4">
                        <button class="btn-filter active" onclick="filterPkg(this,'all')">Todos</button>
                        <button class="btn-filter" onclick="filterPkg(this,'norteamerica')">Norteamérica</button>
                        <button class="btn-filter" onclick="filterPkg(this,'centroamerica')">Centroamérica</button>
                        <button class="btn-filter" onclick="filterPkg(this,'sudamerica')">Sudamérica</button>
                        <button class="btn-filter" onclick="filterPkg(this,'europa')">Europa</button>
                        <button class="btn-filter" onclick="filterPkg(this,'asia')">Asia</button>
                        <button class="btn-filter" onclick="filterPkg(this,'semana-santa')">Semana Santa</button>
                        <button class="btn-filter" onclick="filterPkg(this,'fiestas-patrias')">Fiestas Patrias</button>
                        <button class="btn-filter" onclick="filterPkg(this,'confirmadas')">Salidas Confirmadas</button>
                        <button class="btn-filter" onclick="filterPkg(this,'cyber')">Cyber</button>
                        <button class="btn-filter" onclick="filterPkg(this,'nacionales')">Nacionales</button>
                    </div>

                    <!-- Resultado count -->
                    <p class="pkg-result-count mb-3" id="pkgResultCount"></p>

                    <!-- ======= Salidas Confirmadas ======= -->
                    <h4 class="pkg-section-title">Salidas Confirmadas</h4>
                    <div class="pkg-grid mb-5">

                        <div class="pkg-card" data-cat="confirmadas">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=punta-cana-confirmada">
                                <img src="img/packages-2.jpg" alt="Punta Cana">
                                <span class="pkg-card__tag">Salida Confirmada</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=punta-cana-confirmada">
                                    <div class="pkg-card__title">Salidas Conf. Punta Cana</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>10 May. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>LATAM</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Salidas Confirmadas Punta Cana')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=punta-cana-confirmada">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="confirmadas">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=rio-confirmada">
                                <img src="img/packages-3.jpg" alt="Río de Janeiro">
                                <span class="pkg-card__tag">Salida Confirmada</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=rio-confirmada">
                                    <div class="pkg-card__title">Salidas Conf. Río de Janeiro</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>10 May. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>LATAM</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Salidas Confirmadas Río de Janeiro')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=rio-confirmada">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="confirmadas">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=aruba-confirmada">
                                <img src="img/packages-1.jpg" alt="Aruba">
                                <span class="pkg-card__tag">Salida Confirmada</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=aruba-confirmada">
                                    <div class="pkg-card__title">Salidas Conf. Aruba</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>10 May. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>LATAM</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Salidas Confirmadas Aruba')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=aruba-confirmada">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- ======= Más Destinos ======= -->
                    <h4 class="pkg-section-title">Más Destinos</h4>
                    <div class="pkg-grid">

                        <div class="pkg-card" data-cat="asia">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=india">
                                <img src="img/packages-4.jpg" alt="Joyas de la India">
                                <span class="pkg-card__tag">Asia</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=india">
                                    <div class="pkg-card__title">Joyas de la India</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>20 May. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>Avianca</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Joyas de la India')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=india">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="sudamerica">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=cartagena-confirmada">
                                <img src="img/packages-2.jpg" alt="Cartagena">
                                <span class="pkg-card__tag">Sudamérica</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=cartagena-confirmada">
                                    <div class="pkg-card__title">Salidas Conf. Cartagena</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>10 May. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>LATAM</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Cartagena Salida Confirmada')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=cartagena-confirmada">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="fiestas-patrias">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=cancun-fiestas">
                                <img src="img/packages-3.jpg" alt="Cancún Fiestas Patrias">
                                <span class="pkg-card__tag">Fiestas Patrias</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=cancun-fiestas">
                                    <div class="pkg-card__title">Cancún — Fiestas Patrias</div>
                                </a>
                                <div class="pkg-card__urgency"><span>¡Cupos muy limitados!</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>LATAM</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Cancún Fiestas Patrias')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=cancun-fiestas">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="cyber">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=miami-cyber">
                                <img src="img/packages-1.jpg" alt="Miami Cyber">
                                <span class="pkg-card__tag">Cyber</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=miami-cyber">
                                    <div class="pkg-card__title">Miami — Oferta Cyber</div>
                                </a>
                                <div class="pkg-card__urgency">Precio válido solo <span>esta semana</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>American</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Miami Oferta Cyber')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=miami-cyber">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="europa">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=europa-clasica">
                                <img src="img/packages-4.jpg" alt="Europa Clásica">
                                <span class="pkg-card__tag">Europa</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=europa-clasica">
                                    <div class="pkg-card__title">Europa Clásica — 10 días</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>30 Jun. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>Iberia</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Europa Clásica 10 días')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=europa-clasica">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <div class="pkg-card" data-cat="semana-santa">
                            <a class="pkg-card__img-link" href="detalle-paquete.php?id=machu-picchu-semana-santa">
                                <img src="img/packages-2.jpg" alt="Machu Picchu Semana Santa">
                                <span class="pkg-card__tag">Semana Santa</span>
                            </a>
                            <div class="pkg-card__body">
                                <a class="pkg-card__title-link" href="detalle-paquete.php?id=machu-picchu-semana-santa">
                                    <div class="pkg-card__title">Machu Picchu — Semana Santa</div>
                                </a>
                                <div class="pkg-card__urgency">Para comprar hasta <span>15 Mar. 2026</span></div>
                                <div class="pkg-card__meta">
                                    <span class="pkg-card__airline"><i class="fa fa-plane-departure me-1"></i>LATAM</span>
                                </div>
                                <div class="pkg-card__actions">
                                    <button class="pkg-card__btn" onclick="openWA('Machu Picchu Semana Santa')">Cotizar</button>
                                    <a class="pkg-card__btn--outline" href="detalle-paquete.php?id=machu-picchu-semana-santa">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /pkg-grid -->

                </div>
                <!-- /pkg-content -->

            </div>
            <!-- /pkg-layout -->

        </div>
    </div>
    <!-- Packages End -->


    <!-- ================  POPUP WHATSAPP  ================ -->
    <div class="wa-overlay" id="waOverlay" onclick="closeWAOutside(event)">
        <div class="wa-modal">
            <button class="wa-modal__close" onclick="closeWA()">&#x2715;</button>
            <div class="wa-modal__icon"><i class="fab fa-whatsapp"></i></div>
            <h5>Habla con nuestros expertos</h5>
            <p id="waSubtitle">Un asesor te atiende ahora mismo.</p>

            <a class="wa-agent" id="waLink1" href="#" target="_blank" rel="noopener">
                <div class="wa-agent__avatar">A</div>
                <div class="wa-agent__info">
                    <strong>Andrea Ramos</strong>
                    <span>Experta en Caribe y Sudamérica</span>
                </div>
                <i class="fa fa-chevron-right wa-agent__arrow"></i>
            </a>
            <a class="wa-agent" id="waLink2" href="#" target="_blank" rel="noopener">
                <div class="wa-agent__avatar">C</div>
                <div class="wa-agent__info">
                    <strong>Carlos Mendoza</strong>
                    <span>Especialista en Europa y Asia</span>
                </div>
                <i class="fa fa-chevron-right wa-agent__arrow"></i>
            </a>
            <a class="wa-agent" id="waLink3" href="#" target="_blank" rel="noopener">
                <div class="wa-agent__avatar">L</div>
                <div class="wa-agent__info">
                    <strong>Lucía Torres</strong>
                    <span>Asesora Internacional y Nacional</span>
                </div>
                <i class="fa fa-chevron-right wa-agent__arrow"></i>
            </a>

            <div class="wa-modal__footer">🔒 Atención personalizada · Sin costo adicional</div>
        </div>
    </div>

    <!-- JS externo -->
    <?php require_once 'includes/scripts.php'; ?>
    <script src="js/whatsapp-cotizar.js"></script>

    <script>
    /* ===== Sidebar toggle (acordeón) ===== */
    function toggleSidebar(btn) {
        const body = btn.nextElementSibling;
        const icon = btn.querySelector('.fa');
        body.classList.toggle('open');
        icon.classList.toggle('fa-chevron-up');
        icon.classList.toggle('fa-chevron-down');
    }

    /* ===== Filtro de paquetes ===== */
    function filterPkg(btn, cat) {
        /* Marca el botón activo en TODOS los grupos de botones */
        document.querySelectorAll('.sidebar-btn, .btn-filter').forEach(b => b.classList.remove('active'));
        /* Activar todos los botones con el mismo onclick */
        document.querySelectorAll(`[onclick="filterPkg(this,'${cat}')"]`).forEach(b => b.classList.add('active'));

        const cards = document.querySelectorAll('.pkg-card');
        let visible = 0;
        cards.forEach(card => {
            const show = cat === 'all' || card.dataset.cat === cat;
            card.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        /* Ocultar/mostrar h4 de sección si todos sus hijos están ocultos */
        document.querySelectorAll('.pkg-grid').forEach(grid => {
            const visibleInGrid = [...grid.querySelectorAll('.pkg-card')].some(c => c.style.display !== 'none');
            const title = grid.previousElementSibling;
            if (title && title.classList.contains('pkg-section-title')) {
                title.style.display = visibleInGrid ? '' : 'none';
            }
        });

        const counter = document.getElementById('pkgResultCount');
        counter.textContent = cat === 'all' ? '' : `${visible} resultado${visible !== 1 ? 's' : ''} encontrado${visible !== 1 ? 's' : ''}`;
    }

    /* Abrir sub-destinos con clic en padre */
    document.querySelectorAll('.sidebar-btn--dest').forEach(btn => {
        btn.addEventListener('click', () => {
            const children = btn.parentElement.querySelector('.dest-children');
            if (children) children.classList.toggle('open');
        });
    });

    /* Inicializar sidebar secciones abiertas */
    document.querySelectorAll('.sidebar-section__body').forEach(b => b.classList.add('open'));
    document.querySelectorAll('.sidebar-section__toggle .fa').forEach(i => {
        i.classList.remove('fa-chevron-down');
        i.classList.add('fa-chevron-up');
    });
    </script>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>