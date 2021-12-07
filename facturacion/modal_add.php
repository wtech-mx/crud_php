
	<div class="modal fade" role="dialog" tabindex="-1" id="FormAutoTransporte" aria-hidden="true" aria-labelledby="exampleModalToggle">
		<div class="modal-dialog modal-xl modal-dialog-centered" role="document">

			<div class="modal-content">
				
				<div class="modal-header">
					<h4 class="modal-title">
						Auto Transporte
					</h4>
				</div>

				<div class="modal-body">
					<form id="add_FormAutoTransporte" method="post" name="FormAutoTransporte">
					<div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">R.F.C</label>
                                <input class="form-control" type="text" id="rfc" name="rfc" value=""></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Nombre o razo social</label>
                                <input class="form-control" type="text" name="nombre_razon" id="nombre_razon" value=""></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">CURP</label>
                                <input class="form-control" type="text" name="curp" id="curp" value=""></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Tx id</label>
                                <input class="form-control" type="text" name="tax_id" id="tax_id" value=""></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">No Licencia</label>
                                <input class="form-control" type="text" name="no_licencia" id="no_licencia" value=""></div>
                            </div>
                        </div>
                            <div class="col-md-2 col-xs-12 text-center">
								<!-- <button type="submit" class="btn btn-primary">Aceptar  </button> -->
								<input type="submit" class="btn btn-success" value="Guardar datos" data-bs-dismiss="modal">
							</div>
							<div class="col-md-1 col-xs-12">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
								
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
