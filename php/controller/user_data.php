<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];

$controller = new Db_commands();

$query_command = "SELECT * FROM profiles WHERE id_Prof = '$id'";
$query = $controller->c_get_query($query_command);

$data = mysqli_fetch_object($query);


echo json_encode($data);