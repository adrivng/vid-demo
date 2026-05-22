<?php
/*
 * ============================================================
 *  includes/lang.php  —  Sistema de idiomas (es / en)
 * ============================================================
 *
 *  Cómo agregar un nuevo módulo en inglés:
 *
 *  1. En la página, al inicio poné:
 *         $lang = 'en';
 *
 *  2. Agregá la clave en la funcion __(), dentro del array 'en'.
 *
 *  3. En el HTML, reemplazá el texto fijo por:
 *         <?= __('mi_clave') ?>
 *
 *  Ejemplo:
 *     Antes:  <h1>Bienvenido</h1>
 *     Desp:   <h1><?= __('home_title') ?></h1>
 *
 *  Si una clave no existe en el array del idioma activo,
 *  busca en español como fallback. Si no existe en ninguno,
 *  muestra la clave misma.
 * ============================================================
 */

$lang = $lang ?? 'es';

/*
 * ── Helper: __('clave') ──
 * Las traducciones están dentro como static para evitar
 * problemas de scope global en includes anidados.
 */
function __(string $key): string
{
    static $t = null;
    if ($t === null) {
        $t = [
            'es' => [
                // Navegación
                'nav_inicio'         => 'Inicio',
                'nav_nosotros'       => 'Nosotros',
                'nav_peru'           => 'Perú',
                'nav_internacional'  => 'Internacional',
                'nav_bloqueos'       => 'Bloqueos & Programas',
                'nav_mas'            => 'Más',
                'nav_eventos'        => 'EVENTOS',
                'nav_videos'         => 'VIDEOS',
                'nav_lgbt'           => 'LGBT',
                'nav_circuitos'      => 'CIRCUITOS PERÚ',
                'nav_convencion'     => 'CONVENCIÓN',
                'nav_promo_agentes'  => 'PROMOCIONES AGENTES',
                'nav_online'         => 'Online',

                // Topbar
                'top_afiliate'       => 'Afiliate - Online 2.0',
                'top_vpr'            => 'VPR',
                'top_club_vidatur'   => 'Club Vidatur',

                // Footer
                'footer_desc'       => 'Somos una Agencia Mayorista de Viajes con más de 25 años de experiencia ofreciendo los mejores destinos del mundo.',
                'footer_lima'       => 'Lima',
                'footer_libro'      => 'Libro de Reclamaciones',
                'footer_compania'   => 'Compañía',
                'footer_nosotros'   => 'Nosotros',
                'footer_contacto'   => 'Equipo Vidatur',
                'footer_eventos'    => 'Eventos',
                'footer_servicios'  => 'Servicios',
                'footer_bloqueos'   => 'Bloqueos & Programas',
                'footer_nacional'    => 'Perú',
                'footer_internacional'    => 'Internacional',
                'footer_online'     => 'Online',
                'footer_politicas'  => 'Política de Privacidad',
                'footer_terminos'   => 'Términos y Condiciones',
                'footer_copyright'  => 'Vidatur Mayorista de Viajes, Todos los derechos reservados',

                // Spinner
                'spinner_alt'       => 'Cargando...',

                // Index — carrusel
                'carrusel_1_sub'    => 'Programa De Lealtad',
                'carrusel_1_title'  => 'CLUB VIDATUR',
                'carrusel_1_btn'    => 'Conocer más',
                'carrusel_2_sub'    => 'Registro del Cotizador Online',
                'carrusel_2_title'  => 'VIDATUR ONLINE',
                'carrusel_2_btn'    => 'Conocer más',
                'carrusel_3_sub'    => 'Beneficios GEA',
                'carrusel_3_title'  => 'GEA',
                'carrusel_3_btn'    => 'Conocer más',
                'carrusel_4_sub'    => 'VPR',
                'carrusel_4_title'  => 'PROGRAMA DE RECOMPENSA',
                'carrusel_4_btn'    => 'Conocer más',
                'carrusel_prev'     => 'Anterior',
                'carrusel_next'     => 'Siguiente',

                // Beneficios
                'beneficios_title'  => 'Beneficios Exclusivos Para Agencias de Viajes',
                'beneficio_1'       => 'Club Vidatur',
                'beneficio_2'       => 'Cotizador Online',
                'beneficio_3'       => 'GEA',
                'beneficio_4'       => 'Programa Recompensa',

                // Fortalezas
                'fortalezas_title'  => 'Nuestras Fortalezas',
                'fortalezas_sub'    => 'Representaciones',
                'parques_sw'        => 'PARQUES DE SEAWORLD',
                'parques_xc'        => 'PARQUES XCARET',
                'aliados_title'     => 'ALIADOS',
                'aliados_btn'       => 'Ver Socios Estratégicos',

                // Destinos
                'index_titulo_destinos'       => 'Destinos',
                'index_desc_destinos'       => 'Descubre los mejores destinos de viaje con Vidatur',
                'index_destinos_ver_programas' => 'Ver programas',

                // Booking
                'booking_title'     => 'COTIZADOR VIDATUR ONLINE 2.0',
                'booking_sub'       => 'Online 2.0',
                'booking_desc'      => 'Cotiza y reserva tus paquetes turísticos de forma rápida y segura.',
                'booking_btn'       => 'Registrarse',
                'booking_aloj'      => 'Alojamiento',
                'booking_act'       => 'Actividades',
                'booking_trasl'     => 'Traslados',
                'booking_paq'       => 'Paquetes',
                'booking_multi'     => 'Multidestinos',
                'booking_coche'     => 'Alquilar un coche',

                // Equipo
                'equipo_title'      => 'EQUIPO VIDATUR',
                'equipo_contactar'  => 'Contactar',
                'equipo_prev'       => 'Anterior',
                'equipo_next'       => 'Siguiente',

                // Mapa
                'mapa_title'        => 'Nos ubicamos en Miraflores, Lima - Perú',
                'mapa_ver'          => 'Ver mapa',
                'mapa_como'         => 'Cómo llegar',

                // Circuitos
                'circuitos_title'   => 'Circuitos Perú',
                'circuitos_desc'    => 'Recorre los mejores circuitos turísticos del Perú',
                'circuitos_empty'   => 'Contenido próximamente.',
            ],

            'en' => [
                // Navegación
                'nav_inicio'         => 'Home',
                'nav_nosotros'       => 'About Us',
                'nav_peru'           => 'Peru',
                'nav_internacional'  => 'International',
                'nav_bloqueos'       => 'Group Dates & Programs',
                'nav_mas'            => 'More',
                'nav_eventos'        => 'EVENTS',
                'nav_videos'         => 'VIDEOS',
                'nav_lgbt'           => 'LGBT',
                'nav_circuitos'      => 'INBOUND PERU',
                'nav_convencion'     => 'CONVENTION',
                'nav_promo_agentes'  => 'AGENT PROMOTIONS',
                'nav_online'         => 'Online',

                // Topbar
                'top_afiliate'       => 'Join - Online 2.0',
                'top_vpr'            => 'VPR',
                'top_club_vidatur'   => 'Club Vidatur',

                // Footer
                'footer_desc'       => 'We are a Wholesale Travel Agency with over 25 years of experience offering the best destinations in the world.',
                'footer_lima'       => 'Lima',
                'footer_libro'      => 'Complaints Book',
                'footer_compania'   => 'Company',
                'footer_nosotros'   => 'About Us',
                'footer_contacto'   => 'Team Vidatur',
                'footer_eventos'    => 'Events',
                'footer_servicios'  => 'Services',
                'footer_bloqueos'   => 'Group Dates & Programs',
                'footer_nacional'    => 'Peru',
                'footer_internacional' => 'International',
                'footer_online'     => 'Online',
                'footer_politicas'  => 'Privacy Policy',
                'footer_terminos'   => 'Terms & Conditions',
                'footer_copyright'  => 'Vidatur Wholesale Travel, All rights reserved',

                // Spinner
                'spinner_alt'       => 'Loading...',

                // Carrusel
                'carrusel_1_sub'    => 'Loyalty Program',
                'carrusel_1_title'  => 'CLUB VIDATUR',
                'carrusel_1_btn'    => 'Learn more',
                'carrusel_2_sub'    => 'Online Quoter Registration',
                'carrusel_2_title'  => 'VIDATUR ONLINE',
                'carrusel_2_btn'    => 'Learn more',
                'carrusel_3_sub'    => 'GEA Benefits',
                'carrusel_3_title'  => 'GEA',
                'carrusel_3_btn'    => 'Learn more',
                'carrusel_4_sub'    => 'VPR',
                'carrusel_4_title'  => 'REWARD PROGRAM',
                'carrusel_4_btn'    => 'Learn more',
                'carrusel_prev'     => 'Previous',
                'carrusel_next'     => 'Next',

                // Beneficios
                'beneficios_title'  => 'Exclusive Benefits',
                'beneficio_1'       => 'Club Vidatur',
                'beneficio_2'       => 'Online Quoter',
                'beneficio_3'       => 'GEA',
                'beneficio_4'       => 'Reward Program',

                // Fortalezas
                'fortalezas_title'  => 'Our Strengths',
                'fortalezas_sub'    => 'Representations',
                'parques_sw'        => 'SEAWORLD PARKS',
                'parques_xc'        => 'XCARET PARKS',
                'aliados_title'     => 'ALLIES',
                'aliados_btn'       => 'View Strategic Partners',

                // Destinos
                'index_titulo_destinos'       => 'Destinations',
                'index_desc_destinos'       => 'Discover the best travel destinations with Vidatur',
                'index_destinos_ver_programas' => 'View programs',

                // Booking
                'booking_title'     => 'VIDATUR ONLINE 2.0 QUOTER',
                'booking_sub'       => 'Online 2.0',
                'booking_desc'      => 'Quote and book your travel packages quickly and securely.',
                'booking_btn'       => 'Register',
                'booking_aloj'      => 'Accommodation',
                'booking_act'       => 'Activities',
                'booking_trasl'     => 'Transfers',
                'booking_paq'       => 'Packages',
                'booking_multi'     => 'Multi-destination',
                'booking_coche'     => 'Rent a car',

                // Equipo
                'equipo_title'      => 'VIDATUR TEAM',
                'equipo_contactar'  => 'Contact',
                'equipo_prev'       => 'Previous',
                'equipo_next'       => 'Next',

                // Mapa
                'mapa_title'        => 'We are located in Miraflores, Lima - Peru',
                'mapa_ver'          => 'View map',
                'mapa_como'         => 'Get directions',

                // Circuitos
                'circuitos_title'   => 'Peru Circuits',
                'circuitos_desc'    => 'Explore the best tour circuits in Peru',
                'circuitos_empty'   => 'Content coming soon.',
            ],
        ];
    }

    $lang = $GLOBALS['lang'] ?? 'es';

    if (isset($t[$lang][$key])) {
        return $t[$lang][$key];
    }
    if ($lang !== 'es' && isset($t['es'][$key])) {
        return $t['es'][$key];
    }
    return $key;
}
