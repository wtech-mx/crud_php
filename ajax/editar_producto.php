
<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$placa = mysqli_real_escape_string($con, (strip_tags($_POST["edit_placa"], ENT_QUOTES)));
	$anio = mysqli_real_escape_string($con, (strip_tags($_POST["edit_anio"], ENT_QUOTES)));
	$tipo = mysqli_real_escape_string($con, (strip_tags($_POST["edit_tipo"], ENT_QUOTES)));
	$permisosct = mysqli_real_escape_string($con, (strip_tags($_POST["edit_permisosct"], ENT_QUOTES)));
	$numeropermisosct = mysqli_real_escape_string($con, (strip_tags($_POST["edit_numeropermisosct"], ENT_QUOTES)));
	$nombreaseguradoraresponsabilidadcivil = mysqli_real_escape_string($con, (strip_tags($_POST["edit_nombreaseguradoraresponsabilidadcivil"], ENT_QUOTES)));
	$numeropolizaresponsabilidadcivil = mysqli_real_escape_string($con, (strip_tags($_POST["edit_numeropolizaresponsabilidadcivil"], ENT_QUOTES)));
	$nombreaseguradoracarga = mysqli_real_escape_string($con, (strip_tags($_POST["edit_nombreaseguradoracarga"], ENT_QUOTES)));
	$numeropolizacarga = mysqli_real_escape_string($con, (strip_tags($_POST["edit_numeropolizacarga"], ENT_QUOTES)));
	$nombreaseguradoramedioambiente = mysqli_real_escape_string($con, (strip_tags($_POST["edit_nombreaseguradoramedioambiente"], ENT_QUOTES)));
	$numeropolizamedioambiente = mysqli_real_escape_string($con, (strip_tags($_POST["edit_numeropolizamedioambiente"], ENT_QUOTES)));
	$primaseguro = mysqli_real_escape_string($con, (strip_tags($_POST["edit_primaseguro"], ENT_QUOTES)));

	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE cporte_tvehiculos SET placa='".$placa."', anio='".$anio."', tipo='".$tipo."', permisosct='".$permisosct."',  numeropermisosct='".$numeropermisosct."', nombreaseguradoraresponsabilidadcivil='".$nombreaseguradoraresponsabilidadcivil."',  numeropolizaresponsabilidadcivil='".$numeropolizaresponsabilidadcivil."', nombreaseguradoracarga='".$nombreaseguradoracarga."',  numeropolizacarga='".$numeropolizacarga."',  nombreaseguradoramedioambiente='".$nombreaseguradoramedioambiente."',  numeropolizamedioambiente='".$numeropolizamedioambiente."',  primaseguro='".$primaseguro."' WHERE id='".$id."' ";
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