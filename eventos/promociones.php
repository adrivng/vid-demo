<?php
$pageTitle  = 'Eventos';
$activePage = 'eventos';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<style>
.sticky-top.navbar-light .navbar-nav .nav-link { color: var(--bs-white) !important; }
.ev-page-header { text-align: center; padding: 120px 20px 0; margin-bottom: 10px; }
.ev-page-header h1 { font-size: 1.8rem; font-weight: 900; color: #1a7a4a; text-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 15px; }
.ev-back-btn { display: inline-block; margin-bottom: 20px; padding: 8px 24px; background: #1a7a4a; color: #fff; border-radius: 6px; text-decoration: none; font-weight: 700; font-size: .85rem; transition: background .2s; }
.ev-back-btn:hover { background: #145c37; color: #fff; text-decoration: none; }
.ev-carousel .carousel-inner .carousel-item { min-height: 500px; max-height: 600px; background: #1a1a2e; }
.ev-carousel .carousel-inner .carousel-item img { width: 100%; height: 500px; object-fit: contain; }
.ev-carousel .carousel-control-prev-icon, .ev-carousel .carousel-control-next-icon { padding: 25px 30px; border-radius: 50%; }
.carousel-indicators button { width: 12px; height: 12px; border-radius: 50%; margin: 0 4px; }
.promo-title { color: #357d5c; text-align: center; }
.promo-date { text-align: center; }
.promo-price { color: #f68a2c; font-size: 15px; text-align: center; }
.promo-white { color: #fff; text-align: center; }
@media (max-width: 768px) { .ev-carousel .carousel-inner .carousel-item { min-height: 300px; } .ev-carousel .carousel-inner .carousel-item img { height: 300px; } .ev-page-header { padding: 100px 15px 0; } .ev-page-header h1 { font-size: 1.3rem; } }
</style>
<link rel="stylesheet" href="<?= $subir ?>css/eventos.css">
</head>
<body>

<?php require_once $subir . "includes/header-green.php"; ?>

<div class="ev-page-header">
    <h1>Eventos</h1>
    <a href="../eventos.php" class="ev-back-btn">&larr; Volver a Eventos</a>
</div>

<div class="row" >
	<div class="center">


		<section id="options">
		<ul id="filters" class="option-set " data-option-key="filter">
			<li><a href="#filter" data-option-value=".todos" class="portofoliobutton selected">Todos</a></li>
			<li><a href="#filter" data-option-value=".sur" class="portofoliobutton">Sudamérica</a></li>
			<li><a href="#filter" data-option-value=".centro" class="portofoliobutton">Centroamérica</a></li>
			<li><a href="#filter" data-option-value=".norte" class="portofoliobutton">Norteamérica</a></li>
			<li><a href="#filter" data-option-value=".nacional" class="portofoliobutton">Nacional</a></li>
			<li><a href="#filter" data-option-value=".europa" class="portofoliobutton">Europa</a></li>
			<li><a href="#filter" data-option-value=".combinados" class="portofoliobutton">Combinados</a></li>
			<li><a href="#filter" data-option-value=".sp" class="portofoliobutton">Super Promos</a></li>
			<li><a href="#filter" data-option-value=".sl" class="portofoliobutton">Salidas Confirmadas</a></li>
		</ul>
		<ul id="filters">
			<li><a href="convencion.html" class="portofoliobutton">Convención Vidatur</a></li>
		</ul>
		</section>
	</div>
</div>
<div class="hr">
</div>


<div class="row">
	<div id="portofolio">

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/aeromexico.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_aeromexico_1.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promociones Aeromexico</h5>
		<h5 class="promo-date">Hasta 12 Jun</h5>
		<h5 class="promo-price"><big><big><big>$719</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/promo_barcelo_hotels_&_resorts.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_barcelo_hotels_&_resorts_1.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Cardena Barceló Hotels & Resorts</h5>
		<h5 class="promo-date">Hasta 12 Jun</h5>
		<h5 class="promo-price"><big><big><big>$865</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos sur 2018">
		<a href="promocion/promo_san_andres.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_san_andres_1.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo San Andrés - Decameron</h5>
		<h5 class="promo-date">Hasta 13 Jun</h5>
		<h5 class="promo-price"><big><big><big>$785</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos sur sl 2018">
		<a href="promocion/fiestas_patrias.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_fiestas_patrias_16.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Fiestas Patrias Salidas Confirmadas</h5>
		<h5 class="promo-date">Hasta 15 Jun</h5>
		<h5 class="promo-price"><big><big><big>$759</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos sur sl 2018">
		<a href="promocion/salidas_confirmadas_medellin_feria_fores.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_salidas_confirmadas_medellin_feria_fores_2.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Medellín Feria de Flores</h5>
		<h5 class="promo-date">Hasta 15 Jun</h5>
		<h5 class="promo-price"><big><big><big>$855</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/fiesta_de_solteros_hotel_barcelo.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_fiesta_de_solteros_hotel_barcelo_1.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Fiesta de Solteros - Hotel Barceló</h5>
		<h5 class="promo-date">Hasta 17 Jun</h5>
		<h5 class="promo-price"><big><big><big>$1260</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos sur sl 2018">
		<a href="promocion/cartagena_las_americas_2018.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_cartagena_las_americas_2018_4.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Cartagena - Hotel Las Américas</h5>
		<h5 class="promo-price"><big><big><big>$705</big></big></big></h5>
		<h5 class="promo-white">Hasta 30 May</h5>
		</div>

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/promo_royalton_parques.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_royalton_parques.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Royalton con Parques</h5>
		<h5 class="promo-date">Hasta 15 Jun</h5>
		<h5 class="promo-price"><big><big><big>$975</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/promo_aruba_avianca.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_aruba_avianca_1.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Aruba Avianca</h5>
		<h5 class="promo-date">Hasta 16 Jun</h5>
		<h5 class="promo-price"><big><big><big>$1166</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/promo_hoteles_playa_resort_2018.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_hoteles_playa_resort_2018_6.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Hoteles Playa Resort con Parques</h5>
		<h5 class="promo-date">Hasta 21 Jun</h5>
		<h5 class="promo-price"><big><big><big>$880</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/promo_cancun.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_cancun_5.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Cancún</h5>
		<h5 class="promo-date">Hasta 30 Jun</h5>
		<h5 class="promo-price"><big><big><big>$835</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos sur 2018">
		<a href="promocion/super_promo_mendoza.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_super_promo_mendoza.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Super Promo Mendoza</h5>
		<h5 class="promo-date">Hasta 30 Jun</h5>
		<h5 class="promo-price"><big><big><big>$539</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/promo_cancun_parques.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_cancun_parques_4.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Cancún con Parques</h5>
		<h5 class="promo-date">Hasta 30 Jun</h5>
		<h5 class="promo-price"><big><big><big>$945</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/hotel_crown_paradise.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_hotel_crown_paradise.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Hotel Crown Paradise</h5>
		<h5 class="promo-date">Hasta 30 Jun</h5>
		<h5 class="promo-price"><big><big><big>$909</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/promo_punta_cana_avianca.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_punta_cana_avianca_3.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Punta Cana Avianca</h5>
		<h5 class="promo-date">Hasta 30 Jun</h5>
		<h5 class="promo-price"><big><big><big>$889</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos sur 2018">
		<a href="promocion/promo_sao_paulo.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_sao_paulo_2.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Sao Paulo con Avianca</h5>
		<h5 class="promo-date">Hasta 30 Jun</h5>
		<h5 class="promo-price"><big><big><big>$845</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/promo_puerto_vallarta.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_puerto_vallarta_4.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Puerto Vallarta</h5>
		<h5 class="promo-date">Hasta 07 Jul</h5>
		<h5 class="promo-price"><big><big><big>$829</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/promo_hotel_oasis.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_hotel_oasis_2.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Hoteles Oasis Cancún</h5>
		<h5 class="promo-date">Hasta 06 Ago</h5>
		<h5 class="promo-price"><big><big><big>$885</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos centro  2018">
		<a href="promocion/promo_panama_black_weekend.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_panama_black_weekend_1.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Panamá Black WeeKend</h5>
		<h5 class="promo-date">Hasta 31 Ago</h5>
		<h5 class="promo-price"><big><big><big>$649</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos centro  sp 2018">
		<a href="promocion/super_promo_panama.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_super_promo_panama_6.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Super Promo Panamá</h5>
		<h5 class="promo-date">Hasta 30 Ago</h5>
		<h5 class="promo-price"><big><big><big>$695</big></big></big></h5>
		</div>	

		<div class="four columns threeportofolio category todos norte 2018">
		<a href="promocion/joyas_del_este.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_joyas_del_este.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Washington, Niegra Falls y Boston</h5>
		<h5 class="promo-date">Hasta 26 Oct</h5>
		<h5 class="promo-price"><big><big><big>$1915</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro 2018">
		<a href="promocion/promo_hotel_karisma.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_hotel_karisma_3.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Hoteles Karisma</h5>
		<h5 class="promo-date">Hasta 30 Nov</h5>
		<h5 class="promo-price">Desde: <big><big><big>$1015</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos sur  2018">
		<a href="promocion/promo_isla_margarita.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_promo_isla_margarita_2.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Promo Isla Margarita</h5>
		<h5 class="promo-date">Hasta 20 Dic</h5>
		<h5 class="promo-price">Desde: <big><big><big>$655</big></big></big></h5>
		</div>

		<div class="four columns threeportofolio category todos centro">
		<a href="promocion/xcaret_2018.html">
		<div class="portofoliothumb">
		<img src="promocion/img/pr_xcaret_2018.jpg" class="threeimage" alt=""/>
		</div>
		</a>
		<h5 class="promo-title">Xcaret Increible 2018</h5>
		<h5 class="promo-white">4 Días | 3 Noches</h5>
		<h5 class="promo-price promo-white">Desde: <big><big><big>$588</big></big></big></h5>
		</div>


</div>
</div>
<div>
<div class="hr">
</div>

<?php require_once $subir . "includes/footer.php"; ?>
<?php require_once $subir . "includes/scripts.php"; ?>
</body>
</html>
