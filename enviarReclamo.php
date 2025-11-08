<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $result = 2;
//    $message = "Error al enviar el correo.";
//
//    try {
//        // Simula la obtención del correo de Tahuayo desde una base de datos o similar
//        $sacar_email = 'reynaalfredo421@gmail.com';
//
//        // Encabezados del correo electrónico
//        $mensaje = 'La siguiente persona solicitó más información a través de la página web' . "\n";
//        $mensaje .= 'Nombre: ' . $_POST['nombre'] . "\n";
//        $mensaje .= 'RUC: ' . $_POST['ruc'] . "\n";
//        $mensaje .= 'Mensaje:' . "\n" . $_POST['mensaje'];
//        $remitente = $_POST['correo'];
//
//        $headers = "From: $remitente\r\n";
//        $headers .= "Reply-To: $remitente\r\n";
//        $headers .= "CC: $sacar_email\r\n";
//        $headers .= "BCC: $sacar_email\r\n";
//
//        // Envío del correo electrónico
//        if (mail($sacar_email, "Solicitud de Información", $mensaje, $headers)) {
//            $result = 1;
//            $message = "El correo se envió correctamente.";
//        } else {
//            $result = 2;
//            $message = "Error al enviar el correo.";
//        }
//    } catch (Exception $e) {
//        $message = $e->getMessage();
//    }
//
//    // Retornamos el json
//    $respuesta = array("result" => $result, "message" => $message);
//    echo json_encode($respuesta);
//} else {
//    echo json_encode(["result" => 2, "message" => "Este script solo maneja solicitudes POST."]);
//}
//?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("Valor recibido de 'Fecha': " . $_POST['Fecha']);
    $result = 2;
    $message = "Error al enviar el correo.";
    $track_ = '1';
    $last_id = 0;
    try {
        if ($_POST['conforme_terminos'] == 1) {
            $nombre_persona = $_POST['Nombres'] . ' ' . $_POST['Apellidos'];
            $email = $_POST['Correo'];
            $telefono = $_POST['Telefono'];
            $tipoDocumento = $_POST['TipoDoc'];
            $numeroDocument = $_POST['DNI'];
//            $menorEdad = isset($_POST['Mayor']) ? 'SI' : 'NO';
//            $pariente = $_POST['Pariente'] != "" ? $_POST['Pariente'] : '--';
            $departamento = $_POST['ubigeoDep'];
            $provincia = $_POST['ubigeoPro'];
            $distrito = $_POST['ubigeoDis'];
            $direccion = $_POST['Direccion'];
            $tipoContrato = 'Servicio';
//            $tipoTienda = $_POST['Tienda'];
            //$fechaInsidente = date('d-m-Y', strtotime($_POST['Fecha']));
            $fechaInsidente = $_POST['Fecha'];
            $montoReclamado = $_POST['Monto'];
            $descripcionContrato = $_POST['Detalles'];
            $detalleReclaPediConsumiTipo = $_POST['Type'] == 1 ? 'Reclamo: Disconformidad relacionada a los productos o servicios.' : 'Queja: Disconformidad no relacionada a los productos o servicios o malestar o descontento respecto a la atención al público.';
            $detalleReclaConsumi = $_POST['DetallesAsset'];
            $pedidodelReclamante = $_POST['DetallesOrden'];
            $fecha_correlativo = date('ymdHi');


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://bufeotec.com/ocr_correo/enviarReclamo.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'Nombres' => $_POST['Nombres'],
                    'Apellidos' => $_POST['Apellidos'],
                    'Correo' => $_POST['Correo'],
                    'Telefono' => $_POST['Telefono'],
                    'TipoDoc' => $_POST['TipoDoc'],
                    'DNI' => $_POST['DNI'],
                    'ubigeoDep' => $_POST['ubigeoDep'],
                    'ubigeoPro' => $_POST['ubigeoPro'],
                    'ubigeoDis' => $_POST['ubigeoDis'],
                    'Direccion' => $_POST['Direccion'],
                    'Fecha' => $_POST['Fecha'],
                    'Monto' => $_POST['Monto'],
                    'Detalles' => $_POST['Detalles'],
                    'Type' => $_POST['Type'],
                    'DetallesAsset' => $_POST['DetallesAsset'],
                    'DetallesOrden' => $_POST['DetallesOrden'],
                    'conforme_terminos' => $_POST['conforme_terminos']),
            ));
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

            $response = curl_exec($curl);
            $error = curl_error($curl);
            curl_close($curl);
            $responseData = json_decode($response, true);

            if($responseData['result'] == 1){
                $result = 1;
                $message = "La consulta fue enviada exitosamente.";
            } else {
                $result = 2;
                $message = "Se envio la consulta pero no fue posible enviar una copia.";
            }

        } else {
            $result = 5;
        }
    } catch (Exception $e) {
         $result = 6;
        $debugOutput = ob_get_clean();
        $message = $e->getMessage();
    }
    // Retornamos el json
    $respuesta = array("result" => $result, "id" => $last_id, "message" => $message);
    echo json_encode($respuesta);
} else {
    echo json_encode(["result" => 2, "message" => "Este script solo maneja solicitudes POST."]);
}
?>
