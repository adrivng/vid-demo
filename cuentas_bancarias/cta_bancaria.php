<?php
$pageTitle  = 'Cuentas Bancarias';
$activePage = 'nosotros';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<link rel="stylesheet" href="<?= $subir ?>css/cuentas.css">
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

<?php require_once $subir . 'includes/header.php'; ?>

<div class="cont-hero">
    <h1>Cuentas Bancarias</h1>
    <p>Realiza tus depósitos y transferencias a nuestras cuentas oficiales.</p>
</div>

<section class="container-fluid about service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 text-max-800">
            <h1 class="mb-4">Nuestras <span class="text-primary">cuentas bancarias</span></h1>
            <p class="mb-0">Realiza tus depósitos y transferencias a nuestras cuentas oficiales.</p>
        </div>

        <div class="row g-5 justify-content-center">
            <!-- BCP -->
            <div class="col-lg-6">
                <div class="bank-card">
                    <div class="text-center mb-4">
                        <img src="<?= $subir ?>cuentas_bancarias/images/logo_new_bcp.png" alt="BCP" height="52" onerror="this.style.display='none'">
                    </div>
                    <h3 class="bank-title">Cuentas BCP</h3>
                    <table class="bank-table">
                        <tbody>
                            <tr><td>A nombre de:</td><td>Club Vidatur S.R.L.</td></tr>
                            <tr><td>Dólares</td><td>194-2333389-1-94</td></tr>
                            <tr><td>Dólares CCI</td><td>002-194002333389194-95</td></tr>
                            <tr><td>Dólares-Arequipa</td><td>215-2295937-1-07</td></tr>
                            <tr><td>Dólares CCI-Arequipa</td><td>002-215-002295937107-25</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- BBVA -->
            <div class="col-lg-6">
                <div class="bank-card">
                    <div class="text-center mb-4">
                        <img src="<?= $subir ?>cuentas_bancarias/images/logo_new_bbva.png" alt="BBVA" height="52" onerror="this.style.display='none'">
                    </div>
                    <h3 class="bank-title">Cuentas BBVA</h3>
                    <table class="bank-table">
                        <tbody>
                            <tr><td>A nombre de:</td><td>Club Vidatur S.R.L.</td></tr>
                            <tr><td>Dólares</td><td>0011-0190-0100020488</td></tr>
                            <tr><td>Dólares CCI</td><td>011-190-000100020488-61</td></tr>
                            <tr><td>Soles</td><td>0011-0190-01-00020747</td></tr>
                            <tr><td>Dólares-Trujillo</td><td>0011-0249-0100170455</td></tr>
                            <tr><td>Dólares CCI-Trujillo</td><td>011-249-000100170455-08</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Nota -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="bank-note">
                    <strong>NOTA:</strong>
                    <ul class="mb-0">
                        <li>Las agencias de Arequipa que realicen depósitos físicos deberán hacerlo solo en esta cuenta y vía VIABCP o cajeros.</li>
                        <li>De no cumplir, deberán abonar el 5% del monto por gastos bancarios.</li>
                        <li>TRANSFERENCIAS POR INTERNET: Todas las agencias pueden pagar sin cargo por internet en ambas cuentas.</li>
                        <li>USO DE CAJEROS AUTOMÁTICOS: Se recomienda para evitar cobro por uso de ventanilla.</li>
                        <li>ENVIAR VOUCHER o constancia de transferencia a este correo electrónico: <span class="email-hidden">ten.ratudiv@dadilbatnoc</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once $subir . 'includes/footer.php'; ?>
<?php require_once $subir . 'includes/scripts.php'; ?>

</body>
</html>
