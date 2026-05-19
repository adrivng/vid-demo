<?php

$pageTitle = $pageTitle ?? 'Vidatur';
$subir = $subir ?? '';
require_once __DIR__ . '/lang.php';

// La cookie del selector sobreescribe el idioma en cualquier página
if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], ['es', 'en'], true)) {
    $lang = $_COOKIE['lang'];
}
?>
<!DOCTYPE html>
<html lang="<?= $lang === 'en' ? 'en' : 'es' ?>">
<head>
    <meta charset="utf-8">
    <title>Vidatur — <?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= $subir ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= $subir ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?= $subir ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $subir ?>css/style.css" rel="stylesheet">
    <?php require_once __DIR__ . '/seo.php'; ?>
    