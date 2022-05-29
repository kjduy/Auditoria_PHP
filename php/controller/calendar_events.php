<?php
require_once '../db/Db_commands.php';

$id = $_GET['msg'];

$controller = new Db_commands();

$query_command = "select id_App as id, patient_App as title,doctor_App as doctor,DATE(start) as c_date, TIME(start) as time,start,end FROM app_reservation WHERE (state_App = 'AC' OR state_App = 'PD') AND id_dc = '$id'";

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);