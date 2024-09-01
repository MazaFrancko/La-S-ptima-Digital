<?php
include("conexion.php");

$fecha = $_POST["fecha"];
$titulo = $_POST["titulo"];
$resumen = $_POST["resumen"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$publicador = $_POST["publicador"];

$query = "INSERT INTO noticias_secundarias(Fecha,Titulo,Resumen,Imagen) VALUES ('$fecha', '$titulo', '$resumen', '$imagen')";

$resultado = $conexion->query($query);

if ($resultado) {
    echo'<script>
    alert("La noticia fue almacenada Correctamente")
    window.location="Acciones_Administrador.php";
    </script>';
        exit();
} else {
    echo "Error Al cargar Noticia Comun";
}
?>
