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
    header('Location: contactos.php');
    exit();
}

// Verificar si el usuario está intentando iniciar sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Validar credenciales
    if ($usuario === 'admin' && $password === 'ocraduanas2025') {
        $_SESSION['authenticated'] = true;
        header('Location: contactos.php');
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
$sql = "SELECT * FROM contactos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Mensajes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Listado de Mensajes de Contactos</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>RUC</th>
                    <th>Mensaje</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($reclamo = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($reclamo['id']) ?></td>
                        <td><?= htmlspecialchars($reclamo['nombre']) ?></td>
                        <td><?= htmlspecialchars($reclamo['correo']) ?></td>
                        <td><?= htmlspecialchars($reclamo['ruc']) ?></td>
                        <td><?= htmlspecialchars($reclamo['mensaje']) ?></td>
                        <td><?= htmlspecialchars($reclamo['fecha_registro']) ?></td>
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