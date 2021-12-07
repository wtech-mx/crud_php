
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
							<div class="col-md-1 col-xs-12">
								<label class="control-label">* Placa</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="El formato es inválido corrija y vuelva a intentarlo"  id="placa" name="placa" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="placa" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label">* A&#241;o del modelo</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="El formato es inválido corrija y vuelva a intentarlo" data-val-regex-pattern="(19[0-9]{2}|20[0-9]{2})" id="anio" name="anio" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="anio" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12 text-center">
								<label class="control-label">Tipo</label>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="form-group-sm">
									<select class="form-control" id="tipo" name="tipo">
										<option value="C2">Cami&#243;n Unitario (2 llantas en el eje delantero y 4 llantas en el eje trasero)</option>
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
								<label class="control-label">Permiso SCT</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<select class="form-control" id="permisosct" name="permisosct">
										<option value="TPXX00">Permiso no contemplado en el cat&#225;logo.</option>
										<option value="TPAF19">Autorizaci&#243;n expresa para circular en los caminos y puentes de jurisdicci&#243;n federal con configuraciones de tractocami&#243;n doblemente articulado.</option>
										<option value="TPAF11">Autotransporte Federal de Carga Especializada cuyo &#225;mbito de aplicaci&#243;n comprende la franja fronteriza con Estados Unidos.</option>
										<option value="TPAF20">Autotransporte Federal de Carga Especializada de fondos y valores.</option>
										<option value="TPAF03">Autotransporte Federal de Carga Especializada de materiales y residuos peligrosos.</option>
										<option value="TPAF10">Autotransporte Federal de Carga General cuyo &#225;mbito de aplicaci&#243;n comprende la franja fronteriza con Estados Unidos.</option>
										<option value="TPAF01">Autotransporte Federal de carga general.</option>
										<option value="TPAF08">Autotransporte internacional de carga de largo recorrido.</option>
										<option value="TPAF09">Autotransporte internacional de carga especializada de materiales y residuos peligrosos de largo recorrido.</option>
										<option value="TPAF18">Empresas fabricantes o distribuidoras de veh&#237;culos nuevos.</option>
										<option value="TPAF17">Empresas trasladistas de veh&#237;culos nuevos.</option>
										<option value="TPAF12">Servicio auxiliar de arrastre en las v&#237;as generales de comunicaci&#243;n.</option>
										<option value="TPAF13">Servicio auxiliar de servicios de arrastre, arrastre y salvamento, y dep&#243;sito de veh&#237;culos en las v&#237;as generales de comunicaci&#243;n.</option>
										<option value="TPAF14">Servicio de paqueter&#237;a y mensajer&#237;a en las v&#237;as generales de comunicaci&#243;n.</option>
										<option value="TPAF16">Servicio federal para empresas arrendadoras servicio p&#250;blico federal.</option>
										<option value="TPAF04">Transporte de autom&#243;viles sin rodar en veh&#237;culo tipo g&#243;ndola.</option>
										<option value="TPAF05">Transporte de carga de gran peso y/o volumen de hasta 90 toneladas.</option>
										<option value="TPAF06">Transporte de carga especializada de gran peso y/o volumen de m&#225;s 90 toneladas.</option>
										<option value="TPAF15">Transporte especial para el tr&#225;nsito de gr&#250;as industriales con peso m&#225;ximo de 90 toneladas.</option>
										<option value="TPAF02">Transporte privado de carga.</option>
										<option value="TPAF07">Transporte Privado de materiales y residuos peligrosos.</option>
									</select>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label"># Permiso</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 1 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{1,50}$" id="numeropermisosct" name="numeropermisosct" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="numeropermisosct" data-valmsg-replace="true"></span>
								</div>
							</div>
						</div>
						<br />

						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label">* Aseguradora responsabilidad civil </label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,50}$" id="nombreaseguradoraresponsabilidadcivil" name="nombreaseguradoraresponsabilidadcivil" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="nombreaseguradoraresponsabilidadcivil" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label">* # P&#243;liza resp. civil</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 30 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,30}$" id="numeropolizaresponsabilidadcivil" name="numeropolizaresponsabilidadcivil" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="numeropolizaresponsabilidadcivil" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label">Aseguradora de la carga</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,50}$" id="nombreaseguradoracarga" name="nombreaseguradoracarga" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="nombreaseguradoracarga" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label"># P&#243;liza de la carga</label>
							</div>
							<div class="col-md-1 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 30 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,30}$" id="numeropolizacarga" name="numeropolizacarga" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="numeropolizacarga" data-valmsg-replace="true"></span>
								</div>
							</div>

						</div>
						<br />

						<div class="row">
							<div class="col-md-1 col-xs-12">
								<label class="control-label">Aseguradora del medio ambiente</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 50 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,50}$" id="nombreaseguradoramedioambiente" name="nombreaseguradoramedioambiente" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="nombreaseguradoramedioambiente" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label"># P&#243;liza medio ambiente</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-regex="Alfanumérico (Mínimo 3 caracteres, máximo 30 caracteres). Excepto comillas dobles &quot; ; | &amp; @ &lt; >" data-val-regex-pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚÄäËëÏïÖöÜü´@_\.,:\-\{\}\[\]\+\*!¡¿\?#\$%&#39;/\(\)=\s]{3,30}$" id="numeropolizamedioambiente" name="numeropolizamedioambiente" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="numeropolizamedioambiente" data-valmsg-replace="true"></span>
								</div>
							</div>
							<div class="col-md-1 col-xs-12">
								<label class="control-label">Prima del seguro</label>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group-sm">
									<input class="form-control" data-val="true" data-val-number="El campo Prima del seguro debe ser un número." data-val-range="Sólo admite valores numéricos (Mínimo 0.001, máximo 9999999999.999)" data-val-range-max="9999999999.999" data-val-range-min="0.001" id="primaseguro" name="primaseguro" type="text" value="" />
									<span class="field-validation-valid" data-valmsg-for="primaseguro" data-valmsg-replace="true"></span>
								</div>
							</div>


							<div class="col-md-2 col-xs-12 text-center">
								<!-- <button type="submit" class="btn btn-primary">Aceptar  </button> -->
								<input type="submit" class="btn btn-success" value="Guardar datos" data-bs-dismiss="modal">
							</div>
							<div class="col-md-1 col-xs-12">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
								
							</div>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
