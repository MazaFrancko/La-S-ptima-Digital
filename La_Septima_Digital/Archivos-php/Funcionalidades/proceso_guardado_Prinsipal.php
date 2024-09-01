<?php
include("conexion.php");

$fecha = $_POST["fecha"];
$titulo = $_POST["titulo"];
$resumen = $_POST["resumen"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$publicador = $_POST["publicador"];

$query = "INSERT INTO  noticias_principales(Fecha, Titulo, Resumen, Imagen, Publicado_Por) VALUES ('$fecha', '$titulo', '$resumen', '$imagen', '$publicador')";

$resultado = $conexion->query($query);

if ($resultado) {
    echo'<script>
    alert("La noticia fue almacenada Correctamente")
    window.location="Acciones_Administrador.php";
    </script>';
        exit();
} else {
    echo "Error Al caragar en la Noticia Prinsipal";
}
?>
