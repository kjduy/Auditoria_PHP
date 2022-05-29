<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id = $_POST['id'];

$query_command = "select a.id_CO, a.date_CO, a.hour_CO, CONCAT(c.name_Dc,' ',c.lastName_Dc) as doctor_CO FROM app_od_data a INNER JOIN hc_data b ON a.patient_CO= b.id_HC INNER JOIN doctors c ON a.doctor_CO= c.id_Dc WHERE patient_CO = '$id'";

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);