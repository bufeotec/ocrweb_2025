<?php
$pagina_actual = '';
require "header.php";
require "navbar.php";
?>
    <div class="modal fade" id="modalibroRecl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="text-dark d-block">OCR ADUANAS S.A.C.</div>
                                <div class="text-dark d-block">RUC: <b>20519114403</b></div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <img src="img/ocr-aduanas-logo.png" alt="Logo" class="w-100" >
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                <h3 class="mb-3">1.- Identificación del  Reclamante</h3>
                                <form method="post" id="realizarLibroReclamacion__"  enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombres <small class="small2" style="color:#999;font-weight:normal">(máximo 50 caracteres)</small> <small class="text-danger" style="font-size:15px;"> *</small> </label>
                                                <input class="form-control" data-val="true"    id="Nombres" maxlength="50" name="Nombres" type="text" value="">
                                                <p class="text-danger" id="NomV" value="Nombres requeridos"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellidos <small class="small2" style="color:#999;font-weight:normal">(máximo 50 caracteres)</small> <small class="text-danger" style="font-size:15px;"> *</small></label>
                                                <input class="form-control" data-val="true"  id="Apellidos" maxlength="50" name="Apellidos" type="text" value="">
                                                <p class="text-danger" id="ApeV" value="Apellidos requeridos"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email <small class="small2" style="color:#999;font-weight:normal">(máximo 100 caracteres)</small> <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <input class="form-control" data-val="true"  id="Correo" maxlength="100" name="Correo" type="email" value="">
                                                <p class="text-danger" id="CorV" value="Email incorrecto"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Teléfono <small class="small2" style="color:#999;font-weight:normal">(máximo 15 caracteres)</small> <small class="text-danger" style="font-size:15px;"> *</small></label>
                                                <input class="form-control" data-val="true"    id="Telefono" maxlength="15" name="Telefono" type="text" value="" onkeyup="validar_numeros(this.id)">
                                                <p class="text-danger" id="TelV" value="Telefono incorrecto"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tipo de Documento<small class="text-danger" style="font-size:15px;">*</small></label>
                                                <select class="form-control"  id="TipoDoc" name="TipoDoc">
                                                    <option value="DNI">DNI</option>
                                                    <option value="C.E.">C.E.</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Número de Documento<small class="text-danger" style="font-size:15px;"> *</small></label>
                                                <input class="form-control" data-val="true" id="DNI" maxlength="12" name="DNI" type="text" value="">
                                                <p class="text-danger" id="DniV" value="DNI/C.E. incorrecto"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="ubigeoDep">Departamento<small class="text-danger" style="font-size:15px;">*</small></label>
                                            <input class="form-control" data-val="true"  id="ubigeoDep" maxlength="50" name="ubigeoDep" type="text" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ubigeoPro">Provincia<small class="text-danger" style="font-size:15px;">*</small></label>
                                                <input class="form-control" data-val="true"  id="ubigeoPro" maxlength="50" name="ubigeoPro" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ubigeoDis">Distrito<small class="text-danger" style="font-size:15px;">*</small></label>
                                                <input class="form-control" data-val="true"  id="ubigeoDis" maxlength="50" name="ubigeoDis" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dirección <small class="small2" style="color:#999;font-weight:normal">(máximo 200 caracteres)</small> <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <input class="form-control" id="Direccion" maxlength="100" name="Direccion" type="text" value="">
                                                <p class="text-danger" id="DirV" value="Dirección requerida"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>2.- Identificación del Bien Contratado<small class="text-danger" style="font-size:15px;">*</small></h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6" style="padding-top: 20px;">
                                            <div class="form-group">
                                                <input id="ServicioCheck" checked="checked" name="Asset" type="radio" value="2">
                                                <label for="ServicioCheck">Servicio </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
