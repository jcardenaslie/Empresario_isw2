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


	$nl= $_POST['nl'];
	$comuna = $_POST['comuna'];
	$desc = 	$_POST['desc'];
	$q2= "SELECT count(id_lugar) FROM lugar";
	$r1= mysqli_query($mysqli,$q2);
	$rr= mysqli_fetch_array($r1,MYSQL_ASSOC);
	$lg= $rr['count(id_lugar)']+1;
	$lugar= "LG".$lg;
	$q1= "INSERT INTO lugar VALUES('$lugar','$nl','$comuna','$desc','-','$rut','')";
    $r10 = mysqli_query($mysqli,$q1);
    //$ = $_POST['edad'];
    if(isset($r10)){
    	header("Location: sesion_e.php");
    }




	?>