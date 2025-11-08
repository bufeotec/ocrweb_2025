<?php
$pagina_actual = 'cotizacion';
require "header.php";
require "navbar.php";
?>

<!--<section class="default-banner">-->
<!--    <div class="item-slider relative" style="background: url(img/exterior-comercio1.jpg);background-size: cover;">-->
<!--        <div class="overlay" style="background: rgba(0,0,0,0.2)"></div>-->
<!--        <div class="container my-5 py-5">-->
<!--            <div class="row my-5 justify-content-center align-items-center">-->
<!--                <div class="col-md-10 col-12 p-0">-->
<!--                    <div class="text-center">-->
<!--                        <div class="d-flex justify-content-center">-->
<!--                            <div class="banner-certificacion">-->
<!--                                <h1 class="my-5">En nuestra Agencia de Aduanas podrás cotizar cualquier pedido que necesites y a la brevedad responderemos.</h1>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

    <section class="default-banner activeblog-slider">
        <div class="item-slider relative inicio__principal">
            <div class="text__block text__block_none banner-content">
                <!--                    <p class="my-5">-->
                <!--                        Somos agentes determinantes en tu logística internacional,-->
                <!--                        gestionamos tus embarques optimizando cada etapa.-->
                <!--                    </p>-->
            </div>
            <div class="banner-content image__block img__block__padding">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-11 col-md-11 col-sm-12">
                            <div class="row">
                                <!--  FILA 1 -->

                                <div class="col-lg-3 col-md-3 col-sm-3 m-0 p-0 d-flex align-content-center flex-column-reverse">
                                    <div class="w-100-por h-30-px2 bg_ocr"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 m-0 p-0 d-flex justify-content-end" style="align-items: end;">
                                    <div class="w-75-por h-160-px bg_ocr"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 m-0 p-0">
                                    <div class="w-100-por h-160-px bg_ocr"></div>
                                </div>

                                <!--  FILA 2 -->

                                <div class="col-lg-3 col-md-3 col-sm-3 m-0 p-0">
                                    <div class="w-100-por h-100 bg_ocr"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 m-0 p-0 ">
                                    <img class="w-100 wow fadeIn marginImgInicio" src="img/galeria_img_3.jpg" alt="Equipo de OCR Aduanas" data-wow-duration="1s" data-wow-delay="0.6s">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 m-0 p-0">
                                    <div class="w-100-por h-100 bg_ocr"></div>
                                </div>

                                <!--  FILA 3 -->
                                <div class="col-lg-3 col-md-3 col-sm-3 m-0 p-0">
                                    <div class="w-100-por h-100 bg_ocr"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 m-0 p-0">
                                    <div class="w-75-por h-160-px bg_ocr"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 m-0 p-0 d-flex align-content-center">
                                    <div class="w-100-por h-30-px2 bg_ocr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!--                <img src="img/figura__comilla__arriba.png" class="wow fadeInUp figura__comilla__arriba" alt="Comilla Arriba" data-wow-duration="1s" data-wow-delay="0.3s">-->

<!--                <img class="img__centro wow fadeIn" src="img/galeria_img_3.jpg" alt="Equipo de OCR Aduanas" data-wow-duration="1s" data-wow-delay="0.6s">-->

<!--                <img src="img/figura__comilla__abajo.png" class="wow fadeInUp figura__comilla__abajo" alt="Comilla Abajo" data-wow-duration="1s" data-wow-delay="0.5s">-->
            </div>
        </div>
    </section>

    <hr class="hr__raya mt-5">
    <div class="nosotros__contenedor">
        <h1 class="h1__nosotros">
            COTIZACIÓN
        </h1>
    </div>
    <hr class="hr__raya">

