<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id =  $_POST['id'];
$type = $_GET['msg'];

switch ($type) {
    case "doctor":
        $query_command = "SELECT * FROM doctors WHERE id_Dc = '$id'";
        break;
    case "days":
        $query_command = "SELECT * FROM calendar_days WHERE id_Dc = '$id'";
        break;
    case "hours":
        $query_command = "SELECT  
        (CASE WHEN `07:00` = 'yes' THEN 'yes' ELSE 'no' END) as `07_00`,
        (CASE WHEN `09:00` = 'yes' THEN 'yes' ELSE 'no' END) as `09_00`,
        (CASE WHEN `11:00` = 'yes' THEN 'yes' ELSE 'no' END) as `11_00`,
        (CASE WHEN `13:00` = 'yes' THEN 'yes' ELSE 'no' END) as `13_00`,
        (CASE WHEN `15:00` = 'yes' THEN 'yes' ELSE 'no' END) as `15_00`,
        (CASE WHEN `17:00` = 'yes' THEN 'yes' ELSE 'no' END) as `17_00`
        FROM calendar_hours WHERE id_Dc = '$id'";
        break;
}

$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_object($query);

echo json_encode($data);
