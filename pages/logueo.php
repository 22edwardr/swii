<?php
include 'conexion.php';
$username=$_POST['usu'];
$pass=$_POST['pass'];
	if ($pass==NULL || $username==NULL) {
	echo 'La clave no fue digitada';
	}
	else{

		$sql="SELECT Id_usu,Pas_usu,Tip_usu,Nom_usu FROM usuario WHERE Id_usu='$username'";
		$result= mysqli_query($conexion,$sql);
		echo mysqli_error($conexion);
		while ($row = mysqli_fetch_row($result)){
			$User=$row[0];
			$Password=$row[1];
			$Tipo=$row[2];
			$Nombre=$row[3];
		}
	if($Password==$pass){
		session_start();
		$_SESSION['name']=$Nombre;
		$_SESSION['tipo']=$Tipo;
		header('Location: index.php');
	}
	else {
		header('Location: login.php');
	}
}
?>
