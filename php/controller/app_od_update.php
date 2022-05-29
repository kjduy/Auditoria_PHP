<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];
$values =  $_POST['values'];
$msg =  $_POST['msg'];

$controller = new Db_commands();

if($msg=="data"){
    $query_command = "UPDATE app_od_data SET $values WHERE id_CO = '$id'";
}else{
    $query_command = "UPDATE app_od_gr SET $values WHERE id_CO = '$id'";
}

$query = $controller->c_get_query($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}