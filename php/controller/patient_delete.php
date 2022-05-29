<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];

$controller = new Db_commands();

$query_command = "UPDATE hc_data SET dead_HC = 'yes' WHERE id_HC = '$id'";
$query = $controller->c_get_query($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}