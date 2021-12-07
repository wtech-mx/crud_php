<?php
/* Connect To Database*/
	require_once ("../../conexion.php");
 
	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
 
	$tables="facturacion";
	$campos="*";
	$sWhere=" facturacion.rfc LIKE '%".$query."%'";
	$sWhere.=" order by facturacion.rfc";
	
	
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
						<th class='text-center'>rfc</th>
						<th>nombre_razon </th>
						<th>curp </th>
						
						<th>tax_id</th>
						<th class='text-center'>no_licencia</th>
						<th></th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$id=$row['id'];
							$rfc=$row['rfc'];
							$nombre_razon=$row['nombre_razon'];
							$curp=$row['curp'];
							$tax_id=$row['tax_id'];
							$no_licencia=$row['no_licencia'];		
							$finales++;
						?>	
						<tr class="<?php echo $text_class;?>">
							<td class='text-center'><?php echo $rfc;?></td>
							<td class='text-center'><?php echo $nombre_razon;?></td>
							<td class='text-center'><?php echo $curp;?></td>
							<td class='text-center' ><?php echo $tax_id;?></td>
							<td class='text-center' ><?php echo $no_licencia;?></td>
							<td>
								<a href="#"  data-bs-target="#editProductModal" class="edit" data-bs-toggle="modal" data-rfc='<?php echo $rfc;?>' data-nombre_razon="<?php echo $nombre_razon?>" data-curp="<?php echo $curp?>" data-tax_id="<?php echo $tax_id;?>" data-no_licencia="<?php echo $no_licencia; ?>" data-id="<?php echo $id; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
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