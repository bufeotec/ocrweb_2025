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
        // Datos de conexión a la base de datos
        /*$host = 'localhost';
        $db = 'ocradsac_libroreclamos';
        $user = 'ocradsac_bufeotec';
        $pass = 'bufeotec2024!';
        
        // Crear conexión
        $conn = new mysqli($host, $user, $pass, $db);
        
        
        // Recibir los datos del formulario
        $nombre = htmlspecialchars(strip_tags(trim($_POST['nombre'])));
        $correo = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
        $ruc = htmlspecialchars(strip_tags(trim($_POST['ruc'])));
        $mensaje = htmlspecialchars(strip_tags(trim($_POST['mensaje'])));
        
        // Preparar la consulta SQL
        $sql = "INSERT INTO contactos (nombre, correo, ruc, mensaje) VALUES (?, ?, ?, ?)";
        
        // Usar una declaración preparada para evitar inyección SQL
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $correo, $ruc, $mensaje);
        
        // Ejecutar la consulta y verificar el resultado
        if ($stmt->execute()) {
            $result = 1;
            $message = "El correo se envió correctamente.";
        } else {
            $result = 2;
            $message = "Ocurrió un error al enviar el mensaje.";
        }
        
        // Cerrar la conexión
        $stmt->close();
        $conn->close();*/
        
    
        
        // Datos del formulario
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $ruc = $_POST['ruc'];
        $mensaje = $_POST['mensaje'];

        $nombre = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);
        //$correo = filter_var($correo, FILTER_SANITIZE_SPECIAL_CHARS);
        $ruc = filter_var($ruc, FILTER_SANITIZE_SPECIAL_CHARS);
        $mensaje= filter_var($mensaje, FILTER_SANITIZE_SPECIAL_CHARS);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://bufeotec.com/ocr_correo/enviarContacto.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('nombre' => $nombre, 'correo' => $correo, 'ruc' => $ruc, 'mensaje' => $mensaje),
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
        // Simula la obtención del correo
        //$sacar_email = 'vmolano@ocraduanas.com';
        //$sacar_email = 'contacto@bufeotec.com';
        //$sacar_email = 'bufeotec@gmail.com';
        

        
        /*$texto = utf8_decode("Se realizó una consulta a OCR Aduanas: \n\nNombre: ".$nombre . "\nCorreo: " . $correo . "\nRUC: " . $ruc . "\nMensaje: " . $mensaje);
        $texto2 = utf8_decode("Usted ha realizado una consulta a OCR Aduanas con los siguientes datos:" . "\n\nNombre: ".$nombre . "\nCorreo: " . $correo . "\nRUC: " . $ruc . "\nMensaje: " . $mensaje . "\n\nNos comunicaremos lo más pronto posible con usted.");
    
        mail('jcastillo@ocraduanas.com', "OCR Aduanas Consulta", $texto);
        mail('lruiz@ocraduanas.com', "OCR Aduanas Consulta", $texto);
        mail('jpolano@ocraduanas.com', "OCR Aduanas Consulta", $texto);
        mail('lborja@ocraduanas.com', "OCR Aduanas Consulta", $texto);
        mail('cesarjose@bufeotec.com', "OCR Aduanas Consulta", $texto);
        
        if(mail($sacar_email, "OCR Aduanas Consulta", $texto)){
            if(mail($correo, "OCR Aduanas: Información sobre su consulta", $texto2)){
                $result = 1;
                $message = "La consulta fue enviada exitosamente.";
            } else {
                $result = 2;
                $message = "Se envio la consulta pero no fue posible enviar una copia."; 
            }
        } else {
            $result = 2;
            $message = "Ocurrió un error al enviar el mensaje."; 
        }*/
        //mail($destino2, "Amazonía sin fronteras Consulta", $contenido);
        //mail($correo, utf8_decode("OCR Aduanas: Información sobre su consulta"), $contenido2);
        
        
        // Configuración del correo
        /*$mail = new PHPMailer(true);
        $mail->SMTPDebug = 4; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';   // Cambia esto por el host de tu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'notificaciones@bufeotec.com';    // Tu usuario de SMTP
        $mail->Password = 'pAnC0nP4lt414!';   // Tu contraseña de SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        
        $mail->Debugoutput = function ($str, $level) {
            error_log("PHPMailer [nivel $level]: $str");
        };

        // Configuración del remitente y destinatarios
        $mail->setFrom('notificaciones@bufeotec.com', utf8_decode($nombre));
        $mail->addAddress($sacar_email);

        // Contenido del correo
        $mail->isHTML(true); // Cambiado a true para enviar HTML
        $mail->Subject = utf8_decode('Solicitud de Información');
        $mail->Body = "La siguiente persona solicitó más información a través de la página web<br>Nombre: $nombre<br>RUC: $ruc<br>Mensaje:<br>$mensaje";

        // Enviar el correo
        if ($mail->send()) {
            $result = 1;
            $message = "El correo se envió correctamente.";
        } else {
            $result = 2;
            $message = "Ocurrió un error al enviar el mensaje.";
        }*/
        
    } catch (Throwable $e) {
        $message = $e->getMessage();
    }

    // Retornamos el json
    $respuesta = array("result" => $result, "message" => $message);
    echo json_encode($respuesta);
} else {
    echo json_encode(["result" => 2, "message" => "Este script solo maneja solicitudes POST."]);
}
?>
