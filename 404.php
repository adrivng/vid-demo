<?php
$pageTitle  = '404';
$activePage = '404';
require_once 'includes/head.php';

?>
</head>
<body>

<!-- Spinner -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="spinner-logo" src="img/images-index/logo.png" alt="Cargando...">
</div>

<?php require_once 'includes/header.php'; ?>   

        

        <div class="container-fluid py-5 bg-404">
            <div class="container py-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4 text-dark">Page Not Found</h1>
                        <p class="mb-4 text-dark">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>

        
        

        <?php require_once 'includes/footer.php'; ?>

        <?php require_once 'includes/scripts.php'; ?>
    </body>

</html>