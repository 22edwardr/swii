
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Intrasoft</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript">
function activar(parametro){
  document.getElementById(parametro).disabled = false;
  document.getElementById(parametro+1).disabled = false;
  document.getElementById(parametro+2).disabled = false;
  document.getElementById(parametro+3).disabled = false;
  document.getElementById(parametro+4).disabled = false;
  document.getElementById(parametro+5).disabled = false;
  document.getElementById(parametro+6).disabled = false;
}
</script>
<?php session_start();?>

	</head>
	<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-center">
                      
          
            <!-- sidebar -->
            
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-12 col-xs-12" id="main">
                
                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="index.php" class="navbar-brand logo">in</a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">

                    
                    <form class="navbar-form navbar-left" action="resultados.php" method="POST">
                        <div class="input-group input-group-sm" style="max-width:360px;">

                          <input type="text" class="form-control" placeholder="Buscar" name="Nombre" id="Nombre">
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div></form>
                    </form>

                    <ul class="nav navbar-nav">
                      <li>
                        <a href="index.php"> Inicio</a>
                      </li>
                      <li>
                        <a href="#postModal" role="dropdown" data-toggle="modal"> Perfil</a>
                      </li>
                      
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="login.php">Cambiar de usuario</a></li>
                          <li><a href="">Configuracion de Perfil</a></li>
                          <li class="divider"></li>
                          <li><a href="login.php">Salir</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                  	</nav>
                </div>
                <!-- /top nav -->
              
                <div class="padding">
                    <div class="full col-sm-10">
                      
                        <!-- content -->                      
                      	<div class="row">

                         <div class="col-sm-2">
                         </div> 
                          
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"></div>
                                <div class="panel-body">
                                  <p class="lead">Resultados de la busqueda</p>
                                  <p>No tienes mensajes nuevos</p>
                                  <?php

include "conexion.php";


$Nombre=$_POST['Nombre'];
$sql="SELECT Nom_usu,Car_usu FROM usuario where Nom_usu LIKE '%".$Nombre."%' OR Id_usu LIKE '%".$Nombre."%' ";
$result= mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
while ($row = mysqli_fetch_row($result)){?>
	<form action="perfil_busqueda.php" method="POST">
	<input class="form-control input-lg" type="text" name="Nombre" readonly="readonly" value="<?php echo $row[0]; ?>"><br>
	<input class="form-control input-lg" type="text" name="Cargo" readonly="readonly" value="<?php echo $row[1]; ?>"><br>
	<button class="btn btn-primary" type="submit" name="Enviar" value="Visualizar">Ver Perfil</button>
  <?php
  if($_SESSION['tipo']=="Administrador"){?>
  <button class="btn btn-danger" type="submit" name="enviar2" value="Eliminar" onclick=this.form.action="eliminar_usuario.php">Eliminar</button>
  <?php } ?>
  <br>
	</form>
	<br>
	<?php
	}	
?>
                                  
                                  <p>
                                    
                                  </p>
                                </div>
                              </div>

                           
                              <div class="panel panel-default">
                                <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Intrasoft</h4></div>
                                  <div class="panel-body">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item">Reuniones</a>
                                      <a href="#" class="list-group-item">Compañeros</a>
                                      <a href="#" class="list-group-item">Eventos</a>
                                    </div>
                                  </div>
                              </div>
                           
                              <div class="well"> 
                                   <form class="form-horizontal" role="form">
                                    <h4>¿Que hay de nuevo?</h4>
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="¿En que estas pensando?"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="button">Publicar</button><ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                                  </form>
                              </div>
                           
                              
                           
                              

                           		
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-5">
                               
                                <div class="well"> 
                                  
                                    <h4>Publicar Comunicado</h4>

                                    <?php
include "conexion.php";
date_default_timezone_set('America/Bogota');
$hoy = date('Y-m-d G:i:s ', time());


?>
<div class="panel panel-default">

                                <div class="panel-thumbnail"></div>
                                <div class="panel-body">

<form action="enviar_pub.php" method="POST">


  <textarea name="Mensaje"  class="form-control "   rows="3"></textarea>
  

<br>
<div class="input-group text-center">
  <input name="Mensaje" type="text" class="form-control input-lg" placeholder="¿En qué estas pensando?">
  <span class="input-group-btn">
  <button name="Enviar" class="btn btn-lg btn-primary" type="submit">OK</button></span>
</div>
<br>
<input type="HIDDEN" class="form-control input-lg" name="Fecha" value="<?php print_r($hoy);?>" readonly="readonly">
<input type="text" class="form-control" name="Autor" value="<?php print $_SESSION['name']; ?>" readonly="readonly">


</form>
</div></div></div>



