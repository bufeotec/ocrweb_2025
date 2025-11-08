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
    $result = 2;
    $message = "Error al enviar el correo.";

    try {
        // Datos del formulario
        $razonSocial = $_POST['razon_social'];
        $correo = $_POST['email'];
        $ruc = $_POST['ruc'];
        $telefono = $_POST['telefono'];
        $pais_embarque = $_POST['pais_embarque'];
        $via = $_POST['via'];
        $incoterms = $_POST['incoterms'];
        $direccionRecojo = $_POST['direccion_recojo'];
        $puertoEmbarque = $_POST['puerto_embarque'];
        $carga_fcl = $_POST['carga_fcl'];
        $carga_lcl = $_POST['carga_lcl'];
        $cantidadbultos = $_POST['cantidad_bultos'];
        $peso = $_POST['peso'];
        $dimensiones = $_POST['dimensiones'];
        $tipo_mercaderia = $_POST['tipo_mercaderia'];
        $partida_arancelario = $_POST['partida_arancelaria'];
        $valor_carga = $_POST['valor_carga'];
        $otros = $_POST['otros'];
        $emitido = !empty($_POST['documento_requerido']) ? 'SI' : 'NO';
        $declarante = !empty($_POST['declarante']) ? 'SI' : 'NO';
        $documentodetranspor = !empty($_POST['documento_transporte']) ? 'SI' : 'NO';
        $facturaComercial = !empty($_POST['factura_comercial']) ? 'SI' : 'NO';
        $documentoSeguro = !empty($_POST['companhia_aseguradora']) ? 'SI' : 'NO';
        $packlin = !empty($_POST['packing_list']) ? 'SI' : 'NO';

        // Datos de conexión a la base de datos
        /*$host = 'localhost';
        $db = 'ocradsac_libroreclamos';
        $user = 'ocradsac_bufeotec';
        $pass = 'bufeotec2024!';
        
        // Crear conexión
        $conn = new mysqli($host, $user, $pass, $db);
        
        // Consulta SQL para insertar los datos
        $sql = "INSERT INTO cotizaciones (
                    razon_social, email, ruc, telefono, pais_embarque, via, incoterms, 
                    direccion_recojo, puerto_embarque, carga_fcl, carga_lcl, cantidad_bultos, 
                    peso, dimensiones, tipo_mercaderia, partida_arancelaria, valor_carga, 
                    otros, emitido, declarante, documento_transporte, factura_comercial, 
                    documento_seguro, packing_list
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Preparar la consulta
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Enlazar parámetros
            $stmt->bind_param(
                'ssssssssssssssssssssssss',
                $razonSocial, $correo, $ruc, $telefono, $pais_embarque, $via, $incoterms, 
                $direccionRecojo, $puertoEmbarque, $carga_fcl, $carga_lcl, $cantidadbultos, 
                $peso, $dimensiones, $tipo_mercaderia, $partida_arancelario, $valor_carga, 
                $otros, $emitido, $declarante, $documentodetranspor, $facturaComercial, 
                $documentoSeguro, $packlin
            );
        
            // Ejecutar la consulta
            if ($stmt->execute()) {
                $result = 1;
                $message = "El correo se envió correctamente.";
            } else {
                $result = 2;
                $message = "Ocurrió un error al enviar el mensaje.";
            }
        
            $stmt->close(); // Cerrar el statement
        } else {
            $result = 2;
            $message = "Ocurrió un error al enviar el mensaje.";
        }*/

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://bufeotec.com/ocr_correo/enviarCotizacion.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'razon_social' => $_POST['razon_social'],
                'email' => $_POST['email'],
                'ruc' => $_POST['ruc'],
                'telefono' => $_POST['telefono'],
                'pais_embarque' => $_POST['pais_embarque'],
                'via' => $_POST['via'],
                'incoterms' => $_POST['incoterms'],
                'direccion_recojo' => $_POST['direccion_recojo'],
                'puerto_embarque' => $_POST['puerto_embarque'],
                'carga_fcl' => $_POST['carga_fcl'],
                'carga_lcl' => $_POST['carga_lcl'],
                'cantidad_bultos' => $_POST['cantidad_bultos'],
                'peso' => $_POST['peso'],
                'dimensiones' => $_POST['dimensiones'],
                'tipo_mercaderia' => $_POST['tipo_mercaderia'],
                'partida_arancelaria' => $_POST['partida_arancelaria'],
                'valor_carga' => $_POST['valor_carga'],
                'otros' => $_POST['otros'],
                'documento_requerido' => isset($_POST['documento_requerido']) ? 1 : 0,
                'declarante' => isset($_POST['declarante']) ? 1 : 0,
                'documento_transporte' => isset($_POST['documento_transporte']) ? 1 : 0,
                'factura_comercial' => isset($_POST['factura_comercial']) ? 1 : 0,
                'companhia_aseguradora' => isset($_POST['companhia_aseguradora']) ? 1 : 0,
                'packing_list' => isset($_POST['packing_list']) ? 1 : 0),
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
    } catch (Exception $e) {
        $message = "Error al enviar el correo. Mailer Error";
    }

    // Retornamos el json
    $respuesta = array("result" => $result, "message" => $message);
    echo json_encode($respuesta);
} else {
    echo json_encode(["result" => 2, "message" => "Este script solo maneja solicitudes POST."]);
}
?>
