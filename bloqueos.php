<?php
$pageTitle  = 'Bloqueos';
$activePage = 'bloqueos';

require_once 'includes/head.php';
require_once '../vid-cms/config/database.php';

/* =========================================================
   PROGRAMAS
========================================================= */

$sql = "

SELECT 
    p.*,
    pr.archivo AS imagen_pr,
    GROUP_CONCAT(DISTINCT cat.nombre ORDER BY cat.nombre SEPARATOR '||') AS categorias_nombre,
    GROUP_CONCAT(DISTINCT cat.slug   ORDER BY cat.nombre SEPARATOR '||') AS categorias_slug

FROM programas p

LEFT JOIN programa_categorias pc_rel
ON pc_rel.programa_id = p.id

LEFT JOIN categorias cat
ON cat.id = pc_rel.categoria_id

LEFT JOIN programa_archivos pr
ON pr.programa_id = p.id
AND pr.tipo = 'pr'

WHERE p.estado = 'activo'
AND p.mostrar_en_bloqueos = 1

GROUP BY p.id

ORDER BY p.id DESC

";

$programas = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// Convertir strings concatenados a arrays
foreach ($programas as &$p) {
    $p['categorias_nombre'] = $p['categorias_nombre'] ? explode('||', $p['categorias_nombre']) : [];
    $p['categorias_slug']   = $p['categorias_slug']   ? explode('||', $p['categorias_slug'])   : [];
}
unset($p);

// Construir categorías únicas AQUÍ para que mobile también las use
$categoriasUnicas = [];
foreach ($programas as $p) {
    foreach ($p['categorias_slug'] as $i => $slug) {
        if (!isset($categoriasUnicas[$slug])) {
            $categoriasUnicas[$slug] = $p['categorias_nombre'][$i];
        }
    }
}
ksort($categoriasUnicas);

?>

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

<!-- Header -->
<div class="container-fluid bg-breadcrumb bg-breadcrumb--bloqueos">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Bloqueos</h3>
    </div>
</div>

<!-- Packages -->
<div class="container-fluid packages py-5">

    <div class="container py-5">

        <div class="pkg-layout">

            <!-- =====================================================
                 SIDEBAR
            ====================================================== -->

            <aside class="pkg-sidebar">

                <div class="sidebar-section">

                    <button class="sidebar-section__toggle" onclick="toggleSidebar(this)">
                        <span>Categorías</span>
                        <i class="fa fa-chevron-down"></i>
                    </button>

                    <div class="sidebar-section__body">
                        <ul class="sidebar-list">

                            <li>
                                <button class="sidebar-btn active" onclick="filterPkg(this,'all')">
                                    Todos
                                </button>
                            </li>

                            <?php foreach ($categoriasUnicas as $slug => $nombre): ?>
                            <li>
                                <button
                                    class="sidebar-btn"
                                    onclick="filterPkg(this,'<?= $slug ?>')"
                                >
                                    <?= $nombre ?>
                                    <span class="dest-count" id="count-<?= $slug ?>"></span>
                                </button>
                            </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                </div>

            </aside>

            <!-- =====================================================
                 CONTENT
            ====================================================== -->

            <div class="pkg-content">

                <!-- Mobile Filters -->
                <div class="pkg-filters pkg-filters--mobile mb-4">

                    <button class="btn-filter active" onclick="filterPkg(this,'all')">
                        Todos
                    </button>

                    <?php foreach ($categoriasUnicas as $slug => $nombre): ?>
                    <button class="btn-filter" onclick="filterPkg(this,'<?= $slug ?>')">
                        <?= $nombre ?>
                    </button>
                    <?php endforeach; ?>

                </div>

                <!-- Resultado -->
                <p class="pkg-result-count mb-3" id="pkgResultCount"></p>

                <!-- GRID -->
                <h4 class="pkg-section-title">Programas & Bloqueos</h4>

                <div class="pkg-grid">

                    <?php foreach($programas as $programa): ?>

                    <?php

                    $rutaPrograma = $programa['ruta_php'];

                    $dirPrograma = dirname($programa['ruta_php']) . '/';

                    $imagen = !empty($programa['imagen_pr'])
                        ? $dirPrograma . 'img/' . $programa['imagen_pr']
                        : '/vid-demo/img/no-image.jpg';

                    ?>

                    <div

                    class="pkg-card"

                    data-cat="
                    <?= strtolower($programa['tipo_programa']) ?>
                    <?= implode(' ', array_map('strtolower', $programa['categorias_slug'])) ?>
                    "

                    >

                        <!-- Imagen -->
                        <a
                        class="pkg-card__img-link"
                        href="<?= $rutaPrograma ?>"
                        >

                            <img
                            src="<?= $imagen ?>"
                            alt="<?= $programa['titulo'] ?>"
                            >

                        </a>

                        <!-- Body -->
                        <div class="pkg-card__body">

                            <a
                            class="pkg-card__title-link"
                            href="<?= $rutaPrograma ?>"
                            >

                                <div class="pkg-card__title">
                                    <?= $programa['titulo'] ?>
                                </div>

                            </a>

                            <!-- Fecha -->
                            <div class="pkg-card__urgency">

                                Para comprar hasta

                                <span>
                                    <?= $programa['fecha_limite_texto'] ?>
                                </span>

                            </div>

                            <!-- Meta -->
                            <div class="pkg-card__meta">

                                <span class="pkg-card__airline">                                   

                                    <?= $programa['aerolinea'] ?>

                                </span>

                            </div>

                            <!-- Actions -->
                            <div class="pkg-card__actions">

                                <a
                                class="pkg-card__btn--outline"
                                href="<?= $rutaPrograma ?>"
                                >
                                    Ver detalles
                                </a>

                            </div>

                        </div>

                    </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- WhatsApp -->
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

