<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="../../img/icono.png">
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
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Médicos</h1>

                    <center>
                        <div class="mensaje-borrar"></div>
                    </center>

                    <button type="button" onclick="new_doctor()" class="btn btn-primary btn-administacion"><i class="fas fa-user-plus"></i> Añadir Medico</button>

                    <div class="table-responsive">
                        <table id="doctor_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Cedula</th>                               
                                    <th>Especialidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p id="demo"> </p>
            </section><!-- Fin Page Content -->

            <!-- Modal Formulario-->
            <div id="modal_doctor" class="modal fade" tabindex="-1" aria-labelledby="modalTitleLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleLabel"> Añadir Medico</h5>
                            </div>
                            <div class="modal-body">
                                <div class="col-12 agregarMedico">
                                    <form id="nuevoMedico">
                                    <input type="hidden" id="id_Dc" name="id_Dc">
                                        <div class="form-group row">
                                            <div class="col-6 mb-1" id="grupo_name_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="name_Dc">Nombre:</label>
                                                <div class="col-auto">
                                                    <input type="text" id="name_Dc" name="name_Dc" class="form-control" placeholder="Ingrese el nombre">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1" id="grupo_lastName_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="lastName_Dc">Apellido:</label>
                                                <div class="col-auto">
                                                    <input type="text" id="lastName_Dc" name="lastName_Dc" class="form-control" placeholder="Ingrese el apellido">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1" id="grupo_user_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="user_Dc">Usuario:</label>
                                                <div class="col-auto">
                                                    <input type="text" id="user_Dc" name="user_Dc" class="form-control" placeholder="Ingrese el usuario">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1" id="grupo_pass_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="pass_Dc">Contraseña:</label>
                                                <div class="col-auto">
                                                    <input type="password" id="pass_Dc" name="pass_Dc" class="form-control" placeholder="Ingrese la contraseña">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1" id="grupo_cedula_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="cedula_Dc">Cedula:</label>
                                                <div class="col-auto">
                                                    <input type="text" id="cedula_Dc" name="cedula_Dc" class="form-control" placeholder="Ingrese el cedula">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1" id="grupo_phone_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="phone_Dc">Teléfono:</label>
                                                <div class="col-auto">
                                                    <input type="text" id="phone_Dc" name="phone_Dc" class="form-control" placeholder="Ingrese el teléfono">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1" id="grupo_email_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="email_Dc">Email:</label>
                                                <div class="col-auto">
                                                    <input type="email" id="email_Dc" name="email_Dc" class="form-control" placeholder="Ingrese el email">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1" id="grupo_address_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="address_Dc">Dirección:</label>
                                                <div class="col-auto">
                                                    <input type="text" id="address_Dc" name="address_Dc" class="form-control" placeholder="Ingrese la dirección">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1" id="grupo_date_Dc">
                                                <label class="pb-0 col-auto col-form-label" for="date_Dc">Fecha de nacimiento:</label>
                                                <div class="col-auto">
                                                    <input type="date" id="date_Dc" name="date_Dc" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1">
                                                <label class="pb-0 col-auto col-form-label" for="gender_Dc">Genero:</label>
                                                <div class="col-auto">
                                                    <select id="gender_Dc" name="gender_Dc" class="form-control">
                                                        <option value="">- Seleccionar -</option>
                                                        <option value="Femenino">Femenino</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Otro">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1">
                                                <label class="pb-0 col-auto col-form-label" for="ocuppation_Dc">Ocupación:</label>
                                                <div class="col-auto">
                                                    <select id="ocuppation_Dc" name="ocuppation_Dc" class="form-control">
                                                        <option value="">- Seleccionar -</option>
                                                        <option value="Medicina General">Medicina General</option>
                                                        <option value="Odontologia">Odontología</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </form>
                                    <!-- Form Disponibilidad -->
                                    <div class="col-6 mb-1">
                                        <form id="availability_days">
                                            <label class="pb-0 col-auto col-form-label" for="availability_Dc">Disponibilidad:</label>
                                            <div class="d-flex flex-wrap">
                                                <div class="col-12">
                                                    <input type="checkbox" id="monday" name="monday" class="availability_Dc" value="Lunes" />
                                                    <label class="text-dark" for="monday">Lunes</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="tuesday" name="tuesday" class="availability_Dc" value="Martes" />
                                                    <label class="text-dark" for="tuesday">Martes</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="wednesday" name="wednesday" class="availability_Dc" value="Miercoles" />
                                                    <label class="text-dark" for="wednesday">Miércoles</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="thursday" name="thursday" class="availability_Dc" value="Jueves" />
                                                    <label class="text-dark" for="thursday">Jueves</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="friday" name="friday" class="availability_Dc" value="Viernes" />
                                                    <label class="text-dark" for="friday">Viernes</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- Fin form Disponibilidad -->

                                    <!-- Form Horarios -->
                                    <div class="col-6 mb-1">
                                        <form id="availability_hours">
                                            <label class="pb-0 col-auto col-form-label" for="attention_Dc">Horas de Atención:</label>
                                            <div class="d-flex flex-wrap">
                                                <div class="col-12">
                                                    <input type="checkbox" id="07_00" name="07_00" class="availability_Dc" value="07:00-09:00" />
                                                    <label class="text-dark" for="07_00">07:00-9:00</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="09_00" name="09_00" class="availability_Dc" value="09:00-11:00" />
                                                    <label class="text-dark" for="09_00">09:00-11:00</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="11_00" name="11_00" class="availability_Dc" value="11:00-13:00" />
                                                    <label class="text-dark" for="11_00">11:00-13:00</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="13_00" name="13_00" class="availability_Dc" value="13:00-15:00" />
                                                    <label class="text-dark" for="13_00">13:00-15:00</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="15_00" name="15_00" class="availability_Dc" value="15:00-17:00" />
                                                    <label class="text-dark" for="15:00-17:00">15:00-17:00</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="checkbox" id="17_00" name="17_00" class="availability_Dc" value="17:00-19:00" />
                                                    <label class="text-dark" for="17_00">17:00-19:00</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- Fin form Horarios -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="mensaje-error"></div>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCancelar">Cancelar</button>
                            <button type="button" onclick="register()" id="create" class="btn btn-primary"> Registrar</button>
                            <button type="button" onclick="update()" id="update" class="btn btn-primary"> Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include('../../includes/linkScripts.php'); ?>

    <!-- Propio -->
    <script src="../../js/doctor.js"></script>
</body>

</html>