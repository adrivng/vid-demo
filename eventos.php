<?php
$pageTitle  = 'Eventos';
$activePage = 'eventos';
require_once 'includes/head.php';
?>
<link href="css/eventos.css" rel="stylesheet">
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
/* ── 3 CARDS DE ENTRADA ── */
.ev-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin: 0 0 56px;
}
@media (max-width: 768px) {
    .ev-cards { grid-template-columns: 1fr; }
}

.ev-card {
    display: flex;
    align-items: flex-end;
    justify-content: center;
    text-align: center;
    border-radius: 18px;
    text-decoration: none;
    color: #fff;
    min-height: 400px;
    height: 45vh;
    max-height: 500px;
    transition: transform .25s, box-shadow .25s;
    position: relative;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.ev-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.75) 0%, rgba(0,0,0,.15) 60%);
    pointer-events: none;
    transition: opacity .25s;
}
.ev-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,.25);
    color: #fff;
    text-decoration: none;
}
.ev-card:hover::after {
    background: linear-gradient(to top, rgba(0,0,0,.85) 0%, rgba(0,0,0,.35) 60%);
}
.ev-card__title {
    font-size: 1.4rem;
    font-weight: 900;
    letter-spacing: .8px;
    text-transform: uppercase;
    margin-bottom: 24px;
    position: relative;
    z-index: 2;
    text-shadow: 0 2px 12px rgba(0,0,0,.5);
}
.ev-card--conv { background-image: url('eventos/images/convencion_cuba/image__001.jpg'); }
.ev-card--fam  { background-image: url('eventos/images/fam_cancun_2021/FAM%20CANCUN%202.jpg'); }
.ev-card--event{ background-image: url('eventos/images/convencion2/foto01.jpg'); }
</style>
</head>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="img/images-index/logo.svg" alt="Cargando...">
</div>
<!-- Spinner End -->

<?php require_once 'includes/header.php'; ?>

<!-- ── HERO ── -->
<div class="cont-hero">
    <h1>Eventos y Experiencias Vidatur</h1>
    <p>Transformando viajes corporativos en historias de éxito inolvidables.</p>
</div>

<!-- ── INTRO ── -->
<section class="ev-intro">
    <span class="ev-intro__label">NUESTRA TRAYECTORIA</span>
    <h2>Excelencia en cada detalle</h2>
    <p>Contamos con más de 25 años de experiencia, recordando los buenos momentos vividos en nuestro reciente viaje de integración a Cancún y Cartagena. Sabemos que el turismo esta pasando un momento difícil, pero con el respaldo de un equipo consolidado, podemos salir adelante junto a nuestros clientes-amigos, aliados comerciales y colaboradores. Les Agradecemos por estos 23 años de confianza y reafirmamos nuestro compromiso de seguir brindándoles servicios de calidad..... 💛Vidatur siempre contigo.💚</p>
</section>

<!-- ── 3 CARDS ── -->
<section class="container">
    <div class="ev-cards">

        <a class="ev-card ev-card--conv" href="eventos/convencion_25.php">
            <div class="ev-card__title">Convenciones</div>
        </a>

        <a class="ev-card ev-card--fam" href="eventos/fam_trips.php">
            <div class="ev-card__title">Fam Trips</div>
        </a>

        <a class="ev-card ev-card--event" href="eventos/eventos_lista.php">
            <div class="ev-card__title">Eventos</div>
        </a>

    </div>
</section>

<!-- ── CTA FINAL ── -->
<section class="ev-cta">
    <div class="ev-cta__inner">
        <h3>¿Deseas participar en nuestro próximo evento?</h3>
        <p>Únete a nuestra red de agentes y vive la experiencia Vidatur de primera mano. Conoce los destinos antes que nadie.</p>
        <a href="nosotros.php" class="ev-cta__btn">Contactar con Vidatur</a>
    </div>
</section>

<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>