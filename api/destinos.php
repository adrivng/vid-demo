<?php
/**
 * API: Destinos
 * Lee dinámicamente las carpetas de destinos internacionales
 * y devuelve un JSON con los resultados.
 *
 * Ruta sugerida: /api/destinos.php
 */

declare(strict_types=1);

// ── Configuración ──────────────────────────────────────────────────────────────

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *'); // Ajustar en producción a tu dominio

/**
 * Carpeta raíz donde viven las regiones (brasil, colombia, cuba…)
 * Ajusta la ruta relativa según donde pongas este archivo.
 * Desde /api/destinos.php → ../internacional
 */
const CARPETA_INTERNACIONAL = __DIR__ . '/../internacional';

/**
 * Mapa de nombres de carpeta → etiqueta bonita para mostrar.
 * Agrega aquí cada región que vayas creando.
 */
const ETIQUETAS_REGION = [
    'brasil'    => 'Brasil',
    'colombia'  => 'Colombia',
    'cuba'      => 'Cuba',
    'europa'    => 'Europa',
    'usa'       => 'Estados Unidos',
    'caribe'    => 'Caribe',
    'mexico'    => 'México',
    // Agrega más a medida que añadas carpetas
];

/**
 * Mapa de nombres de archivo PHP → nombre del destino.
 * Si un archivo no está aquí, se formatea automáticamente desde el nombre del archivo.
 */
const ETIQUETAS_DESTINO = [
    'rio_janeiro'    => 'Río de Janeiro',
    'sao_paulo'      => 'São Paulo',
    'florianopolis'  => 'Florianópolis',
    'san_andres'     => 'San Andrés',
    'santa_marta'    => 'Santa Marta',
    // El resto (brasilia, medellin, bogota, etc.) se formatean automáticamente
];

// ── Lógica ─────────────────────────────────────────────────────────────────────

/**
 * Convierte el nombre de un archivo (sin extensión) en una etiqueta legible.
 * Ej: "rio_janeiro" → "Rio Janeiro"  (si no está en ETIQUETAS_DESTINO)
 */
function formatearNombre(string $nombre): string
{
    if (isset(ETIQUETAS_DESTINO[$nombre])) {
        return ETIQUETAS_DESTINO[$nombre];
    }
    // Reemplaza guiones bajos por espacios y capitaliza cada palabra
    return ucwords(str_replace('_', ' ', $nombre));
}

/**
 * Escanea CARPETA_INTERNACIONAL y construye el listado de destinos.
 *
 * @return array<int, array{id: string, destino: string, region: string, regionSlug: string, url: string}>
 */
function obtenerDestinos(): array
{
    $destinos = [];

    if (!is_dir(CARPETA_INTERNACIONAL)) {
        return $destinos;
    }

    $regiones = scandir(CARPETA_INTERNACIONAL);

    foreach ($regiones as $regionSlug) {
        // Ignorar . y .. y archivos sueltos
        $rutaRegion = CARPETA_INTERNACIONAL . '/' . $regionSlug;
        if ($regionSlug[0] === '.' || !is_dir($rutaRegion)) {
            continue;
        }

        $etiquetaRegion = ETIQUETAS_REGION[$regionSlug] ?? ucfirst($regionSlug);
        $archivos       = scandir($rutaRegion);

        foreach ($archivos as $archivo) {
            if ($archivo[0] === '.') {
                continue;
            }

            // Solo procesar archivos .php
            if (pathinfo($archivo, PATHINFO_EXTENSION) !== 'php') {
                continue;
            }

            $slug         = pathinfo($archivo, PATHINFO_FILENAME); // ej: "rio_janeiro"
            $nombreBonito = formatearNombre($slug);

            $destinos[] = [
                'id'         => $regionSlug . '_' . $slug,
                'destino'    => $nombreBonito,
                'region'     => $etiquetaRegion,
                'regionSlug' => $regionSlug,
                'slug'       => $slug,
                // URL que usará el buscador para navegar al destino
                'url'        => "/internacional/{$regionSlug}/{$slug}.php",
            ];
        }
    }

    // Ordenar alfabéticamente por nombre de destino
    usort($destinos, fn($a, $b) => strcmp($a['destino'], $b['destino']));

    return $destinos;
}

// ── Filtrado por query (opcional) ──────────────────────────────────────────────

$query    = trim($_GET['q'] ?? '');
$destinos = obtenerDestinos();

if ($query !== '') {
    $queryNorm = mb_strtolower($query, 'UTF-8');

    $destinos = array_values(array_filter(
        $destinos,
        function (array $d) use ($queryNorm): bool {
            $buscarEn = mb_strtolower($d['destino'] . ' ' . $d['region'], 'UTF-8');
            return str_contains($buscarEn, $queryNorm);
        }
    ));
}

// ── Respuesta ──────────────────────────────────────────────────────────────────

echo json_encode([
    'ok'       => true,
    'total'    => count($destinos),
    'destinos' => $destinos,
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);