<div class="container mb-5">
    <form method="post" enctype="multipart/form-data" id="formulario_ocr">
        <div class="crd">
            <div class="crd-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input value="4" type="hidden" id="DocumentType" name="DocumentType">
                                <input class="form__input" type="text" id="ruc" name="ruc" placeholder="" onchange="consultarNumdocumento('DocumentType','ruc','razon_social')">
                                <label class="form__label" for="ruc">RUC</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="razon_social" name="razon_social" placeholder="">
                                <label class="form__label" for="razon_social">Razón Social del Importador</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="email" name="email" placeholder="">
                                <label class="form__label" for="email">Email</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="telefono" name="telefono" placeholder="">
                                <label class="form__label" for="telefono">Teléfono y/o Celular</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="pais_embarque" name="pais_embarque" placeholder="">
                                <label class="form__label" for="pais_embarque">País de Embarque</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="via" name="via" placeholder="">
                                <label class="form__label" for="via">VÍA (Marítima - Aéreo - Terrestre)</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="incoterms" name="incoterms" placeholder="">
                                <label class="form__label" for="incoterms">INCOTERMS</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="direccion_recojo" name="direccion_recojo" placeholder="">
                                <label class="form__label" for="direccion_recojo">De Corresponder EXW (Mencionar dirección de recojo)</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="puerto_embarque" name="puerto_embarque" placeholder="">
                                <label class="form__label" for="puerto_embarque">Puerto/Aeropuerto de embarque</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="carga_fcl" name="carga_fcl" placeholder="">
                                <label class="form__label" for="carga_fcl">Carga FCL (1X20/1X40-ST/HC)</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="carga_lcl" name="carga_lcl" placeholder="">
                                <label class="form__label" for="carga_lcl">Carga LCL y Aéreo-Detalle</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="cantidad_bultos" name="cantidad_bultos" placeholder="">
                                <label class="form__label" for="cantidad_bultos">Cantidad de bultos (pallets, cajas)</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="peso" name="peso" placeholder="">
                                <label class="form__label" for="peso">Peso</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="dimensiones" name="dimensiones" placeholder="">
                                <label class="form__label" for="dimensiones">Dimensiones</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="tipo_mercaderia" name="tipo_mercaderia" placeholder="">
                                <label class="form__label" for="tipo_mercaderia">Tipo de mercancía</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="partida_arancelaria" name="partida_arancelaria" placeholder="">
                                <label class="form__label" for="partida_arancelaria">Partida arancelaria (opcional)</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="valor_carga" name="valor_carga" placeholder="">
                                <label class="form__label" for="valor_carga">Valor de Carga USD</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-3 pb-5">
                            <div class="form__group">
                                <input class="form__input" type="text" id="otros" name="otros" placeholder="">
                                <label class="form__label" for="otros">Otros</label>
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="cotizacion__info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">DOCUMENTOS A REQUERIR</label>
                                    <div class="checkbox-wrapper">
                                        <input class="form-controll" type="checkbox" checked="checked" id="documento_requerido" name="documento_requerido">
                                        <label class="checkbox-label" for="documento_requerido">Emitido por:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Declaración Aduanera de Mercancías (DAM)</label>
                                    <div class="checkbox-wrapper">
                                        <input class="form-controll" type="checkbox" checked="checked" id="declarante" name="declarante">
                                        <label class="checkbox-label" for="declarante">Declarante (Agencia de Aduanas)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Documento de Transporte</label>
                                    <div class="checkbox-wrapper">
                                        <input class="form-controll" type="checkbox" checked="checked" id="documento_transporte" name="documento_transporte">
                                        <label class="checkbox-label" for="documento_transporte">El Agente o la Compañía que realiza el transporte</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Factura Comercial</label>
                                    <div class="checkbox-wrapper">
                                        <input class="form-controll" type="checkbox" checked="checked" id="factura_comercial" name="factura_comercial">
                                        <label class="checkbox-label" for="factura_comercial">Proveedor</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Documento de seguro de transporte de la mercancía cuando corresponda</label>
                                    <div class="checkbox-wrapper">
                                        <input class="form-controll" type="checkbox" checked="checked" id="companhia_aseguradora" name="companhia_aseguradora">
                                        <label class="checkbox-label" for="companhia_aseguradora">Compañía Aseguradora</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Packing List</label>
                                    <div class="checkbox-wrapper">
                                        <input class="form-controll" type="checkbox" checked="checked" id="packing_list" name="packing_list">
                                        <label class="checkbox-label" for="packing_list">Proveedor</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crd-footer">
                <button type="submit" style="cursor: pointer" class="btn btn-danger btn__enviar" id="btn-formulario-ocr"><i class="fa fa-save fa-sm "></i> Enviar cotización</button>
            </div>
        </div>
    </form>
