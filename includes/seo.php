<?php
// =====================================================
// includes/seo.php — Meta tags, Open Graph, Schema.org
// =====================================================
// Consume: $pageTitle, $activePage (definidas en cada página)
// Uso: require_once 'includes/seo.php'; en head.php antes de </head>
// =====================================================

// ── Sitio: cambiar en producción ──
$siteUrl  = defined('SITE_URL') ? SITE_URL : 'http://localhost/vid-demo'; 


// Para producción en cPanel
// En includes/seo.php, línea 10, cambiar:
// $siteUrl = 'http://localhost/vid-demo';
// a:
// define('SITE_URL', 'https://vidatur.net');
// $siteUrl = SITE_URL;
// Y en robots.txt, actualizar la URL del sitemap.

$siteName = 'Vidatur Mayorista de Viajes';

// ── URL actual (canonical) ──
$currentUrl = rtrim($siteUrl, '/') . '/' . ltrim(
    str_replace('/vid-demo/', '', $_SERVER['REQUEST_URI'] ?? ''),
    '/'
);

// ── Imagen por defecto para redes ──
$ogImage = $siteUrl . '/img/images-index/logo.svg';

// ── Mapa de descripciones SEO por activePage ──
$seoDescs = [
    'inicio'        => 'Vidatur Mayorista de Viajes: paquetes turísticos a Perú, Internacional, Europa, Asia y más. 25 años de experiencia ofreciendo los mejores destinos del mundo.',
    'nosotros'      => 'Conoce Vidatur, agencia mayorista de viajes con más de 25 años de experiencia en el mercado peruano. Confianza y calidad en cada destino.',
    'peru'          => 'Descubre los mejores paquetes turísticos dentro del Perú: Cusco, Arequipa, Lima, Iquitos, Tarapoto y más. Viaja por tu país con Vidatur.',
    'internacional' => 'Viajes internacionales con Vidatur: América, Europa, Asia, África. Paquetes turísticos todo incluido a los mejores destinos del mundo.',
    'bloqueos'      => 'Bloqueos y programas especiales Vidatur para agencias de viajes. Ofertas exclusivas y tarifas preferenciales.',
    'circuitos'     => 'Circuitos Perú con Vidatur. Recorre los destinos más emblemáticos del Perú con paquetes turísticos diseñados para ti.',
    'eventos'       => 'Eventos Vidatur: capacitaciones, convenciones, fam trips y más. Noticias y novedades para agencias de viajes.',
    'videos'        => 'Videos promocionales de Vidatur. Conoce los destinos y programas turísticos en video antes de viajar.',
    'lgbt'          => 'Viajes LGBT con Vidatur. Paquetes turísticos inclusivos para la comunidad LGBT. Destinos nacionales e internacionales.',
    'socios'        => 'Socios estratégicos de Vidatur. Conoce nuestras alianzas comerciales y proveedores de confianza.',
    '404'           => 'Página no encontrada. Vidatur Mayorista de Viajes — explora nuestros destinos y paquetes turísticos.',
    'politicas'     => 'Política de Privacidad de Vidatur Mayorista de Viajes. Conoce cómo protegemos tus datos personales.',
    'terminos'      => 'Términos y Condiciones de Vidatur Mayorista de Viajes. Conoce las condiciones generales de nuestros servicios turísticos.',
];

// ── Obtener descripción según la página ──
// Prioridad: ciudad específica > página principal > fallback
if ($activePage === 'internacional' && $pageTitle !== 'Internacional') {
    // Páginas de ciudad internacional: "Cartagena - Colombia"
    $metaDesc = 'Paquetes turísticos a ' . htmlspecialchars($pageTitle) . ' con Vidatur. Vuelos, hoteles y tours todo incluido.';
} elseif ($activePage === 'peru' && $pageTitle !== 'Perú') {
    // Páginas de ciudad nacional: "Arequipa - Perú"
    $metaDesc = 'Paquetes turísticos a ' . htmlspecialchars($pageTitle) . ' con Vidatur. Disfruta de los mejores destinos del Perú.';
} elseif (isset($seoDescs[$activePage])) {
    $metaDesc = $seoDescs[$activePage];
} else {
    $metaDesc = $siteName . ' — paquetes turísticos a Perú y el mundo. 25 años de experiencia.';
}

// ── Keywords por página ──
$seoKeywords = [
    'inicio'        => 'viajes, turismo, paquetes turísticos, agencia de viajes, Vidatur, mayorista',
    'peru'          => 'viajes Perú, turismo Perú, paquetes Perú, Cusco, Arequipa, Lima, Iquitos',
    'internacional' => 'viajes internacionales, turismo internacional, paquetes todo incluido, vuelos',
];

$keywords = $seoKeywords[$activePage] ?? 'viajes, turismo, paquetes turísticos, Vidatur, ' . htmlspecialchars($pageTitle);

// ── Breadcrumbs ──
$breadcrumbItems = [['name' => 'Inicio', 'url' => $siteUrl . '/']];

