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
                navbarNormal();
            ?>
            
            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                    <h1 class="text-center text-dark">Pacientes</h1>

                    <center>
                        <div class="mensaje-borrar"></div>
                    </center>

                    <button type="button" onclick="new_patient()" class="btn btn-primary btn-administacion"><i class="fas fa-user-plus"></i> Añadir Paciente</button>

                    <div class="table-responsive">        
                        <table id="patient_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cedula</th>                               
                                    <th>Pasaporte</th>
                                    <th>Teléfono</th>
                                    <th>Genero</th>
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
            <?php include('../../includes/general/modalPatient.php');?>
            
        </div>
    </div>

    <?php include('../../includes/linkScripts.php');?>

    <!-- Propio -->
    <script src="../../js/patient.js"></script>
</body>
</html>
