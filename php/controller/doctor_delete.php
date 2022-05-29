<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];

$controller = new Db_commands();

$query_command = "UPDATE doctors SET state_Dc = 'DC' WHERE id_Dc = '$id'";
$query = $controller->c_get_query($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}