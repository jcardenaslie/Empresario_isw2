<?php
  session_start();
  $rut = $_POST['username'];
  $passwd = $_POST['password'];
  include ('conexion.php');
  $sql = mysqli_query($mysqli,"SELECT * FROM empresario where rut='$rut' AND passwd='$passwd'"); 
  //$proc = mysql_query($sql);
    if($resultado = mysqli_fetch_array($sql,MYSQLI_NUM)){
      $_SESSION['u_emp'] = $rut;
      header("Location: sesion_e.php");
     // echo "conexion ok";
    }
    else{
      header("Location: panel_e.php");
      //echo "conexion mala";
    }

?>

