<?php
require_once '../db/Db_commands.php';

$data_keys =  $_POST['g_keys'];
$data_values =  $_POST['g_values'];
$cedula =  $_POST['cedula'];
$user = $_POST['user'];
$day_keys = 'id_Dc,'.$_POST['d_keys'];
$day_values = '@doctors,'.$_POST['d_values'];
$hour_keys =  'id_Dc,'.$_POST['h_keys'];
$hour_values =  '@doctors,'.$_POST['h_values'];

$controller = new Db_commands();

$query_command = "INSERT INTO doctors ($data_keys) VALUES ($data_values);
                SELECT LAST_INSERT_ID() INTO @doctors;
                INSERT INTO calendar_days ($day_keys) VALUES ($day_values); 
                INSERT INTO calendar_hours ($hour_keys) VALUES ($hour_values);";

if(validate_duplicates($cedula,$user)){
    echo 'duplicado';
}
else{
    $query = $controller->c_get_queries($query_command);
    if($query){
        echo 'exito';
    }
    else{
        echo 'fracaso';
    }       
}

function validate_duplicates($cedula,$user){
    global $controller;
    $query_command = "SELECT * FROM doctors WHERE cedula_Dc = '$cedula' OR 	user_Dc = '$user'";
    $query = $controller->c_get_query($query_command);
    $response = mysqli_fetch_array($query);
    
    $query_command = "SELECT * FROM profiles WHERE cedula_Prof = '$cedula' OR user_Prof = '$user'";
    $query = $controller->c_get_query($query_command);
    $response_2 = mysqli_fetch_array($query);

    if($response > 0 || $response_2> 0){
        return TRUE;
    }
    else{
        return FALSE;
    } 
}