<!--                                            <label>Tienda<small class="text-danger" style="font-size:15px;">*</small></label>-->
<!--                                            <select name="Tienda" id="Tienda" class="form-control">-->
<!--                                                <option  value="Tienda Online">Tienda Online</option>-->
<!--                                            </select>-->
<!--                                            <p class="text-danger" id="TieV" value="Tienda requerida"></p>-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha de incidente <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <br>
                                                <input class="text-box single-line form-control" data-val="true"  id="Fecha" name="Fecha" type="date" value="" placeholder="dd/mm/yyyy" style="text-align: left; padding-top: 0px;">
                                                <p class="text-danger" id="FecV"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Monto reclamado <small class="small2" style="color:#999;font-weight:normal">(máximo 9 caracteres)</small> <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <input class="form-control" data-val="true"  onkeyup="validar_numeros(this.id);" id="Monto" maxlength="9" name="Monto" type="text" value="">
                                                <p class="text-danger" id="MonV"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripción <small class="small2" style="color:#999;font-weight:normal">(máximo 1000 caracteres)</small> <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <textarea class="form-control" cols="20" data-val="true"   id="Detalles" maxlength="1000" name="Detalles" rows="2"></textarea>
                                                <p class="text-danger" id="D1V"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>3.- Detalle de la reclamación y pedido del consumidor <small class="text-danger" style="font-size:25px;">*</small></h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-12 col-sm-12">
                                                    <input checked="checked" data-val="true" id="ReclamoCheck" name="Type" type="radio" value="1">
                                                </div>
                                                <div class="col-lg-11 col-md-12 col-md-12">
                                                    <label for="ReclamoCheck">Reclamo: Disconformidad relacionada a los productos o servicios.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-12 col-sm-12">
                                                    <input id="QuejaCheck" name="Type" type="radio" value="2">
                                                </div>
                                                <div class="col-lg-11 col-md-12 col-sm-12">
                                                    <label for="QuejaCheck">Queja: Disconformidad no relacionada a los productos o servicios o malestar o descontento respecto a la atención al público.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Detalle <small class="small2" style="color:#999;font-weight:normal">(máximo 1000 caracteres)</small> <small class="text-danger" style="font-size:15px;">*</small></label>

                                                <textarea class="form-control" cols="20" data-val="true"   id="DetallesAsset" maxlength="1000" name="DetallesAsset" rows="2"></textarea>
                                                <p class="text-danger" id="D2V"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Servicio del Reclamante <small class="small2" style="color:#999;font-weight:normal">(máximo 1000 caracteres)</small> <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <textarea class="form-control" cols="20" data-val="true"   id="DetallesOrden" maxlength="1000" name="DetallesOrden" rows="2"></textarea>
                                                <p class="text-danger" id="D3V"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>4.- Observaciones y acciones adoptadas por el proveedor</h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="Terminos" type="checkbox" value="1" name="conforme_terminos">
                                                <label for="Terminos">Me encuentro conforme con los términos de mi reclamo o queja <small class="text-danger" style="font-size:15px;">*</small></label>
                                                <p class="text-danger" id="TerV" value="Debes aceptar los términos del reclamo."></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
