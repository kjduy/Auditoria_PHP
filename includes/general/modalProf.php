<?php
function modalGeneral($nombreModal)
{
?>
    <div id="modal_user" class="modal fade" tabindex="-1" aria-labelledby="modalTitleLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleLabel"> Añadir <?php echo $nombreModal; ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 agregarUsuario">
                            <form id="nuevoUsuario">
                                <input type="hidden" id="id_Prof" name="id_Prof">
                                <div class="form-group row">
                                    <div class="col-12 mb-1">
                                        <label class="pb-0 col-auto col-form-label" for="userType_Prof">Usuario:</label>
                                        <div class="col-auto">
                                            <select id="userType_Prof" name="userType_Prof" class="form-control">
                                                <?php
                                                echo '<option value=' . $nombreModal . '>' . $nombreModal . '</option>';
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_name_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="name_Prof">Nombre:</label>
                                        <div class="col-auto">
                                            <input type="text" id="name_Prof" name="name_Prof" class="form-control" placeholder="Ingrese el nombre">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_lastName_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="lastName_Prof">Apellido:</label>
                                        <div class="col-auto">
                                            <input type="text" id="lastName_Prof" name="lastName_Prof" class="form-control" placeholder="Ingrese el apellido">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_user_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="user_Prof">Usuario:</label>
                                        <div class="col-auto">
                                            <input type="text" id="user_Prof" name="user_Prof" class="form-control" placeholder="Ingrese el usuario">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_pass_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="pass_Prof">Contraseña:</label>
                                        <div class="col-auto">
                                            <input type="password" id="pass_Prof" name="pass_Prof" class="form-control" placeholder="Ingrese la contraseña">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_cedula_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="cedula_Prof">Cedula:</label>
                                        <div class="col-auto">
                                            <input type="text" id="cedula_Prof" name="cedula_Prof" class="form-control" placeholder="Ingrese el cedula">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_phone_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="phone_Prof">Teléfono:</label>
                                        <div class="col-auto">
                                            <input type="text" id="phone_Prof" name="phone_Prof" class="form-control" placeholder="Ingrese el teléfono">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1" id="grupo_email_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="email_Prof">Email:</label>
                                        <div class="col-auto">
                                            <input type="email" id="email_Prof" name="email_Prof" class="form-control" placeholder="Ingrese el email">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1" id="grupo_address_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="address_Prof">Dirección:</label>
                                        <div class="col-auto">
                                            <input type="text" id="address_Prof" name="address_Prof" class="form-control" placeholder="Ingrese la dirección">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1" id="grupo_date_Prof">
                                        <label class="pb-0 col-auto col-form-label" for="date_Prof">Fecha de nacimiento:</label>
                                        <div class="col-auto">
                                            <input type="date" id="date_Prof" name="date_Prof" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="pb-0 col-auto col-form-label" for="gender_Prof">Genero:</label>
                                        <div class="col-auto">
                                            <select id="gender_Prof" name="gender_Prof" class="form-control">
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
                        <button type="button" onclick="update()" id="update" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>