
		$(function() {
			load(1);
		});
		function load(page){
			var query=$("#q").val();
			var per_page=10;
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_productos.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
		$('#editProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var placa = button.data('placa') 
		  $('#edit_placa').val(placa)
		  var Anio = button.data('Anio') 
		  $('#edit_Anio').val(Anio)
		  var tipo = button.data('tipo') 
		  $('#edit_tipo').val(tipo)
		  var PermisoSCT = button.data('PermisoSCT') 
		  $('#edit_PermisoSCT').val(PermisoSCT)
		  var NumeroPermisoSCT = button.data('NumeroPermisoSCT') 
		  $('#edit_NumeroPermisoSCT').val(NumeroPermisoSCT)
		  var NombreAseguradoraResponsabilidadCivil = button.data('NombreAseguradoraResponsabilidadCivil') 
		  $('#edit_NombreAseguradoraResponsabilidadCivil').val(NombreAseguradoraResponsabilidadCivil)
		  var NumeroPolizaResponsabilidadCivil = button.data('NumeroPolizaResponsabilidadCivil') 
		  $('#edit_NumeroPolizaResponsabilidadCivil').val(NumeroPolizaResponsabilidadCivil)
		  var NombreAseguradoraCarga = button.data('NombreAseguradoraCarga') 
		  $('#edit_NombreAseguradoraCarga').val(NombreAseguradoraCarga)
		  var NumeroPolizaCarga = button.data('NumeroPolizaCarga') 
		  $('#edit_NumeroPolizaCarga').val(NumeroPolizaCarga)
		  var NombreAseguradoraMedioAmbiente = button.data('NombreAseguradoraMedioAmbiente') 
		  $('#edit_NombreAseguradoraMedioAmbiente').val(NombreAseguradoraMedioAmbiente)
		  var NumeroPolizaMedioAmbiente = button.data('NumeroPolizaMedioAmbiente') 
		  $('#edit_NumeroPolizaMedioAmbiente').val(NumeroPolizaMedioAmbiente)
		  var PrimaSeguro = button.data('PrimaSeguro') 
		  $('#edit_PrimaSeguro').val(PrimaSeguro)
		  var id = button.data('id') 
		  $('#edit_id').val(id)
		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( "#edit_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		
		$( "#add_FormAutoTransporte" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#addProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		$( "#delete_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#deleteProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});