<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="../../img/icono.png">
    <?php include('../../includes/linkStyles.php');?>
    <title>CBE-ESPE</title>
</head>

<body onload="loadForm()">
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <?php include('../../includes/admin/sidebar.php');?>

        <div class="w-100">
            <!-- Navbar -->
            <?php include('../../includes/tools/navbar.php');
                navbar('AppointmentOHistory.php','null');
            ?>

            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
            <div class="container">
                    <h1 class="text-center text-dark">Cita Odontología</h1>
                    <hr>
                    <div class="col-12 formCO">
                        <form id="formCO">
                        <input type="hidden" id="id_CO" name="id_CO" value = "<?php echo $_GET['msg']?>" >
                        
                        <div class="d-flex justify-content-around pt-2">
                        <label class="pb-0 col-auto col-form-label" for="patient">Paciente:</label>
                        <input type="text" id="patient" name="patient" class="form-control" disabled>

                        <label class="pb-0 col-auto col-form-label" for="date_CM">Fecha:</label>
                        <input type="text" id="date_CO" name="date_CO" class="form-control" disabled>
                        
                        <label class="pb-0 col-auto col-form-label" for="hour_CM">Hora:</label>
                        <input type="text" id="hour_CO" name="hour_CO" class="form-control" disabled>

                        <label class="pb-0 col-auto col-form-label" for="doctor">Doctor:</label>
                        <input type="text" id="doctor" name="doctor" class="form-control" disabled>
                         
                        </div><br>
                            <hr>
                            <!-- Enfermedades o problema actual -->
                            <h4 class="text-muted">Enfermedades o problema actual</h4>
                            <div class="form-group row">
                                <div class="col-12 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="description_CO">Descripción de síntomas:</label>
                                    <div class="col-auto">
                                        <textarea id="description_CO" name="description_CO" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="posibleDiag_CO">Diagnostico Posible:</label>
                                    <div class="col-auto">
                                        <textarea id="posibleDiag_CO" name="posibleDiag_CO" rows="3" cols="50" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="definitiveDiag_CO">Diagnostico Definitivo:</label>
                                    <div class="col-auto">
                                        <textarea id="definitiveDiag_CO" name="definitiveDiag_CO" rows="3" cols="50" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="observation_CO">Observaciones:</label>
                                    <div class="col-auto">
                                        <textarea id="observation_CO" name="observation_CO" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div><!-- Fin Enfermedades o problema actual -->
                            <hr>
                            <!-- Tratamiento -->
                            <h4 class="text-muted">Tratamiento</h4>
                            <div class="form-group row">
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="medicine_CO">Medicinas:</label>
                                    <div class="col-auto">
                                        <textarea id="medicine_CO" name="medicine_CO" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="indication_CO">Indicaciones:</label>
                                    <div class="col-auto">
                                        <textarea id="indication_CO" name="indication_CO" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                            </div><!-- Fin Tratamiento -->
                        </form>
                        <center>
                            <button type="button" class="btn btn-dark"><i class="icon ion-md-print" onclick="window.print()"></i></button>
                        </center>
                    </div>
                </div>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <?php include('../../includes/linkScripts.php');?>

    <!-- Propio -->
    <script src="../../js/appointmentOMedical.js"></script>
</body>
</html>
