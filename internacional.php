<?php
$pageTitle  = 'Internacional';
$activePage = 'internacional';
require_once 'includes/head.php';

$countries = [
    'argentina' => [
        'name' => 'Argentina',
        'flag' => 'ar.png',
        'cities' => [
            ['slug' => 'bariloche', 'name' => 'Bariloche'],
            ['slug' => 'buenos-aires', 'name' => 'Buenos Aires'],
            ['slug' => 'calafate', 'name' => 'Calafate'],
            ['slug' => 'cordoba', 'name' => 'Córdoba'],
            ['slug' => 'mendoza', 'name' => 'Mendoza'],
            ['slug' => 'ushuaia', 'name' => 'Ushuaia'],
        ],
    ],
    'brasil' => [
        'name' => 'Brasil',
        'flag' => 'br.png',
        'cities' => [
            ['slug' => 'buzios', 'name' => 'Búzios'],
            ['slug' => 'gramado', 'name' => 'Gramado'],
            ['slug' => 'florianopolis', 'name' => 'Florianópolis'],
            ['slug' => 'iguazu', 'name' => 'Iguazú'],
            ['slug' => 'rio-de-janeiro', 'name' => 'Río de Janeiro'],
            ['slug' => 'salvador-bahia', 'name' => 'Salvador Bahía'],
            ['slug' => 'sao-paulo', 'name' => 'São Paulo'],
            ['slug' => 'brasilia', 'name' => 'Brasilia'],
            ['slug' => 'curitiba', 'name' => 'Curitiba'],
            ['slug' => 'maceio', 'name' => 'Maceió'],
        ],
    ],
    'chile' => [
        'name' => 'Chile',
        'flag' => 'cl.png',
        'cities' => [
            ['slug' => 'santiago', 'name' => 'Santiago'],
        ],
    ],
    'colombia' => [
        'name' => 'Colombia',
        'flag' => 'co.png',
        'cities' => [
            ['slug' => 'barranquilla', 'name' => 'Barranquilla'],
            ['slug' => 'bogota', 'name' => 'Bogotá'],
            ['slug' => 'cali', 'name' => 'Cali'],
            ['slug' => 'cartagena', 'name' => 'Cartagena'],
            ['slug' => 'medellin', 'name' => 'Medellín'],
            ['slug' => 'santa-marta', 'name' => 'Santa Marta'],
            ['slug' => 'san-andres', 'name' => 'San Andrés'],
            ['slug' => 'pereira', 'name' => 'Pereira'],
        ],
    ],
    'ecuador' => [
        'name' => 'Ecuador',
        'flag' => 'ec.png',
        'cities' => [
            ['slug' => 'guayaquil', 'name' => 'Guayaquil'],
            ['slug' => 'quito', 'name' => 'Quito'],
        ],
    ],
    'uruguay' => [
        'name' => 'Uruguay',
        'flag' => 'uy.png',
        'cities' => [
            ['slug' => 'montevideo', 'name' => 'Montevideo'],
        ],
    ],
    'mexico' => [
        'name' => 'México',
        'flag' => 'mx.png',
        'cities' => [
            ['slug' => 'acapulco', 'name' => 'Acapulco'],
            ['slug' => 'cancun-riviera-maya', 'name' => 'Cancún, Riviera Maya y Playa del Carmen'],
            ['slug' => 'guadalajara', 'name' => 'Guadalajara'],
            ['slug' => 'ciudad-de-mexico', 'name' => 'Ciudad de México'],
            ['slug' => 'puerto-vallarta', 'name' => 'Puerto Vallarta'],
            ['slug' => 'los-cabos', 'name' => 'Los Cabos'],
        ],
    ],
    'estados-unidos' => [
        'name' => 'EE.UU.',
        'flag' => 'us.png',
        'cities' => [
            ['slug' => 'nueva-york', 'name' => 'Nueva York'],
            ['slug' => 'miami', 'name' => 'Miami'],
            ['slug' => 'orlando', 'name' => 'Orlando'],
            ['slug' => 'san-diego', 'name' => 'San Diego'],
            ['slug' => 'san-francisco', 'name' => 'San Francisco'],
            ['slug' => 'fort-lauderdale', 'name' => 'Fort Lauderdale'],
            ['slug' => 'las-vegas', 'name' => 'Las Vegas'],
            ['slug' => 'los-angeles', 'name' => 'Los Ángeles'],
        ],
    ],
    'panama' => [
        'name' => 'Panamá',
        'flag' => 'pa.png',
        'cities' => [
            ['slug' => 'panama-ciudad', 'name' => 'Panamá Ciudad'],
            ['slug' => 'panama-playa', 'name' => 'Panamá Playa'],
        ],
    ],
    'republica-dominicana' => [
        'name' => 'R. Dominicana',
        'flag' => 'do.png',
        'cities' => [
            ['slug' => 'punta-cana', 'name' => 'Punta Cana'],
            ['slug' => 'juan-dolio', 'name' => 'Juan Dolio'],
            ['slug' => 'puerto-plata', 'name' => 'Puerto Plata'],
            ['slug' => 'miches', 'name' => 'Miches'],
        ],
    ],
    'aruba' => [
        'name' => 'Aruba',
        'flag' => 'aw.png',
        'cities' => [
            ['slug' => 'aruba', 'name' => 'Aruba'],
        ],
    ],
    'curacao' => [
        'name' => 'Curaçao',
        'flag' => 'cw.png',
        'cities' => [
            ['slug' => 'curazao', 'name' => 'Curazao'],
        ],
    ],
    'jamaica' => [
        'name' => 'Jamaica',
        'flag' => 'jm.png',
        'cities' => [
            ['slug' => 'jamaica', 'name' => 'Jamaica'],
        ],
    ],
    'bahamas' => [
        'name' => 'Bahamas',
        'flag' => 'bs.png',
        'cities' => [
            ['slug' => 'bahamas', 'name' => 'Bahamas'],
        ],
    ],
    'costa-rica' => [
        'name' => 'Costa Rica',
        'flag' => 'cr.png',
        'cities' => [
            ['slug' => 'costa-rica', 'name' => 'Costa Rica'],
        ],
    ],
    'cuba' => [
        'name' => 'Cuba',
        'flag' => 'cu.png',
        'cities' => [
            ['slug' => 'habana', 'name' => 'La Habana'],
            ['slug' => 'varadero', 'name' => 'Varadero'],
            ['slug' => 'cayos-holguin', 'name' => 'Cayos y Holguín'],
        ],
    ],
];
?>
<link rel="stylesheet" href="css/internacional.css">
</head>
<body>

