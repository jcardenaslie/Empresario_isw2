<!DOCTYPE html>
<html lang="es">
<head>
  <title>Agregar Lugar</title>
  <meta charset="UTF-8"/>
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/lug.css" media="all" rel="stylesheet" type="text/css" />
  <link href="css/tags.css" media="all" rel="stylesheet" type="text/css" />

  <!--<link href="login1.html" rel="import" />-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  <script src="js/lug.js" type="text/javascript"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<?php
	include('header.php');
?>
<?php include('conexion.php'); ?>
  
      <?php $sql1 = "SELECT * FROM lugar where rut_empresario='$rut'"; ?>
      <?php $proc1 = mysqli_query($mysqli,$sql1); ?>
      
      <?php //echo strtoupper($resultado1['nombre']); ?>
      <?php //} ?>

<?php //} ?>


    <!-- Page Content -->
    <div id="bodyContent" class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Lugares</p>
                    <div class="list-group">
                     <?php $contador=1;?>
                    <?php while($resultado1=mysqli_fetch_array($proc1,MYSQL_ASSOC)){ ?>
                   
                          <?php if ($contador==1){ ?>
                            <a  class="list-group-item lugar<?php echo $contador ?> active" href="#"><?php echo strtoupper($resultado1['nombre']);  ?></a>
                            <?php } ?>
                          <?php if ($contador>1){ ?>
                            <a  class="list-group-item lugar2" href="#"><?php echo strtoupper($resultado1['nombre']);  ?></a>
                          <?php } ?>
                    <?php $contador++; } ?>
                    <a href="/proyecto/add_lugar.php" class="list-group-item">+ Añadir Lugar</a>
                    </div>

            </div>

             

            <div class="col-md-9">

                <?php $proc2 = mysqli_query($mysqli,$sql1); ?>
                <?php $contador=1;?>
                    <?php while($resultado2=mysqli_fetch_array($proc2,MYSQL_ASSOC)){ ?>
                    <?php if ($contador==1){ ?>
                <div class="pages lugar<?php echo $contador;?> visible">
                    <?php } ?>
                    <?php if ($contador>1){ ?>
                <div class="pages lugar<?php echo $contador;?>">
                    <?php } ?>

              <div id="myCarousel" class="carousel  slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
          
                <div class="carousel-inner">
                  <div class="active item">  <img src="//placehold.it/800x300" class="img-responsive"></div>
                  <div class="item">  <img src="//placehold.it/800x300" class="img-responsive"></div>
                  <div class="item">  <img src="//placehold.it/800x300" class="img-responsive"></div>
                </div>
          
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
<!-- taggsssssssssssssssssss-->
           
                    <div class="caption-full">
    <div class="item-content-block tags">
      <p href="#">lorem</p> <p>loremipse</p> <p>Esrite</a> <p>remip</p> <p>serte</p> <p>quiaxms</p> <p>loremipse</p> <p>Esrite</p>
    </div>
<!-- taggsssssssssssssssssss-->
                        <h4><a href="#"><?php echo $resultado2['nombre']; ?></a>
                        </h4>
                        
                        <p><?php echo $resultado2['descripcion']; ?></p>

                       
                    
                  </div>
                  </div>

<?php $contador++;} ?>



              




            </div>

        </div>

    </div>


    <script src="js/bootstrap.min.js"></script>


</html>
