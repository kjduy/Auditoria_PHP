<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();

$query_command = "select a.id_App as id, DATE(a.start) as date, TIME(a.start) as hour, a.patient_App as patient, a.doctor_App as doctor, c.ocuppation_Dc as type FROM app_reservation a INNER JOIN doctors c ON a.id_Dc= c.id_Dc WHERE state_App = 'PD' ORDER BY id_App ASC";

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);