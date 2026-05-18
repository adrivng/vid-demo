<?php
/**
 * includes/ciudad-programas.php
 * Muestra los programas activos de un continente, ciudad o región.
 *
 * Variables esperadas:
 *   Continente   → $continenteSlug
 *   Internacional → $paisSlug, $ciudadSlug
 *   Nacional      → $regionSlug
 */

try {
    require_once __DIR__ . '/../config/database.php';
} catch (Throwable $e) {
    return;
}

$tipo = isset($continenteSlug) ? 'cont' : (isset($paisSlug) ? 'inter' : 'nac');

if ($tipo === 'cont') {
    $stmt = $pdo->prepare("
        SELECT DISTINCT p.*, pa.archivo AS imagen_pr
        FROM programas p
        LEFT JOIN programa_archivos pa ON pa.programa_id = p.id AND pa.tipo = 'pr'
        JOIN programa_ciudades pc ON pc.programa_id = p.id
        JOIN ciudades c ON c.id = pc.ciudad_id
        JOIN paises ps ON ps.id = c.pais_id
        JOIN continentes ct ON ct.id = ps.continente_id AND ct.slug = ?
        WHERE p.estado = 'activo' AND p.mostrar_en_internacional = 1
        ORDER BY p.id DESC
    ");
    $stmt->execute([$continenteSlug]);
} elseif ($tipo === 'inter') {
    $stmt = $pdo->prepare("
        SELECT p.*, pa.archivo AS imagen_pr
        FROM programas p
        LEFT JOIN programa_archivos pa ON pa.programa_id = p.id AND pa.tipo = 'pr'
        JOIN programa_ciudades pc ON pc.programa_id = p.id
        JOIN ciudades c ON c.id = pc.ciudad_id AND c.slug = ?
        JOIN paises ps ON ps.id = c.pais_id AND ps.slug = ?
        WHERE p.estado = 'activo' AND p.mostrar_en_internacional = 1
        ORDER BY p.id DESC
    ");
    $stmt->execute([$ciudadSlug, $paisSlug]);
} else {
    $stmt = $pdo->prepare("
        SELECT p.*, pa.archivo AS imagen_pr
        FROM programas p
        LEFT JOIN programa_archivos pa ON pa.programa_id = p.id AND pa.tipo = 'pr'
        JOIN programa_regiones pr ON pr.programa_id = p.id
        JOIN regiones r ON r.id = pr.region_id AND r.slug = ?
        WHERE p.estado = 'activo' AND p.mostrar_en_nacional = 1
        ORDER BY p.id DESC
    ");
    $stmt->execute([$regionSlug]);
}

$programas = $stmt->fetchAll();
if (empty($programas)) return;

$grupos = ['con_aereo' => [], 'sin_aereo' => [], 'opcionales' => []];
foreach ($programas as $p) {
    $t = $p['tipo_programa'] ?: 'otro';
    if (!isset($grupos[$t])) $grupos[$t] = [];
    $grupos[$t][] = $p;
}

$titulos = [
    'con_aereo'  => ['icon' => 'fa-plane',           'label' => 'Programas con aéreo'],
    'sin_aereo'  => ['icon' => 'fa-map-marked-alt',  'label' => 'Programas sin aéreo'],
    'opcionales' => ['icon' => 'fa-hotel',            'label' => 'Tours opcionales y Solo hotelería'],
];
?>

<?php foreach ($grupos as $tipo => $lista): ?>
<?php if (empty($lista)) continue; ?>
<div class="intl-ciudad-section">
    <h2 class="intl-ciudad-section__title">
        <i class="fa <?= $titulos[$tipo]['icon'] ?? 'fa-tag' ?>"></i>
        <?= $titulos[$tipo]['label'] ?? 'Programas' ?>
    </h2>
    <div class="pkg-grid">
        <?php foreach ($lista as $p):
            $ruta = $p['ruta_php'];
            $imgDir = dirname($p['ruta_php']) . '/img/';
            $img = $p['imagen_pr'] ? $imgDir . $p['imagen_pr'] : '';
        ?>
        <div class="pkg-card">
            <a class="pkg-card__img-link" href="<?= htmlspecialchars($ruta) ?>">
                <?php if ($img): ?>
                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($p['titulo']) ?>">
                <?php else: ?>
                <div class="pkg-card__img-placeholder"><?= htmlspecialchars($p['titulo']) ?></div>
                <?php endif; ?>
            </a>
            <div class="pkg-card__body">
                <a class="pkg-card__title-link" href="<?= htmlspecialchars($ruta) ?>">
                    <div class="pkg-card__title"><?= htmlspecialchars($p['titulo']) ?></div>
                </a>
                <?php if ($p['fecha_limite_texto']): ?>
                <div class="pkg-card__urgency">
                    Para comprar hasta <span><?= htmlspecialchars($p['fecha_limite_texto']) ?></span>
                </div>
                <?php endif; ?>
                <div class="pkg-card__meta">
                    <?php if ($p['aerolinea']): ?>
                    <span class="pkg-card__airline"><?= htmlspecialchars($p['aerolinea']) ?></span>
                    <?php endif; ?>
                    <?php if (!empty($p['etiqueta'])): ?>
                    <span class="pkg-card__tag"><?= htmlspecialchars($p['etiqueta']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="pkg-card__actions">
                    <a class="pkg-card__btn--outline" href="<?= htmlspecialchars($ruta) ?>">Ver detalles</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endforeach; ?>
