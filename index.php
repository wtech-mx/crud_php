<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>CRUD de productos con PHP - MySQL - jQuery AJAX </title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cfdi.facturoporti.com.mx/Scripts/jquery-3.4.1.min.js" type="text/javascript"></script>

    
</head>

<body id="page-top">
 
<div id="wrapper">
        <div class="d-flex flex-column p-2" id="content-wrapper">
            <div id="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="d-sm-flex justify-content-between align-items-center mb-4">

                                <div class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <h3>Datos de Cliente</h3>
                                </div>

                                <div class="container-fluid">
                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                                <button class="btn btn-primary py-0" type="button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </form>

                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#FormAutoTransporte">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class='clearfix'></div>
                            <hr>

                            <div id="loader"></div><!-- Carga de datos ajax aqui -->
                            <div id="resultados"></div><!-- Carga de datos ajax aqui -->
                            <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    </div>
    
	<!-- Edit Modal HTML -->
	<?php include("modal_add.php");?>
	<!-- Edit Modal HTML -->
	<?php include("modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("modal_delete.php");?>

	<script src="js/script.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

</body>
</html>