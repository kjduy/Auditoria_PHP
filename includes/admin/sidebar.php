<?php
    session_start();
    if(!isset($_SESSION['IS_LOGIN'])){
        header('location: ../html/login.html');
        die();
    }
?>
<!-- Sidebar Administrador-->
<?php if($_SESSION['ROLE']== 'Administrador'){ ?>
<div id="sidebar-container" class="bg-primary">
    <div class="logo d-flex">
        <img class="icono-logo" src="../../img/icono.png" alt="">
        <h4 class="text-light font-weight-bold mb-0">CBE - ESPE</h4>
    </div>
    <div class="menu">
        <div class="hover-sidebar">
            <a href="homeAdmin.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
        </div>
        <div class="hover-sidebar">
            <a href="user.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-people lead mr-2"></i> Usuarios</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-users lead mr-0"></i> Empleados</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="nurse.php" class="dropdown-item"
                        ><i class="fas fa-user-nurse lead mr-2"></i> Enfermeros</a
                    >
                    <a href="secretary.php" class="dropdown-item"
                        ><i class="fas fa-window-restore lead mr-2"></i> Secretarios</a
                    >
                </div>
            </li>
        </ul>
        
        <div class="hover-sidebar">
            <a href="doctor.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-user-md lead mr-2"></i>
                Medicos</a
            >
        </div>
        <div class="hover-sidebar">
            <a href="patient.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-address-book lead mr-2"></i>
                Pacientes</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-book-medical lead mr-2"></i> Citas</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="AppointmentRegister.php" class="dropdown-item"
                        ><i class="fas fa-file-medical lead mr-2"></i> Agendar Cita</a
                    >
                    <a href="AppointmentReservation.php" class="dropdown-item"
                        ><i class="fas fa-clipboard-list lead mr-2"></i> Reservaciones Citas</a
                    >
                    <a 
                        href="#" 
                        class="dropdown-item dropdown-toggle d-block border-0"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="icon ion-md-folder lead mr-2"></i> Control Citas</a
                    >
                    <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown2">
                        <a href="AppointmentMGHistory.php" class="dropdown-item"
                            ><i class="fas fa-star-of-life lead mr-2"></i> Medicina General</a
                        >
                        <a href="AppointmentOHistory.php" class="dropdown-item"
                            ><i class="fas fa-tooth lead mr-2"></i> Odontología</a
                        >
                    </div>
                </div>
            </li>
        </ul>
        <div class="hover-sidebar">
            <a href="statistics.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-stats lead mr-2"></i> Estadísticas</a
            >
        </div>
    </div>
</div><!-- Fin sidebar Administrador-->
<?php } ?>
<!-- Sidebar Supervisor-->
<?php if($_SESSION['ROLE']== 'Supervisor'){ ?>
<div id="sidebar-container" class="bg-primary">
    <div class="logo d-flex">
        <img class="icono-logo" src="../../img/icono.png" alt="">
        <h4 class="text-light font-weight-bold mb-0">CBE - ESPE</h4>
    </div>
    <div class="menu">
        <div class="hover-sidebar">
            <a href="homeAdmin.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-users lead mr-0"></i> Empleados</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="nurse.php" class="dropdown-item"
                        ><i class="fas fa-user-nurse lead mr-2"></i> Enfermeros</a
                    >
                    <a href="secretary.php" class="dropdown-item"
                        ><i class="fas fa-window-restore lead mr-2"></i> Secretarios</a
                    >
                </div>
            </li>
        </ul>
        <div class="hover-sidebar">
            <a href="doctor.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-user-md lead mr-2"></i>
                Medicos</a
            >
        </div>
        <div class="hover-sidebar">
            <a href="patient.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-address-book lead mr-2"></i>
                Pacientes</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-book-medical lead mr-2"></i> Citas</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="AppointmentRegister.php" class="dropdown-item"
                        ><i class="fas fa-file-medical lead mr-2"></i> Agendar Cita</a
                    >
                    <a href="AppointmentReservation.php" class="dropdown-item"
                        ><i class="fas fa-clipboard-list lead mr-2"></i> Reservaciones Citas</a
                    >
                    <a 
                        href="#" 
                        class="dropdown-item dropdown-toggle d-block border-0"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="icon ion-md-folder lead mr-2"></i> Control Citas</a
                    >
                    <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown2">
                        <a href="AppointmentMGHistory.php" class="dropdown-item"
                            ><i class="fas fa-star-of-life lead mr-2"></i> Medicina General</a
                        >
                        <a href="AppointmentOHistory.php" class="dropdown-item"
                            ><i class="fas fa-tooth lead mr-2"></i> Odontología</a
                        >
                    </div>
                </div>
            </li>
        </ul>
        <div class="hover-sidebar">
            <a href="statistics.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-stats lead mr-2"></i> Estadísticas</a
            >
        </div>
    </div>
</div><!-- Fin sidebar Supervisor-->
<?php } ?>
<?php if($_SESSION['ROLE']== 'Enfermero'){ ?>
<div id="sidebar-container" class="bg-primary">
    <div class="logo d-flex">
        <img class="icono-logo" src="../../img/icono.png" alt="">
        <h4 class="text-light font-weight-bold mb-0">CBE - ESPE</h4>
    </div>
    <div class="menu">
        <div class="hover-sidebar">
            <a href="homeEmployees.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
        </div>        
        <div class="hover-sidebar">
            <a href="patient.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-address-book lead mr-2"></i>
                Pacientes</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-book-medical lead mr-2"></i> Citas</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="AppointmentRegister.php" class="dropdown-item"
                        ><i class="fas fa-file-medical lead mr-2"></i> Agendar Cita</a
                    >
                    <a href="AppointmentReservation.php" class="dropdown-item"
                        ><i class="fas fa-clipboard-list lead mr-2"></i> Reservaciones Citas</a
                    >
                    <a 
                        href="#" 
                        class="dropdown-item dropdown-toggle d-block border-0"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="icon ion-md-folder lead mr-2"></i> Control Citas</a
                    >
                    <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown2">
                        <a href="AppointmentMGHistory.php" class="dropdown-item"
                            ><i class="fas fa-star-of-life lead mr-2"></i> Medicina General</a
                        >
                        <a href="AppointmentOHistory.php" class="dropdown-item"
                            ><i class="fas fa-tooth lead mr-2"></i> Odontología</a
                        >
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div><!-- Fin sidebar -->
<?php } ?>
<?php if($_SESSION['ROLE']== 'Secretario'){ ?>
<div id="sidebar-container" class="bg-primary">
    <div class="logo d-flex">
        <img class="icono-logo" src="../../img/icono.png" alt="">
        <h4 class="text-light font-weight-bold mb-0">CBE - ESPE</h4>
    </div>
    <div class="menu">
        <div class="hover-sidebar">
            <a href="homeEmployees.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
        </div>    
        <div class="hover-sidebar">
            <a href="doctor.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-user-md lead mr-2"></i>
                Medicos</a
            >
        </div>
        <div class="hover-sidebar">
            <a href="patient.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-address-book lead mr-2"></i>
                Pacientes</a
            >
        </div>    
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-book-medical lead mr-2"></i> Citas</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="AppointmentRegister.php" class="dropdown-item"
                        ><i class="fas fa-file-medical lead mr-2"></i> Agendar Cita</a
                    >
                    <a href="AppointmentReservation.php" class="dropdown-item"
                        ><i class="fas fa-clipboard-list lead mr-2"></i> Reservaciones Citas</a
                    >
                    <a 
                        href="#" 
                        class="dropdown-item dropdown-toggle d-block border-0"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="icon ion-md-folder lead mr-2"></i> Control Citas</a
                    >
                    <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown2">
                        <a href="AppointmentMGHistory.php" class="dropdown-item"
                            ><i class="fas fa-star-of-life lead mr-2"></i> Medicina General</a
                        >
                        <a href="AppointmentOHistory.php" class="dropdown-item"
                            ><i class="fas fa-tooth lead mr-2"></i> Odontología</a
                        >
                    </div>
                </div>
            </li>
        </ul>
        <div class="hover-sidebar">
            <a href="statistics.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-stats lead mr-2"></i> Estadísticas</a
            >
        </div>
    </div>
</div><!-- Fin sidebar -->
<?php } ?>

