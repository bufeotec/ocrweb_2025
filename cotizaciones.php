<?php
session_start();

// Configuración de la base de datos
$host = 'localhost';
$db = 'ocradsac_libroreclamos';
$user = 'ocradsac_bufeotec';
$pass = 'bufeotec2024!';

// Verificar si el usuario está intentando cerrar sesión
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: cotizaciones.php');
    exit();
}

// Verificar si el usuario está intentando iniciar sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Validar credenciales
    if ($usuario === 'admin' && $password === 'ocraduanas2025') {
        $_SESSION['authenticated'] = true;
        header('Location: cotizaciones.php');
        exit();
    } else {
        $error = "Credenciales incorrectas. Inténtelo nuevamente.";
    }
}

// Si el usuario no está autenticado, mostrar la pantalla de inicio de sesión
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true): ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <h1 class="text-center">Inicio de Sesión</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                            <?php endif; ?>
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
<?php
exit();
endif;

// Si el usuario está autenticado, mostrar el listado de reclamos
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener todos los reclamos
$sql = "SELECT * FROM cotizaciones";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Solicitud de Cotizaciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Listado de Cotizaciones</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Razón Social</th>
                    <th>Email</th>
                    <th>RUC</th>
                    <th>Teléfono</th>
                    <th>País de Embarque</th>
                    <th>Vía</th>
                    <th>Incoterms</th>
                    <th>Dirección Recojo</th>
                    <th>Puerto Embarque</th>
                    <th>Carga FCL</th>
                    <th>Carga LCL</th>
                    <th>Cantidad Bultos</th>
                    <th>Peso</th>
                    <th>Dimensiones</th>
                    <th>Tipo Mercadería</th>
                    <th>Partida Arancelaria</th>
                    <th>Valor Carga</th>
                    <th>Otros</th>
                    <th>Emitido</th>
                    <th>Declarante</th>
                    <th>Doc. Transporte</th>
                    <th>Factura Comercial</th>
                    <th>Doc. Seguro</th>
                    <th>Packing List</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($cotizacion = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($cotizacion['id']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['razon_social']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['email']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['ruc']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['telefono']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['pais_embarque']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['via']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['incoterms']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['direccion_recojo']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['puerto_embarque']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['carga_fcl']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['carga_lcl']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['cantidad_bultos']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['peso']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['dimensiones']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['tipo_mercaderia']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['partida_arancelaria']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['valor_carga']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['otros']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['emitido']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['declarante']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['documento_transporte']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['factura_comercial']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['documento_seguro']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['packing_list']) ?></td>
                        <td><?= htmlspecialchars($cotizacion['fecha_registro']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="?logout=true" class="btn btn-danger">Cerrar Sesión</a>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>