<?php 
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id = $_POST['id'];
$type = $_POST['type'];

if ($type == 'AppointmentOHistory.php'){
    $query_command = "SELECT attach_CO as path from app_od_data where id_CO = $id";
}
else{
    $query_command = "SELECT attach_CM as path from app_mg where id_CM = $id";
}

$query = $controller->c_get_query($query_command);
$data = mysqli_fetch_array($query);

//print_r($data);
echo $data['path']; 