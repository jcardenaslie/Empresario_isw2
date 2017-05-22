<?php include('conexion.php'); ?>
<?php function selectLugar($arg_1){ ?>
	<?php include('conexion.php'); ?>
	<center>
	<select name="carlist" form="carform">
	    <?php $sql = "SELECT nombre FROM lugar where rut_empresario='$arg_1'"; ?>
    	<?php $proc = mysqli_query($mysqli,$sql); ?>
    	<?php while($resultado=mysqli_fetch_array($proc,MYSQL_ASSOC)){ ?>
    	<option value="volvo"> <?php echo strtoupper($resultado['nombre']); ?> </option>
    	<?php } ?>
	</select>
	</center>

<?php } ?>

<?php function consulta($arg_1) 
	{
	include('conexion.php');	
	$proc = mysqli_query($mysqli,$arg_1);
	return $proc;
	}
?>

<?php function devolverdatos($arg_1,$arg_2){
	include('conexion.php');
	return mysqli_fetch_array($arg_1,$arg_2);
	

	} 


?>
