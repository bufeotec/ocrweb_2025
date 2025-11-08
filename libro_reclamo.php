<?php
require "header.php";
require "navbar.php";
?>

<section class="default-banner">
    <div class="item-slider relative" style="background: url(img/banner_slider.png);background-size: cover;">
        <div class="overlay" style="background: rgba(0,0,0,0.2)"></div>
        <div class="container my-5 py-5">
            <div class="row my-5 justify-content-center align-items-center">
                <div class="col-md-10 col-12 p-0">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <div class="banner-certificacion">
                                <h1 class="my-5">En nuestra Agencia de Aduanas podrás cotizar cualquier pedido que necesites y a la brevedad responderemos.</h1>
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
    <div class="contenido-cotizacion">
        <div class="d-flex justify-content-center cotizacion-centro">
            <div class="cotizacion-texto">
                <img src="img/LIBRO-DE-RECLAMOS-2.jpg" style="width: 100%">
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <form method="post" enctype="multipart/form-data" id="formulario_ocr">
        <div class="crd">
            <div class="crd-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input value="4" type="hidden" id="DocumentType" name="DocumentType">
                                <input class="form__input" type="text" id="nombre" name="nombre" placeholder="" onchange="consultarNumdocumento('DocumentType','ruc','razon_social')">
                                <label class="form__label" for="nombre">Nombre Completo</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="apellido" name="apellido" placeholder="">
                                <label class="form__label" for="apellido">Apellido Completo</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-5">
                            <div class="form-group">
                                <label class="col-form-label">Tipo de Documento</label>
                                <div class="checkbox-wrapper justify-content-between">
                                    <div class="d-flex">
                                        <input class="form-controll" type="checkbox" id="dni" name="documento" value="dni">
                                        <label class="checkbox-label" for="dni">DNI</label>
                                    </div>

                                    <div class="d-flex">
                                        <input class="form-controll" type="checkbox" id="ruc" name="documento" value="ruc">
                                        <label class="checkbox-label" for="ruc">RUC</label>
                                    </div>

                                    <div class="d-flex">
                                        <input class="form-controll" type="checkbox" id="ce" name="documento" value="ce">
                                        <label class="checkbox-label" for="ce">C.E</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="numero_documento" name="numero_documento" placeholder="">
                                <label class="form__label" for="numero_documento">N° de Documento</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="correo_electronico" name="correo_electronico" placeholder="">
                                <label class="form__label" for="correo_electronico">Correo electronico</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="telefono_celular" name="telefono_celular" placeholder="">
                                <label class="form__label" for="telefono_celular">Teléfono y/o Cellular</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="empresa" name="empresa" placeholder="">
                                <label class="form__label" for="empresa">Empresa</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="pais" name="pais" placeholder="">
                                <label class="form__label" for="pais">País</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="codigo_postal" name="codigo_postal" placeholder="">
                                <label class="form__label" for="codigo_postal">Código postal</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="region" name="region" placeholder="">
                                <label class="form__label" for="region">Región</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="ciudad" name="ciudad" placeholder="">
                                <label class="form__label" for="ciudad">Ciudad</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="direccion_domicilio" name="direccion_domicilio" placeholder="">
                                <label class="form__label" for="direccion_domicilio">Dirección de domicilio</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <h2 class="py-4" style="color: #00078B">DETALLE DEL RECLAMO</h2>
                                <div class="checkbox-wrapper">
                                    <input class="form-controll" type="checkbox" id="reclamo" name="reclamo">
                                    <label class="checkbox-label" for="reclamo">Reclamo: Disconformidad relacionada a los productos o servicios.</label>
                                </div>
                                <div class="checkbox-wrapper">
                                    <input class="form-controll" type="checkbox" id="queja" name="queja">
                                    <label class="checkbox-label" for="queja">Queja: Disconformidad NO relacionada a los productos o servicios; sino al descontento respecto a la atención al público.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="date" id="fecha" name="fecha" placeholder="">
                                <label class="form__label" for="fecha">Fecha de incidencia:</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="numero_pedido" name="numero_pedido" placeholder="">
                                <label class="form__label" for="numero_pedido">N° Pedido (Indicar Documento):</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pt-3 pb-5">
                            <div class="form__group">
                                <textarea class="form__text__area" type="date" id="detalle" name="detalle" rows="4"></textarea>
                                <label class="form__label__textarea" for="detalle">Detalle de Solicitud:</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crd-footer">
                <button type="submit" style="cursor: pointer" class="btn btn-success float-right" id="btn-formulario-ocr"><i class="fa fa-save fa-sm "></i> Enviar solicitud</button>
            </div>
        </div>
    </form>
</div>


<!--PARA EL FORMULARIO-->
<script src="js/sweetalert/sweetalert2.min.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>

<script>
    $("#formulario_ocr").on('submit', function(e){
        e.preventDefault()
        var valor = true;
        var boton = "btn-formulario-ocr";
        var razon_social = $('#razon_social').val();

        valor = validar_campo_vacio('razon_social', razon_social, valor);

        if(valor){
            $.ajax({
                type: "POST",
                url: urlweb + "api/",
                data: proyex,
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'json',
                beforeSend: function () {
                    cambiar_estado_boton(boton, 'Guardando...', true);
                },
                success:function (r) {
                    cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                    switch (r.result.code) {
                        case 1:
                            respuesta('¡Guardado y enviado! Recargando...', 'success');
                            setTimeout(function () {
                                location.reload();
                            }, 1000);
                            break;
                        case 2:
                            respuesta('Error al guardar', 'error');
                            break;
                        default:
                            respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                            break;
                    }
                }
            });
        }
    })
</script>
<script>
    // FECHA
    // Obtener la fecha actual en formato ISO (YYYY-MM-DD)
    var today = new Date().toISOString().split('T')[0];
    // Establecer el valor del campo de entrada de fecha
    document.getElementById('fecha').value = today;
    // CHECKBOX
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="documento"]');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Si este checkbox está siendo seleccionado
            if (this.checked) {
                // Desselecciona los otros checkboxes
                checkboxes.forEach(cb => {
                    if (cb !== this) {
                        cb.checked = false;
                    }
                });
            }
        });
    });
    //
    function validar_campo_vacio(campo, valor, estado) {
        //var variable = "#" + campo;
        var objeto = document.getElementById(campo);
        if(valor == ""){
            respuesta('El campo resaltado no puede estar vacío', 'error');
            objeto.style.border = 'solid #ff4d4d';
            estado = false;
            console.log('Campo vacio: ' + campo + " Valor: " + valor);
        } else {
            objeto.style.border = '';
        }
        return estado;
    }
    function respuesta(mensaje, tipo,tiempo = 3000){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: tiempo,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: tipo,
            title: mensaje
        })
    }
    //
</script>
<!---->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gp73T8+O9T5UvGMTP2+9lIzS9L3mKHK9E2xdJLFOcaVRJfc9bHgsnNwP3v5GJixwW5lqNdHwTYfLj/v4NlBKlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
require "footer.php";
?>