<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="../../img/icono.png">
    <?php include('../../includes/linkStyles.php'); ?>
    <title>CBE-ESPE</title>
</head>

<body onload="loadForm()">
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <?php include('../../includes/admin/sidebar.php'); ?>

        <div class="w-100">
            <!-- Navbar -->
            <?php include('../../includes/tools/navbar.php');
                navbar('AppointmentMGHistory.php','null');
            ?>

            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <form id="formCM">
                        <h1 class="text-center text-dark">Cita Medica</h1>
                        <input type="hidden" id="id_CM" name="id_CM" value = "<?php echo $_GET['msg']?>" >
                        
                        <div class="d-flex justify-content-around pt-2">
                            <label class="pb-0 col-auto col-form-label" for="patient">Paciente:</label>
                            <input type="text" id="patient" name="patient" class="form-control" style="border:none;" disabled>

                            <label class="pb-0 col-auto col-form-label" for="date_CM">Fecha:</label>
                            <input type="text" id="date_CM" name="date_CM" class="form-control" style="border:none;" disabled>
                            
                            <label class="pb-0 col-auto col-form-label" for="hour_CM">Hora:</label>
                            <input type="text" id="hour_CM" name="hour_CM" class="form-control" style="border:none;" disabled>

                            <label class="pb-0 col-auto col-form-label" for="doctor">Doctor:</label>
                            <input type="text" id="doctor" name="doctor" class="form-control" style="border:none;" disabled>
                        </div><br>

                            <!-- Signos Vitales -->
                            <h4 class="text-muted">Signos Vitales</h4>
                            <div class="form-group row">
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="temperature_CM">Temperatura:</label>
                                    <div class="col-auto">
                                        <input type="text" id="temperature_CM" name="temperature_CM" class="form-control" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="pulse_CM">Pulso:</label>
                                    <div class="col-auto">
                                        <input type="text" id="pulse_CM" name="pulse_CM" class="form-control" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="breathe_CM">Respiración:</label>
                                    <div class="col-auto">
                                        <input type="text" id="breathe_CM" name="breathe_CM" class="form-control" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="weight_CM">Peso:</label>
                                    <div class="col-auto">
                                        <input type="text" id="weight_CM" name="weight_CM" class="form-control" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="height_CM">Estatura:</label>
                                    <div class="col-auto">
                                        <input type="text" id="height_CM" name="height_CM" class="form-control" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="bloodP_CM">Tension Arterial:</label>
                                    <div class="col-auto">
                                        <input type="text" id="bloodP_CM" name="bloodP_CM" class="form-control" style="border:none;">
                                    </div>
                                </div>
                            </div><!-- Fin Signos Vitales -->
                            <hr>
                            <!-- Enfermedades o problema actual -->
                            <h4 class="text-muted">Enfermedades o problema actual</h4>
                            <div class="form-group row">
                                <div class="col-12 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="description_CM">Descripción de síntomas:</label>
                                    <div class="col-auto">
                                        <textarea id="description_CM" name="description_CM" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="posibleDiag_CM">Diagnostico Posible:</label>
                                    <div class="col-auto">
                                        <textarea id="posibleDiag_CM" name="posibleDiag_CM" rows="3" cols="50" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="definitiveDiag_CM">Diagnostico Definitivo:</label>
                                    <div class="col-auto">
                                        <textarea id="definitiveDiag_CM" name="definitiveDiag_CM" rows="3" cols="50" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="observation_CM">Observaciones:</label>
                                    <div class="col-auto">
                                        <textarea id="observation_CM" name="observation_CM" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div><!-- Fin Enfermedades o problema actual -->
                            <hr>
                            <!-- Tratamiento -->
                            <h4 class="text-muted">Tratamiento</h4>
                            <div class="form-group row">
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="medicine_CM">Medicinas:</label>
                                    <div class="col-auto">
                                        <textarea id="medicine_CM" name="medicine_CM" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="indication_CM">Indicaciones:</label>
                                    <div class="col-auto">
                                        <textarea id="indication_CM" name="indication_CM" class="form-control" style="height: 150px"></textarea>
                                    </div>
                                </div>
                            </div><!-- Fin Tratamiento -->
                    </form>
                        <center>
                            <button type="button" class="btn btn-dark" onclick="window.print()"><i class="icon ion-md-print"></i></button>
                        </center>
                </div>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <?php include('../../includes/linkScripts.php'); ?>

    <!-- Propio -->
    <script src="../../js/appointmentMGMedical.js"></script>
</body>

</html>