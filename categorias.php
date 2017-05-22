<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>function showCom(str) {
    if (str == "") {
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","selcat.php?R="+str,true);
        xmlhttp.send();
    }
  }

</script>
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


    ?>   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="sesion_u.php">Home</a></li>
      <li class="active"><a href="categorias.php">Categorias</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $resultado['nombre']; ?></a></li>
      <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Busca</p>
                
                <select name="region" onchange="showCom(this.value)">
    <option value="">Selecciona Categoria</option>
    <option value="Agencias de Viaje y Tour Operador">Agencias de Viaje y Tour Operador</option>
    <option value="Guías de Turismo">Guías de Turismo</option>
    <option value="Servicios de Esparcimiento">Servicios de Esparcimiento</option>
    <option value="Transporte de Pasajeros por Carretera Interurbana">Trans. de Pasajeros por C. Interurbana</option>
    <option value="Alojamiento Turístico">Alojamiento Turístico</option>
    <option value="Artesanía">Artesanía</option>
    <option value="Restaurantes y Similares">Restaurantes y Similares</option>
    <option value="Servicios Deportivos">Servicios Deportivos</option>
    <option value="Turismo Aventura">Turismo Aventura</option>
  </select>
            </div>

            <div class="col-md-9">

                

                <div class="row">

                    <div id="txtHint2"></div>

                    

                    

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
