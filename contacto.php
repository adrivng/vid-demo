<?php
$pageTitle  = 'Contacto';
$activePage = 'contacto';
require_once 'includes/head.php';
?>
<link href="css/eventos.css" rel="stylesheet">
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
        color: rgba(255, 255, 255, .85);
        max-width: 560px;
        margin: 8px auto 0;
        font-size: 1rem
    }

    .contact-wrap {
        max-width: 1100px;
        margin: 0 auto;
        padding: 60px 20px
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px
    }

    @media(max-width:768px) {
        .contact-grid {
            grid-template-columns: 1fr
        }
    }

    .contact-info h1 {
        font-size: 2rem;
        font-weight: 900;
        color: #1a1a1a;
        margin: 0 0 8px
    }

    .contact-info p {
        color: #666;
        line-height: 1.8;
        margin: 0 0 32px;
        font-size: .95rem
    }

    .contact-card {
        display: flex;
        gap: 16px;
        margin-bottom: 24px
    }

    .contact-card__icon {
        width: 48px;
        height: 48px;
        background: #1a7a4a;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.2rem;
        flex-shrink: 0
    }

    .contact-card__body strong {
        display: block;
        font-size: .95rem;
        color: #1a1a1a;
        margin-bottom: 2px
    }

    .contact-card__body span {
        font-size: .85rem;
        color: #666;
        line-height: 1.5
    }

    .contact-form {
        background: #fff;
        border-radius: 16px;
        padding: 36px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, .08)
    }

    .contact-form label {
        font-size: .85rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 4px;
        display: block
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #e5e5e5;
        border-radius: 10px;
        font-size: .9rem;
        transition: border-color .2s;
        margin-bottom: 20px;
        box-sizing: border-box;
        font-family: inherit
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        outline: none;
        border-color: #1a7a4a
    }

    .contact-form textarea {
        height: 140px;
        resize: vertical
    }

    .contact-form button {
        padding: 14px 36px;
        background: #1a7a4a;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: .95rem;
        font-weight: 800;
        cursor: pointer;
        transition: background .2s
    }

    .contact-form button:hover {
        background: #145c37
    }
</style>
</head>

<body>
    <?php require_once 'includes/header.php'; ?>
    <div class="cont-hero">
        <h1>Cont&aacute;ctanos</h1>
        <p>Estamos listos para ayudarte a planificar tu pr&oacute;xima experiencia. Escr&iacute;benos y te responderemos a la brevedad.</p>
    </div>
    <div class="contact-wrap">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Nuestras oficinas</h2>
                <p>Encu&eacute;ntranos en nuestras direcciones o escr&iacute;benos directamente.</p>
                <div class="contact-card">
                    <div class="contact-card__icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-card__body">
                        <strong>Oficina Lima</strong>
                        <span>Av. Jos&eacute; Larco 930, Miraflores 15074</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__icon"><i class="fas fa-envelope"></i></div>
                    <div class="contact-card__body">
                        <strong>Correo Electr&oacute;nico</strong>
                        <span>soporte@vidatur.net</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__icon"><i class="fas fa-phone"></i></div>
                    <div class="contact-card__body">
                        <strong>Tel&eacute;fono</strong>
                        <span>+51 999 999 999</span>
                    </div>
                </div>
            </div>
            <form class="contact-form" action="#" method="post">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                <label for="email">Correo electr&oacute;nico</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>
                <label for="telefono">Tel&eacute;fono</label>
                <input type="tel" id="telefono" name="telefono" placeholder="+51 999 999 999">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" placeholder="Cu&eacute;ntanos en qu&eacute; podemos ayudarte..." required></textarea>
                <button type="submit">Enviar mensaje</button>
            </form>
        </div>
    </div>
    <?php require_once 'includes/scripts.php'; ?>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>