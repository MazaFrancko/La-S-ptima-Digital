<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="/Proyect/Noticias_A_Modificar.css">
</head>
<body>
    <h1>Modificaciones</h1>
    <?php
        include("conexion.php");
        $titulo = $_REQUEST['titulo'];
        $query = "SELECT * FROM noticias WHERE Titulo='$titulo'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>
    <br><br>
    <form action="proceso_modificar.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="original_titulo" value="<?php echo htmlspecialchars($row['Titulo']); ?>">
    <label for="titulo">Título:</label>
    <input type="text" required name="titulo" placeholder="Título..." value="<?php echo htmlspecialchars($row['Titulo']); ?>">
    <br>
    <label for="fecha_publicacion">Fecha de Publicación:</label>
    <input type="date" required name="fecha" value="<?php echo htmlspecialchars($row['Fecha']); ?>">
    <br>
    <label for="nombre_publicador">Nombre del Publicador:</label>
    <input type="text" required name="nombre_publicador" placeholder="Publicador..." value="<?php echo htmlspecialchars($row['Publicada_Por']); ?>">
    <br>
    <label for="noticia">Contenido de la Noticia:</label>
    <textarea required name="noticia" placeholder="Contenido..."><?php echo htmlspecialchars($row['Noticia']); ?></textarea>
    <br>
    <label for="imagen">Imagen Actual:</label>
    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="">
    <br>
    <label for="imagen">Actualizar Imagen:</label>
    <input type="file" name="imagen" id="">
    <br>
    <br>
    <input type="submit" value="Aceptar Cambios">
</form>

</body>
</html>
