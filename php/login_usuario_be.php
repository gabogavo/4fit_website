<?php
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","","DBloginSENA");

$consulta="SELECT*FROM usuarios where correo='$correo' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$ejecutar=mysqli_fetch_array($resultado);

if($ejecutar['id_cargo']==1){ //administrador
    header("location:admin.php");
    exit;
}else
if($ejecutar['id']> 1){ //cliente
header("location:tucuenta.php");
}
else{
    echo '
    <script>
    alert ("usuario no existe , por favor registrese");
    window.location = "../login.html";
    </script>
    ';
    exit;
}
mysqli_free_result($resultado);
mysqli_close($conexion);








?>