<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="stylesheet" href="../Proyect/estilos.css">
    
</head>
<body>
    <nav>
        <div class="logo">CineGuía360</div>
        <ul>
            <li><a href="/Proyect/logeo.php">Añadir</a></li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Política</a></li>
            <li><a href="#">Sociedad</a></li>
            <li><a href="#">Deportes</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <main>
    <?php
        include("conexion.php");
        $query = "SELECT * FROM noticias";
        $resultado = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {
    ?>
        <section class="news-container">
            <article class="news-card">
                <p>Fecha en la que fue Publicada : <?php echo $row["Fecha"]; ?></p>
                <p>Quien la Publico : <?php echo $row["Publicada_Por"]; ?></p>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="Imagen de la noticia">
                <h2><?php echo $row["Titulo"]; ?></h2>
                <p><?php echo $row["Noticia"]; ?></p>
                <a href="../Proyect/Noticia_A_Modificar.php?titulo=<?php echo urlencode($row['Titulo']); ?>">Modificar Noticia</a>
            </article>
        </section>
    <?php } ?>
    </main>

    <footer>
        <p>&copy; 2024 CineGuía360. Todos los derechos reservados.</p>
        <p><a href="#">Política de Privacidad</a> | <a href="#">Términos de Uso</a></p>
    </footer>
</body>
</html>
