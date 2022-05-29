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
               navbar('patientHC.php',$_GET['msg'])
            ?>
            
            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Historial Citas Odontología</h1>
                    <input type="hidden" id="id_HC" name="id_HC" value = "<?php echo $_GET['msg']?>" >
                    <div class="d-flex justify-content-around pt-2">
                        <h5>Nombre:<span id="name_CM" class="text-dark fw-light fs-3"></span></h5>
                        <h5>Cedula:<span id="cedula_CM" class="text-dark fw-light fs-3"></span></h5>
                    </div>
                    <hr>
                    <div class="table-responsive">        
                    <table id="od_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>                         
                                    <th>Odontologo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>        
                    </table>              
                    </div>
                </div>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <?php include('../../includes/linkScripts.php');?>

    <!-- Propio -->
    <script src="../../js/patientAppointmentHO.js"></script>
</body>
</html>
