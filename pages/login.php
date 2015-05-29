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
  </head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Ingresa ahora</h4>
          </div>
          <br>
          <div class="modal-body">
              <div class="row">

                  <div class="col-xs-4">
                      <div class="well">
                          <form id="loginForm" method="POST" action="logueo.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="usu" name="usu" value="" required="" title="Please enter you username" >
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Contraseña</label>
                                  <input type="password" class="form-control" id="pass" name="pass" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Error en usuario o contraseña.</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Recordarme
                                  </label>
                                  
                              </div>
                              <button a href="index.html" type="submit" class="btn btn-success btn-block">Ingresar</button>
                              
                          </form>
                      </div>
                  </div><div>
                  <form id="loginFor" method="POST" action="Registro.php" novalidate="novalidate">

                  <div class="col-xs-4">
                  
                      
                      
                      <div class="form-group">
                                  <label for="username" class="control-label">Documento</label>
                                  <input type="text" class="form-control" id="num_doc" name="num_doc" value="" required="" title="Please enter you username" >
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Contraseña</label>
                                  <input type="password" class="form-control" id="pass" name="pass" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Nombre</label>
                                  <input type="text" class="form-control" id="nombre" name="nombre" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Apellido</label>
                                  <input type="text" class="form-control" id="apellido" name="apellido" value="" required="" title="Please enter you username" >
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Tipo</label>
                                            <select class="form-control" name="Tipo">
                                                <option value="Admin" checked >Administrador</option>
                                                <option value="User">Usuario</option>
                                                <
                                            </select>
                              </div>
                              
                              
                      
                  </div>
                  <div class="col-xs-4">
                                  <div class="form-group">
                                  <label for="username" class="control-label">Telefono</label>
                                  <input type="text" class="form-control" id="telefono" name="telefono" value="" required="" title="Please enter you username" >
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Dirección</label>
                                  <input type="text" class="form-control" id="dir" name="dir" value="" required="" title="Please enter you username" >
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="form-group">
                                  <label for="password" class="control-label">Correo</label>
                                  <input type="text" class="form-control" id="correo" name="correo" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Cargo</label>
                                            <select class="form-control" name="cargo">
                                                <option value="Gerencia" checked >Gerencia</option>
                                                <option value="Administracion">Administracion</option>
                                                <option value="Contabilidad" checked >Contabilidad</option>
                                                <option value="Comercial">Comercial</option>
                                            </select>
                              </div><br>
                              <button type="submit" class="btn btn-info btn-block">Registrar</button><br>
                  </div>
                  </form></div>
                  
                  </div>
              </div>
          </div>
      </div>
  </div>
  </html>