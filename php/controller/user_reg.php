<?php
require_once '../db/Db_commands.php';

$keys =  $_POST['keys'];
$values =  $_POST['values'];
$cedula =  $_POST['cedula'];
$user = $_POST['user'];

$controller = new Db_commands();

$query_command = "INSERT INTO profiles($keys) VALUES ($values)";

if(validate_duplicates($cedula,$user)){
    echo 'duplicado';
}
else{
    $query = $controller->c_get_query($query_command);
    if($query){
        echo 'exito';
    }
    else{
        echo 'fracaso';
    }    
}

function validate_duplicates($cedula,$user){
    global $controller;
    $query_command = "SELECT * FROM profiles WHERE cedula_Prof = '$cedula' OR user_Prof = '$user'";
    $query = $controller->c_get_query($query_command);
    $response = mysqli_fetch_array($query);

    $query_command = "SELECT * FROM doctors WHERE cedula_Dc = '$cedula' OR 	user_Dc = '$user'";
    $query = $controller->c_get_query($query_command);
    $response_2 = mysqli_fetch_array($query);

    if($response > 0 || $response_2 > 0){
        return TRUE;
    }
    else{
        return FALSE;
    } 
}
?>