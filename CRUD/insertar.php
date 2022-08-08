<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];


$sql="INSERT INTO contactos VALUES('$id','$nombre','$apellido','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agenda.php");
    
}else {
}
?>