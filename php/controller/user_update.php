<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];
$values =  $_POST['values'];

$controller = new Db_commands();

$query_command = "UPDATE profiles SET $values WHERE id_Prof = '$id'";
$query = $controller->c_get_query($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}
