<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();

$query_command = "SELECT * FROM doctors WHERE state_Dc = 'AC' ORDER BY id_Dc ASC";

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);