<!-- DOCTORES -->
<?php if($_SESSION['ROLEDC']== 'Medicina General'){ ?>
<div id="sidebar-container" class="bg-primary">
    <div class="logo d-flex">
        <img class="icono-logo" src="../../img/icono.png" alt="">
        <h4 class="text-light font-weight-bold mb-0">CBE - ESPE</h4>
    </div>
    <div class="menu">
        <div class="hover-sidebar">
            <a href="homeDoctors.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
        </div>        
        <div class="hover-sidebar">
            <a href="patient.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-address-book lead mr-2"></i>
                Pacientes</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-book-medical lead mr-2"></i> Citas</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="AppointmentRegister.php" class="dropdown-item"
                        ><i class="fas fa-file-medical lead mr-2"></i> Agendar Cita</a
                    >
                    <a href="AppointmentReservation.php" class="dropdown-item"
                        ><i class="fas fa-clipboard-list lead mr-2"></i> Reservaciones Citas</a
                    >
                    <a 
                        href="#" 
                        class="dropdown-item dropdown-toggle d-block border-0"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="icon ion-md-folder lead mr-2"></i> Control Citas</a
                    >
                    <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown2">
                        <a href="AppointmentMGHistory.php" class="dropdown-item"
                            ><i class="fas fa-star-of-life lead mr-2"></i> Medicina General</a
                        >
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div><!-- Fin sidebar -->
<?php } ?>

<?php if($_SESSION['ROLEDC']== 'Odontologia'){ ?>
<div id="sidebar-container" class="bg-primary">
    <div class="logo d-flex">
        <img class="icono-logo" src="../../img/icono.png" alt="">
        <h4 class="text-light font-weight-bold mb-0">CBE - ESPE</h4>
    </div>
    <div class="menu">
        <div class="hover-sidebar">
            <a href="homeDoctors.php" class="d-block text-light p-3 border-0"
                ><i class="icon ion-md-home lead mr-2"></i> Inicio</a
            >
        </div>        
        <div class="hover-sidebar">
            <a href="patient.php" class="d-block text-light p-3 border-0"
                ><i class="fas fa-address-book lead mr-2"></i>
                Pacientes</a
            >
        </div>
        <ul class="d-block text-light p-3 border-0 m-0">
            <li class="dropdown list-unstyled">
                <a
                    class="dropdown-toggle d-block text-light border-0 "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                ><i class="fas fa-book-medical lead mr-2"></i> Citas</a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a href="AppointmentRegister.php" class="dropdown-item"
                        ><i class="fas fa-file-medical lead mr-2"></i> Agendar Cita</a
                    >
                    <a href="AppointmentReservation.php" class="dropdown-item"
                        ><i class="fas fa-clipboard-list lead mr-2"></i> Reservaciones Citas</a
                    >
                    <a 
                        href="#" 
                        class="dropdown-item dropdown-toggle d-block border-0"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="icon ion-md-folder lead mr-2"></i> Control Citas</a
                    >
                    <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown2">
                        <a href="AppointmentOHistory.php" class="dropdown-item"
                            ><i class="fas fa-tooth lead mr-2"></i> Odontología</a
                        >
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div><!-- Fin sidebar -->
<?php } ?>