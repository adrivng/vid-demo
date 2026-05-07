/**
 * Buscador de Destinos
 * Módulo JS limpio, sin dependencias externas.
 * Consume /api/destinos.php y maneja el dropdown de resultados.
 *
 * Uso: incluir al final del <body> o con defer
 *   <script src="/js/buscador.js" defer></script>
 */

'use strict';

// ── Configuración ──────────────────────────────────────────────────────────────

const CONFIG = {
    apiUrl          : '/vid-demo/api/destinos.php', // Ruta de la API PHP
    minChars        : 2,                   // Mínimo de caracteres para buscar
    maxResultados   : 8,                   // Máximo de items en el dropdown
    debounceMs      : 250,                 // Espera tras dejar de escribir (ms)
    claseActiva     : 'resultado-activo',  // Clase CSS para ítem resaltado con teclado
};

// ── Estado interno ─────────────────────────────────────────────────────────────

let _todosLosDestinos = [];   // Cache de destinos traídos de la API
let _timeoutDebounce  = null;
let _indiceActivo     = -1;   // Para navegación con teclado

// ── Elementos del DOM ──────────────────────────────────────────────────────────

const input    = document.getElementById('buscadorDestinos');
const dropdown = document.getElementById('resultadosBusqueda');
const btnBuscar = document.getElementById('btnBuscar');

// ── Utilidades ─────────────────────────────────────────────────────────────────

/**
 * Normaliza texto eliminando tildes y pasando a minúsculas.
 * Permite buscar "brasil" y encontrar "Brasil" o "Río" con "rio".
 */
function normalizar(str) {
    return str
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '');
}

/**
 * Envuelve la parte que coincide con la búsqueda en un <mark>.
 */
function resaltarCoincidencia(texto, query) {
    if (!query) return texto;
    const regex = new RegExp(`(${query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')})`, 'gi');
    return texto.replace(regex, '<mark>$1</mark>');
}

// ── Carga inicial de destinos ──────────────────────────────────────────────────

async function cargarDestinos() {
    try {
        const res  = await fetch(CONFIG.apiUrl);
        const data = await res.json();
        if (data.ok) {
            _todosLosDestinos = data.destinos;
        }
    } catch (err) {
        console.error('[Buscador] Error al cargar destinos:', err);
    }
}

// ── Filtrado local (más rápido que llamar a la API en cada tecla) ──────────────

function filtrarDestinos(query) {
    const q = normalizar(query);
    return _todosLosDestinos
        .filter(d => normalizar(d.destino).includes(q) || normalizar(d.region).includes(q))
        .slice(0, CONFIG.maxResultados);
}

// ── Renderizado del dropdown ───────────────────────────────────────────────────

function renderDropdown(resultados, query) {
    _indiceActivo = -1;

    if (resultados.length === 0) {
        dropdown.innerHTML = `
            <div class="resultado-vacio">
                <i class="fas fa-map-marker-alt me-2"></i>
                No encontramos destinos para "<strong>${query}</strong>"
            </div>`;
        mostrarDropdown();
        return;
    }

    // Agrupar por región
    const porRegion = resultados.reduce((acc, d) => {
        if (!acc[d.region]) acc[d.region] = [];
        acc[d.region].push(d);
        return acc;
    }, {});

    let html = '';

    for (const [region, destinos] of Object.entries(porRegion)) {
        html += `<div class="resultado-grupo-header">${region}</div>`;
        for (const d of destinos) {
            const nombreResaltado = resaltarCoincidencia(d.destino, query);
            html += `
                <a href="${d.url}" class="resultado-item" data-url="${d.url}">
                    <i class="fas fa-map-marker-alt resultado-icono"></i>
                    <span class="resultado-nombre">${nombreResaltado}</span>
                    <span class="resultado-region">${d.region}</span>
                </a>`;
        }
    }

    dropdown.innerHTML = html;
    mostrarDropdown();
}

function mostrarDropdown() {
    dropdown.classList.remove('d-none');
}

function ocultarDropdown() {
    dropdown.classList.add('d-none');
    _indiceActivo = -1;
}

// ── Navegación con teclado ─────────────────────────────────────────────────────

function moverSeleccion(direccion) {
    const items = dropdown.querySelectorAll('.resultado-item');
    if (!items.length) return;

    // Quitar clase activa del anterior
    if (_indiceActivo >= 0) {
        items[_indiceActivo].classList.remove(CONFIG.claseActiva);
    }

    _indiceActivo += direccion;

    // Wrap alrededor
    if (_indiceActivo < 0)            _indiceActivo = items.length - 1;
    if (_indiceActivo >= items.length) _indiceActivo = 0;

    const itemActivo = items[_indiceActivo];
    itemActivo.classList.add(CONFIG.claseActiva);
    itemActivo.scrollIntoView({ block: 'nearest' });
}

function confirmarSeleccion() {
    const items = dropdown.querySelectorAll('.resultado-item');
    if (_indiceActivo >= 0 && items[_indiceActivo]) {
        window.location.href = items[_indiceActivo].dataset.url;
    } else if (input.value.trim().length >= CONFIG.minChars) {
        // Si no hay ítem seleccionado, navegar al primero
        if (items[0]) window.location.href = items[0].dataset.url;
    }
}

// ── Búsqueda con debounce ─────────────────────────────────────────────────────

function onInputChange() {
    clearTimeout(_timeoutDebounce);
    const query = input.value.trim();

    if (query.length < CONFIG.minChars) {
        ocultarDropdown();
        return;
    }

    _timeoutDebounce = setTimeout(() => {
        const resultados = filtrarDestinos(query);
        renderDropdown(resultados, query);
    }, CONFIG.debounceMs);
}

// ── Event Listeners ───────────────────────────────────────────────────────────

function inicializar() {
    if (!input || !dropdown) {
        console.warn('[Buscador] Elementos del DOM no encontrados.');
        return;
    }

    // Escribir en el input
    input.addEventListener('input', onInputChange);

    // Teclado: flechas + enter + escape
    input.addEventListener('keydown', (e) => {
        if (dropdown.classList.contains('d-none')) return;

        switch (e.key) {
            case 'ArrowDown':
                e.preventDefault();
                moverSeleccion(1);
                break;
            case 'ArrowUp':
                e.preventDefault();
                moverSeleccion(-1);
                break;
            case 'Enter':
                e.preventDefault();
                confirmarSeleccion();
                break;
            case 'Escape':
                ocultarDropdown();
                input.blur();
                break;
        }
    });

    // Botón buscar
    if (btnBuscar) {
        btnBuscar.addEventListener('click', () => {
            const query = input.value.trim();
            if (query.length < CONFIG.minChars) {
                input.focus();
                return;
            }
            // Si hay un ítem activo, navegar; si no, mostrar resultados
            confirmarSeleccion();
        });
    }

    // Cerrar dropdown al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!input.contains(e.target) && !dropdown.contains(e.target)) {
            ocultarDropdown();
        }
    });

    // Abrir dropdown si el input ya tiene texto (ej: al volver con el navegador)
    input.addEventListener('focus', () => {
        if (input.value.trim().length >= CONFIG.minChars) {
            onInputChange();
        }
    });
}

// ── Bootstrap ─────────────────────────────────────────────────────────────────

document.addEventListener('DOMContentLoaded', async () => {
    await cargarDestinos(); // Precarga todos los destinos al inicio (más rápido)
    inicializar();
});