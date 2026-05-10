<?php
/**
 * head.php — Componente compartido: <head> HTML
 *
 * USO en cualquier página:
 *   <?php
 *     $pageTitle = 'Perú';   // título de la pestaña
 *     require_once 'includes/head.php';
 *   ?>
 *
 * NOTA: No cierra </head> — te permite agregar
 *       scripts extra por página antes de cerrarlo.
 *
 * Ejemplo con script extra en una página:
 *   <?php require_once 'includes/head.php'; ?>
 *   <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
 *   </head>
 */

$pageTitle = $pageTitle ?? 'Vidatur';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Vidatur — <?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerías CSS -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Bootstrap personalizado -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos del sitio -->
    <link href="css/style.css" rel="stylesheet">