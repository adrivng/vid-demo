<?php
$pageTitle  = 'Socios Estratégicos';
$activePage = 'socios';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= $subir ?>css/style.css">
<style>
.cont-hero {
    background: #317755;
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
.logo-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    transition: box-shadow .2s, transform .2s;
}
.logo-card:hover {
    box-shadow: 0 6px 20px rgba(0,0,0,.1);
    transform: translateY(-2px);
}
.logo-card img {
    max-width: 100%;
    max-height: 70px;
    object-fit: contain;
}
.socios-section-title {
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #1a7a4a;
    margin-bottom: .25rem;
}
</style>
</head>
<body>

<?php require_once $subir . 'includes/header.php'; ?>

<div class="cont-hero">
    <h1>Socios Estratégicos</h1>
    <p>Conoce a nuestros aliados comerciales que hacen posible cada experiencia de viaje.</p>
</div>

<div class="container py-5">

    <div class="text-center mb-4">
        <h4 class="socios-section-title">ALIADOS AÉREOS</h4>
    </div>
    <div class="row justify-content-center mb-5">
        <?php
        $aerolineas = [
            ['copa_vacations.png', 'COPA VACATIONS'],
            ['latam.png', 'LATAM'],
            ['plus_ultra.png', 'Plus Ultra'],
            ['jet_smart.png', 'JetSmart'],
            ['avianca.png', 'Avianca'],
            ['arajet.png', 'Arajet'],
        ];
        foreach ($aerolineas as $a):
        ?>
        <div class="col-6 col-sm-4 col-md-2 mb-3">
            <div class="logo-card">
                <img src="<?= $subir ?>img/images-socios-estrategicos/<?= $a[0] ?>" alt="<?= $a[1] ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mb-4">
        <h4 class="socios-section-title">HOTELES INTERNACIONALES Y NACIONALES</h4>
    </div>
    <div class="row justify-content-center mb-5">
        <?php
        $hoteles = [
            ['melia.png', 'Meliá'],
            ['barcelo.png', 'Barceló'],
            ['riu.png', 'RIU'],
            ['nickelodeon.png', 'Nickelodeon'],
            ['iberostar.png', 'Iberostar'],
            ['blue_diamond_6.png', 'Blue Diamond'],
            ['bahia_principe.png', 'Bahía Príncipe'],
            ['princess.png', 'Princess'],
            ['decameron_.png', 'Decameron'],
            ['dorado_plaza.png', 'Dorado Plaza'],
            ['cartagena_plaza.png', 'Cartagena Plaza'],
            ['raddison.png', 'Raddison'],
            ['isla_del_encanto.png', 'Isla del Encanto'],
            ['faranda.png', 'Faranda'],
            ['oasis.png', 'Oasis'],
            ['impressive.png', 'Impressive'],
            ['coral_costa_caribe.png', 'Coral Costa Caribe'],
            ['sirenis.png', 'Sirenis'],
            ['catalonia.png', 'Catalonia'],
            ['vista_sol.png', 'Vista Sol'],
            ['corendon.png', 'Corendon'],
            ['sauce_resort.png', 'Sauce Resort'],
            ['irapay.png', 'Irapay'],
            ['hotel_san_agustin.png', 'San Agustín'],
            ['punta_sal_suites.png', 'Punta Sal Suites'],
            ['bth_hoteles.png', 'BTH Hoteles'],
            ['arangua.png', 'Arangua'],
            ['casa_andina.png', 'Casa Andina'],
            ['best_wester.png', 'Best Western'],
            ['tierra_viva.png', 'Tierra Viva'],
            ['costa_sol.png', 'Costa Sol'],
            ['inkaterra.png', 'Inkaterra'],
            ['ivice.png', 'Ivice'],
            ['libertador.png', 'Libertador'],
            ['los_portales.png', 'Los Portales'],
            ['terra_adina.png', 'Terra Andina'],
            ['costa_blanca.png', 'Costa Blanca'],
            ['norte_swites.png', 'Norte Swites'],
            ['hacienda_san_juan.png', 'Hacienda San Juan'],
            ['hotel_viña_de_queirolo.png', 'Hotel Viñas de Queirolo'],
            ['hacienda_la_caravedo.png', 'Hacienda La Caravedo'],
            ['HELICONIA.png', 'Heliconia'],
        ];
        foreach ($hoteles as $h):
        ?>
        <div class="col-6 col-sm-3 col-md-2 mb-3">
            <div class="logo-card">
                <img src="<?= $subir ?>img/images-socios-estrategicos/<?= $h[0] ?>" alt="<?= $h[1] ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mb-4">
        <h4 class="socios-section-title">OPERADORES</h4>
    </div>
    <div class="row justify-content-center mb-5">
        <?php
        $operadores = [
            ['dorak.png', 'DORAK'],
            ['special_tours.png', 'SPECIAL TOURS'],
            ['splendik_travel.png', 'SPLENDIK TRAVEL'],
            ['amv.png', 'AMV'],
            ['conextour.png', 'CONEXTOUR'],
            ['aymara.png', 'AYMARA'],
            ['conexao_iguazu.png', 'Conexao Iguazu'],
            ['vip_mar.png', 'Vip Mar'],
            ['dio_viagens.png', 'Dio Viagens'],
            ['chirak.png', 'Chirak'],
            ['destino_colombia.png', 'Destino Colombia'],
            ['hover_tours.png', 'Hover Tours'],
            ['otium.png', 'Otium'],
            ['punta_cana_experiencies.png', 'PUNTA CANA EXPERIENCIES'],
            ['rge_style.png', 'RGE STYLE'],
            ['mexitours.png', 'MEXITOURS'],
            ['the_palm_tours.png', 'THE PALM TOURS'],
            ['fiesta_tours.png', 'Fiesta Tours'],
            ['go_pegasus.png', 'GO PEGASUS'],
            ['seeuse.png', 'SEEUSE'],
        ];
        foreach ($operadores as $o):
        ?>
        <div class="col-6 col-sm-4 col-md-2 mb-3">
            <div class="logo-card">
                <img src="<?= $subir ?>img/images-socios-estrategicos/<?= $o[0] ?>" alt="<?= $o[1] ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mb-4">
        <h4 class="socios-section-title">REPRESENTACIONES</h4>
    </div>
    <div class="row justify-content-center mb-5">
        <?php
        $representaciones = [
            ['united_park_and_resort.png', 'UNITED PARK AND RESORT'],
            ['excursion_travel.png', 'Excursion travel'],
        ];
        foreach ($representaciones as $r):
        ?>
        <div class="col-6 col-sm-4 col-md-2 mb-3">
            <div class="logo-card">
                <img src="<?= $subir ?>img/images-socios-estrategicos/<?= $r[0] ?>" alt="<?= $r[1] ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mb-4">
        <h4 class="socios-section-title">MIEMBROS DE</h4>
    </div>
    <div class="row justify-content-center mb-5">
        <?php
        $miembros = [
            ['iata.png', 'IATA'],
            ['copa_vacations.png', 'COPA VACATIONS'],
            ['grupo_gea.png', 'GEA'],
            ['descubre_brasil.png', 'DESCUBRE BRASIL'],
            ['pro_colombia.png', 'PRO COLOMBIA'],
            ['cuerpo_turismo_cartagena.png', 'CUERPO DE TURISMO CARTAGENA'],
        ];
        foreach ($miembros as $m):
        ?>
        <div class="col-6 col-sm-4 col-md-2 mb-3">
            <div class="logo-card">
                <img src="<?= $subir ?>img/images-socios-estrategicos/<?= $m[0] ?>" alt="<?= $m[1] ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>
</body>
</html>
