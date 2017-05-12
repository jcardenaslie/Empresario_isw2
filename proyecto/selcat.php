

<?php
        include ('conexion.php');
        session_start();
        $R = $_GET['R'];
        $consulta = "SELECT * FROM posee where categoria='".$R."'";
        $result = mysqli_query($mysqli, $consulta);
        //echo $consulta;
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


  //echo $result;
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo"
<div class='col-sm-4 col-lg-4 col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt=''>
                            <div class='caption'>
                                <h4 class='pull-right'>$24.99</h4>
                                <h4><a href='#''>".$row['id_lugar']."</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target='_blank' href='http://www.bootsnipp.com'>Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    
                                </p>
                            </div>
                        </div>
                    </div>";
}
                    ?>