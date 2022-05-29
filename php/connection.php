<?php
session_start();
require_once 'db/Db_commands.php';

$username= $_POST['username'];
$password= md5($_POST['password']);

$controller = new Db_commands();
$query_command = "SELECT * FROM profiles WHERE user_Prof = '$username' AND pass_Prof = '$password'";
$query = $controller->c_get_query($query_command);
$response = mysqli_num_rows($query);

$query_command_Dc = "SELECT * FROM doctors WHERE user_Dc = '$username' AND pass_Dc = '$password'";
$query_Dc = $controller->c_get_query($query_command_Dc);
$response_Dc = mysqli_num_rows($query_Dc);

if($response > 0 || $response_Dc > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['ROLE'] = $row['userType_Prof'];
    $_SESSION['IS_LOGIN'] = 'yes';

    $row_Dc = mysqli_fetch_assoc($query_Dc);
    $_SESSION['ROLEDC'] = $row_Dc['ocuppation_Dc'];

    if($row['userType_Prof']=='Administrador'){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $username;

        echo "<script>window.location.href='../php/views/homeAdmin.php'</script>";
        die();

    }if($row['userType_Prof']=='Supervisor'){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $username;

        echo "<script>window.location.href='../php/views/homeAdmin.php'</script>";
        die();
    }if($row['userType_Prof']=='Enfermero'){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $username;

        echo "<script>window.location.href='../php/views/homeEmployees.php'</script>";
        die();
    }if($row['userType_Prof']=='Secretario'){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $username;

        echo "<script>window.location.href='../php/views/homeEmployees.php'</script>";
        die();
    }if($row_Dc['ocuppation_Dc'] =='Medicina General'){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $username;

        echo "<script>window.location.href='../php/views/homeDoctors.php'</script>";
        die();
    }if($row_Dc['ocuppation_Dc'] =='Odontologia'){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $username;

        echo "<script>window.location.href='../php/views/homeDoctors.php'</script>";
        die();
    }
}

else {
    echo 'false'; 
}

?>