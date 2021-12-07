<div id="FormAutoTransporte" class="modal fade in" style="z-index: 1040">
		<div class="modal-dialogFullScreen modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">
					Auto Transporte
					</h4>
				</div>

				<div class="modal-body">
					<form action="/CartaPorte/SeleccionarCartaPorte" id="add_FormAutoTransporte" method="post" name="FormAutoTransporte">

						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_Placa">* Placa</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="El formato es inválido corrija y vuelva a intentarlo" data-val-regex-pattern="[^(?!.*\s)-]{6,7}" id="AutoTransporteFederal_Placa" name="AutoTransporteFederal.Placa" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.Placa" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_Anio">* A&#241;o del modelo</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="El formato es inválido corrija y vuelva a intentarlo" data-val-regex-pattern="(19[0-9]{2}|20[0-9]{2})" id="AutoTransporteFederal_Anio" name="AutoTransporteFederal.Anio" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.Anio" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12 text-center">
								<label class="control-label" for="AutoTransporteFederal_TipoAutoTransporte">Tipo</label>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="form-group-sm">
									<select class="form-control" id="AutoTransporteFederal_TipoAutoTransporte" name="AutoTransporteFederal.TipoAutoTransporte"><option value="C2">Cami&#243;n Unitario (2 llantas en el eje delantero y 4 llantas en el eje trasero)</option>
									<option value="C3">Cami&#243;n Unitario (2 llantas en el eje delantero y 6 o 8 llantas en los dos ejes traseros)</option>
									<option value="C3R3">Cami&#243;n-Remolque (10 llantas en el cami&#243;n y 12 llantas en remolque)</option>
									<option value="C3R2">Cami&#243;n-Remolque (10 llantas en el cami&#243;n y 8 llantas en remolque)</option>
									<option value="C2R3">Cami&#243;n-Remolque (6 llantas en el cami&#243;n y 12 llantas en remolque)</option>
									<option value="C2R2">Cami&#243;n-Remolque (6 llantas en el cami&#243;n y 8 llantas en remolque)</option>
									<option value="OTROEVGP">Especializado de carga Voluminosa y/o Gran Peso</option>
									<option value="GPLATA">Gr&#250;a de Plataforma Tipo A</option>
									<option value="GPLATB">Gr&#250;a de Plataforma Tipo B</option>
									<option value="GPLATC">Gr&#250;a de Plataforma Tipo C</option>
									<option value="GPLATD">Gr&#250;a de Plataforma Tipo D</option>
									<option value="GPLUTA">Gr&#250;a de Pluma Tipo A</option>
									<option value="GPLUTB">Gr&#250;a de Pluma Tipo B</option>
									<option value="GPLUTC">Gr&#250;a de Pluma Tipo C</option>
									<option value="GPLUTD">Gr&#250;a de Pluma Tipo D</option>
									<option value="OTROSG">Servicio de Gr&#250;as</option>
									<option value="T3S3">Tractocami&#243;n Articulado (10 llantas en el tractocami&#243;n, 12 llantas en el semirremolque)</option>
									<option value="T3S1">Tractocami&#243;n Articulado (10 llantas en el tractocami&#243;n, 4 llantas en el semirremolque)</option>
									<option value="T3S2">Tractocami&#243;n Articulado (10 llantas en el tractocami&#243;n, 8 llantas en el semirremolque)</option>
									<option value="T2S3">Tractocami&#243;n Articulado (6 llantas en el tractocami&#243;n, 12 llantas en el semirremolque)</option>
									<option value="T2S1">Tractocami&#243;n Articulado (6 llantas en el tractocami&#243;n, 4 llantas en el semirremolque)</option>
									<option value="T2S2">Tractocami&#243;n Articulado (6 llantas en el tractocami&#243;n, 8 llantas en el semirremolque)</option>
									<option value="T3S1R3">Tractocami&#243;n Semirremolque-Remolque (10 llantas en el tractocami&#243;n, 4 llantas en el semirremolque y 12 llantas en el remolque)</option>
									<option value="T3S1R2">Tractocami&#243;n Semirremolque-Remolque (10 llantas en el tractocami&#243;n, 4 llantas en el semirremolque y 8 llantas en el remolque)</option>
									<option value="T3S2R3">Tractocami&#243;n Semirremolque-Remolque (10 llantas en el tractocami&#243;n, 8 llantas en el semirremolque y 12 llantas en el remolque)</option>
									<option value="T3S2R4">Tractocami&#243;n Semirremolque-Remolque (10 llantas en el tractocami&#243;n, 8 llantas en el semirremolque y 16 llantas en el remolque)</option>
									<option value="T3S2R2">Tractocami&#243;n Semirremolque-Remolque (10 llantas en el tractocami&#243;n, 8 llantas en el semirremolque y 8 llantas en el remolque)</option>
									<option value="T2S1R3">Tractocami&#243;n Semirremolque-Remolque (6 llantas en el tractocami&#243;n, 4 llantas en el semirremolque y 12 llantas en el remolque)</option>
									<option value="T2S1R2">Tractocami&#243;n Semirremolque-Remolque (6 llantas en el tractocami&#243;n, 4 llantas en el semirremolque y 8 llantas en el remolque)</option>
									<option value="T2S2R2">Tractocami&#243;n Semirremolque-Remolque (6 llantas en el tractocami&#243;n, 8 llantas en el semirremolque y 8 llantas en el remolque)</option>
									<option value="T3S3S2">Tractocami&#243;n Semirremolque-Semirremolque (10 llantas en el tractocami&#243;n, 12 llantas en el semirremolque delantero y 8 llantas en el semirremolque trasero)</option>
									<option value="T3S2S2">Tractocami&#243;n Semirremolque-Semirremolque (10 llantas en el tractocami&#243;n, 8 llantas en el semirremolque delantero y 8 llantas en el semirremolque trasero)</option>
									<option value="T2S2S2">Tractocami&#243;n Semirremolque-Semirremolque (6 llantas en el tractocami&#243;n, 8 llantas en el semirremolque delantero y 8 llantas en el semirremolque trasero)</option>
									<option value="VL">Veh&#237;culo ligero de carga (2 llantas en el eje delantero y 2 llantas en el eje trasero)</option>
									</select>
								</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_SubTipoRemolque1">Tipo Remolque</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<select class="form-control" id="AutoTransporteFederal_SubTipoRemolque1" name="AutoTransporteFederal.SubTipoRemolque1"><option value="-1">Seleccione (opcional)</option>
									<option value="CTR001">Caballete</option>
									<option value="CTR002">Caja</option>
									<option value="CTR003">Caja Abierta</option>
									<option value="CTR004">Caja Cerrada</option>
									<option value="CTR005">Caja De Recolecci&#243;n Con Cargador Frontal</option>
									<option value="CTR006">Caja Refrigerada</option>
									<option value="CTR007">Caja Seca</option>
									<option value="CTR008">Caja Transferencia</option>
									<option value="CTR009">Cama Baja o Cuello Ganso</option>
									<option value="CTR010">Chasis Portacontenedor</option>
									<option value="CTR011">Convencional De Chasis</option>
									<option value="CTR012">Equipo Especial</option>
									<option value="CTR013">Estacas</option>
									<option value="CTR014">G&#243;ndola Madrina</option>
									<option value="CTR016">Gr&#250;a</option>
									<option value="CTR015">Gr&#250;a Industrial</option>
									<option value="CTR017">Integral</option>
									<option value="CTR018">Jaula</option>
									<option value="CTR019">Media Redila</option>
									<option value="CTR020">Pallet o Celdillas</option>
									<option value="CTR021">Plataforma</option>
									<option value="CTR022">Plataforma Con Gr&#250;a</option>
									<option value="CTR023">Plataforma Encortinada</option>
									<option value="CTR024">Redilas</option>
									<option value="CTR025">Refrigerador</option>
									<option value="CTR026">Revolvedora</option>
									<option value="CTR027">Semicaja</option>
									<option value="CTR028">Tanque</option>
									<option value="CTR029">Tolva</option>
									<option value="CTR031">Volteo</option>
									<option value="CTR032">Volteo Desmontable</option>
									</select>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_PlacaRemolque1">Placa Remolque</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="El formato es inválido corrija y vuelva a intentarlo" data-val-regex-pattern="[^(?!.*\s)-]{6,7}" id="AutoTransporteFederal_PlacaRemolque1" name="AutoTransporteFederal.PlacaRemolque1" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.PlacaRemolque1" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_SubTipoRemolque2">Tipo Remolque</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<select class="form-control" id="AutoTransporteFederal_SubTipoRemolque2" name="AutoTransporteFederal.SubTipoRemolque2"><option value="-1">Seleccione (opcional)</option>
									<option value="CTR001">Caballete</option>
									<option value="CTR002">Caja</option>
									<option value="CTR025">Refrigerador</option>
									</select>
								</div>
							</div>

							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_PlacaRemolque2">Placa Remolque</label>
							</div>

							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="El formato es inválido corrija y vuelva a intentarlo" data-val-regex-pattern="[^(?!.*\s)-]{6,7}" id="AutoTransporteFederal_PlacaRemolque2" name="AutoTransporteFederal.PlacaRemolque2" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.PlacaRemolque2" data-valmsg-replace="true"></span>
								</div>
							</div>

						</div>
						<br />
						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_PermisoSCT">Permiso SCT</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<select class="form-control" id="AutoTransporteFederal_PermisoSCT" name="AutoTransporteFederal.PermisoSCT"><option value="TPXX00">Permiso no contemplado en el cat&#225;logo.</option>
									<option value="TPAF20">Autotransporte Federal de Carga Especializada de fondos y valores.</option>
									<option value="TPAF03">Autotransporte Federal de Carga Especializada de materiales y residuos peligrosos.</option>
									</select>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label"># Permiso</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 1 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{1,50}$" id="AutoTransporteFederal_NumeroPermisoSCT" name="AutoTransporteFederal.NumeroPermisoSCT" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.NumeroPermisoSCT" data-valmsg-replace="true"></span>
								</div>
							</div>                       
						</div>

						<br />
						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_NombreAseguradoraResponsabilidadCivil">* Aseguradora responsabilidad civil </label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,50}$" id="AutoTransporteFederal_NombreAseguradoraResponsabilidadCivil" name="AutoTransporteFederal.NombreAseguradoraResponsabilidadCivil" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.NombreAseguradoraResponsabilidadCivil" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_NumeroPolizaResponsabilidadCivil">* # P&#243;liza resp. civil</label>
							</div>

						</div>
						<br />
						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label" for="AutoTransporteFederal_NombreAseguradoraMedioAmbiente">Aseguradora del medio ambiente</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,50}$" id="AutoTransporteFederal_NombreAseguradoraMedioAmbiente" name="AutoTransporteFederal.NombreAseguradoraMedioAmbiente" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="AutoTransporteFederal.NombreAseguradoraMedioAmbiente" data-valmsg-replace="true"></span>
								</div>
							</div>

							<div class="col-md-2 col-xs-12 text-center">
								<button type="button" class="btn btn-primary" onclick="AgregarMedioTransporte();">Aceptar  </button>
							</div>
							<div class="col-md-1 col-xs-12">
								<button type="button" class="btn btn-primary" onclick="CerrarModalMedioTransporte();">Cancelar</button>
							</div>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

