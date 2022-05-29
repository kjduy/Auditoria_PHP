<?php
require_once '../db/Db_commands.php';
$controller = new Db_commands();
$id = $_POST['id'];

if($id == 'graph_1'){
    $query_command = "SELECT count(b.id_Dc) as `y`,CONCAT(b.name_Dc,' ',b.lastName_Dc) as `label` FROM app_mg a INNER JOIN doctors b WHERE a.doctor_CM = b.id_Dc GROUP by b.id_Dc ORDER BY `y`";
}
else{
    $query_command = "SELECT count(b.id_Dc) as `y`,CONCAT(b.name_Dc,' ',b.lastName_Dc) as `label` FROM app_od_data a INNER JOIN doctors b WHERE a.doctor_CO = b.id_Dc GROUP by b.id_Dc ORDER BY `y`";
}


$conexion = $controller->c_pdo_query();
$query = $conexion->prepare($query_command);
$query->execute();        
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
