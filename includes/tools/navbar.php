<!-- Navbar -->
<?php
function navbar($paginaAnterior,$id){
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a href='<?php echo $paginaAnterior."?msg=".$id; ?>' id='btnRegresar'><i class="fas fa-arrow-left"></i></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link text-dark dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    ><i class="fas fa-user-circle"></i> <?php echo $_SESSION['username']; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../logout.php"> <i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- Fin Navbar -->
<?php } ?>
<!-- Navbar -->
<?php
function navbarNormal(){
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link text-dark dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    ><i class="fas fa-user-circle"></i> <?php echo $_SESSION['username']; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../logout.php"> <i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- Fin Navbar -->
<?php } ?>