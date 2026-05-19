<?php

$subir = $subir ?? '';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $subir ?>lib/easing/easing.min.js"></script>
<script src="<?= $subir ?>lib/waypoints/waypoints.min.js"></script>
<script src="<?= $subir ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= $subir ?>lib/lightbox/js/lightbox.min.js"></script>
<script src="<?= $subir ?>js/main.js"></script>
<script>
(function() {
    var btn = document.getElementById('langBtn');
    var menu = document.getElementById('langMenu');
    if (btn && menu) {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            var rect = btn.getBoundingClientRect();
            menu.style.top = (rect.bottom + 4) + 'px';
            menu.style.left = Math.max(4, rect.left) + 'px';
            menu.classList.toggle('open');
        });
        menu.addEventListener('click', function(e) {
            var item = e.target.closest('.lang-option');
            if (!item) return;
            e.preventDefault();
            switchLang(item.getAttribute('data-lang'));
        });
        function closeLang() { menu.classList.remove('open'); }
        document.addEventListener('click', closeLang);
        window.addEventListener('scroll', closeLang, { passive: true });
    }
    // Mobile language toggle
    document.querySelectorAll('.lang-mobile-opt').forEach(function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            switchLang(this.getAttribute('data-lang'));
        });
    });
    function switchLang(lang) {
        if (!lang) return;
        document.cookie = 'lang=' + lang + ';path=/;max-age=31536000';
        location.reload();
    }
})();
</script>