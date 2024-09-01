<?php
include("conexion2.php");

$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];

$validar_login=mysqli_query($conexion2,"SELECT * FROM datos WHERE nombre='$nombre' and
contraseña='$contraseña'");
$query = "INSERT INTO datos(nombre,contraseña,correo) VALUES ('$nombre','$contraseña', '$correo')";

if (mysqli_num_rows($validar_login) > 0 ) {

    echo '<script>
    alert("Datos de Administrador Encontrados Exitosamente")
    window.location="Acciones_Administrador.php";
    </script>';
   
} else {
    echo '<script>
    alert("Usuario No encontrado como Administrador.Volver a Intentar")
    window.location="logeo.php";
    </script>';


    
}
?>