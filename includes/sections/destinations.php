<?php
/**
 * vid-demo/includes/sections/destinations.php
 *
 * Sección "Destinos Populares" del index.php
 * Muestra las imágenes PR de los programas activos agrupadas por país.
 *
 * CÓMO INCLUIR en index.php:
 *   <?php require_once 'includes/sections/destinations.php'; ?>
 *
 * LÓGICA:
 *   - Trae todos los programas activos que tengan imagen PR
 *   - Los agrupa por país
 *   - Genera un tab por cada país (máximo $MAX_TABS tabs)
 *   - Dentro de cada tab muestra las miniaturas PR de ese país
 *
 * ESCALABILIDAD:
 *   - Agrega programas desde el CMS → aparecen aquí solos
 *   - Cambia $MAX_TABS para mostrar más o menos tabs
 *   - Cambia $MAX_CARDS_POR_TAB para limitar miniaturas por tab
 */

/* Reutilizar $pdo si index.php ya conectó; si no, conectar aquí */
if (!isset($pdo)) {
    require_once __DIR__ . '/../../../vid-cms/config/database.php';
}
/* ── Configuración ── */
$MAX_TABS          = 8;   // máximo de tabs de países visibles
$MAX_CARDS_POR_TAB = 6;   // máximo de programas por tab

/* ── Query: programas activos con imagen PR, agrupados por país ── */
$sql = "
    SELECT
        p.id,
        p.titulo,
        p.precio,
        p.ruta_php,
        p.tipo_programa,

        paises.id     AS pais_id,
        paises.nombre AS pais_nombre,
        paises.slug   AS pais_slug,

        ciudades.nombre AS ciudad_nombre,

        arch.archivo AS imagen_pr

    FROM programas p

    LEFT JOIN programa_ciudades pc
        ON pc.programa_id = p.id

    LEFT JOIN ciudades
        ON ciudades.id = pc.ciudad_id

    LEFT JOIN paises
        ON paises.id = ciudades.pais_id

    /* Solo la imagen PR */
    INNER JOIN programa_archivos arch
        ON arch.programa_id = p.id
        AND arch.tipo = 'pr'

    WHERE p.estado = 'activo'

    ORDER BY paises.nombre ASC, p.id DESC
";

$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

/* ── Agrupar por país ── */
$porPais = [];   // [ pais_id => [ 'nombre'=>..., 'slug'=>..., 'programas'=>[] ] ]

foreach ($rows as $row) {
    $pid = $row['pais_id'];

    if (!isset($porPais[$pid])) {
        $porPais[$pid] = [
            'nombre'    => $row['pais_nombre'],
            'slug'      => $row['pais_slug'],
            'programas' => [],
        ];
    }

    if (count($porPais[$pid]['programas']) < $MAX_CARDS_POR_TAB) {
        $porPais[$pid]['programas'][] = $row;
    }
}

/* Limitar tabs */
$porPais = array_slice($porPais, 0, $MAX_TABS, true);

/* Si no hay datos, no mostrar la sección */
if (empty($porPais)) return;

/* IDs para los tabs: tab-dest-1, tab-dest-2 ... */
$tabIds = [];
$i = 1;
foreach ($porPais as $pid => $_) {
    $tabIds[$pid] = 'tab-dest-' . $i++;
}

reset($porPais);
$primerPaisId = key($porPais);
?>

<!-- ========== DESTINATIONS DINÁMICO ========== -->
<div class="container-fluid destination py-5">
    <div class="container py-5">

        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Destinos</h5>
            <h1 class="mb-0">Destinos Populares</h1>
        </div>

        <div class="tab-class text-center">

            <!-- ── Tabs de países ── -->
            <ul class="nav nav-pills d-inline-flex justify-content-center flex-wrap mb-5"
                id="destTabList">

                <?php foreach ($porPais as $pid => $data): ?>
                <li class="nav-item">
                    <a class="d-flex mx-2 my-1 py-2 px-3 border border-primary bg-light rounded-pill
                               <?= $pid === $primerPaisId ? 'active' : '' ?>"
                       data-bs-toggle="pill"
                       href="#<?= $tabIds[$pid] ?>">
                        <span class="text-dark" style="min-width:100px;">
                            <?= htmlspecialchars($data['nombre']) ?>
                        </span>
                    </a>
                </li>
                <?php endforeach; ?>

            </ul>

            <!-- ── Contenido de cada tab ── -->
            <div class="tab-content">

                <?php foreach ($porPais as $pid => $data): ?>

                <div id="<?= $tabIds[$pid] ?>"
                     class="tab-pane fade <?= $pid === $primerPaisId ? 'show active' : '' ?> p-0">

                    <div class="row g-4">

                        <?php foreach ($data['programas'] as $idx => $prog): ?>

                        <?php
                        /*
                         * Construir la URL de la imagen PR.
                         * La imagen está en:
                         *   interfaces/{continente}/{pais}/{ciudad}/{carpeta}/img/{archivo}
                         * ruta_php apunta a ese index.php, quitamos "index.php" y
                         * añadimos "img/{archivo}"
                         */
                        $baseUrl   = rtrim(str_replace('index.php', '', $prog['ruta_php']), '/');
                        $imgUrl    = $baseUrl . '/img/' . $prog['imagen_pr'];

                        /* Layout: primera card más grande si hay 3 o más */
                        $colClass = 'col-lg-4';
                        if (count($data['programas']) >= 3 && $idx === 0) {
                            $colClass = 'col-lg-8';
                        }
                        ?>

                        <div class="<?= $colClass ?>">
                            <div class="destination-img">

                                <img class="img-fluid rounded w-100"
                                     src="<?= htmlspecialchars($imgUrl) ?>"
                                     alt="<?= htmlspecialchars($prog['titulo']) ?>"
                                     style="height:260px;object-fit:cover;">

                                <div class="destination-overlay p-4">

                                    <!-- Badge tipo programa -->
                                    <span class="btn btn-primary text-white rounded-pill border py-1 px-3"
                                          style="font-size:0.75rem;">
                                        <?= strtoupper(str_replace('_', ' ', $prog['tipo_programa'])) ?>
                                    </span>

                                    <h4 class="text-white mb-1 mt-3">
                                        <?= htmlspecialchars($prog['titulo']) ?>
                                    </h4>

                                    <?php if (!empty($prog['ciudad_nombre'])): ?>
                                    <p class="text-white mb-2" style="font-size:0.8rem;opacity:.85;">
                                        <i class="fa fa-map-marker-alt me-1"></i>
                                        <?= htmlspecialchars($prog['ciudad_nombre']) ?>
                                    </p>
                                    <?php endif; ?>

                                    <?php if (!empty($prog['precio'])): ?>
                                    <p class="text-white mb-2" style="font-size:0.85rem;">
                                        Desde <strong><?= htmlspecialchars($prog['precio']) ?></strong>
                                    </p>
                                    <?php endif; ?>

                                    <a href="<?= htmlspecialchars($prog['ruta_php']) ?>"
                                       class="btn-hover text-white">
                                        Ver programa <i class="fa fa-arrow-right ms-2"></i>
                                    </a>

                                </div>

                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div><!-- /row -->

                </div><!-- /tab-pane -->

                <?php endforeach; ?>

            </div><!-- /tab-content -->

        </div><!-- /tab-class -->

    </div>
</div>
<!-- ========== FIN DESTINATIONS DINÁMICO ========== -->