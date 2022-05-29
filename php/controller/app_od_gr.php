<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id = $_POST['id'];

$query_command = "select a.*,CONCAT(b.name_HC,' ',b.lastName_HC) as patient,CONCAT(c.name_Dc,' ',c.lastName_Dc) as doctor,od.date_CO, od.hour_CO from app_od_gr a INNER JOIN app_od_data od ON a.id_CO = od.id_CO INNER JOIN hc_data b ON od.patient_CO = b.id_HC INNER JOIN doctors c ON od.doctor_CO= c.id_Dc WHERE a.id_CO = '$id'";

$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_object($query);

echo json_encode($data);