<?php require_once 'includes/scripts.php'; ?>

<script src="js/whatsapp-cotizar.js"></script>

<script>

/* =========================================================
   SIDEBAR TOGGLE
========================================================= */

function toggleSidebar(btn) {

    const body = btn.nextElementSibling;
    const icon = btn.querySelector('.fa');

    body.classList.toggle('open');

    icon.classList.toggle('fa-chevron-up');
    icon.classList.toggle('fa-chevron-down');

}

/* =========================================================
   FILTER
========================================================= */

function filterPkg(btn, cat) {

    document.querySelectorAll('.sidebar-btn, .btn-filter')
    .forEach(b => b.classList.remove('active'));

    document.querySelectorAll(`[onclick="filterPkg(this,'${cat}')"]`)
    .forEach(b => b.classList.add('active'));

    const cards = document.querySelectorAll('.pkg-card');

    let visible = 0;

    cards.forEach(card => {

        const show =
            cat === 'all'
            || card.dataset.cat.includes(cat);

        card.style.display = show ? '' : 'none';

        if(show){
            visible++;
        }

    });

    const counter = document.getElementById('pkgResultCount');

    counter.textContent =
        cat === 'all'
        ? ''
        : `${visible} resultado${visible !== 1 ? 's' : ''}`;

}

/* =========================================================
   CONTADORES
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const cards = document.querySelectorAll('.pkg-card');

    const counts = {};

    cards.forEach(card => {

        const categories = card.dataset.cat.trim().split(/\s+/);

        categories.forEach(cat => {

            if (!cat) return;

            if(!counts[cat]){
                counts[cat] = 0;
            }

            counts[cat]++;

        });

    });

    Object.keys(counts).forEach(cat => {

        const el = document.getElementById('count-' + cat);

        if(el){

            el.textContent = counts[cat];

        }

    });

});

/* =========================================================
   INIT — abrir todos los paneles al cargar
========================================================= */

document.querySelectorAll('.sidebar-section__body')
.forEach(b => b.classList.add('open'));

document.querySelectorAll('.sidebar-section__toggle .fa')
.forEach(i => {

    i.classList.remove('fa-chevron-down');
    i.classList.add('fa-chevron-up');

});

</script>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>