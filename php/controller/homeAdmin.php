<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();

$type = $_POST['msg'];

switch ($type) {
    case "patient":
        $query_command = "SELECT COUNT(*) as total FROM hc_data WHERE dead_HC = 'no'";
        break;
    case "mg":
        $query_command = "SELECT COUNT(*) as total FROM doctors WHERE state_DC = 'AC' and ocuppation_Dc = 'Medicina General'";
        break;
    case "od":
        $query_command = "SELECT COUNT(*) as total FROM doctors WHERE state_DC = 'AC' and ocuppation_Dc = 'Odontologia'";
        break;
    case "secretary":
        $query_command = "SELECT COUNT(*) as total FROM profiles WHERE state_Prof = 'AC' and userType_Prof = 'Secretario'";
        break;
    case "nurse":
        $query_command = "SELECT COUNT(*) as total FROM profiles WHERE state_Prof = 'AC' and userType_Prof = 'Enfermero'";
        break;
}

$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_array($query);

echo $data['total'];