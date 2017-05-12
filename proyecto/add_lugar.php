<!DOCTYPE html>
<html lang="es">
<head>
  <title>Agregar Lugar</title>
  <meta charset="UTF-8"/>
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/lug.css" media="all" rel="stylesheet" type="text/css" />

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
  
      


    <!-- Page Content -->
    <div id="bodyContent" class="container">

        <div class="row">

      
             

            <div class="col-md-9">


<form class="form-horizontal" method="post" action="al.php">
<fieldset>

<!-- Form Name -->
<legend>Añadir Lugar</legend>

<!-- File Button --> 


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Lugar</label>  
  <div class="col-md-4">
  <input id="textinput" name="nl" type="text" class="form-control input-md">
  
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Categorias</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Agencias de Viaje y Tour Operador">
      Agencias de Viaje y Tour Operador
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Guías de Turismo">
      Guías de Turismo
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="Servicios de Esparcimiento">
      Servicios de Esparcimiento
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="Alojamiento Turístico">
      Alojamiento Turístico
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-4">
      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="Artesanía">
      Artesanía
    </label>
  </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descripción</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="desc">...</textarea>
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
    
     <button type="submit" class="btn btn-success pull-right">Enviar</button>
  </div>
</div>

</fieldset>
</form>




        </div>

    </div>


    <script src="js/bootstrap.min.js"></script>


</html>
