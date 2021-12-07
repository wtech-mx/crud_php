<?php
/* Connect To Database*/
	require_once ("../conexion.php");
 
	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
 
	$tables="cporte_tvehiculos";
	$campos="*";
	$sWhere=" cporte_tvehiculos.placa LIKE '%".$query."%'";
	$sWhere.=" order by cporte_tvehiculos.placa";
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	
 
 
		
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>Placa</th>
						<th>Año </th>
						<th>Tipo </th>
						
						<th>Permiso SCT</th>
						<th class='text-center'># Permiso</th>
						<th class='text-right'>Aseguradora resp. civil</th>
						<th class='text-right'>Aseguradora de la carga</th>
						<th class='text-right'># Póliza de la carga</th>
						<th class='text-right'>Aseguradora del medio ambiente</th>
						<th class='text-right'># Póliza medio ambiente</th>
						<th class='text-right'>Prima del seguro</th>
						<th></th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$placa=$row['placa'];
							$Anio=$row['Anio'];
							$tipo=$row['tipo'];
							$PermisoSCT=$row['PermisoSCT'];
							$NumeroPermisoSCT=$row['NumeroPermisoSCT'];
							$NombreAseguradoraResponsabilidadCivil=$row['NombreAseguradoraResponsabilidadCivil'];
							$NumeroPolizaResponsabilidadCivil=$row['NumeroPolizaResponsabilidadCivil'];		
							$NombreAseguradoraCarga=$row['NombreAseguradoraCarga'];		
							$NumeroPolizaCarga=$row['NumeroPolizaCarga'];	
							$NombreAseguradoraMedioAmbiente=$row['NombreAseguradoraMedioAmbiente'];		
							$NumeroPolizaMedioAmbiente=$row['NumeroPolizaMedioAmbiente'];		
							$PrimaSeguro=$row['PrimaSeguro'];			
							$finales++;
						?>	
						<tr class="<?php echo $text_class;?>">
							<td class='text-center'><?php echo $placa;?></td>
							<td class='text-center'><?php echo $Anio;?></td>
							<td class='text-center'><?php echo $tipo;?></td>
							<td class='text-center'><?php echo $PermisoSCT;?></td>
							<td class='text-center' ><?php echo $NumeroPermisoSCT;?></td>
							<td class='text-center' ><?php echo $NombreAseguradoraResponsabilidadCivil;?></td>
							<td class='text-center' ><?php echo $NumeroPolizaResponsabilidadCivil;?></td>
							<td class='text-center' ><?php echo $NombreAseguradoraCarga;?></td>
							<td class='text-center' ><?php echo $NumeroPolizaCarga;?></td>
							<td class='text-center' ><?php echo $NombreAseguradoraMedioAmbiente;?></td>
							<td class='text-center' ><?php echo $NumeroPolizaMedioAmbiente;?></td>
							<td class='text-center' ><?php echo $PrimaSeguro;?></td>
							<td>
								<a href="#"  data-target="#editProductModal" class="edit" data-toggle="modal" data-placa='<?php echo $placa;?>' data-Anio="<?php echo $Anio?>" data-tipo="<?php echo $tipo?>" data-PermisoSCT="<?php echo $PermisoSCT?>" data-NumeroPermisoSCT="<?php echo $NumeroPermisoSCT;?>" data-NombreAseguradoraResponsabilidadCivil="<?php echo $NombreAseguradoraResponsabilidadCivil; ?>"data-NumeroPolizaResponsabilidadCivil="<?php echo $NumeroPolizaResponsabilidadCivil; ?>"data-NombreAseguradoraCarga="<?php echo $NombreAseguradoraCarga; ?>"data-NombreAseguradoraMedioAmbiente="<?php echo $NombreAseguradoraMedioAmbiente; ?>"data-NumeroPolizaMedioAmbiente="<?php echo $NumeroPolizaMedioAmbiente; ?>"data-PrimaSeguro="<?php echo $PrimaSeguro; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
								<a href="#deleteProductModal" class="delete" data-toggle="modal" data-id="<?php echo $placa;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                    		</td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";
									echo paginate($page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	
 
	
	
	<?php	
	}	
}
?>          