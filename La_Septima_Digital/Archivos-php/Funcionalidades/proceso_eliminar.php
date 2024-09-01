<?php
include("conexion.php");

// Verificar si se ha pasado el parámetro 'titulo' en la URL
if (isset($_GET['titulo'])) {
    $titulo = $_GET['titulo'];

    // Preparar la consulta SQL para eliminar el registro basado en el título
    $query = "DELETE FROM noticias WHERE Titulo='$titulo'";

    // Ejecutar la consulta
    $resultado = $conexion->query($query);

    // Verificar si la consulta se ejecutó correctamente
    if ($resultado) {
        echo'<script>
    alert("Se elimino la Noticia Con exito")
    window.location="Acciones_Administrador.php";
    </script>';
        exit();
    } else {
        echo "Error al eliminar el registro.";
    }
} else {
    echo "Título no proporcionado.";
}
?>
