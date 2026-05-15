<?php
$pageTitle  = 'Equipo Vidatur';
$activePage = 'nosotros';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= $subir ?>css/team.css">
<style>
.cont-hero {
    background: #2d7a3a;
    padding: 110px 20px 40px;
    text-align: center
}
.cont-hero h1 {
    font-size: 2.2rem;
    font-weight: 900;
    color: #fff;
    margin: 0
}
.cont-hero p {
    color: rgba(255,255,255,.85);
    max-width: 560px;
    margin: 8px auto 0;
    font-size: 1rem
}
</style>
</head>
<body>

<?php require_once $subir . 'includes/header.php'; ?>

<div class="cont-hero">
    <h1>Equipo Vidatur</h1>
    <p>Conoce a las personas que hacen posible tus viajes.</p>
</div>

<section class="container-fluid guide about service py-5 team-page">
    <div class="container py-5">
        

        <!-- ============================================================
             GERENCIA GENERAL
             ============================================================ -->
        <div class="text-center mb-5"><h2 class="section-title px-3 mb-0">EQUIPO VIDATUR</h2></div>
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/miguel_angel_gerente_4.jpg" class="img-fluid w-100 rounded-top" alt="Miguel Angel Portugal">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="https://wa.link/z9cmto" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Miguel Angel Portugal</h4>
                            <p class="mb-0">Gerente General</p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden">ten.ratudiv@aicnereg</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/mirko_producto.png" class="img-fluid w-100 rounded-top" alt="Mirko Arrunategui">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="https://wa.link/70rl0f" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Mirko Arrunategui</h4>
                            <p class="mb-0">Gerente de Operaciones</p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden">ten.ratudiv@satnev</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             ÁREA DE RESERVA
             ============================================================ -->
        <div class="text-center mb-5"><h2 class="section-title px-3 mb-0">Área de Reserva</h2></div>
        <div class="row g-4 justify-content-center mb-5">
            <?php
            $reserva = [
                ['Brendha Juarez', 'Counter',       'brendha_juarez_counter.jpg',   'reservas4@vidatur.net',   'https://wa.link/9eev1k'],
                ['Brenda Cornejo', 'Counter',       'brenda_cornejo_counter_2.jpg', 'reservas3@vidatur.net',   'https://wa.link/3lc0hz'],
                ['Giuliana Portugal', 'Counter',    'giuliana_portugal_2.jpg',      'reservas@vidatur.net',    'https://wa.link/922o9c'],
                ['Liz Tavera',     'Counter',       'liz_tavera_counter.jpg',       'reservas8@vidatur.net',   'https://wa.link/98c7h3'],
            ];
            foreach ($reserva as $m):
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/<?= $m[2] ?>" class="img-fluid w-100 rounded-top" alt="<?= $m[0] ?>">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="<?= $m[4] ?>" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3"><?= $m[0] ?></h4>
                            <p class="mb-0"><?= $m[1] ?></p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden"><?= strrev($m[3]) ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- ============================================================
             VENTAS
             ============================================================ -->
        <div class="text-center mb-5"><h2 class="section-title px-3 mb-0">Ventas</h2></div>
        <div class="row g-4 justify-content-center mb-5">
            <?php
            $ventas = [
                ['Daniel Campo Verde', 'Ejecutivo Comercial Lima',    'Daniel_campo_verde_ventas_3.jpg', 'ventaslim@vidatur.net',    'https://wa.link/kczmac'],
                ['Miluska Chachaima Gicaro', 'Ejecutivo Comercial Arequipa', 'milureduc.jpg',         'ventas3@vidatur.net',      'https://wa.link/qehlrm'],
            ];
            foreach ($ventas as $m):
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/<?= $m[2] ?>" class="img-fluid w-100 rounded-top" alt="<?= $m[0] ?>">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="<?= $m[4] ?>" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3"><?= $m[0] ?></h4>
                            <p class="mb-0"><?= $m[1] ?></p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden"><?= strrev($m[3]) ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- ============================================================
             PRODUCTO Y ATENCIÓN AL CLIENTE
             ============================================================ -->
        <div class="text-center mb-5"><h2 class="section-title px-3 mb-0">Producto y Atención al Cliente</h2></div>

        <h5 class="text-center fw-bold mb-4" style="color:var(--bs-primary);">Producto</h5>
        <div class="row g-4 justify-content-center mb-4">
            <?php
            $producto = [
                ['Yulieth Alarcón',   'Producto Internacional', 'yulieth_producto_2.jpg', 'producto@vidatur.net',     'https://wa.link/ha4b9y'],
                ['Rocio Yamashiro',   'Producto Nacional',      'naomi_producto_2.jpg',   'producto2@vidatur.net',    'https://wa.link/428gra'],
            ];
            foreach ($producto as $m):
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/<?= $m[2] ?>" class="img-fluid w-100 rounded-top" alt="<?= $m[0] ?>">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="<?= $m[4] ?>" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3"><?= $m[0] ?></h4>
                            <p class="mb-0"><?= $m[1] ?></p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden"><?= strrev($m[3]) ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <h5 class="text-center fw-bold mb-4" style="color:var(--bs-primary);">Atención al Cliente</h5>
        <div class="row g-4 justify-content-center mb-5">
            <?php
            $atc = [
                ['Lady Guillén',   'Atención al Cliente', 'lady_guillen_3.jpg',      'atencionalcliente@vidatur.net', 'https://wa.link/0393y5'],
                ['Victor Cárdenas','Atención al Cliente', 'victor_cardenas_atc.jpg', 'atencionalcliente@vidatur.net', 'https://wa.link/awc2zk'],
            ];
            foreach ($atc as $m):
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/<?= $m[2] ?>" class="img-fluid w-100 rounded-top" alt="<?= $m[0] ?>">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="<?= $m[4] ?>" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3"><?= $m[0] ?></h4>
                            <p class="mb-0"><?= $m[1] ?></p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden"><?= strrev($m[3]) ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- ============================================================
             ADMINISTRACIÓN
             ============================================================ -->
        <div class="text-center mb-5"><h2 class="section-title px-3 mb-0">Administración</h2></div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="<?= $subir ?>img/images-index/administracion_rouse.jpg" class="img-fluid w-100 rounded-top" alt="Rose Damian">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn-wa-team" href="https://wa.link/bba0py" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i> Contactar
                            </a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Rose Damian</h4>
                            <p class="mb-0">Administración</p>
                            <div class="email-wrap"><i class="fas fa-envelope"></i><span class="email-hidden">ten.ratudiv@dadilbatnoc</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>

</body>
</html>
