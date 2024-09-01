<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="/Proyect/logeo.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="control_login.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <p class="signup-link">¿No tienes cuenta? <a href="/Proyect/Registro.php">Crea una aquí</a></p>
    </div>
</body>
</html>
