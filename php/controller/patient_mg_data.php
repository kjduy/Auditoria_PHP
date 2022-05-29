<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id =  $_POST['id'];

$query_command = "SELECT concat(name_HC,' ',lastName_HC) as name, cedula_HC as cedula FROM hc_data WHERE id_HC = '$id'";

$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_object($query);

echo json_encode($data);
