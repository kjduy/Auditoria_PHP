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
                navbar('patient.php','null');
            ?>

            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Historia Clínica</h1>
                    <div class="d-flex justify-content-center">
                        <a type="button" class="btn btn-success text-light" href="patientAppointmentHMG.php?msg=<?php echo $_GET['msg']?>"><i class="fas fa-eye"></i> Historial de Citas Medicina General</a>
                        <a type="button" class="btn btn-warning ml-3 text-light" href="patientAppointmentHO.php?msg=<?php echo $_GET['msg']?>"><i class="fas fa-tooth"></i> Historial de Citas Odontología</a>
                    </div>
                    <div class="col-12 datosPersonalesHC">
                        <form id="datosPersonalesHC">
                        <input type="hidden" id="id_HC" name="id_HC" value = "<?php echo $_GET['msg']?>" >
                            <!-- Datos Personales -->
                            <h4 class="text-muted">Datos Personales</h4>
                            <div class="form-group row">
                                <div class="col-6 mb-1" id="grupo_name_HC">
                                    <label class="pb-0 col-auto col-form-label" for="name_HC">Nombre:</label>
                                    <div class="col-auto">
                                        <input type="text" id="name_HC" name="name_HC" class="form-control" placeholder="Ingrese el nombre">
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_lastName_HC">
                                    <label class="pb-0 col-auto col-form-label" for="lastName_HC">Apellido:</label>
                                    <div class="col-auto">
                                        <input type="text" id="lastName_HC" name="lastName_HC" class="form-control" placeholder="Ingrese el apellido">
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_cedula_HC">
                                    <label class="pb-0 col-auto col-form-label" for="cedula_HC">Cédula:</label>
                                    <div class="col-auto">
                                        <input type="text" id="cedula_HC" name="cedula_HC" class="form-control" placeholder="Ingrese la cédula">
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_passport_HC">
                                    <label class="pb-0 col-auto col-form-label" for="passport_HC">Pasaporte:</label>
                                    <div class="col-auto">
                                        <input type="text" id="passport_HC" name="passport_HC" class="form-control" placeholder="Ingrese el pasaporte">
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_phone_HC">
                                    <label class="pb-0 col-auto col-form-label" for="phone_HC">Teléfono:</label>
                                    <div class="col-auto">
                                        <input type="text" id="phone_HC" name="phone_HC" class="form-control" placeholder="Ingrese el teléfono">
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_address_HC">
                                    <label class="pb-0 col-auto col-form-label" for="address_HC">Dirección:</label>
                                    <div class="col-auto">
                                        <input type="text" id="address_HC" name="address_HC" class="form-control" placeholder="Ingrese el teléfono">
                                    </div>
                                </div>
                                <div class="col-3 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="gender_HC">Genero:</label>
                                    <div class="col-auto">
                                        <select id="gender_HC" name="gender_HC" class="form-control">
                                            <option value="">- Seleccionar -</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="dateOB_HC">Fecha de nacimiento:</label>
                                    <div class="col-auto">
                                        <input type="date" id="dateOB_HC" name="dateOB_HC" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_placeOB_HC">
                                    <label class="pb-0 col-auto col-form-label" for="placeOB_HC">Lugar de nacimiento:</label>
                                    <div class="col-auto">
                                        <input type="text" id="placeOB_HC" name="placeOB_HC" class="form-control" placeholder="Ingrese el lugar de nacimiento">
                                    </div>
                                </div>
                                <div class="col-3 mb-1" id="grupo_nationality_HC">
                                    <label class="pb-0 col-auto col-form-label" for="nationality_HC">Nacionalidad:</label>
                                    <div class="col-auto">
                                        <input type="text" id="nationality_HC" name="nationality_HC" class="form-control" placeholder="Ingrese la nacionalidad">
                                    </div>
                                </div>
                                <div class="col-3 mb-1" id="grupo_etnia_HC">
                                    <label class="pb-0 col-auto col-form-label" for="etnia_HC">Etnia:</label>
                                    <div class="col-auto">
                                        <input type="text" id="etnia_HC" name="etnia_HC" class="form-control" placeholder="Ingrese la etnia">
                                    </div>
                                </div>
                                <div class="col-3 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="civilState_HC">Estado Civil:</label>
                                    <div class="col-auto">
                                        <select id="civilState_HC" name="civilState_HC" class="form-control">
                                            <option value="">- Seleccionar -</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Viudo">Viudo</option>
                                            <option value="Separado">Separado</option>
                                            <option value="Union Libre">Union Libre</option>
                                            <option value="NA">No acredita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3 mb-1" id="grupo_religion_HC">
                                    <label class="pb-0 col-auto col-form-label" for="religion_HC">Religión:</label>
                                    <div class="col-auto">
                                        <input type="text" id="religion_HC" name="religion_HC" class="form-control" placeholder="Ingrese la religión">
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="educationLevel_HC">Escolaridad:</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="col-3">
                                            <input type="checkbox" id="primary_HC"  name="primary_HC" class="educationLevel_HC" value="Primaria"  />
                                            <label for="primary_HC">Primaria</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox" id="highSchool_HC"  name="highSchool_HC" class="educationLevel_HC" value="Secundaria"  />
                                            <label for="highSchool_HC">Secundaria</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox" id="university_HC"  name="university_HC" class="educationLevel_HC" value="Universidad"  />
                                            <label for="university_HC">Universidad</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="checkbox" id="master_HC"  name="master_HC" class="educationLevel_HC" value="Maestria"  />
                                            <label for="master_HC">Maestría</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox" id="doctorate_HC"  name="doctorate_HC" class="educationLevel_HC" value="Doctorado"  />
                                            <label for="doctorate_HC">Doctorado</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox" id="postgrad_HC"  name="postgrad_HC" class="educationLevel_HC" value="Posgrado"  />
                                            <label for="postgrad_HC">Posgrado</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <div class="d-flex">
                                        <div class="mb-1" id="grupo_career_HC">
                                            <label class="pb-0 col-auto col-form-label" for="career_HC">Carrera:</label>
                                            <div class="col-auto">
                                                <input type="text" id="career_HC" name="career_HC" class="form-control" placeholder="Ingrese la carrera">
                                            </div>
                                        </div>
                                        <div class="mb-1" id="grupo_semester_HC">
                                            <label class="pb-0 col-auto col-form-label" for="semester_HC">Semestre:</label>
                                            <div class="col-auto">
                                                <input type="number" id="semester_HC" name="semester_HC" class="form-control" placeholder="Ingrese el semestre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-1" id="grupo_job_HC">
                                        <label class="pb-0 col-3 col-form-label" for="job_HC">Ocupación:</label>
                                        <div class="col-9">
                                            <input type="text" id="job_HC" name="job_HC" class="form-control" placeholder="Ingrese la ocupación">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="bloodType_HC">Tipo de Sangre:</label>
                                    <div class="col-auto">
                                        <select id="bloodType_HC" name="bloodType_HC" class="form-control">
                                            <option value="" disabled selected>- Seleccionar -</option>
                                            <option value="A+">A+</option>
                                            <option value="O+">O+</option>
                                            <option value="B+">B+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="A-">A-</option>
                                            <option value="O-">O-</option>
                                            <option value="B-">B-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="NA">No acredita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3 mb-1" id="grupo_weight_HC">
                                    <label class="pb-0 col-auto col-form-label" for="weight_HC">Peso:</label>
                                    <div class="col-auto">
                                        <input type="number" id="weight_HC" name="weight_HC" class="form-control" placeholder="Ingrese peso en Kg">
                                    </div>
                                </div>
                                <div class="col-3 mb-1" id="grupo_height_HC">
                                    <label class="pb-0 col-auto col-form-label" for="height_HC">Estatura:</label>
                                    <div class="col-auto">
                                        <input type="number" id="height_HC" name="height_HC" class="form-control" placeholder="Ingrese altura en cm">
                                    </div>
                                </div>
                                <div class="col-3 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="hand_HC">Lateralidad:</label>
                                    <div class="col-auto">
                                        <select id="hand_HC" name="hand_HC" class="form-control">
                                            <option value="" disabled selected>- Seleccionar -</option>
                                            <option value="Diestro">Diestro</option>
                                            <option value="Surdo">Surdo</option>
                                            <option value="Ambas">Ambas</option>
                                            <option value="NA">No acredita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 mb-1" id="grupo_insurance_HC">
                                    <label class="pb-0 col-auto col-form-label" for="insurance_HC">Seguro:</label>
                                    <div class="col-auto">
                                        <input type="text" id="insurance_HC" name="insurance_HC" class="form-control" placeholder="Ingrese el seguro">
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="dead_HC">Muerte:</label>
                                    <div class="col-auto">
                                        <select id="dead_HC" name="dead_HC" class="form-control">
                                            <option value="" disabled selected>- Seleccionar -</option>
                                            <option value="yes">Si</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- Fin Datos Personales -->
                        </form>  
                        <hr>
                        <form id="patient_per_ant">   
                            <!-- Antecedentes Personales -->
                            <h4 class="text-muted">Antecedentes Personales</h4>
                            <div class="form-group row">
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="pato_HC">Patológicos:</label>
                                    <div class="col-auto">
                                        <textarea id="pato_HC" name="pato_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="quiru_HC">Quirúrgicos:</label>
                                    <div class="col-auto">
                                        <textarea id="quiru_HC" name="quiru_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-4 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="trau_HC">Traumáticos:</label>
                                    <div class="col-auto">
                                        <textarea id="trau_HC" name="trau_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="toxic_HC">Toxico-alérgico:</label>
                                    <div class="col-auto">
                                        <textarea id="toxic_HC" name="toxic_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="psiqui_HC">Psiquiátricos:</label>
                                    <div class="col-auto">
                                        <textarea id="psiqui_HC" name="psiqui_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="bloodTrf_HC">Transfusiones:</label>
                                    <div class="col-auto">
                                        <textarea id="bloodTrf_HC" name="bloodTrf_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="gineco_HC">Ginecológicos:</label>
                                    <div class="col-auto">
                                        <textarea id="gineco_HC" name="gineco_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="vaccination_HC">Vacunación:</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="col-3">
                                            <input type="checkbox" id="tetanos_HC"  name="tetanos_HC" class="vaccination_HC" value="Tetanos"  />
                                            <label for="tetanos_HC">Tetanos</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="checkbox" id="yellowFever_HC"  name="yellowFever_HC" class="vaccination_HC" value="Fiebre Amarilla"  />
                                            <label for="yellowFever_HC">Fiebre Amarilla</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="checkbox" id="rabia_HC"  name="rabia_HC" class="vaccination_HC" value="Rabia"  />
                                            <label for="rabia_HC">Rabia</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="checkbox" id="bcg_HC"  name="bcg_HC" class="vaccination_HC" value="BCG"  />
                                            <label for="bcg_HC">BCG</label>
                                        </div>
                                        <div class="col-2">
                                            <input type="checkbox" id="vhb_HC"  name="vhb_HC" class="vaccination_HC" value="VHB"  />
                                            <label for="vhb_HC">VHB</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" id="vaccinationOther_HC" name="vaccinationOther_HC" class="form-control" placeholder="Ingrese otra vacuna">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <label class="pb-0 col-auto col-form-label">Hábitos:</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="alimentation_HC">Alimentación:</label>
                                            <div class="col-auto">
                                                <textarea id="alimentation_HC" name="alimentation_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="miccion_HC">Micción:</label>
                                            <div class="col-auto">
                                                <textarea id="miccion_HC" name="miccion_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="defecatorio_HC">Defecatorio:</label>
                                            <div class="col-auto">
                                                <textarea id="defecatorio_HC" name="defecatorio_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="alcohol_HC">Alcohol:</label>
                                            <div class="col-auto">
                                                <textarea id="alcohol_HC" name="alcohol_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="tobbaco_HC">Tabaco:</label>
                                            <div class="col-auto">
                                                <textarea id="tobbaco_HC" name="tobbaco_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="drugs_HC">Sustancias psicoactivas:</label>
                                            <div class="col-auto">
                                                <textarea id="drugs_HC" name="drugs_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="biomasa_HC">Exposición a biomasa:</label>
                                            <div class="col-auto">
                                                <textarea id="biomasa_HC" name="biomasa_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <label class="pb-0 col-auto col-form-label" for="exercise_HC">Ejercicio:</label>
                                            <div class="col-auto">
                                                <textarea id="exercise_HC" name="exercise_HC" rows="3" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="medication_HC">Medicación:</label>
                                    <div class="col-auto">
                                        <textarea id="medication_HC" name="medication_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="alergy_HC">Alergias:</label>
                                    <div class="col-auto">
                                        <textarea id="alergy_HC" name="alergy_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div><!-- Fin Antecedentes Personales -->
                        </form>
                        <hr>
                        <form id="patient_fam_ant">  
                            <!-- Antecedentes Familiares -->
                            <h4 class="text-muted">Antecedentes Familiares</h4>
                            <div class="form-group row">
                                <div class="col-12 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="parentalAnt_HC">Antecedentes Familiares:</label>
                                    <div class="col-auto">
                                        <textarea id="parentalAnt_HC" name="parentalAnt_HC" rows="3" cols="50" class="form-control"></textarea>
                                    </div>
                                </div> 
                            </div><!-- Fin Antecedentes Familiares -->
                        </form>

                        <center>
                            <div class="mensaje-error"></div>

                            <button type="button" onclick='update()' class="btn btn-primary" id="btnGuardarHC">Guardar</button>
                        </center>

                    </div>
                </div>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <?php include('../../includes/linkScripts.php');?>

    <!-- Propio -->
    <script src="../../js/patientHC.js"></script>
</body>
</html>
