<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cabritas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<?PHP session_start(); 
if($_SESSION['k_username']==""){
	echo '<meta http-equiv="refresh" content="0;URL=login.php" />';
}
?>
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="index.php">Cabritas</a></h1>
    <div class="social"> <span></span>
    </div>
    <div id="navigation">
      <ul>
		<li><a href=fav.php>Lista de favoritos!</a></li>
        <li><?PHP echo 'Bienvenido '.'<b>'.$_SESSION['k_username'].'</b>';?></li>
		<li><a href="logout.php"> Logout </a></li>
      </ul>
	</div>
<div id="sub-navigation">
      <ul>
        <li><a href="series.php">SERIES</a></li>
        <li><a href="latesttrailers.php">ULTIMOS TRAILERS</a></li>
        <li><a href="toprated.php">MEJOR VALORADOS</a></li>
        <li><a href="mostcommented.php">MAS COMENTADOS</a></li>
      </ul>
      <div id="search">
        <form action="search.php" method="post" accept-charset="utf-8">
          <label for="search-field">BUSCAR</label>
          <input type="text" name="search" class="blink search-field"  />
          <input type="submit" value="IR!" class="search-button" />
        </form>
      </div>
    </div>
  </div>
  <div id="main">
<?PHP
$user = "UbdIf";
$password = "javitobonito";
$dbname = "BDIf";
$port = "5432";
$host = "plop.inf.udec.cl";
$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión ".pg_last_error());
echo'
<div align ="center">
<div class="cajafiltro">
<form name="form" method="get">
	<select action="toprated.php" name="op_gen">
   		<option selected value="0"> Filtre por género </option>
       <option value="1">Acción</option>
       <option value="2">Aventura</option>
       <option value="3">Drama</option>
		<option value="4">Terror</option>
		<option value="5">Suspenso</option>
		<option value="6">Comedia</option>
		<option value="7">Ciencia Ficción</option>
		<option value="8">Romantica</option>
		<option value="10">Animación</option>
		<option value="11">Fantasía</option>
</select>
<input type="submit" value="Filtrar" class="search-button" />
</div></div>
';
$gen = intval($_GET['op_gen']);
if($gen == '0'){
$query = "select merflix.contenido.* from merflix.contenido, merflix.pelicula where merflix.contenido.id = merflix.pelicula.id_contenido 
	order by nota desc";
}
else{
$query = "select c.* 
	from merflix.contenido as c, merflix.pelicula as p, merflix.pertenece as pe
		where c.id = p.id_contenido and pe.id_genero = $gen and pe.id_contenido = c.id 
	order by nota desc";
}
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
$numReg = pg_num_rows($resultado);

if($numReg>0){
echo "<table align='center'>";
while ($fila=pg_fetch_array($resultado)) {

$img = "imgs/".$fila['id'].".jpg";
$imageData = base64_encode(file_get_contents($img));
$src = 'data: '.mime_content_type($img).';base64,'.$imageData;
$url = "content.php?id=".$fila['id'];
echo "<td>".'<a href="'.$url.'"><img src="', $src, '" border=0 height="250" width="180"></a>'."</td>";
echo "<td><div class=content2 align='center'>Nota:<br><b>".$fila['nota']."</b></div></td>";
echo "<td><div class=content3>".$fila['sinopsis']."</div></td></tr>";
}
                echo "</table>";
}else{
                echo "No hay Registros";
}
?>
  <div id="footer">
    <p class="rf">Design by <a href="#">isaias</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
</body>
</html>