</div>

<script src="js/vendor/jquery-2.2.4.min.js"></script>

<!--PARA EL FORMULARIO-->
<script src="js/sweetalert/sweetalert2.min.js"></script>
<script>
    $("#formulario_ocr").on('submit', function(e){
        e.preventDefault()
        var valor = true;

        var razon_social = $('#razon_social').val();
        var ruc = $('#ruc').val();
        var email = $('#email').val();
        var telefono = $('#telefono').val();
        var pais_embarque = $('#pais_embarque').val();
        var via = $('#via').val();
        var incoterms = $('#incoterms').val();
        var direccion_recojo = $('#direccion_recojo').val();
        var puerto_embarque = $('#puerto_embarque').val();
        var carga_fcl = $('#carga_fcl').val();
        var carga_lcl = $('#carga_lcl').val();
        var cantidad_bultos = $('#cantidad_bultos').val();
        var peso = $('#peso').val();
        var dimensiones = $('#dimensiones').val();
        var tipo_mercaderia = $('#tipo_mercaderia').val();
        var partida_arancelaria = $('#partida_arancelaria').val();
        var valor_carga = $('#valor_carga').val();

        valor = validar_campo_vacio('razon_social', razon_social, valor);
        valor = validar_campo_vacio('ruc', ruc, valor);
        valor = validar_campo_vacio('email', email, valor);
        valor = validar_campo_vacio('telefono', telefono, valor);
        valor = validar_campo_vacio('pais_embarque', pais_embarque, valor);
        valor = validar_campo_vacio('via', via, valor);
        valor = validar_campo_vacio('incoterms', incoterms, valor);
        valor = validar_campo_vacio('direccion_recojo', direccion_recojo, valor);
        valor = validar_campo_vacio('puerto_embarque', puerto_embarque, valor);
        valor = validar_campo_vacio('carga_fcl', carga_fcl, valor);
        valor = validar_campo_vacio('carga_lcl', carga_lcl, valor);
        valor = validar_campo_vacio('cantidad_bultos', cantidad_bultos, valor);
        valor = validar_campo_vacio('peso', peso, valor);
        valor = validar_campo_vacio('dimensiones', dimensiones, valor);
        valor = validar_campo_vacio('tipo_mercaderia', tipo_mercaderia, valor);
        // valor = validar_campo_vacio('partida_arancelaria', partida_arancelaria, valor);
        valor = validar_campo_vacio('valor_carga', valor_carga, valor);

        if(valor){
            $.ajax({
                type: "POST",
                url: "enviarCotizacion.php",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'json',
                beforeSend: function () {
                    $('#btn-formulario-ocr').html('Enviando...');
                    $('#btn-formulario-ocr').attr('disabled',true);
                },
                success:function (r) {
                    switch (r.result) {
                        case 1:
                            respuesta(r.message, 'success');
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                            break;
                        case 2:
                            respuesta(r.message, 'error');
                            break;
                        default:
                            respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                            break;
                    }
                    $('#btn-formulario-ocr').html('<i class="fa fa-save fa-sm "></i> Enviar cotización');
                    $('#btn-formulario-ocr').attr('disabled',false);
                }
            });
        }
    })
