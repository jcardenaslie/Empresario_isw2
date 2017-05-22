<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/shop-homepage.css" rel="stylesheet">
</head>
<body>

	<?php
		include ('conexion.php');
		session_start();
		if(isset($_SESSION['u_user'])){
			$user=$_SESSION['u_user'];
			$sql="SELECT * from usuario where user='$user'";
			$proc=mysql_query($sql);
			if($resultado = mysql_fetch_array($proc)){
				//echo "Bienvenid@ "; echo $resultado['representante_legal']; echo" ";
			}
				
			//echo "<a href='logout_e.php'>Cerrar Sesión </a>";
		}
		else{
			header("Location: panel_u.php");
		}


	?>

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="categorias.php">Categorias</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $resultado['nombre']; ?></a></li>
      <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>


                  <div class="container">

        <div class="row">
         <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form> </div>
            </div>
     <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Categorias</p>

                <div class="list-group">
                    <a href="#" class="list-group-item">Categoria 1</a>
                    <a href="#" class="list-group-item">Categoria 2</a>
                    <a href="#" class="list-group-item">Categoria 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$50.000</h4>
                                <h4><a href="review.html">Campo don juan</a>
                                </h4>
                                <p>Ofrecemos las mejores parrilladas de la zona <a target="_blank" href="http://www.bootsnipp.com">Sitio web: - http://CampoDonJuan.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 comentarios</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$100.000</h4>
                                <h4><a href="#">Rancho don Miguel</a>
                                </h4>
                                <p>No se sentira como en su casa, lo trataremos mejor</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 comentarios</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$80.000</h4>
                                <h4><a href="#">Laguna azul</a>
                                </h4>
                                <p>Vista a la laguna, parrilladas,desayunos,camping,piscina y mas</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 comentarios</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$200.000</h4>
                                <h4><a href="#">El campo</a>
                                </h4>
                                <p>Desayuno,almuerzo,cena,karaoke,djs,pista de baile todo en un mismo lugar</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 comentarios</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$10.000</h4>
                                <h4><a href="#">Doña juanita</a>
                                </h4>
                                <p>Camping muy acogedor y con un rico pan amasado</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 comentarios</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">¿TIenes mas de un destino?</a>
                        </h4>
                        <p>Crea un itinerario a tu gusto aca</a></p>
                        <a class="btn btn-primary" target="_blank" href="archivo.html">Crear Itinerario</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">
                
    <!-- Left and right controls -->
 
</body>
</html>