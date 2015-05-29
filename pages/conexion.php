<?php $conexion = mysqli_connect("localhost","root",""); 
if (!$conexion) {
 die("no e podido conectar ".mysqli_error()); } 
 mysqli_select_db($conexion,"swii"); ?>