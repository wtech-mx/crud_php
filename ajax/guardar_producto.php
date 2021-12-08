<?php

//Condicion para validar registros obligatorios
if (empty($_POST['placa'])) {
	$errors[] = "Ingresa la placa del vehiculo.";
} elseif (!empty($_POST['placa'])) {
	//Contiene funcion que conecta a la base de datos
	require_once("./../conexion.php"); 
	
	$placa = mysqli_real_escape_string($con, (strip_tags($_POST["placa"], ENT_QUOTES)));
	$anio = mysqli_real_escape_string($con, (strip_tags($_POST["anio"], ENT_QUOTES)));
	$tipo = mysqli_real_escape_string($con, (strip_tags($_POST["tipo"], ENT_QUOTES)));
	$permisosct = mysqli_real_escape_string($con, (strip_tags($_POST["permisosct"], ENT_QUOTES)));
	$numeropermisosct = mysqli_real_escape_string($con, (strip_tags($_POST["numeropermisosct"], ENT_QUOTES)));
	$nombreaseguradoraresponsabilidadcivil = mysqli_real_escape_string($con, (strip_tags($_POST["nombreaseguradoraresponsabilidadcivil"], ENT_QUOTES)));
	$numeropolizaresponsabilidadcivil = mysqli_real_escape_string($con, (strip_tags($_POST["numeropolizaresponsabilidadcivil"], ENT_QUOTES)));
	$nombreaseguradoracarga = mysqli_real_escape_string($con, (strip_tags($_POST["nombreaseguradoracarga"], ENT_QUOTES)));
	$numeropolizacarga = mysqli_real_escape_string($con, (strip_tags($_POST["numeropolizacarga"], ENT_QUOTES)));
	$nombreaseguradoramedioambiente = mysqli_real_escape_string($con, (strip_tags($_POST["nombreaseguradoramedioambiente"], ENT_QUOTES)));
	$numeropolizamedioambiente = mysqli_real_escape_string($con, (strip_tags($_POST["numeropolizamedioambiente"], ENT_QUOTES)));
	$primaseguro = mysqli_real_escape_string($con, (strip_tags($_POST["primaseguro"], ENT_QUOTES)));


	// REGISTER data into database
	$sql = "INSERT INTO cporte_tvehiculos(id, placa, anio, tipo, permisosct, numeropermisosct, nombreaseguradoraresponsabilidadcivil, numeropolizaresponsabilidadcivil, nombreaseguradoracarga, numeropolizacarga, nombreaseguradoramedioambiente, numeropolizamedioambiente, primaseguro) 
	VALUES (NULL,'$placa','$anio','$tipo','$permisosct','$numeropermisosct','$nombreaseguradoraresponsabilidadcivil','$numeropolizaresponsabilidadcivil','$nombreaseguradoracarga','$numeropolizacarga','$nombreaseguradoramedioambiente','$numeropolizamedioambiente','$primaseguro')";
	$query = mysqli_query($con, $sql);
	// si el producto se ha agregado correctamente
	if ($query) {
		$messages[] = "El producto ha sido guardado con éxito.";
	} else {
		$messages[] = "El producto ha sido guardado con éxito.";
	}
} else {
	$errors[] = "desconocido.";
}
if (isset($errors)) {

?>
	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Error!</strong>
		<?php
		foreach ($errors as $error) {
			echo $error;
		}
		?>
	</div>
<?php
}
if (isset($messages)) {

?>
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>¡Bien hecho!</strong>
		<?php
		foreach ($messages as $message) {
			echo $message;
		}
		?>
	</div>
<?php
}
?>