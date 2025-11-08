<?php
require "header.php";
require "navbar.php";
?>
<style>
    .contenido-hodelpe {
        position: relative;
        top: -55px;
        z-index: 1;
    }
    .contenido-hodelpe .hodelpe-centro {
        padding: 0;
        margin: 0 auto;
        list-style: none;
    }
    .hodelpe__texto{
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 370px;
        height: 100px;
        background:#fff;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0 0px 10px rgba(71,71,71,0.5);
    }
    .hodelpe__texto h2{
        color: #00078B;
        font-size: 20px;
    }
</style>

<section class="default-banner">
    <div class="item-slider relative" style="background: url(img/banner_slider.png);background-size: cover;">
        <div class="overlay" style="background: rgba(0,0,0,0.2)"></div>
        <div class="container my-5 py-5">
            <div class="row my-5 justify-content-center align-items-center">
                <div class="col-md-10 col-12 p-0">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <div class="banner-certificacion">
                                <h1 class="my-5">En OCR ADUANAS nos dedicamos en brindar servicios confiables y eficientes de despacho aduanero.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BOTON WHATSAPP-->
<div class="contenedor__wasap">
    <a href="#" class="wasap__a">
        <img src="img/whatsapp.png">
    </a>
</div>
<!--			BOTON TRACKING-->
<div class="contenedor__tracking">
    <a href="tracking.php" class="tracking__a">
        <img src="img/tracking_icono.png">
        <span class="texto__tracking">TRACKING</span>
    </a>
</div>
<!---->
<div class="container">
    <div class="contenido-hodelpe">
        <div class="d-flex justify-content-center hodelpe-centro">
            <div class="hodelpe__texto">
                <h2>HODELPE - Homologación del Perú</h2>
            </div>
        </div>
    </div>
</div>
<!---->
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="d-flex justify-content-center align-items-center" >
                <img src="img/OCR_ADUANAS_S.A-1198x1536.jpg" style="width: 80%">
            </div>
        </div>
    </div>
</div>
<?php
require "footer.php";
?>