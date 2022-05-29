<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];
$data_values =  $_POST['g_values'];
$day_values =  $_POST['d_values'];
$hour_values =  $_POST['h_values'];


$controller = new Db_commands();

$query_command = "UPDATE doctors SET $data_values WHERE id_Dc = '$id';
                  UPDATE calendar_days SET $day_values WHERE id_Dc = '$id';
                  UPDATE calendar_hours SET $hour_values WHERE id_Dc = '$id';";

$query = $controller->c_get_queries($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}