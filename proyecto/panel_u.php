<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Panel Usuario</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <div class="wrapper">
    <form class="form-signin" action="login_u.php" method="POST">       
      <h2 class="form-signin-heading">Panel Usuario</h2>
      <input type="text" class="form-control" name="username" placeholder="Usuario" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Clave" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recuerdame
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
       <div class="login-register">
                    <center><a href="registro.html">Registrar</a></center>
                 </div>
    </form>
    
  </div>
  
  
</body>
</html>
