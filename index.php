<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>CRUD de productos con PHP - MySQL - jQuery AJAX </title>

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cfdi.facturoporti.com.mx/css/bootstrap.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css"> -->


	<script	script src="https://cfdi.facturoporti.com.mx/Scripts/modernizr-2.8.3.js" type="text/javascript"></script>
    <link href="https://cfdi.facturoporti.com.mx/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cfdi.facturoporti.com.mx/css/BootstrapTable/116/bootstrap-table.css" rel="stylesheet" type="text/css" />

    <link href="https://cfdi.facturoporti.com.mx/css/sticky-footer-navbar.css" rel="stylesheet" type="text/css" />
    <link href="https://cfdi.facturoporti.com.mx/css/theme.css" rel="stylesheet" type="text/css" />

    <script src="https://cfdi.facturoporti.com.mx/Scripts/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://cfdi.facturoporti.com.mx/Scripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cfdi.facturoporti.com.mx/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
    <script src="https://cfdi.facturoporti.com.mx/Scripts/jquery.form.min.js" type="text/javascript"></script>
    
    <script src="https://cfdi.facturoporti.com.mx/Scripts/SesionMasterBootStrap" type="text/javascript"></script>
    <script src="https://cfdi.facturoporti.com.mx/Scripts/jquery-ui-1.12.1.min.js" type="text/javascript"></script>
        
    <script src="https://cfdi.facturoporti.com.mx/Scripts/SesionMaster-2" type="text/javascript"></script>
    
    <script src="https://cfdi.facturoporti.com.mx/Scripts/FontAwesome/all.min.js" type="text/javascript"></script>
    


</head>
<body>
 
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Administrar </b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#FormAutoTransporte" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo producto</span></a>
					</div>
                </div>
            </div>
			<div class='col-sm-4 pull-right'>
				<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                </div>
			</div>
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
			
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<?php include("modal_add.php");?>
	<!-- Edit Modal HTML -->
	<?php include("modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("modal_delete.php");?>
	<script src="js/script.js"></script>
</body>
</html>