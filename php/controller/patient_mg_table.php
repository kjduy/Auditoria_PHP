<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id = $_POST['id'];

$query_command = "select a.id_CM, a.date_CM, a.hour_CM, CONCAT(c.name_Dc,' ',c.lastName_Dc) as doctor_CM FROM app_mg a INNER JOIN hc_data b ON a.patient_CM= b.id_HC INNER JOIN doctors c ON a.doctor_CM= c.id_Dc WHERE patient_CM = '$id'";

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
