<?php
// =====================================================
// sitemap.php — Sitemap XML dinámico
// =====================================================
// Se accede como /sitemap.xml vía .htaccess
// Genera URLs de todas las páginas estáticas + DB
// =====================================================

require_once __DIR__ . '/config/database.php';

// ── Cambiar en producción ──
$siteUrl = defined('SITE_URL') ? SITE_URL : 'http://localhost/vid-demo';

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// ── Helper ──
function url(string $loc, string $priority = '0.8', string $changefreq = 'monthly'): void
{
    global $siteUrl;
    echo '  <url>' . "\n";
    echo '    <loc>' . $siteUrl . '/' . ltrim($loc, '/') . '</loc>' . "\n";
    echo '    <priority>' . $priority . '</priority>' . "\n";
    echo '    <changefreq>' . $changefreq . '</changefreq>' . "\n";
    echo '  </url>' . "\n";
}

// ── 1. Páginas principales ──
url('',                     '1.0', 'weekly');
url('nosotros.php',         '0.8', 'monthly');
url('peru.php',             '0.9', 'weekly');
url('internacional.php',    '0.9', 'weekly');
url('bloqueos.php',         '0.9', 'weekly');
url('circuitos.php',        '0.7', 'monthly');
url('eventos.php',          '0.7', 'monthly');
url('videos.php',           '0.6', 'monthly');
url('lgbt.php',             '0.6', 'monthly');

// ── 2. Nacional — ciudades (desde filesystem) ──
$nacionalDirs = glob(__DIR__ . '/nacional/*.php');
sort($nacionalDirs);
foreach ($nacionalDirs as $file) {
    $name = basename($file);
    url('nacional/' . $name, '0.7', 'weekly');
}

// ── 3. Internacional — continentes ──
foreach (['europa.php', 'asia.php', 'africa.php'] as $cont) {
    url('internacional/' . $cont, '0.8', 'weekly');
}

// ── 4. Internacional — países/ciudades (desde filesystem) ──
$intCountries = glob(__DIR__ . '/internacional/*', GLOB_ONLYDIR);
sort($intCountries);
foreach ($intCountries as $countryDir) {
    $country = basename($countryDir);
    $cities = glob($countryDir . '/*.php');
    sort($cities);
    foreach ($cities as $file) {
        $name = basename($file);
        url('internacional/' . $country . '/' . $name, '0.7', 'weekly');
    }
}

// ── 5. Programas activos desde DB ──
if (isset($pdo)) {
    try {
        $stmt = $pdo->query("SELECT ruta_php, updated_at FROM programas WHERE estado = 'activo' ORDER BY updated_at DESC");
        while ($row = $stmt->fetch()) {
            $loc = $row['ruta_php'];
            // Convertir ruta absoluta/relativa a URL
            $loc = str_replace('\\', '/', $loc);
            // Si tiene /vid-demo/ al inicio, extraer
            if (str_starts_with($loc, '/vid-demo/')) {
                $loc = substr($loc, strlen('/vid-demo/'));
            }
            // Si es URL completa con http, solo tomar path
            if (preg_match('#^https?://#', $loc)) {
                $parts = parse_url($loc);
                $loc = ltrim($parts['path'] ?? '', '/');
                // Quitar /vid-demo/ del path si existe
                $loc = preg_replace('#^vid-demo/?#', '', $loc);
            }
            echo '  <url>' . "\n";
            echo '    <loc>' . $siteUrl . '/' . ltrim($loc, '/') . '</loc>' . "\n";
            echo '    <priority>0.6</priority>' . "\n";
            echo '    <changefreq>monthly</changefreq>' . "\n";
            echo '  </url>' . "\n";
        }
    } catch (PDOException $e) {
        // DB no disponible, omitir programas
    }
}

echo '</urlset>' . "\n";
