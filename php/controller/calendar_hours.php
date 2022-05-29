<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id =  $_POST['id'];

$query_command = "SELECT * FROM calendar_hours WHERE id_Dc = '$id'";
$query = $controller->c_get_query($query_command);
$object = mysqli_fetch_object($query);
$data = [];
foreach($object as $key => $value) {  
    if($value == 'yes'){
        array_push($data,$key);        
    }
}

echo json_encode($data);
