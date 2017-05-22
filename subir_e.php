<!DOCTYPE html>
<html>
	<head>
  <title>Modificar Lugar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/fileinput.min.js" type="text/javascript"></script>
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  
  </style>
  </head>
	<body>
  <?php 
    include('header.php');
    $directory="empresarios/".$rut;
    $dirint = dir($directory);
    $directory1="empresarios/".$rut;
    $dirint1 = dir($directory1);
    include('functions.php');
    selectLugar($rut);
  ?>
  <label class="control-label"></label>
  <input id="input-21" type="file" accept="image/*" class="file-loading">
  <script>
  $(document).on('ready', function() {
        $("#input-21").fileinput({
            previewFileType: "image",
            browseClass: "btn btn-success",
            browseLabel: "Seleciona Imagen",
            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            removeClass: "btn btn-danger",
            removeLabel: "Borrar",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            uploadClass: "btn btn-info",
            uploadLabel: "Subir",
            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
        });
    });
  </script>
  
 
	

  

	


</html>
