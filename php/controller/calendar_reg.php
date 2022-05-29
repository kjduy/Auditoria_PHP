<?php
require_once '../db/Db_commands.php';

$id_patient = $_POST['id_patient'];
$patient = $_POST['patient'];
$id_doctor = $_POST['id_doctor'];
$doctor = $_POST['doctor'];
$hour = $_POST['hour'];
$start = $_POST['start'];
$end = $_POST['end'];

$controller = new Db_commands();
$query_command = "SELECT * FROM app_reservation WHERE start = '$start' AND (state_App = 'AC' OR state_App = 'PD') AND id_Dc = '$id_doctor'";
$query = $controller->c_get_query($query_command);

$response = mysqli_fetch_array($query);
if($response > 0){
       echo "Ya existe un evento a esa hora";
    }
else{
        $query_command_2 = "SELECT * FROM calendar_hours WHERE id_Dc = '$id_doctor'";
        $query_2 = $controller->c_get_query($query_command_2);
        $object_2 = mysqli_fetch_object($query_2);

        $flag = 1;
        foreach($object_2 as $key => $value) {  
            if( $key == $hour && $value == 'yes'){
                reg_app();
                $flag = 0;
            }
        }
        if ($flag == 1){
            echo "Hora no disponible";
        }
} 

function reg_app() {
    global $id_patient; global $patient; global $id_doctor;
    global $doctor; global $start; global $end;

    $controller = new Db_commands();
    $query_command = "INSERT INTO app_reservation (id_HC,patient_App,id_Dc,doctor_App,start,end) VALUES ('$id_patient','$patient','$id_doctor','$doctor','$start','$end')";
    $query = $controller->c_get_query($query_command);

    if($query){
        echo "Cita Registrada";
    }else {
        echo "Ha ocurrido un problema";
    }
}
