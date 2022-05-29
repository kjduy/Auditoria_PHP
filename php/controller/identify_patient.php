<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$cedula =  $_POST['cedula'];

$query_command = "SELECT id_HC,name_HC,lastName_HC FROM hc_data WHERE cedula_HC = '$cedula'";
$query = $controller->c_get_query($query_command);
$object = mysqli_fetch_object($query);

echo json_encode($object);