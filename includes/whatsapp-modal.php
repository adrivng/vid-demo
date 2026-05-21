<div class="wa-overlay" id="waOverlay" onclick="closeWAOutside(event)">
    <div class="wa-modal">
        <button class="wa-modal__close" onclick="closeWA()">&#x2715;</button>
        <div class="wa-modal__icon"><i class="fab fa-whatsapp"></i></div>
        <h5>Habla con nuestros expertos</h5>
        <p id="waSubtitle">Un asesor te atiende ahora mismo.</p>
        <a class="wa-agent" id="waLink1" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">B</div>
            <div class="wa-agent__info"><strong>Brenda Cornejo</strong></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink2" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">G</div>
            <div class="wa-agent__info"><strong>Giuliana Portugal</strong></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink3" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">L</div>
            <div class="wa-agent__info"><strong>Liz Tavera</strong></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a>
        <a class="wa-agent" id="waLink4" href="#" target="_blank" rel="noopener">
            <div class="wa-agent__avatar">B</div>
            <div class="wa-agent__info"><strong>Brendha Juarez</strong></div>
            <i class="fa fa-chevron-right wa-agent__arrow"></i>
        </a> <!-- puedes agregar más considerando whatsapp-cotizar.js -->
        <div class="wa-modal__footer">Atención personalizada · Sin costo adicional</div>
    </div>
</div>
<script src="<?= htmlspecialchars($subir ?? '') ?>js/whatsapp-cotizar.js"></script>
