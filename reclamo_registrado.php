<?php
// Configuración de la base de datos
$host = 'localhost';
$db = 'ocradsac_libroreclamos';
$user = 'ocradsac_bufeotec';
$pass = 'bufeotec2024!';

// Verificar si el ID fue proporcionado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No se proporcionó un ID válido.");
}

$id = intval($_GET['id']);

// Conexión a la base de datos
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener el reclamo
$sql = "SELECT * FROM reclamos WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si el reclamo existe
    if ($result->num_rows === 0) {
        die("Error: No se encontró un reclamo con el ID proporcionado.");
    }

    // Obtener los datos del reclamo
    $reclamo = $result->fetch_assoc();
} else {
    die("Error al preparar la consulta: " . $conn->error);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCR Aduanas - Libro de Reclamaciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">¡Gracias! El reclamo fue registrado exitosamente.</h1>
        <div class="card">
            <div class="card-header bg-primary text-white">
                ID del Reclamo: <?= htmlspecialchars($reclamo['id']) ?>
            </div>
            <div class="card-body">
                <p><strong>Nombre:</strong> <?= htmlspecialchars($reclamo['nombre_persona']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($reclamo['email']) ?></p>
                <p><strong>Teléfono:</strong> <?= htmlspecialchars($reclamo['telefono']) ?></p>
                <p><strong>Tipo de Documento:</strong> <?= htmlspecialchars($reclamo['tipo_documento']) ?></p>
                <p><strong>Número de Documento:</strong> <?= htmlspecialchars($reclamo['numero_documento']) ?></p>
                <p><strong>Ubicación:</strong> 
                    <?= htmlspecialchars($reclamo['departamento']) ?>, 
                    <?= htmlspecialchars($reclamo['provincia']) ?>, 
                    <?= htmlspecialchars($reclamo['distrito']) ?>
                </p>
                <p><strong>Dirección:</strong> <?= htmlspecialchars($reclamo['direccion']) ?></p>
                <p><strong>Tipo de Contrato:</strong> <?= htmlspecialchars($reclamo['tipo_contrato']) ?></p>
                <p><strong>Fecha del Incidente:</strong> <?= htmlspecialchars($reclamo['fecha_incidente']) ?></p>
                <p><strong>Monto Reclamado:</strong><?= htmlspecialchars($reclamo['monto_reclamado']) ?></p>
                <p><strong>Descripción del Contrato:</strong></p>
                <p><?= nl2br(htmlspecialchars($reclamo['descripcion_contrato'])) ?></p>
                <p><strong>Detalle del Reclamo/Queja:</strong></p>
                <p><?= nl2br(htmlspecialchars($reclamo['detalle_reclamo_queja'])) ?></p>
                <p><strong>Detalle del Consumidor:</strong></p>
                <p><?= nl2br(htmlspecialchars($reclamo['detalle_reclamo_consumidor'])) ?></p>
                <p><strong>Pedido del Reclamante:</strong></p>
                <p><?= nl2br(htmlspecialchars($reclamo['pedido_reclamante'])) ?></p>
                <p><strong>Fecha de Registro:</strong> <?= htmlspecialchars($reclamo['fecha_registro']) ?></p>
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="index.php" class="btn btn-secondary">Volver</a>
            <button class="btn btn-success" onclick="window.print()">Imprimir</button>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
