<div class="modal fade" role="dialog" tabindex="-1" id="editProductModal" aria-hidden="true" >
		<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Automovil</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>placa</label>
							<input type="text" name="edit_placa"  id="edit_placa" class="form-control" >
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
						<div class="form-group">
							<label>Año</label>
							<input type="text" name="edit_anio" id="edit_anio" class="form-control" >
						</div>
						<div class="form-group">
							<label>Tipo</label>
							<input type="text" name="edit_tipo" id="edit_tipo" class="form-control" >
						</div>
						<div class="form-group">
							<label>Permiso SCT</label>
							<input type="text" name="edit_permisosct" id="edit_permisosct" class="form-control" >
						</div>
						<div class="form-group">
							<label>Numero Permiso SCT</label>
							<input type="text" name="edit_numeropermisosct" id="edit_numeropermisosct" class="form-control" >
						</div>	
						<div class="form-group">
							<label>Nombre Aseguradora Responsabilidad Civil</label>
							<input type="text" name="edit_nombreaseguradoraresponsabilidadcivil" id="edit_nombreaseguradoraresponsabilidadcivil" class="form-control" >
						</div>
						<div class="form-group">
							<label>Numero Poliza Responsabilidad Civil</label>
							<input type="text" name="edit_numeropolizaresponsabilidadcivil" id="edit_numeropolizaresponsabilidadcivil" class="form-control" >
						</div>
						<div class="form-group">
							<label>Nombre Aseguradora Carga</label>
							<input type="text" name="edit_nombreaseguradoracarga" id="edit_nombreaseguradoracarga" class="form-control" >
						</div>
						<div class="form-group">
							<label>Numero Poliza Carga</label>
							<input type="text" name="edit_numeropolizacarga" id="edit_numeropolizacarga" class="form-control" >
						</div>
						<div class="form-group">
							<label>Nombre Aseguradora Medio Ambiente</label>
							<input type="text" name="edit_nombreaseguradoramedioambiente" id="edit_nombreaseguradoramedioambiente" class="form-control" >
						</div>		
						<div class="form-group">
							<label>Numero Poliza Medio Ambiente</label>
							<input type="text" name="edit_numeropolizamedioambiente" id="edit_numeropolizamedioambiente" class="form-control" >
						</div>
						<div class="form-group">
							<label>Prima Seguro</label>
							<input type="text" name="edit_primaseguro" id="edit_primaseguro" class="form-control" >
						</div>				
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-info" value="Guardar datos"  data-bs-dismiss="modal">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>