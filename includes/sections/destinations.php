<?php
$destinos = [
    [
        'nombre' => 'Cartagena',
        'pais'   => 'Colombia',
        'img'    => 'img/destination-1.jpg',
        'link'   => 'internacional/colombia/cartagena.php',
    ],
    [
        'nombre' => 'Punta Cana',
        'pais'   => 'República Dominicana',
        'img'    => 'img/destination-2.jpg',
        'link'   => 'internacional/republica-dominicana/punta-cana.php',
    ],
    [
        'nombre' => 'Cancún',
        'pais'   => 'México',
        'img'    => 'img/destination-3.jpg',
        'link'   => 'internacional/mexico/cancun-riviera-maya.php',
    ],
    [
        'nombre' => 'La Habana',
        'pais'   => 'Cuba',
        'img'    => 'img/destination-4.jpg',
        'link'   => 'internacional.php',
    ],
    [
        'nombre' => 'Montego Bay',
        'pais'   => 'Jamaica',
        'img'    => 'img/destination-5.jpg',
        'link'   => 'internacional.php',
    ],
    [
        'nombre' => 'Aruba',
        'pais'   => 'Aruba',
        'img'    => 'img/destination-6.jpg',
        'link'   => 'internacional.php',
    ],
    [
        'nombre' => 'Curazao',
        'pais'   => 'Curazao',
        'img'    => 'img/destination-7.jpg',
        'link'   => 'internacional.php',
    ],
    [
        'nombre' => 'Europa',
        'pais'   => 'Europa',
        'img'    => 'img/destination-8.jpg',
        'link'   => 'internacional.php',
    ],
    [
        'nombre' => 'Asia',
        'pais'   => 'Asia',
        'img'    => 'img/destination-9.jpg',
        'link'   => 'internacional.php',
    ],
];
?>

<div class="container-fluid destination py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width:900px;">
            <h5 class="section-title px-3"> <?= __('index_titulo_destinos') ?></h5>
            <h2 class="mb-0 fw-bold color-primary-green"><?= __('index_desc_destinos')?></h1>
        </div>

        <div class="team-carousel-wrapper">
            <button class="team-arrow" id="destPrev" aria-label="Anterior">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="team-carousel-viewport" id="destViewport">
                <div class="team-carousel-track" id="destTrack">
                    <?php foreach ($destinos as $d): ?>
                    <div class="dest-slide">
                        <div class="destination-img">
                            <img class="img-fluid rounded w-100"
                                 src="<?= $d['img'] ?>"
                                 alt="<?= $d['nombre'] ?>"
                                 style="height:300px;object-fit:cover;">
                            <div class="destination-overlay p-4">
                                <h4 class="text-white mb-1 mt-3">
                                    <?= htmlspecialchars($d['nombre']) ?>
                                </h4>
                                <p class="text-white mb-2" style="font-size:0.85rem;opacity:.85;">
                                    <i class="fa fa-map-marker-alt me-1"></i>
                                    <?= htmlspecialchars($d['pais']) ?>
                                </p>
                                <a href="<?= $d['link'] ?>"
                                   class="btn-hover text-white">
                                    <?=  __('index_destinos_ver_programas') ?><i class="fa fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="team-arrow" id="destNext" aria-label="Siguiente">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

        <div class="team-dots" id="destDots"></div>
    </div>
</div>
