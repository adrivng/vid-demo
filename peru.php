<?php
$pageTitle  = 'Perú';
$activePage = 'peru';
require_once 'includes/head.php';
?>

    <!-- Scripts exclusivos: amCharts (van dentro del <head>) -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/peruLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

</head>
<body>

<!-- Spinner -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>

<?php require_once 'includes/header.php'; ?>

<!-- ========== BREADCRUMB ========== -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Paquetes Perú</h3>
    </div>
</div>
<!-- ========== FIN BREADCRUMB ========== -->


<!-- ========== MAPA + VIDEO ========== -->
<div class="container py-5">
    <div class="map_container">

        <div id="chartdiv"></div>

        <div class="video_side">
            <video autoplay muted loop playsinline>
                <source src="videos/peru.mp4" type="video/mp4">
            </video>
        </div>

    </div>
</div>
<!-- ========== FIN MAPA ========== -->


<?php require_once 'includes/footer.php'; ?>

<?php require_once 'includes/scripts.php'; ?>

<!-- Script exclusivo de esta página: lógica del mapa amCharts -->
<script>
am5.ready(function () {

    var root = am5.Root.new("chartdiv");
    root.setThemes([am5themes_Animated.new(root)]);

    var chart = root.container.children.push(
        am5map.MapChart.new(root, {
            projection: am5map.geoMercator()
        })
    );

    var polygonSeries = chart.series.push(
        am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_peruLow
        })
    );

    polygonSeries.mapPolygons.template.setAll({
        tooltipText:     "{name}",
        interactive:     true,
        fill:            am5.color(0xb31217),
        stroke:          am5.color(0xffffff),
        strokeWidth:     2,
        cursorOverStyle: "pointer"
    });

    polygonSeries.mapPolygons.template.states.create("hover", {
        fill:  am5.color(0xe63946),
        scale: 1.02
    });

    // Tooltip personalizado
    var tooltip = am5.Tooltip.new(root, {
        getFillFromSprite: false,
        autoTextColor:     false
    });

    tooltip.get("background").setAll({
        fill:        am5.color(0xffffff),
        stroke:      am5.color(0xb31217),
        strokeWidth: 2
    });

    tooltip.label.setAll({
        fill:       am5.color(0xb31217),
        fontSize:   18,
        fontWeight: "600"
    });

    polygonSeries.mapPolygons.template.set("tooltip", tooltip);

    // Rutas por región — agrega más según necesites
    var rutas = {
        "Cusco":    "cusco.php",
        "Lima":     "lima.php",
        "Arequipa": "arequipa.php",
        "Puno":     "puno.php",
        "Ica":      "ica.php"
    };

    polygonSeries.mapPolygons.template.events.on("click", function (ev) {
        var nombre = ev.target.dataItem.dataContext.name;
        if (rutas[nombre]) {
            window.location.href = rutas[nombre];
        }
    });

});
</script>

</body>
</html>