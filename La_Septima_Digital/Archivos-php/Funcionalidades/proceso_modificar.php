<?php
include("conexion.php");

// Obtén los datos del formulario
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$publicador = $_POST['nombre_publicador'];
$noticia = $_POST['noticia'];
$original_titulo = $_POST['original_titulo']; // El título original para la búsqueda

// Manejo de la imagen
if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
} else {
    // Si no se sube una nueva imagen, mantiene la imagen actual
    $query = "SELECT Imagen FROM noticias WHERE Titulo='$original_titulo'";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    $imagen = $row['Imagen'];
}

// Actualiza la noticia en la base de datos
$query = "UPDATE noticias SET Fecha='$fecha', Titulo='$titulo', Noticia='$noticia', Imagen='$imagen', Publicada_Por='$publicador' WHERE Titulo='$original_titulo'";
$resultado = $conexion->query($query);

if ($resultado) {
    echo '<script>
    alert("La noticia fue Modificada Correctamente");
    window.location="Acciones_Administrador.php";
    </script>';
    exit();
} else {
    echo "Error: " . $conexion->error;
}
?>