</script>
<script>
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
    // CONSULTA RUC
    function consultarNumdocumento(DocumentType, idValue,customerName = null , customerAddress= null,clientStatus = null){
        // nombreVENTAWEB se agrego nomas para que funcione en la pagina web
        let tipoDocumento= "";
        let valorNum ="";
        let tipoRespuesta ="";
        if(DocumentType){
            tipoDocumento = $('#'+DocumentType).val();
        }
        if(idValue){
            valorNum = $('#'+idValue).val();
        }
        $('#'+clientStatus).html("");
        // verificamos que tipo de documento es
        respuesta('Buscando....', 'info');

        if(tipoDocumento == 4){
            if(valorNum.length == 11){
                if (!isNaN(valorNum)){
                    if(valorNum=="00000000000"){
                        respuesta('Proveedor Extranjero', 'success');
                        tipoRespuesta = "text-success";
                        $('#'+clientStatus).html("HABIDO");
                    }else{
                        var formData = new FormData();
                        formData.append("token", "uTZu2aTvMPpqWFuzKATPRWNujUUe7Re1scFlRsTy9Q15k1sjdJVAc9WGy57m");
                        formData.append("ruc", valorNum);
                        var request = new XMLHttpRequest();
                        request.open("POST", "https://api.migo.pe/api/v1/ruc");
                        request.setRequestHeader("Accept", "application/json");
                        request.send(formData);
                        $('.loader').show();
                        request.onload = function() {
                            var data = JSON.parse(this.response);
                            if(data.success){
                                $('.loader').hide();
                                respuesta('Datos Encontrados', 'success');
                                if(data.condicion_de_domicilio=="NO HABIDO"){
                                    respuesta('Este ruc se encuentra como NO HABIDO.', 'error');
                                    tipoRespuesta = "text-danger";
                                }else{
                                    $('#'+customerName).val(data.nombre_o_razon_social);
                                    $('#'+customerAddress).val(data.direccion);
                                    tipoRespuesta = "text-success";
                                }
                                $('#'+clientStatus).html(data.condicion_de_domicilio);
                                $('#'+clientStatus).addClass(tipoRespuesta);
                                if(nombreVENTAWEB){
                                    $('#'+nombreVENTAWEB).html('<i class="fa fa-user"></i> ' + data.nombre_o_razon_social);
                                }
                            }else{
                                $('.loader').hide();
                                respuesta(data.message, 'error');
                            }
                        };
                    }
                }else{
                    respuesta('El ruc debe contener solo números.', 'error');
                    $('#'+clientStatus).html("");
                }
            }else{
                respuesta('El ruc debe contener 11 dígitos.', 'error');
                $('#'+clientStatus).html("");
            }
        }else{
            if(valorNum.length == 8){
                if (!isNaN(valorNum)){
                    if(valorNum=="00000000"){
                        respuesta('CLIENTE GENERAL', 'success');
                        $('#'+clientStatus).html("HABIDO");
                    }else{
                        var formData = new FormData();
                        formData.append("token", "uTZu2aTvMPpqWFuzKATPRWNujUUe7Re1scFlRsTy9Q15k1sjdJVAc9WGy57m");
                        formData.append("dni", valorNum);
                        var request = new XMLHttpRequest();
                        request.open("POST", "https://api.migo.pe/api/v1/dni");
                        request.setRequestHeader("Accept", "application/json");
                        request.send(formData);
                        $('.loader').show();
                        request.onload = function() {
                            var data = JSON.parse(this.response);
                            if(data.success){
                                $('.loader').hide();
                                tipoRespuesta = "text-success";
                                respuesta('Datos Encontrados', 'success');
                                $('#'+customerName).val(data.nombre);
                                if(customerAddress){
                                    $('#'+customerAddress).val("");
                                }
                                // solo sirve para la web ya que ahi se tiene que visualizar en un card el nombre del cliente
                                if(nombreVENTAWEB){
                                    $('#'+nombreVENTAWEB).html('<i class="fa fa-user"></i> ' +data.nombre);
                                }
                                $('#'+clientStatus).html("HABIDO");
                                $('#'+clientStatus).addClass(tipoRespuesta);
                            }else{
                                $('.loader').hide();
                                tipoRespuesta = "text-danger";
                                respuesta(data.message, 'error');
                                $('#'+clientStatus).addClass(tipoRespuesta);
                            }
                        };
                    }
                }else{
                    respuesta('El DNI debe contener solo números.', 'error');
                    $('#'+clientStatus).html("");
                }
            }else{
                respuesta('El DNI debe contener 8 dígitos.', 'error');
                $('#'+clientStatus).html("");
            }
        }

        // if(customerAddress){
        //     direccionCliente = $('#'+customerAddress).val();
        // }
    }
    //
</script>
<!---->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gp73T8+O9T5UvGMTP2+9lIzS9L3mKHK9E2xdJLFOcaVRJfc9bHgsnNwP3v5GJixwW5lqNdHwTYfLj/v4NlBKlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
require "footer.php";
?>