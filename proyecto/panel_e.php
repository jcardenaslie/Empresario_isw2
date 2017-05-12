<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/log.css" media="all" rel="stylesheet" type="text/css" />
  <!--<link href="login1.html" rel="import" />-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
           
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button> <a class="navbar-brand" ><b>Arauco Turismo</b></a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
        
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#myModal" data-toggle="modal"><b>Solicita Registro</b></a>
            </li>
            <li class="dropdown">
                                  <a href="proyecto/panel_e.php" class="dropdown-toggle" data-toggle="dropdown">Iniciar Sesión<span class="caret"></span></a>
                                  <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                                      <div class="col-lg-12">
                                          <div class="text-center"><h3><b>Iniciar Sesión</b></h3></div>
                                          <form id="ajax-login-form" action="login_e.php" method="post" role="form" autocomplete="off">
                                              <div class="form-group">
                                                  <label for="username">Rut</label>
                                                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Rut" value="" autofocus="">
                                              </div>

                                              <div class="form-group">
                                                  <label for="password">Contraseña</label>
                                                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" autocomplete="off">
                                              </div>

                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-xs-7">
                                                          <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                          <label for="remember"> Recuerdame</label>
                                                      </div>
                                                      <div class="col-xs-5 pull-right">
                                                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Entrar">
                                                      </div>
                                                  </div>
                                              </div>

                                              
                                              <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                          </form>
                                      </div>
                                  </ul>
                              </li>
          </ul>
        </div>
        
      </nav>

      <div class="carousel slide" id="carousel-191012">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-191012">
          </li>
          <li data-slide-to="1" data-target="#carousel-191012">
          </li>
          <li data-slide-to="2" data-target="#carousel-191012">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img alt="Carousel Bootstrap First" src="img/territorioarauco_1.jpg" />
            <div class="carousel-caption">
              <h4>
                Arauco I
              </h4>
              <p>
                Descripcion I
              </p>
            </div>
          </div>
          <div class="item">
            <img alt="Carousel Bootstrap Second" src="img/Arauco.jpg" />
            <div class="carousel-caption">
              <h4>
                Arauco II
              </h4>
              <p>
                Descripcion II
              </p>
            </div>
          </div>
          <div class="item">
            <img alt="Carousel Bootstrap Third" src="//placehold.it/1300x400" />
            <div class="carousel-caption">
              <h4>
                Arauco III
              </h4>
              <p>
                Descripcion III
              </p>
            </div>
          </div>
        </div> <a class="left carousel-control" href="#carousel-191012" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-191012" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
  </div>
</div>

    
    
    
  

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Formulario de Registro</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal col-sm-12">
          <div class="form-group"><label>Nombre</label><input class="form-control required" placeholder="Nombre y Apellido" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Mensaje</label><textarea class="form-control" placeholder="Tus datos aca" data-placement="top" data-trigger="manual"></textarea></div>
          <div class="form-group"><label>E-Mail</label><input class="form-control email" placeholder="email@you.cl (Nos contactaremos contigo)" data-placement="top" data-trigger="manual" data-content="Ingresa email valido (user@email.cl)" type="text"></div>
          <div class="form-group"><label>Celular</label><input class="form-control phone" placeholder="+569 00000000" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
          <div class="form-group"><button type="submit" class="btn btn-success pull-right">Enviar</button> <p class="help-block pull-left text-danger hide" id="form-error">  Formulario no valido</p></div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
      </div>
    </div>
  </div>
</div>

</html>
</html>
