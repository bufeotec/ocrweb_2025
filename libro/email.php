<?php
$correo_aten = "
<!DOCTYPE html>
<html lang='es'>
<head>
<title></title>
<meta http-equiv='Content-Type' content='text/html charset=utf-8'/>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
<style>
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }
    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    .blanquito{background-color: #ffffff !important;}
    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    /* MEDIA QUERIES */
    @media screen and (max-width: 480px) {
        .mobile-hide {
            display: none !important;
        }
        .mobile-center {
            text-align: center !important;
        }
    }
    /* ANDROID CENTER FIX */
    div[style*=\"margin: 16px 0;\"] { margin: 0 !important; }
</style>
<style>
    p{
        padding: 0 !important;
        margin-bottom: 0px !important;
    }
    hr{
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;  
        border-top: 1px solid rgb(249,195,1);
    }
</style>
</head>
<body style='margin: 0 !important; padding: 0 !important; background-color: #eeeeee;display: flex;justify-content: center' >
    <div style='display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;'>
        <h2>Reporte digital del Libro de Reclamaciones</h2>
    </div>
<table border='0' cellpadding='0' cellspacing='0' class='table w-100' style='width: 100%'>
    <tr>
        <td align='center' style='background-color: #eeeeee;'>
            <table  align='center' border='0' cellpadding='0' cellspacing='0'  style='max-width:600px;' class='container' >
                <tr>
                    <td align='center' style='padding: 35px 35px 20px 35px; background-color: #ffffff;'>
                        <table align='center' border='0' cellpadding='0' cellspacing='0' style='max-width:600px;'>
                            <tr>
                                <td align='center'  style='font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;'>
                                    <img src=\"../img/ocr-aduanas-logo.png\"  style='display: block; border: 0px;width: 220px;' /> <br>
                                    <h4 style='font-size: 20px; font-weight: 800; line-height: 25px; color: #333333; margin: 0;'>
                                        Libro de Reclamaciones # <b class='text-primary'>$fecha_correlativo$numeroDocument</b>
                                    </h4>
                                </td>
                             </tr>
                            <tr>
                                <td align='left' style='font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;'>
                                    <div class=\"row\">
                                         <div class=\"col-lg-12 col-md-12 col-sm-12 mb-2\">
                                            <hr>
                                            <h3 class='text-primary' style='color:#da251c'>Detalles del consumidor que presenta el reclamo</h3>
                                            <hr>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 mb-2\">
                                            <p>Nombre: <br><b>$nombre_persona </b> ($tipoDocumento: <b>$numeroDocument</b>)</p>
                                        </div>
                                         <div class=\"col-lg-6 col-md-6 col-sm-6 mt-2 \">
                                            <p>Email: <br><b>$email</b></p>
                                        </div>
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 mt-2 \">
                                            <p>Teléfono: <br><b>$telefono</b></p>
                                        </div>

                                        <div class=\"col-lg-4 col-md-4 col-sm-4 mt-2\">
                                            <p>DEPARTAMENTO : <br> <b>$departamento</b></p>
                                        </div>
                                        
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 mt-2\">
                                            <p>PROVINCIA : <br> <b>$provincia</b></p>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 mt-2\">
                                            <p>DISTRITO : <br> <b>$distrito</b></p>
                                        </div>
";
$correo_aten.="<div class=\"col-lg-12 col-md-12 col-sm-12 mt-2\">
                                                <p>DIRECCIÓN : <br>
                                                <b>$direccion</b>
                                            </p>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 mt-2\">
                                            <hr>
                                                <h3 class=\"text-primary\" style=\"color:#da251c\">Identificación del Bien Contratado</h3>
                                            <hr>
                                        </div>
                                        <div class=\"col-lg-3 col-md-3 col-sm-3 mt-2\">
                                            <p>
                                                TIPO : <br>
                                                <b>$tipoContrato</b>
                                            </p>
                                        </div>
                                        
                                        <div class=\"col-lg-3 col-md-3 col-sm-3  mt-2\">

                                        </div>
                                        
                                        <div class=\"col-lg-3 col-md-3 col-sm-3  mt-2\">
                                            <p>
                                                FECHA : <br>
                                                <b>$fechaInsidente</b>
                                            </p>
                                        </div>
                                        
                                          <div class=\"col-lg-3 col-md-3 col-sm-3  mt-2\">
                                            <p>
                                                MONTO : <br>
                                                <b>S/$montoReclamado</b>
                                            </p>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12 col-sm-12  mt-2\">
                                            <p>
                                                DESCRIPCIÓN: <br>
                                                <b>
                                                    $descripcionContrato
                                                </b>
                                            </p>
                                        </div>";

$correo_aten.="
    <div class='col-lg-12 col-md-12 col-sm-12 mt-2'>
                                            <hr>
                                            <h3 class='text-primary' style='color:#da251c' >Detalle de la reclamación y pedido del consumidor</h3>
                                            <hr>
                                        </div>
                                        <div class='col-lg-12 col-md-12 col-sm-12 mt-2'>
                                            <p>
                                                TIPO : <br>
                                                <b>
                                                    $detalleReclaPediConsumiTipo
                                                </b>
                                            </p>
                                        </div>
                                        <div class='col-lg-12 col-md-12 col-sm-12  mt-2'>
                                            <p>
                                                DETALLE : <br>
                                                <b>
                                                    $detalleReclaConsumi
                                                </b>
                                            </p>
                                        </div>
                                        <div class='col-lg-12 col-md-12 col-sm-12  mt-2'>
                                            <p>
                                                PEDIDO DEL RECLAMANTE: <br>
                                                <b>
                                                    $pedidodelReclamante
                                                </b>
                                            </p>
                                        </div>

                                        <div class='col-lg-12 col-md-12 col-sm-12 mt-2'>
                                            <hr>
                                            <h3 class='text-primary' style='color:#da251c'>Observaciones y acciones adoptadas por el proveedor</h3>
                                            <hr>
                                        </div>
                                        <div class='col-lg-12 col-md-12 col-sm-12  mt-2'>
                                            <p>
                                                    Me encuentro conforme con los términos de mi reclamo o queja
                                            </p>
                                        </div>
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
";
$correo_aten.= "
            <tr>
                    <td  align='center' style='padding: 35px; background: linear-gradient(to bottom, #283890, #fd3164);'>
                        <table align='center' border='0' cellpadding='0' cellspacing='0' class='table' style='max-width:600px'>
                            <tr>
                                <td align='center'>
                                    <img src='https://bufeotec.com/archivos_clientes/logo_bufeo_nuevo.png' width='100' style='display: block; border: 0px;'/>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;'>
                                    <p style='font-size: 14px; font-weight: 800; line-height: 18px; color: white;'>
                                    Desarrollado por Bufeo Tec
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align='center'  style='font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;'>
                                    <p style='font-size: 14px; font-weight: 400; line-height: 20px; color: #1e1313;'>
                                        <a href='https://bufeotec.com' target='_blank' style='color: white;'>¿Interesado? Visita nuestro sitio web</a>.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>";