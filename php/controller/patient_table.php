<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();

$query_command = "SELECT id_HC,name_HC,lastName_HC,cedula_HC,passport_HC,phone_HC,gender_HC FROM hc_data WHERE dead_HC = 'no' ORDER BY id_HC ASC";

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);