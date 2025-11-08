<?php
require "header.php";
require "navbar.php";
?>
<style>
    .contenido-oea {
        position: relative;
        top: -55px;
        z-index: 1;
    }
    .contenido-oea .oea-centro {
        padding: 0;
        margin: 0 auto;
        list-style: none;
    }
    .oea__texto{
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 425px;
        height: 100px;
        background:#fff;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0 0px 10px rgba(71,71,71,0.5);
    }
    .oea__texto h2{
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
    <div class="contenido-oea">
        <div class="d-flex justify-content-center oea-centro">
            <div class="oea__texto">
                <h2>OEA - Operador Económico Autorizado</h2>
            </div>
        </div>
    </div>
</div>
<!---->
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex ">
            <div class="col-lg-6">
                <div class="d-flex align-items-center" >
                    <img src="img/OEA-1-768x1085.jpg" style="width: 100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center" >
                    <img src="img/OEA-2-768x1085.jpg" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>