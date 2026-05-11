/**
 * ============================================================
 *  MÓDULO: WhatsApp Cotizador
 *  Archivo: js/whatsapp-cotizar.js
 *  Uso: Incluir con <script src="js/whatsapp-cotizar.js"></script>
 *       justo antes de cerrar </body>
 * ============================================================
 */

// ─────────────────────────────────────────────────────────────
//  PASO 1 ► CONFIGURA AQUÍ TUS ASESORES
//  Cada objeto tiene:
//    - link:  el id del <a> en el HTML del popup (no cambiar)
//    - phone: número con código de país, SIN espacios ni guiones
//             Perú = 51 + 9 dígitos  ej: 51987654321
// ─────────────────────────────────────────────────────────────
const WA_AGENTS = [
    {
        link:  'waLink1',
        phone: '51999000001',   // ◄ CAMBIA: número de Andrea
    },
    {
        link:  'waLink2',
        phone: '51999000002',   // ◄ CAMBIA: número de Carlos
    },
    {
        link:  'waLink3',
        phone: '51999000003',   // ◄ CAMBIA: número de Lucía
    },
];

// ─────────────────────────────────────────────────────────────
//  PASO 2 ► MENSAJE PRE-CARGADO EN WHATSAPP
//  {package} se reemplaza automáticamente con el nombre
//  del paquete que el usuario seleccionó.
// ─────────────────────────────────────────────────────────────
const WA_MESSAGE_TEMPLATE = '¡Hola! Me interesa cotizar el paquete *{package}*. ¿Me pueden dar más información?';

// ─────────────────────────────────────────────────────────────
//  openWA(packageName)
//  Llamado por: onclick="openWA('Nombre del Paquete')"
//  Lo que hace:
//    1. Arma el mensaje con el nombre del paquete
//    2. Genera el link wa.me para cada asesor
//    3. Actualiza el subtítulo del popup
//    4. Muestra el modal y bloquea el scroll de la página
// ─────────────────────────────────────────────────────────────
function openWA(packageName) {
    // Reemplaza {package} por el nombre real y codifica para URL
    const msg = encodeURIComponent(
        WA_MESSAGE_TEMPLATE.replace('{package}', packageName)
    );

    // Asigna el link de WhatsApp a cada asesor en el popup
    WA_AGENTS.forEach(function(agent) {
        const el = document.getElementById(agent.link);
        if (el) {
            // Formato: https://wa.me/NÚMERO?text=MENSAJE
            el.href = 'https://wa.me/' + agent.phone + '?text=' + msg;
        }
    });

    // Actualiza el subtítulo del modal con el nombre del paquete
    const subtitle = document.getElementById('waSubtitle');
    if (subtitle) {
        subtitle.textContent = 'Consultando: "' + packageName + '". Un asesor te atiende ahora.';
    }

    // Abre el overlay y bloquea el scroll del fondo
    document.getElementById('waOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
}

// ─────────────────────────────────────────────────────────────
//  closeWA()
//  Cierra el modal y devuelve el scroll normal
// ─────────────────────────────────────────────────────────────
function closeWA() {
    document.getElementById('waOverlay').classList.remove('open');
    document.body.style.overflow = '';
}

// ─────────────────────────────────────────────────────────────
//  closeWAOutside(event)
//  Llamado por: onclick="closeWAOutside(event)" en el overlay
//  Cierra el modal solo si el click fue FUERA del cuadro blanco
//  (es decir, sobre el fondo oscuro)
// ─────────────────────────────────────────────────────────────
function closeWAOutside(e) {
    // e.target = elemento que recibió el click
    // Si es el overlay (fondo oscuro) y no el modal en sí → cerrar
    if (e.target === document.getElementById('waOverlay')) {
        closeWA();
    }
}

// ─────────────────────────────────────────────────────────────
//  filterPkg(btn, cat)
//  Llamado por: onclick="filterPkg(this, 'categoria')"
//  Filtra las tarjetas según el data-cat del .pkg-card
//  'all' muestra todas las tarjetas
// ─────────────────────────────────────────────────────────────
function filterPkg(btn, cat) {
    // Quita la clase "active" de todos los botones de filtro
    document.querySelectorAll('.btn-filter').forEach(function(b) {
        b.classList.remove('active');
    });

    // Activa solo el botón presionado
    btn.classList.add('active');

    // Muestra u oculta cada tarjeta según su categoría
    document.querySelectorAll('.pkg-card').forEach(function(card) {
        // data-cat="confirmadas" → card.dataset.cat === 'confirmadas'
        if (cat === 'all' || card.dataset.cat === cat) {
            card.style.display = '';       // mostrar
        } else {
            card.style.display = 'none';   // ocultar
        }
    });
}