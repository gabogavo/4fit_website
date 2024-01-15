<?php

include 'conexion_be.php';

$nombre_completo =  $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, correo,  contrasena) 
           VALUES('$nombre_completo', '$correo',  '$contrasena')";

           //verificacion de datos

           $verificar_nombre_completo = mysqli_query($conexion, "SELECT *  FROM usuarios WHERE nombre_completo='$nombre_completo' ");
           
           if(mysqli_num_rows($verificar_nombre_completo)> 0){
            echo '
            <script>
            alert("Este nombre ya esta en úso, intenta con otro");
            window.location = "../login.html";
            </script>
            ';
            exit();
           }
           $verificar_correo = mysqli_query($conexion, "SELECT *  FROM usuarios WHERE correo='$correo' ");
           
           if(mysqli_num_rows($verificar_correo)> 0){
            echo '
            <script>
            alert("Este correo ya esta en úso, intenta con otro");
            window.location = "../login.html";
            </script>
            ';
            exit();
           }

          
    
$ejecutar = mysqli_query($conexion , $query);

if($ejecutar){
 
}else{
    echo  '
    <script>
    alert("usuario no almacenado exitosamente");
    window.location = "../login.html";
    </script>
    ';

}
mysqli_close($conexion);


?>