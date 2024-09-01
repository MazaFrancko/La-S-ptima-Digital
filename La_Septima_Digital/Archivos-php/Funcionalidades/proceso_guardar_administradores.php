<?php
include("conexion2.php");

$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];
$correo = $_POST["correo"];

$query = "INSERT INTO datos(nombre,contraseña,correo) VALUES ('$nombre','$contraseña', '$correo')";

$resultado = $conexion2->query($query);

if ($resultado) {
    echo '<script>
    alert("Datos de Administrador Guardados Exitosamente")
    window.location="logeo.php";
    </script>';
} else {
    echo "Dato del Administrador No Guardados ERROR";
}
?>