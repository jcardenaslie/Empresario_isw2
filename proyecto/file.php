<?php
include ('conexion.php');
if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {

		
		session_start();
		if(isset($_SESSION['u_emp'])){
			$rut=$_SESSION['u_emp'];
			$sql="SELECT representante_legal from empresario where rut='$rut'";
			$proc=mysql_query($sql);
			if($resultado = mysql_fetch_array($proc)){
				//echo "Bienvenid@ "; echo $resultado['representante_legal']; echo" ";
			}
				
			//echo "<a href='logout_e.php'>Cerrar Sesión </a>";
		}
		else{
			header("Location: subir_e.php");
		}


  //echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
  //echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
  //echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
  //echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
mkdir("empresarios/".$rut, 0777);
if(move_uploaded_file($_FILES['archivo']['tmp_name'],
"empresarios/".$rut."/" . $_FILES['archivo']['name'])){
	$sql1="INSERT INTO imagen (rut_e) VALUES ('".$rut."')";
	$proc1=mysql_query($sql1);
}
header("Location: subir_e.php");
}
?>