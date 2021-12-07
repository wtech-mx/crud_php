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
							$id=$row['id'];
							$placa=$row['placa'];
							$anio=$row['anio'];
							$tipo=$row['tipo'];
							$permisosct=$row['permisosct'];
							$numeropermisosct=$row['numeropermisosct'];
							$nombreaseguradoraresponsabilidadcivil=$row['nombreaseguradoraresponsabilidadcivil'];
							$numeropolizaresponsabilidadcivil=$row['numeropolizaresponsabilidadcivil'];
							$nombreaseguradoracarga=$row['nombreaseguradoracarga'];		
							$numeropolizacarga=$row['numeropolizacarga'];	
							$nombreaseguradoramedioambiente=$row['nombreaseguradoramedioambiente'];		
							$numeropolizamedioambiente=$row['numeropolizamedioambiente'];		
							$primaseguro=$row['primaseguro'];			
							$finales++;
						?>	
						<tr class="<?php echo $text_class;?>">
							<td class='text-center'><?php echo $placa;?></td>
							<td class='text-center'><?php echo $anio;?></td>
							<td class='text-center'><?php echo $tipo;?></td>
							<td class='text-center'><?php echo $permisosct;?></td>
							<td class='text-center' ><?php echo $numeropermisosct;?></td>
							<td class='text-center' ><?php echo $nombreaseguradoraresponsabilidadcivil;?></td>
							<td class='text-center' ><?php echo $numeropolizaresponsabilidadcivil;?></td>
							<td class='text-center' ><?php echo $nombreaseguradoracarga;?></td>
							<td class='text-center' ><?php echo $numeropolizacarga;?></td>
							<td class='text-center' ><?php echo $nombreaseguradoramedioambiente;?></td>
							<td class='text-center' ><?php echo $numeropolizamedioambiente;?></td>
							<td class='text-center' ><?php echo $primaseguro;?></td>
							<td>
								<a href="#"  data-bs-target="#editProductModal" class="edit" data-bs-toggle="modal" data-placa='<?php echo $placa;?>' data-anio="<?php echo $anio?>" data-tipo="<?php echo $tipo?>" data-permisosct="<?php echo $permisosct?>" data-numeropermisosct="<?php echo $numeropermisosct;?>" data-nombreaseguradoraresponsabilidadcivil="<?php echo $nombreaseguradoraresponsabilidadcivil;?>" data-numeropolizaresponsabilidadcivil="<?php echo $numeropolizaresponsabilidadcivil; ?>"data-nombreaseguradoracarga="<?php echo $nombreaseguradoracarga; ?>"data-numeropolizacarga="<?php echo $numeropolizacarga; ?>" data-nombreaseguradoramedioambiente="<?php echo $nombreaseguradoramedioambiente; ?>" data-numeropolizamedioambiente="<?php echo $numeropolizamedioambiente; ?>"data-primaseguro="<?php echo $primaseguro; ?>" data-id="<?php echo $id; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
								<a href="#deleteProductModal" class="delete" data-bs-toggle="modal" data-id="<?php echo $id;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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