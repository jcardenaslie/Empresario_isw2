<?php
  session_start();
  $user = $_POST['username'];
  $passwd = $_POST['password'];
  include ('conexion.php');
  $sql1 = "SELECT * FROM usuario where user='$user' AND pass='$passwd'"; 
  $proc1 = mysql_query($sql1);
    if($resultado=mysql_fetch_array($proc1)){
      $_SESSION['u_user'] = $user;
      //echo "conexion ok";
      header("Location: sesion_u.php");
      
    }
    else{
       //echo "conexion mala";
      header("Location: panel_u.php");
     
    }

?>

