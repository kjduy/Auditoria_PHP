<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="../../img/icono.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include('../../includes/linkStyles.php'); ?>
    <title>CBE-ESPE</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <?php include('../../includes/admin/sidebar.php'); ?>

        <div class="w-100">
            <!-- Navbar -->
            <?php include('../../includes/tools/navbar.php');
                navbarNormal();
            ?>

            <!-- Page Content -->
            <!-- Modal -->
            <div class="modal fade" id="app_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="app_title"></h5>
                            <button type="button" class="close" data-dismiss="modal" onclick="close_modal()">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <div class="col-12 mb-1" id="grupo_app_date">
                                            <label class="pb-0 col-auto col-form-label" for="app_date">Fecha:</label>
                                            <div class="col-auto">
                                                <input type="date" id="app_date" name="app_date" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1" id="grupo_app_time">
                                            <label class="pb-0 col-auto col-form-label" for="app_time">Hora:</label>
                                            <div class="col-auto">
                                                <input type="time" id="app_time" name="app_time" class="form-control" placeholder="Ingrese el apellido">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1" id="grupo_app_patient">
                                            <label class="pb-0 col-auto col-form-label" for="app_patient">Paciente:</label>
                                            <div class="col-auto">
                                                <input type="text" id="app_patient" name="app_patient" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <div class="col-12 mb-1" id="grupo_app_doctor">
                                            <label class="pb-0 col-auto col-form-label" for="app_doctor">Doctor:</label>
                                            <div class="col-auto">
                                                <input type="text" id="app_doctor" name="app_doctor" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1" id="grupo_available_hours">
                                            <label class="pb-0 col-auto col-form-label" for="available_hours">Horas de Atención:</label>
                                            <div class="col-auto">
                                                <div id="available_hours"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center><h4 class="text-muted" id="alert_modal"></h4></center>
                        </div>
                        <div class="modal-footer">
                            <div class="mensaje-error"></div>

                            <button type="button" class="btn btn-secondary" onclick="close_modal()">Close</button>
                            <button type="button" class="btn btn-primary" onclick="reg_app()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div><!--End Modal-->

            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Agendar Cita</h1>

                    <center>
                        <form class="form-inline position-relative d-inline-block my-2" id="formBuscar">
                            <div class="form-group form-search" id="grupo_search_chain">
                                <input type="text" name="search_chain" class="form-style" placeholder="Buscar por cedula" id="search_chain" autocomplete="none" />
                                <i class="input-icon ion-md-search"></i>
                            </div>
                        </form>

                        <button type="button" onclick="new_patient()" class="btn btn-primary btn-administacion mb-0 ml-2"><i class="fas fa-user-plus"></i> Añadir Paciente</button>
                    </center>
                    <div class="d-flex justify-content-around">
                        <div class="mt-4">
                            <label class="p-0 m-0"  for="pt_name">Paciente:</label>
                            <input class="form-control" type="text" id="pt_name" name="pt_name" disabled>
                            <input class="form-control" type="hidden" id="pt_id" name="pt_id">
                        </div>
                        <div class="align-self-center d-flex">
                            <form>
                                <div class="d-flex justify-content-center pt-2">
                                    <div>
                                        <label class="pb-0 col-auto col-form-label" for="occupation_R">Especialidad:</label>
                                        <div class="col-auto">
                                            <select id="occupation_R" name="occupation_R" class="form-control">
                                                <option value="" disabled selected>- Seleccionar -</option>
                                                <option value="Medicina General">Medicina General</option>
                                                <option value="Odontologia">Odontologia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="pb-0 col-auto col-form-label" for="doctors">Doctores:</label>
                                        <div class="col-auto">
                                            <select id="doctors" name="doctors" class="form-control">
                                                <option value="" disabled selected>- Seleccionar -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="align-self-center mt-4">
                                <button class="btn btn-primary btnConsultar" onclick="consult()" id="consult"><i class="far fa-question-circle"></i> Consultar</button>
                            </div>
                        </div>
                    </div>

                    <hr>
                </div>
                
                <div id="calendar"></div>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <!-- Modal Formulario-->
    <?php include('../../includes/general/modalPatient.php'); ?>

    <!-- Scripts -->
    <?php include('../../includes/linkScripts.php'); ?>
    <!-- Propio -->
    <link href='../../js/calendar/main.css' rel='stylesheet' />
    <script src="../../js/AppointmentRegister.js"></script>
    <script src='../../js/calendar/main.js'></script>
</body>

</html>