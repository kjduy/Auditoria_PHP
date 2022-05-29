<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();

$type =  $_POST['type'];

$query_command = "SELECT id_Dc, name_Dc, lastName_Dc FROM doctors WHERE ocuppation_Dc = '$type' AND state_Dc='AC'";
 
$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
