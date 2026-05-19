<?php
$pageTitle  = 'Circuitos Perú';
$activePage = 'circuitos';
$lang = 'en';
require_once 'includes/head.php';
?>
<style>
.cont-hero {
    background: #2d7a3a;
    padding: 110px 20px 40px;
    text-align: center
}
.cont-hero h1 {
    font-size: 2.2rem;
    font-weight: 900;
    color: #fff;
    margin: 0
}
.cont-hero p {
    color: rgba(255,255,255,.85);
    max-width: 560px;
    margin: 8px auto 0;
    font-size: 1rem
}
</style>
</head>
<body>

<?php require_once 'includes/header.php'; ?>

<div class="cont-hero">
    <h1><?= __('circuitos_title') ?></h1>
    <p><?= __('circuitos_desc') ?></p>
</div>

<section style="padding: 4rem 0;">
    <div class="container">
        <p class="text-center text-muted" style="font-size: 1.1rem;"><?= __('circuitos_empty') ?></p>
    </div>
</section>

<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
