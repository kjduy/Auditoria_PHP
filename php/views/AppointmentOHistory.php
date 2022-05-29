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
                navbar('AppointmentReservation.php','null');
            ?>

            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
            <div class="container">
                    <h1 class="text-center text-dark">Control Citas Odontología</h1>

                    <div class="table-responsive">        
                        <table id="od_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>                              
                                    <th>Paciente</th>
                                    <th>Odontólogo</th>
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
    <script src="../../js/appointmentOHistory.js"></script>
</body>
</html>
