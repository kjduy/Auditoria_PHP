<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id =  $_POST['id'];
$type = $_GET['msg'];

switch ($type) {
    case "g_data":
        $query_command = "SELECT * FROM hc_data WHERE id_HC = '$id'";
        break;
    case "ant_per":
        $query_command = "SELECT * FROM hc_per WHERE id_HC = '$id'";
        break;
    case "ant_fam":
        $query_command = "SELECT * FROM hc_fam WHERE id_HC = '$id'";
        break;
}

$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_object($query);

echo json_encode($data);
