<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];

$sql="UPDATE contactos SET  nombre='$nombre',apellido='$apellido',correo='$correo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agenda.php");
    }
?>