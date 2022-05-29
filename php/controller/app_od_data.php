<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id = $_POST['id'];
//$id = 1;
$query_command = "select a.*,CONCAT(b.name_HC,' ',b.lastName_HC) as patient,CONCAT(c.name_Dc,' ',c.lastName_Dc) as doctor from app_od_data a INNER JOIN hc_data b ON a.patient_CO= b.id_HC INNER JOIN doctors c ON a.doctor_CO= c.id_Dc WHERE id_CO = '$id'";

$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_object($query);

echo json_encode($data);