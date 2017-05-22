<!DOCTYPE html>
<html lang="es">
<head>
  <title>Editar Lugar</title>
  <meta charset="UTF-8"/>
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/lug.css" media="all" rel="stylesheet" type="text/css" />
<script>
function myFunction() {
    confirm("Presiona OK si deseas BORRAR!");
}
</script>
  <!--<link href="login1.html" rel="import" />-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  <script src="js/lug.js" type="text/javascript"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<?php
    include('header.php');
?>
<?php include('conexion.php'); ?>
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
<?php
$edt = $_POST['chupalo'];  
$newquery= "SELECT * FROM lugar WHERE id_lugar='$edt'";
$p11= mysqli_query($mysqli,$newquery);
$resu= mysqli_fetch_array($p11,MYSQL_ASSOC);



?>      


    <!-- Page Content -->
    <div id="bodyContent" class="container">

        <div class="row">

      
             

            <div class="col-md-9">


<form class="form-horizontal" method="post" action="ac.php">
<fieldset>

<!-- Form Name -->
<legend>Editar Lugar</legend>

<!-- File Button --> 


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Lugar</label>  
  <div class="col-md-4">
  <input id="textinput" name="nl" type="text" class="form-control input-md" value="<?php echo $resu['nombre'];?>" >
  
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Categorias</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="ch[]" id="checkboxes-0" value="Agencias de Viaje y Tour Operador">
      Agencias de Viaje y Tour Operador
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="ch[]" id="checkboxes-1" value="Guías de Turismo">
      Guías de Turismo
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-2">
      <input type="checkbox" name="ch[]" id="checkboxes-2" value="Servicios de Esparcimiento">
      Servicios de Esparcimiento
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-3">
      <input type="checkbox" name="ch[]" id="checkboxes-3" value="Alojamiento Turístico">
      Alojamiento Turístico
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-4">
      <input type="checkbox" name="ch[]" id="checkboxes-4" value="Artesanía">
      Artesanía
    </label>
  </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descripción</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="desc" style="width:200%;height:150px"><?php echo $resu['descripcion'];?></textarea>
  </div>
</div>

<!-- Button -->


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Selecciona Comuna</label>
  <div class="col-md-4">
    <select id="selectbasic" name="comuna" class="form-control">
      <option value="ARAUCO">ARAUCO</option>
      <option value="LEBU">LEBU</option>
      <option value="CAÑETE">CAÑETE</option>
      <option value="CONTULMO">CONTULMO</option>
      <option value="CURANILAHUE">CURANILAHUE</option>
      <option value="LOS ALAMOS">LOS ALAMOS</option>
      <option value="TIRUA">TIRUA</option>
    </select>
  </div>
</div>
<div class="form-group">
  
  <div class="col-md-9">
    <input type="hidden" name="edtlg" value="<?php echo $edt ?>">
     <button type="submit" class="btn btn-success pull-right">Guardar</button><br/><br/>
     <button type="submit" onclick="myFunction()" name="deletear" value="delete" class="btn btn-danger pull-right">Borrar</button>
  </div>
</div>

</fieldset>
</form>




        </div>

    </div>


    <script src="js/bootstrap.min.js"></script>


</html>