<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary custom-spinner" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<?php require_once 'includes/header.php'; ?>

<div class="container-fluid bg-breadcrumb bg-breadcrumb--internacional">
    <div class="container text-center py-5 text-max-900">
        <h3 class="text-white display-3 mb-4">Paquetes Internacional</h3>
    </div>
</div>

<div class="container intl-explorer-wrap">
    <div class="intl-explorer">
        <div class="intl-explorer__heading">
            <i class="fa fa-compass"></i> Explorar
        </div>

        <div class="intl-explorer__grid" id="intlGrid">
            <?php foreach ($countries as $slug => $c): ?>
            <div class="intl-explorer__item" data-pais="<?= $slug ?>">
                <div class="intl-explorer__card">
                    <img class="intl-explorer__flag" src="img/images-paises/<?= $c['flag'] ?>" alt="<?= $c['name'] ?>">
                    <span class="intl-explorer__label"><?= $c['name'] ?></span>
                </div>
                <div class="intl-explorer__drop">
                    <?php foreach ($c['cities'] as $city): ?>
                    <a class="intl-explorer__city" href="internacional/<?= $slug ?>/<?= $city['slug'] ?>.php"><?= $city['name'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>

            <a class="intl-explorer__item intl-explorer__item--link" href="internacional/europa.php">
                <img class="intl-explorer__flag" src="img/images-paises/europe.png" alt="Europa">
                <span class="intl-explorer__label">Europa</span>
            </a>
            <a class="intl-explorer__item intl-explorer__item--link" href="internacional/asia.php">
                <img class="intl-explorer__flag" src="img/images-paises/asia.png" alt="Asia">
                <span class="intl-explorer__label">Asia</span>
            </a>
            <a class="intl-explorer__item intl-explorer__item--link" href="internacional/africa.php">
                <img class="intl-explorer__flag" src="img/images-paises/africa.png" alt="Africa">
                <span class="intl-explorer__label">Africa</span>
            </a>
        </div>
    </div>
</div>

<br><br><br>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>

<script>
var grid  = document.getElementById('intlGrid');
var timer;

function closeAll() {
    document.querySelectorAll('.intl-explorer__item.is-active, .intl-explorer__drop.show')
        .forEach(function(el) {
            el.classList.remove('is-active', 'show');
        });
    grid.classList.remove('is-locked');
}

document.querySelectorAll('.intl-explorer__item[data-pais]').forEach(function(item) {
    var drop = item.querySelector('.intl-explorer__drop');
    if (!drop) return;

    // Desktop: hover
    item.addEventListener('mouseenter', function() {
        if (window.innerWidth <= 768) return;
        clearTimeout(timer);
        closeAll();
        grid.classList.add('is-locked');
        item.classList.add('is-active');
        drop.classList.add('show');
    });

    item.addEventListener('mouseleave', function() {
        if (window.innerWidth <= 768) return;
        timer = setTimeout(function() {
            closeAll();
        }, 350);
    });

    drop.addEventListener('mouseenter', function() {
        if (window.innerWidth <= 768) return;
        clearTimeout(timer);
    });

    drop.addEventListener('mouseleave', function() {
        if (window.innerWidth <= 768) return;
        closeAll();
    });

    // Mobile: click
    item.addEventListener('click', function(e) {
        if (window.innerWidth > 768) return;
        e.stopPropagation();
        var isOpen = drop.classList.contains('show');
        closeAll();
        if (!isOpen) {
            item.classList.add('is-active');
            drop.classList.add('show');
        }
    });
});

document.addEventListener('click', function() {
    if (window.innerWidth > 768) return;
    closeAll();
});
</script>

</body>
</html>
