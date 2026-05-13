<?php

$subir = $subir ?? '';
?>

<div class="container-fluid footer pt-5 pb-0">
    <div class="container pt-5 pb-0">
        <div class="row g-5">

            <div class="col-lg-4">
                <div class="footer-item d-flex flex-column">
                    <a href="<?= $subir ?>index.php" class="mb-3">
                        <img src="<?= $subir ?>img/images-index/logo.png" alt="Vidatur" height="90">
                    </a>
                    <p class="text-white mb-3"><small>Somos una agencia de viajes peruana con más de 10 años de experiencia ofreciendo los mejores destinos del mundo.</small></p>
                    <div class="mt-5">
                        <a href="https://primesoft-rlatorre-backup-bucket-1.s3.amazonaws.com/ldr/icon-libro-reclamaciones_negro.png" target="_blank" class="d-inline-block text-white">
                            <img src="https://primesoft-rlatorre-backup-bucket-1.s3.amazonaws.com/ldr/icon-libro-reclamaciones_negro.png" alt="Libro de Reclamaciones" height="45" class="me-2">
                            <span><small>Libro de Reclamaciones</small></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row g-5">

                    <div class="col-md-5">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Lima</h4>
                            <a href="#"><i class="fas fa-home me-2"></i><small>Av. José Larco 930, Miraflores 15074</small></a>
                            <a href="mailto:soporte@vidatur.net"><i class="fas fa-envelope me-2"></i><small>soporte@vidatur.net</small></a>
                            <a href="tel:+51999999999"><i class="fas fa-phone me-2"></i><small>+51 999 999 999</small></a>
                            <a href="#" class="mb-3"><i class="fas fa-print me-2"></i><small>+51 837 212 312</small></a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="row g-3">

                            <div class="col-6">
                                <div class="footer-item d-flex flex-column">
                                    <h4 class="mb-4 text-white">Compañía</h4>
                                    <a href="<?= $subir ?>nosotros.php"><i class="fas fa-angle-right me-2"></i> Nosotros</a>
                                    <a href="<?= $subir ?>contacto.php"><i class="fas fa-angle-right me-2"></i> Contacto</a>
                                    <a href="<?= $subir ?>eventos.php"><i class="fas fa-angle-right me-2"></i> Eventos</a>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="footer-item d-flex flex-column">
                                    <h4 class="mb-4 text-white">Servicios</h4>
                                    <a href="<?= $subir ?>bloqueos.php"><i class="fas fa-angle-right me-2"></i> Bloqueos</a>
                                    <a href="#"><i class="fas fa-angle-right me-2"></i> Salidas Confirmadas</a>
                                    <a href="https://vidatur.paquetedinamico.com/" target="_blank"><i class="fas fa-angle-right me-2"></i> Online</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Pagos
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-3">Pagos</h4>
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
                    -->

        </div>
    </div>
</div>

<div class="container-fluid copyright text-body py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <a href="#" class="text-white me-3"><small>Política de Privacidad</small></a>
                <a href="#" class="text-white"><small>Términos y Condiciones</small></a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <i class="fas fa-copyright me-2"></i>
                <a class="text-white" href="#"><small>2026 Vidatur, TODOS LOS DERECHOS RESERVADOS</small></a>
            </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top">
    <i class="fa fa-arrow-up"></i>
</a>