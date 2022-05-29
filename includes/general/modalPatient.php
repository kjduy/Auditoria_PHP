<div id="modal_patient" class="modal fade" tabindex="-1" aria-labelledby="modalTitleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleLabel"> Añadir Paciente</h5>
                </div>
                <div class="modal-body">
                    <div class="col-12 agregarPaciente">
                        <form id="nuevoPaciente">
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
                                <div class="col-6 mb-1">
                                    <label class="pb-0 col-auto col-form-label" for="dateOB_HC">Fecha de nacimiento:</label>
                                    <div class="col-auto">
                                        <input type="date" id="dateOB_HC" name="dateOB_HC" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
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
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="mensaje-error"></div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCancelar">Cancelar</button>
                    <button type="button" onclick="register()" id="create" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</div>