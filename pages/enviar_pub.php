<?php
include "conexion.php";
date_default_timezone_set('America/Bogota');
$hoy = date('Y-m-d G:i:s', time());
session_start();
$Mensaje=$_POST['Mensaje'];
$Fecha=$_POST['Fecha'];

$Autor=$_POST['Autor'];
$sql="SELECT Id_usu FROM usuario WHERE Nom_usu='$Autor' ";
$result= mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
while ($row = mysqli_fetch_row($result)){
	$Autor=$row[0];
}
$sql="INSERT INTO publicacion(Pu_pub,Fe_pub,Usu_pub) VALUES ('$Mensaje','$Fecha','$Autor')";
mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
header('Location: index.php');

//El manejo de archivos no funciona pero ya esta listo para subir a plataforma
?>