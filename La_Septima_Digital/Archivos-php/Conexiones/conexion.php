<?php
$conexion=new mysqli("localhost","root","","la_septima_digital");
if($conexion)
{
    echo '<script>
    alert("Se Conecto Correctamente");
    </script>';
}
else{
    echo "Error Al conectarce ";
}
?>C:\xampp\htdocs\La_Septima_Digital\Archivos-php\Conexiones\conexion.php
Archivos-php\Conexiones\conexion.php