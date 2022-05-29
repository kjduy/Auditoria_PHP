<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$type = $_GET['msg'];
switch ($type) {
    case "user":
        $query_command = "SELECT * FROM profiles WHERE state_Prof = 'AC' ORDER BY id_Prof ASC";
        break;
    case "nurse":
        $query_command = "SELECT * FROM profiles WHERE state_Prof = 'AC' AND userType_Prof = 'Enfermero' ORDER BY id_Prof ASC";
        break;
    case "secretary":
        $query_command = "SELECT * FROM profiles WHERE state_Prof = 'AC' AND userType_Prof = 'Secretario' ORDER BY id_Prof ASC";
        break;
}

$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);