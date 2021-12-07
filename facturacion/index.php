<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="./../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="./../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="./../assets/fonts/fontawesome5-overrides.min.css">
    


</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column p-2" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">

                        <div class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <h3>Datos de Cliente</h3>
                        </div>

                        <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Agregar</button>

                    </div>
                    
                        </div>

                        <div class='clearfix'></div>
                        <hr>
                        <div id="loader"></div><!-- Carga de datos ajax aqui -->
                        <div id="resultados"></div><!-- Carga de datos ajax aqui -->
                        <div class='outer_div'></div><!-- Carga de datos ajax aqui -->

                    </div>

                </div>

            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

    </div>
    
	<!-- Edit Modal HTML -->
    <?php include("modal_add.php");?>
	<!-- Edit Modal HTML -->
	<?php include("modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("modal_delete.php");?>

    <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./../assets/js/theme.js"></script>

</body>

</html>