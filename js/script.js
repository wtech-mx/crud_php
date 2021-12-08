
		$(function() {
			load(1);
		});


		// Al cargar la pagina muestra los registro en la vista index
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

		//  Trae lo registros en los inputs del modal edit para poder asi visualizarlos y editarlos

		$('#editProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var placa = button.data('placa') 
		  $('#edit_placa').val(placa)
		  var anio = button.data('anio') 
		  $('#edit_anio').val(anio)
		  var tipo = button.data('tipo') 
		  $('#edit_tipo').val(tipo)
		  var permisosct = button.data('permisosct') 
		  $('#edit_permisosct').val(permisosct)
		  var numeropermisosct = button.data('numeropermisosct') 
		  $('#edit_numeropermisosct').val(numeropermisosct)
		  var nombreaseguradoraresponsabilidadcivil = button.data('nombreaseguradoraresponsabilidadcivil') 
		  $('#edit_nombreaseguradoraresponsabilidadcivil').val(nombreaseguradoraresponsabilidadcivil)
		  var numeropolizaresponsabilidadcivil = button.data('numeropolizaresponsabilidadcivil') 
		  $('#edit_numeropolizaresponsabilidadcivil').val(numeropolizaresponsabilidadcivil)
		  var nombreaseguradoracarga = button.data('nombreaseguradoracarga') 
		  $('#edit_nombreaseguradoracarga').val(nombreaseguradoracarga)
		  var numeropolizacarga = button.data('numeropolizacarga') 
		  $('#edit_numeropolizacarga').val(numeropolizacarga)
		  var nombreaseguradoramedioambiente = button.data('nombreaseguradoramedioambiente') 
		  $('#edit_nombreaseguradoramedioambiente').val(nombreaseguradoramedioambiente)
		  var numeropolizamedioambiente = button.data('numeropolizamedioambiente') 
		  $('#edit_numeropolizamedioambiente').val(numeropolizamedioambiente)
		  var primaseguro = button.data('primaseguro') 
		  $('#edit_primaseguro').val(primaseguro)
		  var id = button.data('id') 
		  $('#edit_id').val(id)
		})
		
		// Metodo el cual edita los cambios
		
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


		// Metodo en el cual se agregar los registros ingresado
		
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

		// Tre el Id al Boton seleccionado

		$('#deleteProductModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id') 
			$('#delete_id').val(id)
		  })

		//   Metodo el cual hace la funcion de eliminar del id que selecciono
		
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
