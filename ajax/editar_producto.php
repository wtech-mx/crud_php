
<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$placa = mysqli_real_escape_string($con, (strip_tags($_POST["edit_placa"], ENT_QUOTES)));
	$Anio = mysqli_real_escape_string($con, (strip_tags($_POST["edit_Anio"], ENT_QUOTES)));
	$tipo = mysqli_real_escape_string($con, (strip_tags($_POST["edit_tipo"], ENT_QUOTES)));
	$PermisoSCT = mysqli_real_escape_string($con, (strip_tags($_POST["edit_PermisoSCT"], ENT_QUOTES)));
	$NumeroPermisoSCT = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NumeroPermisoSCT"], ENT_QUOTES)));
	$NombreAseguradoraResponsabilidadCivil = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NombreAseguradoraResponsabilidadCivil"], ENT_QUOTES)));
	$NumeroPolizaResponsabilidadCivil = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NumeroPolizaResponsabilidadCivil"], ENT_QUOTES)));
	$NombreAseguradoraCarga = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NombreAseguradoraCarga"], ENT_QUOTES)));
	$NumeroPolizaCarga = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NumeroPolizaCarga"], ENT_QUOTES)));
	$NombreAseguradoraMedioAmbiente = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NombreAseguradoraMedioAmbiente"], ENT_QUOTES)));
	$NumeroPolizaMedioAmbiente = mysqli_real_escape_string($con, (strip_tags($_POST["edit_NumeroPolizaMedioAmbiente"], ENT_QUOTES)));
	$PrimaSeguro = mysqli_real_escape_string($con, (strip_tags($_POST["edit_PrimaSeguro"], ENT_QUOTES)));

	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE cporte_tvehiculos SET placa='".$placa."', Anio='".$Anio."', tipo='".$tipo."', PermisoSCT='".$PermisoSCT."',  NumeroPermisoSCT='".$NumeroPermisoSCT."',  NombreAseguradoraResponsabilidadCivil='".$NombreAseguradoraResponsabilidadCivil."', NumeroPolizaResponsabilidadCivil='".$NumeroPolizaResponsabilidadCivil."',  NombreAseguradoraCarga='".$NombreAseguradoraCarga."',  NumeroPolizaCarga='".$NumeroPolizaCarga."',  NombreAseguradoraMedioAmbiente='".$NombreAseguradoraMedioAmbiente."',  NumeroPolizaMedioAmbiente='".$NumeroPolizaMedioAmbiente."',  PrimaSeguro='".$PrimaSeguro."' WHERE id='".$id."' ";
	$query = mysqli_query($con, $sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
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
			if (isset($messages)){
				
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