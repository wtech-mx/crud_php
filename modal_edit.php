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
							<label>Producto</label>
							<input type="text" name="NumeroPermisoSCT" id="NumeroPermisoSCT" class="form-control" >
						</div>
						<div class="form-group">
							<label>Categoría</label>
							<input type="text" name="edit_category" id="edit_category" class="form-control" >
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input type="number" name="edit_stock" id="edit_stock" class="form-control" >
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="edit_price" id="edit_price" class="form-control" >
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