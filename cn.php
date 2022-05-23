<?php 

$conexion = mysqli_connect("localhost","root","","home banking");

if(mysqli_connect_error()){
    echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}

?>