<?php
$sql="SELECT Id_pub,Pu_pub,Fe_pub,Nom_usu FROM publicacion join usuario ON usu_pub=Id_usu ORDER BY Fe_pub DESC LIMIT 100";
$result= mysqli_query($conexion,$sql);
echo mysqli_error($conexion);
while ($row = mysqli_fetch_row($result)){
  ?>
<div class="well"> 
    <div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title"><?php  echo $row[3] ?></h3>
  </div>

    <div class="panel-thumbnail"></div>
    <div class="panel-body">
    
    <form action="modificar_pub.php" method="POST">
    <input type="hidden" name="Id" value="<?php echo $row[0]; ?>">
    
    <textarea  rows="3" class="form-control" id='<?php echo $row[0]*100; ?>' name="Mensaje" disabled="disabled" value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></textarea>
    <br>

   

    <input type="hidden" id="<?php echo $row[0]*100+1; ?>" name="Archivo" /><br>
    <?php
      if ($row[3] == $_SESSION['name'] || $_SESSION['tipo']=='Administrador'){
        ?>
        <input type="button" class="btn btn-success"name="Modificar" onClick="activar(<?php echo $row[0]*100; ?>)" value="Modificar"> <label>&nbsp</label>

        <input type="submit" name="Eliminar" class="btn btn-danger" value="Eliminar" onclick=this.form.action="eliminar_pub.php">
      <?php } ?><label>&nbsp</label>

    <input type="submit" class="btn btn-warning"id="<?php echo $row[0]*100+2; ?>" name="Enviar" disabled="disabled" value="Publicar"><br><br><div class="panel-footer"><?php echo $row[2]; ?></div>
   </div></div></div>
    </form>
<?php } ?>
</div>
                                    
                                    
                                  </form>
                               
                                             
                            
                               

                               
                            
                               
                       </div><!--/row-->
                      
                        
                      
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div>
                          
                      
                      <hr>
                      
                     <div class="row"><center>
                          <div class="col-sm-12">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div></center>
                        </div>
                        
                      <hr>
                        <div class="col-sm-12">
                            <p>
                            <a href="#" class="pull-right">Intrasoft©Copyright 2015</a>
                            </p>
                          </div>
                        </div>
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>


<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">

      <div class="modal-header">
          Perfil<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
			
      </div>
      <div class="modal-body">
<div class="form-group">
                                            <div class="row" id="div_campos">
                                            <div class="col-xs-5"><br><br><br><br><br><img src="img/user.gif" width="230px" height="230px">
                                            </div>
                                            <div class="col-xs-7">

                                            <div class="form-group"><br>
                                            <form action="modificar_usuario.php" method="POST">
                                           <?php 
                                           include "conexion.php";
                                          
                                          $nombre=$_SESSION['name'];
                                           $sql="SELECT * FROM usuario WHERE Nom_usu='$nombre'";
                                            $result= mysqli_query($conexion,$sql);
                                            echo mysqli_error($conexion);
                                          while ($row = mysqli_fetch_row($result)){?>   

                                            <label >Documento</label>    
                                            <input class="form-control" id="<?php echo $row[0]*10000; ?>" disabled="disabled" value="<?php echo $row[0]; ?>" name="Id" >
                                          

                                            <br>
                                            <label>Nombre</label>
                                            <input class="form-control" id="<?php echo $row[0]*10000+1; ?>" disabled="disabled" value='<?php echo$row[1]; ?>' name="Nombre">
                                        
                                         <br>
                                            <label>Apellido</label>
                                            <input class="form-control" id="<?php echo $row[0]*10000+2; ?>"  disabled="disabled" value='<?php echo $row[4]; ?>' name="Apellido">
                                        
                                          <br>                                     
                                            <label >Teléfono</label>    
                                            <input class="form-control" id="<?php echo $row[0]*10000+3; ?>"  disabled="disabled" value='<?php echo$row[3]; ?>'name="Telefono" >
                                          
                                          <br>                                    
                                            <label >Direccion</label>    
                                            <input class="form-control" id="<?php echo $row[0]*10000+4; ?>" disabled="disabled" value='<?php echo$row[5]; ?>' name="Direccion" >
                                          <br>                                       
                                            <label >Correo</label>    
                                            <input class="form-control" id="<?php echo $row[0]*10000+5; ?>" disabled="disabled" value='<?php echo$row[6]; ?>' name="Correo" >
                                          <br>                                      
                                            <label >Cargo</label>    
                                            <input class="form-control" id="<?php echo $row[0]*10000+6; ?>" disabled="disabled" value='<?php echo $row[7]; ?>' name="Cargo" >
                                          <br>
                                          <input class="btn btn-danger " type="button"name="Modificar" value="Actualizar" onClick="activar(<?php echo $row[0]*10000; ?>)"
                                          <?php } ?>
      <br>
                                          <input type="submit"class="btn btn-primary "></input></form></div>

          
          
            <div class="form-group"></div>

            </div></div>
            
                </div>
      <div class="modal-footer">
          <div>
           
            </ul>
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>