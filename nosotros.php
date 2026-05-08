<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Vidatur</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a> -->
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Afiliate - Online 2.0</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Club Vidatur</small></a>
                        <!-- <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Vidatur - Agencia Mayorista</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Inicio</a>
                        <a href="nosotros.php" class="nav-item nav-link active">Nosotros</a>
                        <a href="peru.php" class="nav-item nav-link">Perú</a>
                        <a href="internacional.php" class="nav-item nav-link">Internacional</a>
                        <a href="bloqueos.php" class="nav-item nav-link">Bloqueos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Más</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">EVENTOS</a>
                                <a href="tour.html" class="dropdown-item">VIDEOS</a>
                                <a href="booking.html" class="dropdown-item">LGBT</a>
                                <a href="gallery.html" class="dropdown-item">CIRCUITOS PERÚ</a>
                                <a href="guides.html" class="dropdown-item">CONVENCIÓN</a>
                                <a href="testimonial.html" class="dropdown-item">PROMOCIONES AGENTES</a>
                                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contacto</a>
                    </div>
                    <a href="https://vidatur.paquetedinamico.com/" target="_blank" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4" >Online</a>
                </div>
            </nav>
        </div>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Nosotros</h1>
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>     -->
            </div>
        </div>
        <!-- Header End -->

<!-- Nosotros Inicio -->
<div class="container-fluid about service py-5">
    <div class="container py-5">

        <!-- TITULO -->
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">

            <h1 class="mb-4">
                Explora nuestros <span class="text-primary">servicios</span>
            </h1>

            <p class="mb-0">
                Descubre nuestras plataformas, promociones, representaciones y servicios exclusivos diseñados para agencias y viajeros.
            </p>
        </div>

        <!-- CARDS -->
        <div class="row g-4">

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     onclick="window.location.href='https://vidatur.paquetedinamico.com/home'"
                     style="cursor:pointer;">

                    <img src="img/cotizador_logo.png"
                         class="img-fluid mb-4 card-servicio-img"
                         style="height: 90px; object-fit: contain;">

                    <h5 class="mb-3">
                        INGRESA AL COTIZADOR
                    </h5>

                    <p class="mb-0">
                        Cotiza paquetes y experiencias turísticas rápidamente.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     onclick="window.location.href='https://vidatur.net/vidatur_online_formulario_registro.html'"
                     style="cursor:pointer;">

                    <img src="img/formulario.png"
                         class="img-fluid mb-4 card-servicio-img"
                         style="height: 90px; object-fit: contain;">

                    <h5 class="mb-3">
                        REGISTRO ONLINE
                    </h5>

                    <p class="mb-0">
                        Regístrate online de forma rápida y segura.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     onclick="window.location.href='videos.html'"
                     style="cursor:pointer;">

                    <svg xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 576 512" 
                    style="width: 70px; height: 70px; fill: #28a745;" 
                    class="mb-4 card-servicio-icon">
                    <path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V174.9l14.2-9.5 96-64c9.9-6.6 22.6-7.1 32.9-1.6z"/>
                    </svg>
                       

                    <h5 class="mb-3">
                        VIDEOS
                    </h5>

                    <p class="mb-0">
                        Mira contenido audiovisual y promociones exclusivas.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white card-servicio"
                     onclick="window.location.href='promociones_nacionales.html'"
                     style="cursor:pointer; background:#198754;">

                    <img src="img/bandera_peru_2.png"
                         class="img-fluid mb-4 card-servicio-img"
                         style="height: 90px; object-fit: contain;">

                    <h5 class="mb-3 text-white">
                        PAQUETES NACIONALES
                    </h5>

                    <p class="mb-0 text-white">
                        Descubre destinos increíbles dentro del Perú.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center rounded p-4 h-100 shadow-sm text-white card-servicio"
                     onclick="window.location.href='promociones_internacionales.html'"
                     style="cursor:pointer; background:#0b1238;">

                    <i class="bi bi-globe text-white mb-4 card-servicio-icon"
                       style="font-size: 70px;"></i>

                    <h5 class="mb-3 text-white">
                        PAQUETES INTERNACIONALES
                    </h5>

                    <p class="mb-0 text-white">
                        Viaja por el mundo con ofertas internacionales.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     id="abrirModalRepresentaciones"
                     style="cursor:pointer; background: #055888;">

                    <div class="d-flex justify-content-center align-items-center gap-3 mb-4">

                        <img src="img/xcaret.png"
                             style="height:70px; object-fit:contain;">

                        <img src="img/united_park_4.png"
                             style="height:70px; object-fit:contain;">

                    </div>

                    <h5 class="mb-3 text-white">
                        REPRESENTACIONES
                    </h5>

                    <p class="mb-0 text-white">
                        Marcas y aliados turísticos internacionales.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     onclick="window.location.href='socios_estrategicos/aliados.html'"
                     style="cursor:pointer;">

                    <i class="bi bi-people-fill text-success mb-4 card-servicio-icon"
                       style="font-size: 70px;"></i>

                    <h5 class="mb-3">
                        SOCIOS ESTRATÉGICOS
                    </h5>

                    <p class="mb-0">
                        Conoce nuestros aliados y socios comerciales.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     onclick="window.location.href='equipo_vidatur/equipo_vidatur.php'"
                     style="cursor:pointer;">

                    <i class="bi bi-person-bounding-box text-primary mb-4 card-servicio-icon"
                       style="font-size: 70px;"></i>

                    <h5 class="mb-3">
                        EQUIPO VIDATUR
                    </h5>

                    <p class="mb-0">
                        Descubre al equipo detrás de nuestras experiencias.
                    </p>

                </div>
            </div>

            <!-- CARD -->
            <div class="col-md-6 col-lg-4">
                <div class="service-content-inner text-center border rounded p-4 h-100 shadow-sm card-servicio"
                     onclick="window.location.href='cuentas_bancarias/cta_bancaria.php'"
                     style="cursor:pointer;">

                    <img src="https://mcusercontent.com/c184c181a3697a5d0bd22417a/images/37d37574-f34d-828a-34d0-cb862ece3c60.png"
                         class="img-fluid mb-4 card-servicio-img"
                         style="height: 90px; object-fit: contain;">

                    <h5 class="mb-3">
                        CUENTAS BANCARIAS
                    </h5>

                    <p class="mb-0">
                        Consulta nuestras cuentas bancarias oficiales.
                    </p>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Nosotros Fin -->
    

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Nuestro Boletín</h1>
                    <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">INR</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select1">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Your Site Name</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>