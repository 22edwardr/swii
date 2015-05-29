<?php
include "conexion.php";
session_start();
$Id=$_POST['Id'];
$sql="DELETE FROM Publicacion WHERE Id_pub='$Id' ";
mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
header('Location: index.php');


//En este momento se considera a todos los usuarios como administradores ya que no se a puesto el condicional para esto
?>

