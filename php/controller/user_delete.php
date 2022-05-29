<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];

$controller = new Db_commands();

if($id == 1){
    echo FALSE;
}else{
    $query_command = "UPDATE profiles SET state_Prof = 'DC' WHERE id_Prof = '$id'";
    $query = $controller->c_get_query($query_command);
    
    if($query){
        echo TRUE;
    }
    else{
        echo FALSE;
    }
}

