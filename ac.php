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
	$lugar = $_POST['edtlg'];	
	$ch = $_POST['ch'];
	$del = $_POST['deletear'];
	if($del == 'delete'){
		$qd= "DELETE FROM lugar WHERE id_lugar='$lugar'";
		$r10 = mysqli_query($mysqli,$qd);

	}
	//echo $ch[0];
	
	$nl= $_POST['nl'];
	$comuna = $_POST['comuna'];
	$desc = 	$_POST['desc'];
	$ub ="";
	$sq="";
	$qu1="UPDATE lugar SET nombre='$nl' WHERE id_lugar='$lugar'";
	$qu2="UPDATE lugar SET comuna='$comuna' WHERE id_lugar='$lugar'";
	$qu3="UPDATE lugar SET descripcion='$desc' WHERE id_lugar='$lugar'";
	$qu4="UPDATE lugar SET selloQ='$sq' WHERE id_lugar='$lugar'";
	$qu5="UPDATE lugar SET ubicacion='$ub' WHERE id_lugar='$lugar'";
	$r10= mysqli_query($mysqli,$qu1);
	mysqli_query($mysqli,$qu2);
	mysqli_query($mysqli,$qu3);
	mysqli_query($mysqli,$qu4);
	mysqli_query($mysqli,$qu5);

    $r10 = mysqli_query($mysqli,$q1);
	   for($i=0; $i<sizeof($ch); $i++){
	   	$query1 = "INSERT INTO posee VALUES('$ch[$i]','$lugar')";
	    	mysqli_query($mysqli,$query1);
		//echo $ch[$i];
		}
    if(isset($r10)){
    	//alert("Añadido Correctamente");
    	header("Location: sesion_e.php");

    }




	?>