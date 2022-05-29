<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];
$controller = new Db_commands();

$query_command = "select TIME(a.start) as hour, DATE(a.start) as date, b.id_HC as patient, c.id_Dc as doctor,c.ocuppation_Dc as type FROM app_reservation a INNER JOIN hc_data b ON a.id_HC= b.id_HC INNER JOIN doctors c ON a.id_Dc= c.id_Dc where a.id_App = '$id'";
$query = $controller->c_get_query($query_command);
$data = mysqli_fetch_array($query);

$date = $data['date'];
$hour = $data['hour'];
$patient = $data['patient'];
$doctor = $data['doctor'];
$type = $data['type'];

if ($type=='Medicina General'){
    $query_command = "INSERT INTO app_mg (id_CM, patient_CM, date_CM, hour_CM,doctor_CM) VALUES ('$id','$patient','$date','$hour','$doctor');
                  UPDATE app_reservation SET state_App = 'AC' WHERE id_App = '$id';";
}
else{
    $query_command = "INSERT INTO app_od_data (id_CO, patient_CO, date_CO, hour_CO,doctor_CO) VALUES ('$id','$patient','$date','$hour','$doctor');
                  INSERT INTO app_od_gr (id_CO) VALUES ('$id');
                  UPDATE app_reservation SET state_App = 'AC' WHERE id_App = '$id';";
}

$query = $controller->c_get_queries($query_command);
if($query){
    echo TRUE;
}
else{
    echo FALSE;
}    