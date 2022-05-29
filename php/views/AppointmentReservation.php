<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="../../img/icono.png">
    <?php include('../../includes/linkStyles.php');?>
    <title>CBE-ESPE</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <?php include('../../includes/admin/sidebar.php');?>

        <div class="w-100">
            <!-- Navbar -->
            <?php include('../../includes/tools/navbar.php');
                navbar('AppointmentRegister.php','null');
            ?>

            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Reservaciones Citas</h1>

                    <center>
                        <div class="mensaje-borrar"></div>
                    </center>
                    
                    <div class="table-responsive">        
                        <table id="app_reservation" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Fecha Cita</th>
                                    <th>Hora</th>
                                    <th>Paciente</th>
                                    <th>Medico</th>                               
                                    <th>Especialidad</th>                               
                                    <th>Estado</th>
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
    <script src="../../js/appointmentReservation.js"></script>
</body>
</html>
