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
        <div class="w-100">
            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <div class="col-12">
                        <form id="form_odt">
                        <h1 class="text-center text-dark">Odontograma</h1>
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
                            <div class="form-group row">
                                <div class="col-6 d-flex">
                                    <input type="text" id="18_odt" name="18_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">18</p>
                                    <img src="../../img/odontogram/18.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/18.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-4 mr-1">28</p>
                                    <input type="text" id="28_odt" name="28_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="17_odt" name="17_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">17</p>
                                    <img src="../../img/odontogram/17.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/17.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-4 mr-1">27</p>
                                    <input type="text" id="27_odt" name="27_odt" class="form-control inputOdontograma align-self-center">
                                </div>

                                <div class="col-6 d-flex">
                                    <input type="text" id="16_odt" name="16_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">16</p>
                                    <img src="../../img/odontogram/16.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/16.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-4 mr-1">26</p>
                                    <input type="text" id="26_odt" name="26_odt" class="form-control inputOdontograma align-self-center">
                                </div>

                                <div class="col-6 d-flex">
                                    <input type="text" id="15_odt" name="15_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">15</p>
                                    <img src="../../img/odontogram/15.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/15.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">25</p>
                                    <input type="text" id="25_odt" name="25_odt" class="form-control inputOdontograma align-self-center">
                                </div>

                                <div class="col-6 d-flex">
                                    <input type="text" id="14_odt" name="14_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">14</p>
                                    <img src="../../img/odontogram/14.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/14.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">24</p>
                                    <input type="text" id="24_odt" name="24_odt" class="form-control inputOdontograma align-self-center">
                                </div>

                                <div class="col-6 d-flex">
                                    <input type="text" id="13_odt" name="13_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">13</p>
                                    <img src="../../img/odontogram/13.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/13.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">23</p>
                                    <input type="text" id="23_odt" name="23_odt" class="form-control inputOdontograma align-self-center">
                                </div>

                                <div class="col-6 d-flex">
                                    <input type="text" id="12_odt" name="12_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">12</p>
                                    <img src="../../img/odontogram/12.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/12.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">22</p>
                                    <input type="text" id="22_odt" name="22_odt" class="form-control inputOdontograma align-self-center">
                                </div>

                                <div class="col-6 d-flex">
                                    <input type="text" id="11_odt" name="11_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">11</p>
                                    <img src="../../img/odontogram/11.svg" class="left-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/11.svg" class="reverse_odt right-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">21</p>
                                    <input type="text" id="21_odt" name="21_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-6 d-flex">
                                    <input type="text" id="41_odt" name="41_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">41</p>
                                    <img src="../../img/odontogram/41.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/41.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">31</p>
                                    <input type="text" id="31_odt" name="31_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="42_odt" name="42_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">42</p>
                                    <img src="../../img/odontogram/42.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/42.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">32</p>
                                    <input type="text" id="32_odt" name="32_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="43_odt" name="43_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">43</p>
                                    <img src="../../img/odontogram/43.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/43.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">33</p>
                                    <input type="text" id="33_odt" name="33_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="44_odt" name="44_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">44</p>
                                    <img src="../../img/odontogram/44.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/44.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">34</p>
                                    <input type="text" id="34_odt" name="34_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="45_odt" name="45_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">45</p>
                                    <img src="../../img/odontogram/45.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/45.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">35</p>
                                    <input type="text" id="35_odt" name="35_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="46_odt" name="46_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">46</p>
                                    <img src="../../img/odontogram/46.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/46.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">36</p>
                                    <input type="text" id="36_odt" name="36_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="47_odt" name="47_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">47</p>
                                    <img src="../../img/odontogram/47.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/47.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">37</p>
                                    <input type="text" id="37_odt" name="37_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                                
                                <div class="col-6 d-flex">
                                    <input type="text" id="48_odt" name="48_odt" class="form-control inputOdontograma align-self-center">
                                    <p class="align-self-center mb-0 ml-1 mr-5">48</p>
                                    <img src="../../img/odontogram/48.svg" class="right-rotate">
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="../../img/odontogram/48.svg" class="reverse_odt left-rotate">
                                    <p class="align-self-center mb-0 ml-5 mr-1">38</p>
                                    <input type="text" id="38_odt" name="38_odt" class="form-control inputOdontograma align-self-center">
                                </div>
                            </div>
                        </form>
                    </div>
                    <center>
                        <button type="button" onclick="update()" class="btn btn-primary" id="btnGuardarCM">Guardar</button>
                        <button type="button" class="btn btn-dark"><i class="icon ion-md-print" onclick="window.print()"></i></button>
                    </center>
                </div>
                <p id="demo"></p>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <?php include('../../includes/linkScripts.php');?>

    <!-- Propio -->
    <script src="../../js/odontogram.js"></script>
</body>
</html>
