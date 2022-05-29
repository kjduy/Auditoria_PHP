<?php
require_once '../db/Db_commands.php';

$hc_keys =  $_POST['keys'];
$hc_values =  $_POST['values'];
$cedula =  $_POST['cedula'];

$controller = new Db_commands();

$query_command = "INSERT INTO hc_data ($hc_keys) VALUES ($hc_values);
            SELECT LAST_INSERT_ID() INTO @hc_data;
            INSERT INTO hc_per (id_HC,pato_HC) VALUES (@hc_data,'No hay registro');
            INSERT INTO hc_fam (id_HC,parentalAnt_HC) VALUES (@hc_data,'No hay registro');";

if(validate_duplicates($cedula)){
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

function validate_duplicates($cedula){
    global $controller;
    $query_command = "SELECT * FROM hc_data WHERE cedula_HC = '$cedula'";
    $query = $controller->c_get_query($query_command);
    $response = mysqli_fetch_array($query);
    if($response > 0){
        return TRUE;
    }
    else{
        return FALSE;
    } 
}