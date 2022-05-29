<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/temporal.css">
    <?php include('../../includes/linkStyles.php'); ?>
    <title>CBE -ESPE</title>
</head>

<body onload="draw()">
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <?php include('../../includes/admin/sidebar.php'); ?>

        <div class="w-100">
            <!-- Navbar -->
            <?php include('../../includes/tools/navbar.php');
            navbarNormal();
            ?>

            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Estadísticas</h1>
                
                    <center>
                        <div id="zone_1">
                            <h3 class="">Numero de Citas por Medico General</h3>
                            <div id="graph_1" class="pie_chart"></div>
                        </div>
                        <div id="zone_2">
                            <h3 class="">Numero de Citas por Medico Odontologo</h3>
                            <div id="graph_2" class="pie_chart"></div>
                        </div>
                        <div class="col-6" id="zone_3">
                            <h3>Numero de citas en una fecha especifica</h3>
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <input type="date" id="date_3" name="date_3" class="form-control">
                                </div>
                                <div class="ml-2">
                                    <button class="btn btn-primary mb-2" onclick="zone_3()"><i class="far fa-question-circle"></i> Consultar</button>
                                </div>
                            </div>
                            <div id="graph_3" class="bar_chart"></div>
                        </div>

                        <div id="zone_4">
                            <h3>Numero de citas en un rango</h3>
                            <div class="form-group d-flex justify-content-center">
                                <div class="mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="start_4">Desde:</label>
                                    <div class="col-auto">
                                        <input type="date" id="start_4" name="start_4" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="end_4">Hasta:</label>
                                    <div class="col-auto">
                                        <input type="date" id="end_4" name="end_4" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary mb-2" onclick="zone_4()"><i class="far fa-question-circle"></i> Consultar</button>
                            <div id="graph_4" class="bar_chart"></div>
                        </div>
                    </center>

                </div>
            </section><!-- Fin Page Content -->


        </div>
    </div>
    <?php include('../../includes/linkScripts.php'); ?>
    <!-- Propio -->
    <script src="../../js/statistics.js"></script>
</body>

</html>