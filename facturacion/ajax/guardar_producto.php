<?php
if (empty($_POST['rfc'])) {
	$errors[] = "Ingresa la rfc del vehiculo.";
} elseif (!empty($_POST['rfc'])) {
	require_once("../../conexion.php"); //Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$rfc = mysqli_real_escape_string($con, (strip_tags($_POST["rfc"], ENT_QUOTES)));
	$nombre_razon = mysqli_real_escape_string($con, (strip_tags($_POST["nombre_razon"], ENT_QUOTES)));
	$curp = mysqli_real_escape_string($con, (strip_tags($_POST["curp"], ENT_QUOTES)));
	$tax_id = mysqli_real_escape_string($con, (strip_tags($_POST["tax_id"], ENT_QUOTES)));
	$no_licencia = mysqli_real_escape_string($con, (strip_tags($_POST["no_licencia"], ENT_QUOTES)));


	// REGISTER data into database
	$sql = "INSERT INTO facturacion(id, rfc, nombre_razon, curp, tax_id, no_licencia) 
	VALUES (NULL,'$rfc','$nombre_razon','$curp','$tax_id','$no_licencia')";
	$query = mysqli_query($con, $sql);
	// if product has been added successfully
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