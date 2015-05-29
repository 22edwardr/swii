<?php
include "conexion.php";
$num_doc=$_POST['num_doc'];
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$dir=$_POST['dir'];
$correo=$_POST['correo'];
$cargo=$_POST['cargo'];

$sql="INSERT INTO usuario(Id_usu,Pas_usu,Nom_usu,Ape_usu,Tel_usu,Dir_usu,Cor_usu,Car_usu) VALUES ('$num_doc','$pass','$nombre','$apellido','$telefono','$dir','$correo','$cargo')";
mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
header('Location: login.php');
?>