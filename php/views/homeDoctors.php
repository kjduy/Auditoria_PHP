<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="../../img/icono.png">
    <?php include('../../includes/linkStyles.php');?>
    <title>CBE-ESPE</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <?php include('../../includes/admin/sidebar.php');?>
        
        <div class="w-100">
            <!-- Navbar -->
            <?php include('../../includes/tools/navbar.php');
                navbarNormal();
            ?>

            <!-- Page Content -->
            <div id="content" class="bg-grey w-100">
                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">
                                    Bienvenid@ <?php echo $_SESSION['username']; ?>
                                </h1>
                                <p class="lead text-muted">
                                    Perteneces a <?php echo $_SESSION['ROLEDC']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contenedor Cartas -->
                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 imagenHome">
                                <img style="height: 487px;" src="../../img/homeDoctor.svg" alt="">
                            </div>
                            <div class="col-6">
                                <div class=" mb-3 p-5">
                                    <div class="d-flex justify-content-around g-0">
                                        <div class="align-self-center ml-5">
                                            <i class="fas fa-calendar-alt carta-icono"></i>
                                        </div>
                                        <div class="carta-detalles">
                                            <div class="card-body">
                                                <h6 class="text-muted text-center">
                                                    Fecha Actual
                                                </h6>
                                                <h3 class="font-weight-bold text-center" id="fechaActual">
                                                <?php 
                                                date_default_timezone_set("America/Guayaquil");
                                                echo date('d-m-Y'); ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fin Carta -->
                            
                        </div><!-- Fin Cartas -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php include('../../includes/linkScripts.php');?>

</body>
</html>
