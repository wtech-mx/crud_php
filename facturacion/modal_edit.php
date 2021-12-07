<div class="modal fade" role="dialog" tabindex="-1" id="editProductModal" aria-hidden="true" >
		<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Automovil</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">R.F.C</label>
                                <input class="form-control" type="text" id="edit_rfc" name="edit_rfc"></div>
								<input type="hidden" name="edit_id" id="edit_id" >
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Nombre o razo social</label>
                                <input class="form-control" type="text" name="edit_nombre_razon" id="edit_nombre_razon"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">CURP</label>
                                <input class="form-control" type="text" name="edit_curp" id="edit_curp"></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Tx id</label>
                                <input class="form-control" type="text" name="edit_tax_id" id="edit_tax_id"></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">No Licencia</label>
                                <input class="form-control" type="text" name="edit_no_licencia" id="edit_no_licencia"></div>
                            </div>
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