if ($activePage === 'inicio') {
    // Sin breadcrumb en inicio
    $breadcrumbItems = [];
} elseif ($activePage === 'nosotros') {
    $breadcrumbItems[] = ['name' => 'Nosotros', 'url' => ''];
} elseif ($activePage === 'peru') {
    if ($pageTitle === 'Perú') {
        $breadcrumbItems[] = ['name' => 'Perú', 'url' => 'peru.php'];
    } else {
        $breadcrumbItems[] = ['name' => 'Perú', 'url' => 'peru.php'];
        $breadcrumbItems[] = ['name' => htmlspecialchars($pageTitle), 'url' => ''];
    }
} elseif ($activePage === 'internacional') {
    if ($pageTitle === 'Internacional') {
        $breadcrumbItems[] = ['name' => 'Internacional', 'url' => 'internacional.php'];
    } elseif (in_array($pageTitle, ['Europa', 'Asia', 'África'])) {
        $breadcrumbItems[] = ['name' => 'Internacional', 'url' => 'internacional.php'];
        $breadcrumbItems[] = ['name' => htmlspecialchars($pageTitle), 'url' => ''];
    } else {
        $breadcrumbItems[] = ['name' => 'Internacional', 'url' => 'internacional.php'];
        $breadcrumbItems[] = ['name' => htmlspecialchars($pageTitle), 'url' => ''];
    }
} elseif ($activePage === 'bloqueos') {
    $breadcrumbItems[] = ['name' => 'Bloqueos & Programas', 'url' => 'bloqueos.php'];
} elseif ($activePage === 'circuitos') {
    $breadcrumbItems[] = ['name' => 'Circuitos Perú', 'url' => 'circuitos.php'];
} elseif ($activePage === 'eventos') {
    $breadcrumbItems[] = ['name' => 'Eventos', 'url' => 'eventos.php'];
} elseif ($activePage === 'videos') {
    $breadcrumbItems[] = ['name' => 'Videos', 'url' => 'videos.php'];
} elseif ($activePage === 'lgbt') {
    $breadcrumbItems[] = ['name' => 'LGBT', 'url' => 'lgbt.php'];
} elseif ($activePage === 'socios') {
    $breadcrumbItems[] = ['name' => 'Socios Estratégicos', 'url' => 'socios_estrategicos/aliados.php'];
}
?>
<!-- ========== SEO: Meta tags ========== -->
<meta name="description" content="<?= $metaDesc ?>">
<meta name="keywords" content="<?= $keywords ?>">
<link rel="canonical" href="<?= $currentUrl ?>">

<!-- ========== SEO: Open Graph ========== -->
<meta property="og:locale" content="es_PE">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $siteName ?>">
<meta property="og:title" content="Vidatur — <?= htmlspecialchars($pageTitle) ?>">
<meta property="og:description" content="<?= $metaDesc ?>">
<meta property="og:url" content="<?= $currentUrl ?>">
<meta property="og:image" content="<?= $ogImage ?>">
<meta property="og:image:width" content="340">
<meta property="og:image:height" content="auto">

<!-- ========== SEO: Twitter Cards ========== -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Vidatur — <?= htmlspecialchars($pageTitle) ?>">
<meta name="twitter:description" content="<?= $metaDesc ?>">
<meta name="twitter:image" content="<?= $ogImage ?>">

<!-- ========== SEO: Schema.org JSON-LD ========== -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "<?= $siteUrl ?>/#organization",
            "name": "<?= $siteName ?>",
            "url": "<?= $siteUrl ?>",
            "logo": {
                "@type": "ImageObject",
                "@id": "<?= $siteUrl ?>/#logo",
                "url": "<?= $ogImage ?>",
                "caption": "<?= $siteName ?>"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Av. José Larco 930",
                "addressLocality": "Miraflores",
                "addressRegion": "Lima",
                "addressCountry": "PE"
            },
            "telephone": "+51 999 999 999",
            "email": "soporte@vidatur.net",
            "sameAs": [
                "https://www.facebook.com/vidatur",
                "https://www.instagram.com/vidatur",
                "https://www.youtube.com/vidatur",
                "https://www.tiktok.com/@vidatur"
            ]
        },
        {
            "@type": "TravelAgency",
            "@id": "<?= $siteUrl ?>/#travelagency",
            "name": "<?= $siteName ?>",
            "url": "<?= $siteUrl ?>",
            "parentOrganization": {
                "@id": "<?= $siteUrl ?>/#organization"
            }
        },
        {
            "@type": "WebSite",
            "@id": "<?= $siteUrl ?>/#website",
            "url": "<?= $siteUrl ?>",
            "name": "<?= $siteName ?>",
            "description": "<?= $seoDescs['inicio'] ?>",
            "publisher": {
                "@id": "<?= $siteUrl ?>/#organization"
            },
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "<?= $siteUrl ?>/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }
        }
        <?php if (!empty($breadcrumbItems)): ?>
        ,{
            "@type": "BreadcrumbList",
            "@id": "<?= $currentUrl ?>/#breadcrumb",
            "itemListElement": [
                <?php foreach ($breadcrumbItems as $i => $item): ?>
                {
                    "@type": "ListItem",
                    "position": <?= $i + 1 ?>,
                    "name": "<?= $item['name'] ?>",
                    "item": "<?= $item['url'] ? (str_contains($item['url'], '://') ? $item['url'] : rtrim($siteUrl, '/') . '/' . ltrim($item['url'], '/')) : $currentUrl ?>"
                }<?= $i < count($breadcrumbItems) - 1 ? ',' : '' ?>
                <?php endforeach; ?>
            ]
        }
        <?php endif; ?>
    ]
}
</script>
