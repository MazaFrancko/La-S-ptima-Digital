<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Noticia</title>
    <link rel="stylesheet" href="añadir_noticias.css">
</head>
<body>
    <nav>
        <div class="logo">CineGuía360</div>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Agregar Noticia</a></li>
        </ul>
    </nav>

    <main>
        <section class="form-container">
            <h2>Agregar Nueva Noticia</h2>
            <form action="proceso_guardado_Prinsipal.php" method="POST" enctype="multipart/form-data">
                <label for="fecha">Fecha de Publicación:</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>

                <label for="contenido">Noticia:</label>
                <textarea id="contenido" name="resumen" required></textarea>

                <label for="imagen">Imagen:</label>
                <input type="file" required name="imagen" id="">

                <label for="publicador">Nombre del Publicador:</label>
                <input type="text" id="publicador" name="publicador" required>

                <button type="submit">Agregar Noticia</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 CineGuía360. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