<!--                                                La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.-->
<!--                                                <br>-->
                                                El proveedor debe dar respuesta al reclamo o queja en un plazo no mayor a quince (15) días hábiles, el cuál es improrrogable.
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-dark">*En caso no consigne como mínimo su nombre, DNI, domicilio o correo electrónico, reclamo, o queja y el detalle del mismo, de conformidad con el articulo 5 del Reglamento de Reclamaciones, su reclamo o queja se considera como no presentado.*</p>
                                    <p class="text-danger" id="enviarErrorMessage"></p>
                                    <button id="btnGuardarLibro" type="submit" class="btn btn-primary w-100" style="margin-bottom:20px"  >Enviar</button>
                                    <p id="mensajeExitoso" class="text-success"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <section class="default-banner activeblog-slider">
        <div class="item-slider relative inicio__principal">
            <div class="text__block text__block_none banner-content">
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
                                    <img class="w-100 wow fadeIn marginImgInicio" src="img/ocr_capacitacion2.jpg" alt="Equipo de OCR Aduanas" data-wow-duration="1s" data-wow-delay="0.6s">
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
            </div>
        </div>
    </section>

    <hr class="hr__raya mt-5">
    <div class="nosotros__contenedor" data-wow-duration="1s" data-wow-delay="0.5s">
        <h1 class="h1__nosotros wow fadeInLeft justify-content-start">
            Libro de Reclamaciones
        </h1>
    </div>
    <hr class="hr__raya" style="margin-bottom: 0px">

    <div class="" style="padding: 30px 40px 30px 40px" >
        <div class="row jus">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <img src="img/libroReclamaciones.webp" class="w-100" alt="">
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="mb-3">
                    De acuerdo a lo dispuesto por el Reglamento del Libro de Reclamaciones del Código de Protección y Defensa del Consumidor, el <srtong>Libro de Reclamaciones Virtual</srtong> podrá ser usado por los consumidores a través de la página web de OCR Aduanas para interponer Quejas y Reclamos.
                </div>
                <div class="mb-3">
                    Para presentar una queja o reclamo sobre cualquiera de nuestras tiendas físicas, también podría hacerlo solicitando el Libro de Reclamaciones en la misma tienda en la que tuvo el inconveniente.
                </div>
                <div class="mb-3">
                    A los <strong>usuarios que realicen su reclamo o queja</strong> online a través de los medios brindados en la plataforma de
                    OCR (<a href="https://ocraduanas.com/" target="_blank" style="color :red"> https://ocraduanas.com/ </a>) e ingresen sus datos,
                        ,
                        con la finalidad de dar respuesta a sus comunicaciones dentro del plazo de ley.
                </div>
                <div class="mb-3">
                    Encuentre el <strong>Libro de Reclamaciones Virtual</strong> en OCR <a href="#" data-toggle="modal" data-target="#modalibroRecl" target="_blank" style="font-size: 20px!important">AQUÍ</a>.
                </div>
            </div>
        </div>
    </div>





<!---->
<!---->
<!---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gp73T8+O9T5UvGMTP2+9lIzS9L3mKHK9E2xdJLFOcaVRJfc9bHgsnNwP3v5GJixwW5lqNdHwTYfLj/v4NlBKlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/sweetalert/sweetalert2.min.js"></script>

    <script>
        $("#realizarLibroReclamacion__").on('submit', function(e){
            e.preventDefault()
            var valor = true;
            $('#mensajeExitoso').html("");
            var boton = "btnGuardarLibro";
            var Nombres = $("#Nombres").val();
            var Apellidos = $("#Apellidos").val();
            var Correo = $("#Correo").val();
            var Telefono = $("#Telefono").val();
            var TipoDoc = $("#TipoDoc").val();
            var DNI = $("#DNI").val();
            var Mayor = $("#Mayor").is(':checked');
            var Pariente = $("#Pariente").val();
            var Direccion = $("#Direccion").val();
            var Fecha = $("#Fecha").val();
            // var Monto = $("#Monto").val();
            var Detalles = $("#Detalles").val();
            var DetallesAsset = $("#DetallesAsset").val();
            var DetallesOrden = $("#DetallesOrden").val();
            var ubigeoDep = $("#ubigeoDep").val();
            var ubigeoPro = $("#ubigeoPro").val();
            var ubigeoDis = $("#ubigeoDis").val();
            valor = validar_campo_vacio('Nombres',Nombres, valor);
            valor = validar_campo_vacio('Apellidos',Apellidos, valor);
            valor = validar_campo_vacio('Correo',Correo, valor);
            valor = validar_campo_vacio('Telefono',Telefono, valor);
            valor = validar_campo_vacio('TipoDoc',TipoDoc, valor);
            valor = validar_campo_vacio('DNI',DNI, valor);
            valor = validar_campo_vacio('Direccion',Direccion, valor);
            valor = validar_campo_vacio('Fecha',Fecha, valor);
            // valor = validar_campo_vacio('Monto',Monto, valor);
            valor = validar_campo_vacio('Detalles',Detalles, valor);
            valor = validar_campo_vacio('DetallesAsset',DetallesAsset, valor);
            valor = validar_campo_vacio('DetallesOrden',DetallesOrden, valor);
            valor = validar_campo_vacio('ubigeoDep',ubigeoDep, valor);
            valor = validar_campo_vacio('ubigeoPro',ubigeoPro, valor);
            valor = validar_campo_vacio('ubigeoDis',ubigeoDis, valor);
            if(TipoDoc == 'DNI'){
                if(DNI.length == 8){
                    valor = true
                }else{
                    valor = false;
                    respuesta('Numero de documento tener contar con 8 digitos', 'error');
                }
            }else{
                if(DNI.length == 12){
                    valor = true
                }else{
                    valor = false
                    respuesta('Numero de documento tener contar con 12 digitos', 'error');
                }
            }

            if(valor){
                $.ajax({
                    type: "POST",
                    url: "enviarReclamo.php",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    dataType: 'json',
                    beforeSend: function () {
                        $('#'+boton).html('Enviando...').attr('disabled',true);
                    },
                    success:function (r){
                        console.log(r)
                        switch (r.result) {
                            case 1:
                                respuesta('El reclamo o queja se ha registrado exitosamente.', 'success');
                                $('#mensajeExitoso').html("El reclamo o queja se ha registrado exitosamente.");
                                setTimeout(function () {
                                    location.href = 'nosotros.php';
                                }, 2000);
                                break;
                            case 2:
                                respuesta('Ocurrió un error al registrar el mensaje', 'error');
                                break;
                            case 5:
                                respuesta('Debe confirmar su conformidad con los términos del reclamo o queja.', 'error');
                                break;
                            case 6:
                                respuesta(r.message, 'error');
                                break;
                            default:
                                respuesta('¡Algo catastrófico ha ocurrido!', 'error');
                                break;
                        }
                        $('#'+boton).html('Enviar').attr('disabled',false);
                    }
                });
            }
        })
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
    </script>


<?php
require "footer.php";
?>