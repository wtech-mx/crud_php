<?php
if (empty($_POST['placa'])) {
	$errors[] = "Ingresa la placa del vehiculo.";
} elseif (!empty($_POST['placa'])) {
	require_once("../conexion.php"); //Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$placa = mysqli_real_escape_string($con, (strip_tags($_POST["placa"], ENT_QUOTES)));
	$Anio = mysqli_real_escape_string($con, (strip_tags($_POST["Anio"], ENT_QUOTES)));
	$tipo = mysqli_real_escape_string($con, (strip_tags($_POST["tipo"], ENT_QUOTES)));
	$PermisoSCT = mysqli_real_escape_string($con, (strip_tags($_POST["PermisoSCT"], ENT_QUOTES)));
	$NumeroPermisoSCT = mysqli_real_escape_string($con, (strip_tags($_POST["NumeroPermisoSCT"], ENT_QUOTES)));
	$NombreAseguradoraResponsabilidadCivil = mysqli_real_escape_string($con, (strip_tags($_POST["NombreAseguradoraResponsabilidadCivil"], ENT_QUOTES)));
	$NumeroPolizaResponsabilidadCivil = mysqli_real_escape_string($con, (strip_tags($_POST["NumeroPolizaResponsabilidadCivil"], ENT_QUOTES)));
	$NombreAseguradoraCarga = mysqli_real_escape_string($con, (strip_tags($_POST["NombreAseguradoraCarga"], ENT_QUOTES)));
	$NumeroPolizaCarga = mysqli_real_escape_string($con, (strip_tags($_POST["NumeroPolizaCarga"], ENT_QUOTES)));
	$NombreAseguradoraMedioAmbiente = mysqli_real_escape_string($con, (strip_tags($_POST["NombreAseguradoraMedioAmbiente"], ENT_QUOTES)));
	$NumeroPolizaMedioAmbiente = mysqli_real_escape_string($con, (strip_tags($_POST["NumeroPolizaMedioAmbiente"], ENT_QUOTES)));
	$PrimaSeguro = mysqli_real_escape_string($con, (strip_tags($_POST["PrimaSeguro"], ENT_QUOTES)));


	// REGISTER data into database
	$sql = "INSERT INTO cporte_tvehiculos(id, placa, Anio, tipo, PermisoSCT, NumeroPermisoSCT, NombreAseguradoraResponsabilidadCivil, NumeroPolizaResponsabilidadCivil, NombreAseguradoraCarga, NumeroPolizaCarga, NombreAseguradoraMedioAmbiente, NumeroPolizaMedioAmbiente, PrimaSeguro) 
	VALUES (NULL,'$placa','$Anio','$tipo','$PermisoSCT','$NumeroPermisoSCT','$NombreAseguradoraResponsabilidadCivil','$NumeroPolizaResponsabilidadCivil','$NombreAseguradoraCarga','$NumeroPolizaCarga','$NombreAseguradoraMedioAmbiente','$NumeroPolizaMedioAmbiente','$PrimaSeguro')";
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