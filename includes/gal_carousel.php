<style>
.gal-hero{background:#2d7a3a;padding:120px 20px 40px;text-align:center}
.gal-hero h1{font-size:1.6rem;font-weight:900;color:#fff;margin:0;line-height:1.3}
.gal-wrap{max-width:1100px;margin:0 auto;padding:40px 20px}
.gal-row{display:flex;align-items:center;gap:16px}
.gal-back{flex-shrink:0;display:inline-flex;align-items:center;justify-content:center;gap:4px;width:48px;height:48px;background:#1a7a4a;color:#fff;border-radius:50%;text-decoration:none;font-weight:700;font-size:.85rem;transition:background .2s;writing-mode:vertical-lr;text-orientation:mixed}
.gal-back:hover{background:#145c37;color:#fff;text-decoration:none}
.gal-viewport{overflow:hidden;border-radius:14px;flex:1;background:#e8e8e8;max-height:70vh}
.gal-track{display:flex;transition:transform .4s cubic-bezier(.4,0,.2,1)}
.gal-slide{flex:0 0 100%;box-sizing:border-box;line-height:0}
.gal-slide img{width:100%;height:auto;display:block;max-height:70vh;object-fit:contain}
.gal-arrow{flex-shrink:0;width:42px;height:42px;border-radius:50%;border:2px solid #1a7a4a;background:#fff;color:#1a7a4a;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:background .2s,color .2s,transform .15s;z-index:2}
.gal-arrow:hover{background:#1a7a4a;color:#fff;transform:scale(1.08)}
.gal-arrow:disabled{opacity:.3;cursor:not-allowed;transform:none}
</style>
<script>
function initCarrusel(ids) {
    var track = document.getElementById(ids.track);
    var viewport = document.getElementById(ids.viewport);
    var btnPrev = document.getElementById(ids.prev);
    var btnNext = document.getElementById(ids.next);
    var dotsWrap = ids.dots ? document.getElementById(ids.dots) : null;
    var slides = track.querySelectorAll(ids.slide);
    var total = slides.length;
    var current = 0;
    var timer;

    function visible() {
        var w = viewport.offsetWidth;
        if (w >= 992) return ids.cols && ids.cols.lg ? ids.cols.lg : 4;
        if (w >= 640) return ids.cols && ids.cols.md ? ids.cols.md : 2;
        return 1;
    }

    function buildDots() {
        if (!dotsWrap) return;
        dotsWrap.innerHTML = '';
        var pages = Math.ceil(total / visible());
        for (var i = 0; i < pages; i++) {
            (function(idx) {
                var d = document.createElement('button');
                d.className = 'team-dot' + (idx === 0 ? ' active' : '');
                d.addEventListener('click', function() {
                    stopAuto();
                    goTo(idx * visible());
                    startAuto();
                });
                dotsWrap.appendChild(d);
            })(i);
        }
    }

    function goTo(idx) {
        var vs = visible();
        var max = Math.max(0, total - vs);
        current = idx > max ? 0 : Math.max(idx, 0);
        if (ids.usePercent) {
            track.style.transform = 'translateX(-' + (current * (100 / vs)) + '%)';
        } else {
            track.style.transform = 'translateX(-' + (current * slides[0].offsetWidth) + 'px)';
        }
        if (dotsWrap) {
            var activePage = Math.floor(current / vs);
            var dots = dotsWrap.querySelectorAll('.team-dot');
            for (var i = 0; i < dots.length; i++) {
                dots[i].classList.toggle('active', i === activePage);
            }
        }
        if (btnPrev) btnPrev.disabled = current === 0;
        if (btnNext) btnNext.disabled = current >= max;
    }

    function startAuto() { timer = setInterval(function() { goTo(current + visible()); }, 3000); }
    function stopAuto() { clearInterval(timer); }

    if (btnPrev) btnPrev.addEventListener('click', function() { stopAuto(); goTo(current - visible()); startAuto(); });
    if (btnNext) btnNext.addEventListener('click', function() { stopAuto(); goTo(current + visible()); startAuto(); });

    viewport.addEventListener('mouseenter', stopAuto);
    viewport.addEventListener('mouseleave', startAuto);

    var startX = 0;
    viewport.addEventListener('touchstart', function(e) { startX = e.touches[0].clientX; stopAuto(); }, { passive: true });
    viewport.addEventListener('touchend', function(e) {
        var diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(current + (diff > 0 ? visible() : -visible()));
        startAuto();
    });

    var resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() { buildDots(); goTo(0); }, 150);
    });

    buildDots();
    goTo(0);
    startAuto();
}
</script>
