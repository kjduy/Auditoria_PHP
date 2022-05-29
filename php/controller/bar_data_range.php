<?php
require_once '../db/Db_commands.php';
$controller = new Db_commands();
$start = $_POST['start'];
$end = $_POST['end'];

$query_command = "SELECT count(`id_CM`) as `total` FROM app_mg WHERE (date_CM BETWEEN '$start' AND '$end')";
$query = $controller->c_get_query($query_command);
$mg = mysqli_fetch_array($query);

$query_command = "SELECT count(`id_CO`) as `total` FROM app_od_data WHERE (date_CO BETWEEN '$start' AND '$end')";
$query = $controller->c_get_query($query_command);
$od = mysqli_fetch_array($query);

$data = array("mg"=>$mg['total'], "od"=>$od['total']);

echo json_encode($data);