<?php
include "conexion.php";
session_start();
$Nombre=$_POST['Nombre'];
$sql="DELETE FROM usuario WHERE Nom_usu='$Nombre' ";
mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
header('Location: index.php');