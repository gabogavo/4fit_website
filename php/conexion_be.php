<?php

$conexion = mysqli_connect ("localhost","root","","DBloginSENA");

if($conexion){
    echo 'conexion exitosa';
}else{
    echo 'no se pudo conectar';
}

?>


