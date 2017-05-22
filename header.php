<!DOCTYPE html>
<html>
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

	<?php
		include ('conexion.php');
		//include ('functions.php');
		session_start();
		if(isset($_SESSION['u_emp'])){
			$rut=$_SESSION['u_emp'];
			$sql="SELECT representante_legal from empresario where rut='$rut'";	
			$proc=mysqli_query($mysqli,$sql);
			$resultado = mysqli_fetch_array($proc,MYSQL_ASSOC);
		}
		else{
			header("Location: panel_e.php");
		}


	?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="sesion_e.php" ><b>Arauco Turismo</b></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
				
					<ul class="nav navbar-nav navbar-right">
      <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $resultado['representante_legal']; ?></a></li>
      <li><a href="logout_e.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
    </ul>
				</div>
				
			</nav>
			</div>
			</div>
			</div>

 

</html>
