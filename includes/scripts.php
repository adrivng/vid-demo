<?php
/**
 * scripts.php — Componente compartido: librerías JS al final del <body>
 *
 * USO en cualquier página, justo antes de </body>:
 *   <?php require_once 'includes/scripts.php'; ?>
 *   </body>
 *
 * Si necesitas JS extra en una página específica,
 * agrégalo ANTES del require:
 *
 *   <script src="js/mi-script-especifico.js"></script>
 *   <?php require_once 'includes/scripts.php'; ?>
 *   </body>
 */
?>

<!-- ==================== LIBRERÍAS JS ==================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- JS principal del sitio -->
<script src="js/main.js"></script>
<!-- ==================== FIN LIBRERÍAS JS ==================== -->