<?php
include "conexion.php";
date_default_timezone_set('America/Bogota');
$hoy = date('Y-m-d G:i:s', time());
session_start();

$Id=$_POST['Id'];
$Nombre=$_POST['Nombre'];

$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$Cargo=$_POST['Cargo'];
$sql="UPDATE usuario SET Nom_usu='$Nombre',Car_usu='$Cargo', Ape_usu='$Apellido' , Tel_usu='$Telefono' , Cor_usu='$Correo' , Dir_usu='$Direccion' WHERE Id_usu='$Id'";
mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
header('Location: index.php');
?>