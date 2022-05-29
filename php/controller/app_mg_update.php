<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];
$values =  $_POST['values'];

$controller = new Db_commands();

$query_command = "UPDATE app_mg SET $values WHERE id_CM = '$id'";
$query = $controller->c_get_query($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}
